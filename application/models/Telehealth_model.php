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

    public function get_online_doc_list($doc_id)
    {
        $General = $this->load->database('group_gen', TRUE);
        $query = $General->query("SELECT doc_id, doc_name, doc_status FROM tbl_doctor WHERE doc_status = 1 and  doc_id not in (" . $doc_id . ")  ORDER BY doc_name ASC;");
        return $query->result_array();
    }

    public function add_request($doc_id,$data)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->where('doc_id', $doc_id);
        $General->update('tbl_doctor', $data);
    }

    public function get_pending_list($doc_id)
    {
        $General = $this->load->database('group_gen', TRUE);
        $query = $General->query("SELECT doc_id, doc_name FROM tbl_doctor WHERE doc_id in (SELECT request_from FROM tbl_doctor WHERE has_request=1 and doc_id = " . $doc_id . ")  ORDER BY doc_name ASC;");
        return $query->result_array();
    }

    public function get_doctor_name($doc_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('doc_name');
        $General->where('doc_id', $doc_id);
        $query = $General->get('tbl_doctor');
        $row = $query->row();
        return $row->doc_name;
    }

    public function remove_requestor($data, $doc_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('doc_id', $doc_id);
        $General->update('tbl_doctor', $data);
    }
}