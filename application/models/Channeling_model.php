<?php
/**
 * Created by PhpStorm.
 * User: mahesh
 * Date: 7/22/15
 * Time: 11:14 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Channeling_model extends CI_Model {

    public function __construct(){
        parent::__construct();

    }

    public function get_channel_queue() {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID, patient_first_name, patient_gender, patient_main_reason, channel_number');
        $General->where('check_status', '1');
        $General->where('channel_number !=', 0);
        $General->order_by('channel_number', 'ASC');
        $query = $General->get('tbl_patients_queue');
        return $query->result_array();
    }

    public function get_patient_profile($pid){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, patient_first_name, patient_last_name, patient_email, patient_gender, patient_occupation, patient_allergies, patient_barcode');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient');
        return $query->row_array();
    }

    public function get_patient_address($pid){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, postal_no, address_line1, address_line2, city');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient_address');
        return $query->row_array();
    }

    public function get_patient_contact($pid){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, home_no, mobile_no, work_no');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient_contacts');
        return $query->row_array();
    }

    public function get_channel_info($pid){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID, patient_first_name, patient_gender, patient_main_reason, channel_number');
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patients_queue');
        return $query->row_array();
    }

}