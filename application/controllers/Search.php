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
    }

    public function index()
    {
        $search_data=$this->Search_model->get_all_patients();

        $dynamic_data = array(
            'title' => 'Search for Patient',
            'search_data' => $search_data
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
            'search_data' => $search_data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/search_view');
        $this->load->view('common/footer');
    }

}