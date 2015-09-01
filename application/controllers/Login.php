<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $dynamic_data = array(
            'title' => 'DentAssist - Login'
        );
        $this->load->view('common/header', $dynamic_data);
//        $this->load->view('common/sidebar');
        $this->load->view('core/login_view');
//        $this->load->view('common/footer');
    }

    public function verify_login(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed. User redirected to login page
            $dynamic_data = array(
                'title' => 'DentAssist - Login'
            );
            $this->load->view('common/header', $dynamic_data);
            $this->load->view('core/login_view');
        } else {
            redirect('telehealth', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded. Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->login_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'userid' => $row->doc_username,
                    'doc_name' => $row->doc_name,
                    'logged_in' => true
                );
                $this->session->set_userdata($sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid email or password');
            return false;
        }
    }
}
