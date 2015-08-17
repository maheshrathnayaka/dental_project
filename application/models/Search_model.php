<?php

/**
 * Created by PhpStorm.
 * User: Hasith Malinga
 * Date: 8/4/2015
 * Time: 11:50 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{
    public function get_existing_patients($pname)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, patient_first_name, patient_last_name, patient_gender, TIMESTAMPDIFF(YEAR, patient_birthday, CURDATE()) AS patient_age, date_time');
        $General->join('tbl_channel_history', 'tbl_channel_history.P_ID = tbl_patient.patient_id','left');
        $General->like('patient_first_name', $pname);
        $query = $General->get('tbl_patient');
        return $query->result_array();
    }

    public function get_all_patients()
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, patient_first_name, patient_last_name, patient_gender, TIMESTAMPDIFF(YEAR, patient_birthday, CURDATE()) AS patient_age, date_time');
        $General->join('tbl_channel_history', 'tbl_channel_history.P_ID = tbl_patient.patient_id','left');
        $General->order_by("patient_first_name", "asc");
        $query = $General->get('tbl_patient');
        return $query->result_array();
    }

    public function save_to_queue($queue_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_patients_queue', $queue_data);
        return $General->insert_id();
    }

    public function insert_channel_history($history_data){
        $General = $this->load->database('group_gen', TRUE);
        $General->insert('tbl_channel_history', $history_data);
        return $General->insert_id();
    }
}