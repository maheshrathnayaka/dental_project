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
        $this->load->view('3dviews/classBmiled.html');  
    }
    
     public function classBmoderate(){
        $this->load->view('3dviews/classBmoderate.html');  
    }

    public function classBsevere(){
        $this->load->view('3dviews/classBsevere.html');  
    }
    
     public function classCmiled(){
        $this->load->view('3dviews/classcmiled.html');  
    }
    
     public function classCmoderate(){
        $this->load->view('3dviews/classcmoderate.html');  
    }

    public function classCsevere(){
        $this->load->view('3dviews/classcsevere.html');  
    }
    
     public function classDmiled(){
        $this->load->view('3dviews/classDmiled.html');  
    }
    
     public function classDmoderate(){
        $this->load->view('3dviews/classDmoderate.html');  
    }

    public function classDsevere(){
        $this->load->view('3dviews/classDsevere.html');  
    }
    
    
}