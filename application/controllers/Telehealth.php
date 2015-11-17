<?php
/**
 * Created by PhpStorm.
 * User: Hasith Malinga
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Telehealth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Telehealth_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('logged_in') == true){
            $doc_id=$this->session->userdata('userid');
            $dynamic_data = array(
                'title' => 'DentAssist - Telehealth',
                'online_list' => $this->Telehealth_model->get_online_doc_list($doc_id),
                'pending_list' => $this->Telehealth_model->get_pending_list($doc_id),
                'doc_name' => $this->session->userdata('doc_name')
            );
            $this->load->view('common/header_logged', $dynamic_data);
            $this->load->view('common/sidebar');
            $this->load->view('telehealth/telehealth_view');
            $this->load->view('common/footer_logged');
        }else{
            $dynamic_data = array(
                'title' => 'Login'
            );
            $this->load->view('core/login_view');
        }
    }

    public function request_online($doc_id)
    {
        if($this->session->userdata('logged_in') == true){
            $logged_userid=$this->session->userdata('userid');
            $data = array(
                'has_request' => 1,
                'request_from' => $logged_userid
            );
            $this->Telehealth_model->add_request($doc_id,$data);
            $this->session->set_flashdata('message', 'success');
            redirect('telehealth','refresh');
        }else{
            $dynamic_data = array(
                'title' => 'Login'
            );
            $this->load->view('core/login_view');
        }
    }

    public function video_live($doc_id){
        $dynamic_data = array(
            'title' => 'DentAssist - Telehealth',
            'requestor' => $this->Telehealth_model->get_doctor_name($doc_id),
            'doc_name' => $this->session->userdata('doc_name'),
            'req_id' => $doc_id
        );
        $this->load->view('common/header_logged', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('telehealth/video_live_view');
        $this->load->view('common/footer_logged');
    }

    public function remove($doc_id){
        $data = array(
            'has_request' => 0,
            'request_from' => 0
        );
        $this->Telehealth_model->remove_requestor($data, $doc_id);

        $this->session->set_flashdata('message', 'removed');

        redirect('telehealth','refresh');
    }
}

