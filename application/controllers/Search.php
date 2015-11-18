<?php

/**
 * Created by PhpStorm.
 * User: Hasith Malinga
 * Date: 7/27/2015
 * Time: 11:30 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Search_model');
        $this->load->model('Registration_model');
    }

    public function index($offset=10)
    {
        $search_data=$this->Search_model->get_all_patients($offset);

        /*$this->load->library('pagination');

        $config['base_url'] = base_url().'index.php/search';
        $config['total_rows'] = $this->Search_model->get_patients_count();
        $config['per_page'] = 10;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<b>';
        $config['cur_tag_close'] = '</b>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);
        $link = $this->pagination->create_links();*/

        $dynamic_data = array(
            'title' => 'Search for Patient',
            'search_data' => $search_data,
            'patient' => 'pending'

        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/search_view');
        $this->load->view('common/footer');
    }

    public function results(){
        $patient_name=$this->input->post('txtSearch');
        $search_data= $this->Search_model->get_existing_patients($patient_name);

        $dynamic_data = array(
            'title' => 'Search for Patient',
            'search_data' => $search_data,
            'patient' => 'pending'

        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/search_view');
        $this->load->view('common/footer');
    }

    public function add_to_queue(){
        $p_id = $this->input->post('patient_id');
        $today_reason = $this->input->post('txtReason');
        $channel_number = $this->Registration_model->get_max_channel_number();

        $queue_data = array(
            'P_ID' => $p_id,
            'Main_reason' => $today_reason,
            'check_status' => 1,
            'channel_number'=> $channel_number['channel_no']
        );

        $history_data = array(
            'P_ID' => $p_id,
            'Main_reason' => $today_reason,
            'date_time' => date('Y-m-d H:i:s')
        );

        $success_queue = $this->Search_model->save_to_queue($queue_data);
        $success_history = $this->Search_model->insert_channel_history($history_data);

        //var_dump($success_queue);
        //var_dump($success_history);

        if($success_queue == 0 && $success_history > 0){
            $search_data=$this->Search_model->get_all_patients();
            $dynamic_data = array(
                'title' => 'Search for Patient',
                'search_data' => $search_data,
                'patient' => 'added_to_queue',
                'sucess_data' => $success_queue.$success_history
            );
            $this->load->view('common/header', $dynamic_data);
            $this->load->view('common/sidebar');
            $this->load->view('core/search_view');
            $this->load->view('common/footer');
        }

    }

}