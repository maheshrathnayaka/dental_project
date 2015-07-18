<?php

class Error extends CI_Controller {

    function error_404() {
        $this->load->view('errors/error_404');
    }

}