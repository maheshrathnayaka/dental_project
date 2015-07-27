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

    public function index()
    {
        $dynamic_data = array(
            'title' => 'Search for Patient'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/search_view');
        $this->load->view('common/footer');
    }

}