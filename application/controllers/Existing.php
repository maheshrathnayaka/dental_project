<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Existing extends CI_Controller
{

    public function index()
    {
        $dynamic_data = array(
            'title' => 'Existing Patient'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/existing_view');
        $this->load->view('common/footer');
    }
}
