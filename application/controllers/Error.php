<?php

/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
class Error extends CI_Controller
{

    function error_404()
    {
        $this->load->view('errors/error_404');
    }

}