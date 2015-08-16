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
        $query = $General->query("SELECT p.patient_id, p.patient_first_name, p.patient_last_name, p.patient_email, p.patient_gender, p.patient_occupation, p.patient_allergies, p.patient_barcode, p.patient_birthday, q.Main_reason, q.check_status, q.channel_number FROM tbl_patient p, tbl_patients_queue q WHERE p.patient_id = q.P_ID AND q.check_status = 1 AND q.channel_number!=0 ORDER BY q.channel_number ASC;");
        return $query->result_array();
    }

    public function get_patient_profile($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select('patient_id, patient_first_name, patient_last_name, patient_email, patient_gender, patient_birthday, patient_occupation, patient_allergies, patient_barcode');
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
        $General->select('P_ID, Main_reason, channel_number, check_status');
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
        $General->select("p_id AS 'p_id', difficulty_in_chewing_your_food AS 'Difficulty in chewing food', chew_on_only_one_side_of_your_mouth AS 'Chew on only one side of mouth', avoid_brushing_any_part_of_your_mouth_because_of_pain AS 'Avoid brushing part of mouth because of pain', gums_bleed_when_you_floss AS 'Gums bleed when flossing', gums_feel_swollen_or_tender AS 'Gums feel swollen or tender', your_teeth_sensitive AS 'Teeth sensitive', hurt_when_you_chew_or_open_wide_to_take_a_bite AS 'Hurt when chew or open wide to take a bite', ever_noticed_slow_healing_sores_in_or_about_your_mouth AS 'Ever noticed slow healing sores in or about mouth', Have_you_had_a_blow_to_the_jaw AS 'Had a blow to the jaw (Trauma)', have_pain_in_the_f_j_j_t_t AS 'Pain in the face cheeks jaws joints throat or temples'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_dental_health_history_habitual($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("p_id AS 'p_id', Gum_chewer AS 'Gum chewer', Pipe_smoker AS 'Pipe smoker', Betel_chewer AS 'Betel chewer', Cigarette_smoker AS 'Cigarette smoker'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_dental_health_history_feel_twinges($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("p_id AS 'p_id', Hot_foods_or_liquids AS 'Hot foods or liquids', Sours AS 'Sours', Cold_foods_or_liquids AS 'Cold foods or liquids', Sweets AS 'Sweets'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_dental_health_history_past_treatments($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("p_id AS 'p_id', Removal AS 'Removal', Wound_treatment AS 'Wound treatment', Fillings AS 'Fillings', Sealants AS 'Sealants', Retainers AS 'Retainers', Braces AS 'Braces', Cleaning AS 'Cleaning', Polishing AS 'Polishing', Bridges AS 'Bridges', Dentures AS 'Dentures', Implants AS 'Implants'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_dental_health_history_womens_health($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("Are_you_pregnant, Nursing, Number_of_weeks, if_you_are_still_menstruating, Total_number_of_pregnancies, Age_at_beginning_of_periods, Number_of_births, Age_at_end_of_periods");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_dental_health_history_other($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("p_id, health_history_other");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_dental_history');
        return $query->row_array();
    }

    public function get_medical_health_history($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("P_ID AS 'p_id', diabetes AS 'Diabetes', high_cholesterol AS 'High cholesterol', high_bood_pressure AS 'High blood pressure', low_bood_pressure AS 'Low blood pressure', heartburn AS 'Heartburn(reflux)', anemia_bood_problems AS 'Anemia/blood problems', swollen_ankies AS 'Swollen ankles', depression_anxiety AS 'Depression/Anxiety', tyroid_problems AS 'Thyroid problems', shortness_of_breath AS 'Shortness of breath', tonsilitis AS 'Tonsillitis', asthma AS 'Asthma', stroke AS 'Stroke', sinus_problems AS 'Sinus problems', arthiritis AS 'Arthritis', cancer AS 'Cancer', ulcers__colities AS 'Ulcers/colitis', gastric_irritation AS 'Gastric irritation', heart_disease_murmur_angine AS 'Heart disease/Murmur/Angina', kidney_bladder_problems AS 'Kidney/Bladder problems', lung_problems_cough AS 'Lung problems/cough', liver_problems_hepatitis AS 'Liver problems/Hepatitis', headaches_migrains AS 'Headaches/Migraines', neurological_problems AS 'Neurological problems', eye_disorder_glaucoma AS 'Eye disorder/Glaucoma', ear_problems AS 'Ear problems', seasonal_allergies AS 'Seasonal allergies'");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_health');
        return $query->row_array();
    }

    public function get_medical_health_history_other($pid)
    {
        $General = $this->load->database('group_gen', TRUE);
        $General->select("P_ID, other");
        $General->where('P_ID', $pid);
        $query = $General->get('tbl_patient_health');
        return $query->row_array();
    }

    public function get_medications()
    {
        $Knowledge = $this->load->database('group_knwbase', TRUE);
        $Knowledge->select();
        $query = $Knowledge->get('medication');
        return $query->result_array();
    }

    public function profile($profile){
        $patient_id = $profile['p_id'];
        $contact_data = array(
            'home_no' => $profile['home_no'],
            'mobile_no' => $profile['mobile_no'],
            'work_no' => $profile['work_no']
        );
        $address_data = array(
            'postal_no' => $profile['postal_no'],
            'address_line1' => $profile['address1'],
            'address_line2' => $profile['address2'],
            'city' => $profile['city']
        );
        $profile_data = array(
            'patient_first_name' => $profile['first_name'],
            'patient_last_name' => $profile['last_name'],
            'patient_occupation' => $profile['occupation'],
            'patient_email' => $profile['email']
        );
        $status_contact = $this->update_contact($contact_data, $patient_id);
        $status_address = $this->update_address($address_data, $patient_id);
        $status_profile = $this->update_profile($profile_data, $patient_id);
        return $status_contact.$status_address.$status_profile;
    }

    public function update_contact($contact_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('patient_id', $patient_id);
        $status = $General->update('tbl_patient_contacts', $contact_data);
        return $status;
    }

    public function update_address($address_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('patient_id', $patient_id);
        $status = $General->update('tbl_patient_address', $address_data);
        return $status;
    }

    public function update_profile($profile_data, $patient_id){
        $General = $this->load->database('group_gen', TRUE);
        $General->where('patient_id', $patient_id);
        $status = $General->update('tbl_patient', $profile_data);
        return $status;
    }

    public function updateDentalHealth($dentalHealth_data){
        $dentalHealth_dataarray = array(
            'difficulty_in_chewing_your_food' => $dentalHealth_data['chkDifficultyChewingFood'],
            'your_teeth_sensitive' => $dentalHealth_data['chkTeethSensitive'],
            'chew_on_only_one_side_of_your_mouth' => $dentalHealth_data['chkChewOneSide'],
            'hurt_when_you_chew_or_open_wide_to_take_a_bite' => $dentalHealth_data['chkHurtWhenBite'],
            'avoid_brushing_any_part_of_your_mouth_because_of_pain' => $dentalHealth_data['chkAvoidBrishingPain'],
            'ever_noticed_slow_healing_sores_in_or_about_your_mouth' => $dentalHealth_data['chkSlowHealing'],
            'gums_bleed_when_you_floss' => $dentalHealth_data['chkGumsBleed'],
            'Have_you_had_a_blow_to_the_jaw' => $dentalHealth_data['chkHadTrauma'],
            'gums_feel_swollen_or_tender' => $dentalHealth_data['chkGumsSwollenTender'],
            'have_pain_in_the_f_j_j_t_t' => $dentalHealth_data['chkPainInFCJJTT'],
            'Gum_chewer' => $dentalHealth_data['chkGumChewer'],
            'Betel_chewer' => $dentalHealth_data['chkBetelChewer'],
            'Pipe_smoker' => $dentalHealth_data['chkPipeSmoker'],
            'Cigarette_smoker' => $dentalHealth_data['chkCigarette'],
            'Hot_foods_or_liquids' => $dentalHealth_data['chkCchkHotFood'],
            'Cold_foods_or_liquids' => $dentalHealth_data['chkColdFood'],
            'Sours' => $dentalHealth_data['chkSours'],
            'Sweets' => $dentalHealth_data['chkSweets'],
//            'home_no' => $dentalHealth_data['dhknownAllergies'],
            'health_history_other' => $dentalHealth_data['dhother']
        );

        $p_id = $dentalHealth_data['p_id'];
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $p_id);
        $status = $General->update('tbl_patient_dental_history', $dentalHealth_dataarray);
        return $status;


    }

    public function medecalHealthHostory($medicalHealth_data){

        $medicalHealth_dataarray = array(
            'diabetes' => $medicalHealth_data['chkDiabetes'],
            'shortness_of_breath' => $medicalHealth_data['chkShortness'],
            'heart_disease_murmur_angine' => $medicalHealth_data['chkAngina'],
            'depression_anxiety' => $medicalHealth_data['chkDepression'],
            'high_cholesterol' => $medicalHealth_data['chkHighCholesterol'],
            'tonsilitis' => $medicalHealth_data['chkTonsillitis'],
            'kidney_bladder_problems' => $medicalHealth_data['chkKidney'],
            'tyroid_problems' => $medicalHealth_data['chkThyroid'],
            'high_bood_pressure' => $medicalHealth_data['chkHighBloodPressure'],
            'asthma' => $medicalHealth_data['chkAsthma'],
            'lung_problems_cough' => $medicalHealth_data['chkLung'],
            'ulcers__colities' => $medicalHealth_data['chkUlcers'],
            'low_bood_pressure' => $medicalHealth_data['chkLowBloodPressure'],
            'stroke' => $medicalHealth_data['chkStroke'],
            'liver_problems_hepatitis' => $medicalHealth_data['chkLiver'],
            'gastric_irritation' => $medicalHealth_data['chkGastric'],
            'heartburn' => $medicalHealth_data['chkHeartburn'],
            'sinus_problems' => $medicalHealth_data['chkSinusProblems'],

            'headaches_migrains' => $medicalHealth_data['chkHeadaches'],
            'ear_problems' => $medicalHealth_data['chkEarProblems'],
            'anemia_bood_problems' => $medicalHealth_data['chkAnemia'],
            'arthiritis' => $medicalHealth_data['chkArthritis'],
            'neurological_problems' => $medicalHealth_data['chkNeurological'],
            'seasonal_allergies' => $medicalHealth_data['chkSeasonalAllergies'],
            'swollen_ankies' => $medicalHealth_data['chkSwollen'],
            'cancer' => $medicalHealth_data['chkCancer'],
            'eye_disorder_glaucoma' => $medicalHealth_data['chkEyeDisorder'],
            'other' => $medicalHealth_data['txtAreaOther']

        );

        $p_id = $medicalHealth_data['p_id'];
        $General = $this->load->database('group_gen', TRUE);
        $General->where('P_ID', $p_id);
        $status = $General->update('tbl_patient_health', $medicalHealth_dataarray);

        return $status;


    }

    public function pastTreatment($pastTreatment){


        $pastTreatment_dataarray = array(
            'Removal' => $pastTreatment['chkRemoval'],
            'Wound_treatment' => $pastTreatment['chkWoundTreatment'],
            'Fillings' => $pastTreatment['chkFilling'],
            'Sealants' => $pastTreatment['chkSealants'],
            'Retainers' => $pastTreatment['chkRetainers'],
            'Braces' => $pastTreatment['chkBraces'],
            'Cleaning' => $pastTreatment['chkCleaning'],
            'Polishing' => $pastTreatment['chkPolishing'],
            'Bridges' => $pastTreatment['chkBridges'],
            'Dentures' => $pastTreatment['chkDentures'],
            'Implants' => $pastTreatment['chkImplants']

        );

        $p_id = $pastTreatment['p_id'];
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $p_id);
        $status = $General->update('tbl_patient_dental_history', $pastTreatment_dataarray);

        return $status;

    }

    public function womenHealth($womenHealth){
        $womenHealth_dataarray = array(
            'Are_you_pregnant' => $womenHealth['chkPregnant'],
            'Number_of_weeks' => $womenHealth['num_of_weeks'],
            'Total_number_of_pregnancies' => $womenHealth['total_no_pregna'],
            'Number_of_births' => $womenHealth['total_no_birth'],
            'Nursing' => $womenHealth['chkNursing'],
            'if_you_are_still_menstruating' => $womenHealth['stillMenstruating'],
            'Age_at_beginning_of_periods' => $womenHealth['txtBeginningPeriods'],
            'Age_at_end_of_periods' => $womenHealth['txtEndPeriods']
        );

        $p_id = $womenHealth['p_id'];
        $General = $this->load->database('group_gen', TRUE);
        $General->where('p_id', $p_id);
        $status = $General->update('tbl_patient_dental_history', $womenHealth_dataarray);

        return $status;
    }
}