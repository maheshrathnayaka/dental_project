<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 5:48 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $dynamic_data = array(
            'title' => 'DentAssist - Login'
        );
//        $this->load->view('common/header', $dynamic_data);
//        $this->load->view('common/sidebar');
        $this->load->view('core/login_view');
//        $this->load->view('common/footer');
    }
}
