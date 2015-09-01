<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/24/2015
 * Time: 11:45 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Telehealth_model extends CI_Model {

    public function __construct(){
        parent::__construct();

    }

    public function get_online_doc_list()
    {
        $General = $this->load->database('group_gen', TRUE);
        $query = $General->query("SELECT doc_id, doc_name, doc_status FROM tbl_doctor WHERE doc_status = 1  ORDER BY doc_name ASC;");
        return $query->result_array();
    }
}