<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/24/2015
 * Time: 11:44 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Knowledge_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('date');

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

    public function save_patient_images($image_data){
        $Knowledge = $this->load->database('group_knwbase', TRUE);
        $Knowledge->insert('knwbase_img', $image_data);
        return $Knowledge->insert_id();
    }

    public function get_patient_images($pid){
        $Knowledge = $this->load->database('group_knwbase', TRUE);
        $Knowledge->select('image_path, image_id, image_name, comment, date_added');
        $Knowledge->where('patient_id', $pid);
        $query = $Knowledge->get('knwbase_img');
        return $query->result_array();
    }

    public function get_medications(){
        $Knowledge = $this->load->database('group_knwbase', TRUE);
        $Knowledge->select('medication_id, medication_name, description');
        $query = $Knowledge->get('medication');
        return $query->result_array();
    }

    public function unlink_channel_queue($pid, $channel_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('P_ID', $pid);
        $status = $General->update('tbl_patients_queue', $channel_data);
        return $status;
    }
}