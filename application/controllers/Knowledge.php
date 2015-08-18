<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller
{

    public function index()
    {
        $dynamic_data = array(
            'title' => 'Knowledge Base'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/knowledge_view');
        $this->load->view('common/footer');
    }

    public function web_application(){
        $dynamic_data = array(
            'title' => 'Knowledge Base - Web Application'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/web_view');
        $this->load->view('common/footer');
    }

    public function desktop_application(){
        $dynamic_data = array(
            'title' => 'Knowledge Base - Desktop Application',
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/desktop_view');
        $this->load->view('common/footer');
    }

    public function skip_photo(){
        $dynamic_data = array(
            'title' => 'Knowledge Base - Desktop Application'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/doctor_view');
        $this->load->view('common/footer');
    }

    public function image_population()
    {

    }

    public function image_comparison()
    {

    }

    public function comment_image()
    {

    }
}
