<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/24/2015
 * Time: 11:47 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    function login($username, $password) {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('doc_username, doc_password, doc_name');
        $General->from('tbl_doctor');
        $General->where('doc_username', $username);
        $General->where('doc_password', $password);
        $General->limit(1);

        $query = $General->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}