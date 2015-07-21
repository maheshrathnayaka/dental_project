<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telehealth extends CI_Controller {

	public function index()
	{
		$this->load->view('telehealth_view');
	}
}

