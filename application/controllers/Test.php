<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Daminda
 * Date: 8/4/2015
 * Time: 10:39 PM
 */
class Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }
    public function index() {

        $dynamic_data = array(
            'title' => 'ajax-test'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('ajaxtest');
        $this->load->view('common/footer');
    }

    public function ajaxresponse(){

        echo "<input type='button' name='submit' value='response'>";

    }
}