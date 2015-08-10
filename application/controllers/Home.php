<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $dynamic_data = array(
            'title' => 'Smart DentAssist (&beta;Version-1.0) - Home'
        );
        $this->load->view('common/header_home', $dynamic_data);
        $this->load->view('common/sidebar_home');
        $this->load->view('core/home_view');
        $this->load->view('common/footer');
    }
}
