<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient_registration
 *
 * @author Eshan Daminda
 */
class Malocclusion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
    }

    public function index() {

        $dynamic_data = array(
            'title' => '3D-Models'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/malocclusion_view/malocclusion_view');
        $this->load->view('common/footer');
    }
    
    public function classBmiled(){
        $dynamic_data = array(
            'title' => '3D-Models'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classBmiled.html');
        $this->load->view('common/footer');

    }
    
     public function classBmoderate(){
         $dynamic_data = array(
             'title' => '3D-Models'
         );

        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classBmoderate.html');
        $this->load->view('common/footer');
    }

    public function classBsevere(){
        $dynamic_data = array(
            'title' => '3D-Models'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classBsevere.html');
        $this->load->view('common/footer');
    }
    
     public function classCmiled(){

         $dynamic_data = array(
             'title' => '3D-Models'
         );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classcmiled.html');
        $this->load->view('common/footer');
    }
    
     public function classCmoderate(){
         $dynamic_data = array(
             'title' => '3D-Models'
         );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classcmoderate.html');
        $this->load->view('common/footer');
     }

    public function classCsevere(){
        $dynamic_data = array(
            'title' => '3D-Models'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classcsevere.html');
        $this->load->view('common/footer');
    }
    
     public function classDmiled(){
         $dynamic_data = array(
             'title' => '3D-Models'
         );
         $this->load->view('common/header', $dynamic_data);
         $this->load->view('common/sidebar');
         $this->load->view('3d_models/3d/classDmiled.html');
         $this->load->view('common/footer');

    }
    
     public function classDmoderate(){
         $dynamic_data = array(
             'title' => '3D-Models'
         );
         $this->load->view('common/header', $dynamic_data);
         $this->load->view('common/sidebar');
         $this->load->view('3d_models/3d/classDmoderate.html');
         $this->load->view('common/footer');
     }

    public function classDsevere(){
        $dynamic_data = array(
            'title' => '3D-Models'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('3d_models/3d/classDsevere.html');
        $this->load->view('common/footer');

    }
    
    
}