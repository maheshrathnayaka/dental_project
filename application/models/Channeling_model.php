<?php
/**
 * Created by PhpStorm.
 * User: mahesh
 * Date: 7/22/15
 * Time: 11:14 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Channeling_model extends CI_Model {

    public function get_channel_queue() {
        $DB1 = $this->load->database('group_gen', TRUE);
        $DB1->select('P_ID, patient_first_name, patient_gender, patient_main_reason, channel_number');
        $DB1->where('check_status', '1');
        $DB1->where('channel_number !=', 0);
        $DB1->order_by('channel_number', 'ASC');
        $query = $DB1->get('tbl_patients_queue');
        return $query->result_array();
    }

}