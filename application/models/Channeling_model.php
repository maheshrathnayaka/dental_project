<?php
/**
 * Created by PhpStorm.
 * User: mahesh
 * Date: 7/22/15
 * Time: 11:14 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Channeling_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_channel_queue()
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID, patient_first_name, patient_gender, patient_main_reason, channel_number');
        $General->where('check_status', '1');
        $General->where('channel_number !=', 0);
        $General->order_by('channel_number', 'ASC');
        $query = $General->get('tbl_patients_queue');
        return $query->result_array();
    }

    public function get_patient_profile($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, patient_first_name, patient_last_name, patient_email, patient_gender, patient_occupation, patient_allergies, patient_barcode');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient');
        return $query->row_array();
    }

    public function get_patient_address($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, postal_no, address_line1, address_line2, city');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient_address');
        return $query->row_array();
    }

    public function get_patient_contact($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, home_no, mobile_no, work_no');
        $General->where('patient_id', $pid);
        $query = $General->get('tbl_patient_contacts');
        return $query->row_array();
    }

    public function get_channel_info($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('P_ID, patient_first_name, patient_gender, patient_main_reason, channel_number');
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patients_queue');
        return $query->row_array();
    }

    public function get_patient_age($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $query = $General->query("SELECT TIMESTAMPDIFF(YEAR, patient_birthday, CURDATE()) AS age FROM tbl_patient WHERE patient_id = '$pid';");
        return $query->row_array();
    }

    public function get_dental_health_history($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("p_id AS 'p_id', difficulty_in_chewing_your_food AS 'Difficulty in chewing food', chew_on_only_one_side_of_your_mouth AS 'Chew on only one side of mouth', avoid_brushing_any_part_of_your_mouth_because_of_pain AS 'Avoid brushing part of mouth because of pain', gums_bleed_when_you_floss AS 'Gums bleed when flossing', gums_feel_swollen_or_tender AS 'Gums feel swollen or tender', your_teeth_sensitive AS 'Teeth sensitive', hurt_when_you_chew_or_open_wide_to_take_a_bite AS 'Hurt when chew or open wide to take a bite', ever_noticed_slow_healing_sores_in_or_about_your_mouth AS 'Ever noticed slow healing sores in or about mouth', Have_you_had_a_blow_to_the_jaw AS 'Have had a blow to the jaw', have_pain_in_the_f_j_j_t_t AS 'Have pain in the face cheeks jaws joints throat or temples', Gum_chewer AS 'Gum chewer', Pipe_smoker AS 'Pipe smoker', Betel_chewer AS 'Betel chewer', Cigarette_smoker AS 'Cigarette smoker', Hot_foods_or_liquids AS 'Hot foods or liquids', Sours AS 'Sours', Cold_foods_or_liquids AS 'Cold foods or liquids', Sweets AS 'Sweets', health_history_other AS 'Health history other', Removal AS 'Removal', Wound_treatment AS 'Wound treatment', Fillings AS 'Fillings', Sealants AS 'Sealants', Retainers AS 'Retainers', Braces AS 'Braces', Cleaning AS 'Cleaning', Polishing AS 'Polishing', Bridges AS 'Bridges', Dentures AS 'Dentures', Implants AS 'Implants', Urgent_Treatment AS 'Urgent treatment', Restorative_Care AS 'Restorative care', Preventive_Care AS 'Preventive care', treatment_need_other AS 'Treatment need other', Antibiotic AS 'Antibiotic', Sedative AS 'Sedative', Anti_inflammatory AS 'Anti-inflammatory', drugs_prescribed_other AS 'Drugs prescribed other', Caries AS 'Caries', Initial AS 'Initial', Dentine AS 'Dentine', Pulp_exposed AS 'Pulp exposed', Periodontal_diseases AS 'Periodontal diseases', Gingivitis AS 'Gingivitis', Periodontitis AS 'Periodontitis', Lesions AS 'Lesions', Premalignant AS 'Premalignant', Cancerous AS 'Cancerous', Non_Cancerous AS 'Non cancerous', Malocclusion AS 'Malocclusion', Class_2_Division_1 AS 'Class 2 Division 1', Class_2_Division_2 AS 'Class 2 Division 2', Class_3 AS 'Class 3', Fluorosis AS 'Fluorosis', Missing_Teeth AS 'Missing teeth', Dry_Mouth AS 'Dry mouth', Extra_Oral AS 'Extra oral', Facial_issues AS 'Facial issues', Swellings AS 'Swellings', Dental_examination_other AS 'Dental examination other', Sensitivity AS 'Sensitivity', tooth_decay AS 'Tooth decay', Fractured_teeth AS 'Fractured teeth', Worn_fillings AS 'Worn fillings', Gum_disease AS 'Gum disease', Worn_tooth_enamel AS 'Worn tooth enamel', Exposed_tooth_root AS 'Exposed tooth root', Oropharyngeal_Cancer AS 'Oropharyngeal cancer', Sores_that_bleed_easily AS 'Sores that bleed easily or do not heal', Thick_or_hard_spot_or_lump AS 'Thick or hard spot or lump', Roughened_or_crusted_area AS 'Roughened or crusted area', Numbness_pain_or_tenderness AS 'Numbness pain or tenderness', Change_in_the_way_your_teeth_fit_together_when_you_bite_down AS 'Change in the way teeth fit together when bite down', dental_examination_comment AS 'Dental examination comment'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

}