<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
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
            $dynamic_data = array(
                'title' => 'DentAssist - Telehealth',
                'online_list' => $this->Telehealth_model->get_online_doc_list(),
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
            //$this->load->view('common/header', $dynamic_data);
            //$this->load->view('common/sidebar');
            $this->load->view('core/login_view');
            //$this->load->view('common/footer');
        }

    }
}

