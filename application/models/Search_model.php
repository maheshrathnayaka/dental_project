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
        $General->select('patient_id, patient_first_name, patient_last_name, patient_gender, TIMESTAMPDIFF(YEAR, patient_birthday, CURDATE()) AS patient_age, patient_barcode');
        $General->like('patient_first_name', $pname);
        $query = $General->get('tbl_patient');
        return $query->result_array();
    }

    public function get_medical_health_history_other($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("P_ID, other");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_health');
        return $query->row_array();
    }
}