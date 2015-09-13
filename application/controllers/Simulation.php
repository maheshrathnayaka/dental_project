<?php
/**
 * Created by PhpStorm.
 * User: Daminda
 * Date: 8/29/2015
 * Time: 6:46 PM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Simulation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }

    public function index()
    {

        $dynamic_data = array(
            'title' => '3D-Simulation'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('simulation/simulation_view');
        $this->load->view('common/footer');
    }

}
