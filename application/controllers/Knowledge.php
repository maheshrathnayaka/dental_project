<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller {

    public function index() {
        $this->load->view('knowledge_view');
    }

}
