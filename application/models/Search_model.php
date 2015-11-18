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
    public function get_patients_count()
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID');
        $qry = $General->get('tbl_patients_queue');
        $pid_list=array();
        foreach ($qry->result_array() as $row)
        {
            array_push($pid_list, $row['P_ID']);
        }
        $General->select('count(patient_id) as idcount');
        $General->where_not_in('tbl_patient.patient_id',$pid_list);
        $query = $General->get('tbl_patient');
        foreach ($query->result() as $row)
        {
            $count = $row->idcount;
        }
        return $count;
    }

    public function get_all_patients()
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID');
        $qry = $General->get('tbl_patients_queue');
        $pid_list=array();
        foreach ($qry->result_array() as $row)
        {
            array_push($pid_list, $row['P_ID']);
        }
        $General->select('patient_id, patient_first_name, patient_last_name, patient_gender, TIMESTAMPDIFF(YEAR, patient_birthday, CURDATE()) AS patient_age');
        $General->where_not_in('tbl_patient.patient_id',$pid_list);
        $General->order_by("patient_first_name", "asc");
        //$General->limit(10,$offset);
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