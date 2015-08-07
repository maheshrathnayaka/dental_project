<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/24/2015
 * Time: 11:41 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

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

    public function find_barcode($barcode){
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_barcode');
        $General->where('patient_barcode', $barcode);
        $query = $General->get('tbl_patient');
        return $query->row_array();
    }

    public function insert_profile($general_patient_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patient', $general_patient_data);
        return $General->insert_id();
    }

    public function insert_address($general_address_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patient_address', $general_address_data);
        return $General->insert_id();
    }

    public function insert_contact($general_contact_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patient_contacts', $general_contact_data);
        return $General->insert_id();
    }

    public function insert_reason($general_reason_data, $general_reason_queue_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patient_health', $general_reason_data);
        $status1 = $General->insert_id();
        $General->insert('tbl_patients_queue', $general_reason_queue_data);
        $status2 = $General->insert_id();
        return $status1.$status2;
    }

    public function insert_channel_reason($general_reason_channel_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_channel_history', $general_reason_channel_data);
        $status = $General->insert_id();
        return $status;
    }

    public function get_max_channel_number(){
        $General = $this->load->database('group_gen', TRUE);
        $query = $General->query("select max(channel_number)+1 as channel_no from tbl_patients_queue where check_status=1;");
        return $query->row_array();
    }

    public function insert_women_health($women_health_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patient_dental_history', $women_health_data);
        return $General->insert_id();
    }

    public function update_medical_health($medical_health_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('P_ID', $patient_id);
        $status = $General->update('tbl_patient_health', $medical_health_data);
        return $status;
    }

    public function update_dental_health($dental_health_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $patient_id);
        $status = $General->update('tbl_patient_dental_history', $dental_health_data);
        return $status;
    }

    public function update_habitual($habitual_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $patient_id);
        $status = $General->update('tbl_patient_dental_history', $habitual_data);
        return $status;
    }

    public function update_twinges_pain($twinges_pain_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $patient_id);
        $status = $General->update('tbl_patient_dental_history', $twinges_pain_data);
        return $status;
    }

    public function update_other_info($other_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $patient_id);
        $status = $General->update('tbl_patient_dental_history', $other_data);
        return $status;
    }

    public function update_past_treatment($past_treatment_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $patient_id);
        $status = $General->update('tbl_patient_dental_history', $past_treatment_data);
        return $status;
    }
}
