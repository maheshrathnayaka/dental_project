<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('registration_model');
    }

    public function index()
    {
        $dynamic_data = array(
            'title' => 'New Patient',
            'patient' => 'new' // patient can be 'new' or 'registered'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/registration_view');
        $this->load->view('common/footer');
    }

    public function exists_barcode($barcode){
        return $this->registration_model->find_barcode($barcode);
    }
    public function register(){
        $barcode = $this->barcode_string(12);
        $exists_barcode = $this->exists_barcode($barcode);
        // Check whether barcode is exists or not, if not take it as the new barcode
        while($barcode == $exists_barcode['patient_barcode']){
            $barcode = $this->barcode_string(12);
            $exists_barcode = $this->exists_barcode($barcode);
        }
        // Table - tbl_patient
        $general_patient_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_birthday' => $this->input->post('txtBirthday'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_barcode' => $barcode
        );
        $patient_id = $this->registration_model->insert_profile($general_patient_data);
        $success_profile = '0';
        $success_reason_channel = '0';
        if($patient_id != null || $patient_id != '0' || $patient_id != ''){
            $success_profile = '1';
        }
        // Table - tbl_patient_address
        $general_address_data = array(
            'patient_id' => $patient_id,
            'postal_no' => $this->input->post('txtPostal'),
            'address_line1' => $this->input->post('txtAddress1'),
            'address_line2' => $this->input->post('txtAddress2'),
            'city' => $this->input->post('txtCity')
        );
        // Table - tbl_patient_contacts
        $general_contact_data = array(
            'patient_id' => $patient_id,
            'mobile_no' => $this->input->post('txtMobileTel'),
            'home_no' => $this->input->post('txtHomeTel'),
            'work_no' => $this->input->post('txtWorkTel')
        );
        // Table - tbl_patient_health
        $general_reason_data = array(
            'P_ID' => $patient_id,
            'Main_reason' => $this->input->post('txtAreaReasonForVisit')
        );
        // Table - tbl_channel_history
        $general_reason_channel_data = array(
            'P_ID' => $patient_id,
            'Main_reason' => $this->input->post('txtAreaReasonForVisit'),
            'date_time' => date('Y-m-d H:i:s')
        );
        $channel_number = $this->registration_model->get_max_channel_number();
        // Table - tbl_patients_queue
        $general_reason_queue_data = array(
            'P_ID' => $patient_id,
            'Main_reason' => $this->input->post('txtAreaReasonForVisit'),
            'check_status' => 1,
            'channel_number'=> $channel_number['channel_no']
        );

        // Women's Health | Table - tbl_patient_dental_history
        $chkPregnant = 0;
        $chkNursing = 0;
        if($this->input->post('chkPregnant') == "Pregnant") $chkPregnant = 1;
        if($this->input->post('chkPregnant') == "Nursing") $chkNursing = 1;
        $women_health_data = array(
            'p_id' => $patient_id,
            'Are_you_pregnant' => $chkPregnant,
            'Number_of_weeks' => $this->input->post('txtNumberOfWeeks'),
            'Total_number_of_pregnancies' => $this->input->post('txtNumberOfPregnancies'),
            'Number_of_births' => $this->input->post('txtNumberOfBirths'),
            'Nursing' => $chkNursing,
            'if_you_are_still_menstruating' => $this->input->post('txtMenstruating'),
            'Age_at_beginning_of_periods' => $this->input->post('txtBeginningPeriods'),
            'Age_at_end_of_periods' => $this->input->post('txtEndPeriods')
        );

        // Medical Health | Table - tbl_patient_health
        $chkDiabetes = 0;
        $chkHighCholesterol = 0;
        $chkHighBloodPressure = 0;
        $chkLowBloodPressure = 0;
        $chkHeartburn = 0;
        $chkAnemia = 0;
        $chkSwollen = 0;
        $chkDepression = 0;
        $chkThyroid = 0;
        $chkShortness = 0;
        $chkTonsillitis = 0;
        $chkAsthma = 0;
        $chkStroke = 0;
        $chkSinusProblems = 0;
        $chkArthritis = 0;
        $chkCancer = 0;
        $chkUlcers = 0;
        $chkGastric = 0;
        $chkAngina = 0;
        $chkKidney = 0;
        $chkLung = 0;
        $chkLiver = 0;
        $chkHeadaches = 0;
        $chkNeurological = 0;
        $chkEyeDisorder = 0;
        $chkEarProblems = 0;
        $chkSeasonalAllergies = 0;
        $chkOther = 0;
        $other = '';
        if($this->input->post('chkDiabetes') == "Diabetes") $chkDiabetes = 1;
        if($this->input->post('chkShortness') == "Shortness") $chkShortness = 1;
        if($this->input->post('chkAngina') == "Angina") $chkAngina = 1;
        if($this->input->post('chkDepression') == "Depression") $chkDepression = 1;
        if($this->input->post('chkHighCholesterol') == "HighCholesterol") $chkHighCholesterol = 1;
        if($this->input->post('chkTonsillitis') == "Tonsillitis") $chkTonsillitis = 1;
        if($this->input->post('chkKidney') == "Kidney") $chkKidney = 1;
        if($this->input->post('chkThyroid') == "Thyroid") $chkThyroid = 1;
        if($this->input->post('chkHighBloodPressure') == "HighBloodPressure") $chkHighBloodPressure = 1;
        if($this->input->post('chkAsthma') == "Asthma") $chkAsthma = 1;
        if($this->input->post('chkLung') == "Lung") $chkLung = 1;
        if($this->input->post('chkUlcers') == "Ulcers") $chkUlcers = 1;
        if($this->input->post('chkLowBloodPressure') == "LowBloodPressure") $chkLowBloodPressure = 1;
        if($this->input->post('chkStroke') == "Stroke") $chkStroke = 1;
        if($this->input->post('chkLiver') == "Liver") $chkLiver = 1;
        if($this->input->post('chkGastric') == "Gastric") $chkGastric = 1;
        if($this->input->post('chkHeartburn') == "Heartburn") $chkHeartburn = 1;
        if($this->input->post('chkSinusProblems') == "SinusProblems") $chkSinusProblems = 1;
        if($this->input->post('chkHeadaches') == "Headaches") $chkHeadaches = 1;
        if($this->input->post('chkEarProblems') == "EarProblems") $chkEarProblems = 1;
        if($this->input->post('chkAnemia') == "Anemia") $chkAnemia = 1;
        if($this->input->post('chkArthritis') == "Arthritis") $chkArthritis = 1;
        if($this->input->post('chkNeurological') == "Neurological") $chkNeurological = 1;
        if($this->input->post('chkSeasonalAllergies') == "SeasonalAllergies") $chkSeasonalAllergies = 1;
        if($this->input->post('chkSwollen') == "Swollen") $chkSwollen = 1;
        if($this->input->post('chkCancer') == "Cancer") $chkCancer = 1;
        if($this->input->post('chkEyeDisorder') == "EyeDisorder") $chkEyeDisorder = 1;
        if($this->input->post('chkOther') == "Other") $chkOther = 1;
        if($chkOther == 1) $other = $this->input->post('txtAreaOther');
        $medical_health_data = array(
            'diabetes' => $chkDiabetes,
            'shortness_of_breath' => $chkShortness,
            'heart_disease_murmur_angine' => $chkAngina,
            'depression_anxiety' => $chkDepression,
            'high_cholesterol' => $chkHighCholesterol,
            'tonsilitis' => $chkTonsillitis,
            'kidney_bladder_problems' => $chkKidney,
            'tyroid_problems' => $chkThyroid,
            'high_bood_pressure' => $chkHighBloodPressure,
            'asthma' => $chkAsthma,
            'lung_problems_cough' => $chkLung,
            'ulcers__colities' => $chkUlcers,
            'low_bood_pressure' => $chkLowBloodPressure,
            'stroke' => $chkStroke,
            'liver_problems_hepatitis' => $chkLiver,
            'gastric_irritation' => $chkGastric,
            'heartburn' => $chkHeartburn,
            'sinus_problems' => $chkSinusProblems,
            'headaches_migrains' => $chkHeadaches,
            'ear_problems' => $chkEarProblems,
            'anemia_bood_problems' => $chkAnemia,
            'arthiritis' => $chkArthritis,
            'neurological_problems' => $chkNeurological,
            'seasonal_allergies' => $chkSeasonalAllergies,
            'swollen_ankies' => $chkSwollen,
            'cancer' => $chkCancer,
            'eye_disorder_glaucoma' => $chkEyeDisorder,
            'other' => $other
        );

        // Dental Health History | Table - tbl_patient_dental_history
        $chkDifficultyChewingFood = 0;
        $chkChewOneSide = 0;
        $chkAvoidBrishingPain = 0;
        $chkGumsBleed = 0;
        $chkGumsSwollenTender = 0;
        $chkTeethSensitive = 0;
        $chkHurtWhenBite = 0;
        $chkSlowHealing = 0;
        $chkHadTrauma = 0;
        $chkPainInFCJJTT = 0;
        if($this->input->post('chkDifficultyChewingFood') == "DifficultyChewingFood") $chkDifficultyChewingFood = 1;
        if($this->input->post('chkTeethSensitive') == "TeethSensitive") $chkTeethSensitive = 1;
        if($this->input->post('chkChewOneSide') == "ChewOneSide") $chkChewOneSide = 1;
        if($this->input->post('chkHurtWhenBite') == "HurtWhenBite") $chkHurtWhenBite = 1;
        if($this->input->post('chkAvoidBrishingPain') == "AvoidBrishingPain") $chkAvoidBrishingPain = 1;
        if($this->input->post('chkSlowHealing') == "SlowHealing") $chkSlowHealing = 1;
        if($this->input->post('chkGumsBleed') == "GumsBleed") $chkGumsBleed = 1;
        if($this->input->post('chkHadTrauma') == "HadTrauma") $chkHadTrauma = 1;
        if($this->input->post('chkGumsSwollenTender') == "GumsSwollenTender") $chkGumsSwollenTender = 1;
        if($this->input->post('chkPainInFCJJTT') == "PainInFCJJTT") $chkPainInFCJJTT = 1;
        $dental_health_data = array(
            'difficulty_in_chewing_your_food' => $chkDifficultyChewingFood,
            'your_teeth_sensitive' => $chkTeethSensitive,
            'chew_on_only_one_side_of_your_mouth' => $chkChewOneSide,
            'hurt_when_you_chew_or_open_wide_to_take_a_bite' => $chkHurtWhenBite,
            'avoid_brushing_any_part_of_your_mouth_because_of_pain' => $chkAvoidBrishingPain,
            'ever_noticed_slow_healing_sores_in_or_about_your_mouth' => $chkSlowHealing,
            'gums_bleed_when_you_floss' => $chkGumsBleed,
            'Have_you_had_a_blow_to_the_jaw' => $chkHadTrauma,
            'gums_feel_swollen_or_tender' => $chkGumsSwollenTender,
            'have_pain_in_the_f_j_j_t_t' => $chkPainInFCJJTT
        );

        // Habitual | Table - tbl_patient_dental_history
        $chkGumChewer = 0;
        $chkPipeSmoker = 0;
        $chkBetelChewer = 0;
        $chkCigarette = 0;
        if($this->input->post('chkGumChewer') == "GumChewer") $chkGumChewer = 1;
        if($this->input->post('chkBetelChewer') == "BetelChewer") $chkBetelChewer = 1;
        if($this->input->post('chkPipeSmoker') == "PipeSmoker") $chkPipeSmoker = 1;
        if($this->input->post('chkCigarette') == "Cigarette") $chkCigarette = 1;
        $habitual_data = array(
            'Gum_chewer' => $chkGumChewer,
            'Betel_chewer' => $chkBetelChewer,
            'Pipe_smoker' => $chkPipeSmoker,
            'Cigarette_smoker' => $chkCigarette
        );

        // Twinges Pain | Table - tbl_patient_dental_history
        $chkHotFood = 0;
        $chkSours = 0;
        $chkColdFood = 0;
        $chkSweets = 0;
        if($this->input->post('chkHotFood') == "HotFood") $chkHotFood = 1;
        if($this->input->post('chkColdFood') == "ColdFood") $chkColdFood = 1;
        if($this->input->post('chkSours') == "Sours") $chkSours = 1;
        if($this->input->post('chkSweets') == "Sweets") $chkSweets = 1;
        $twinges_pain_data = array(
            'Hot_foods_or_liquids' => $chkHotFood,
            'Cold_foods_or_liquids' => $chkColdFood,
            'Sours' => $chkSours,
            'Sweets' => $chkSweets
        );
        // Table - tbl_patient_dental_history
        $other_data = array(
            'health_history_other' => $this->input->post('txtAreaOtherHealthHistoryInfo')
        );
        // Past Treatments | Table - tbl_patient_dental_history
        $chkRemoval = 0;
        $chkWoundTreatment = 0;
        $chkFilling = 0;
        $chkSealants = 0;
        $chkRetainers = 0;
        $chkBraces = 0;
        $chkCleaning = 0;
        $chkPolishing = 0;
        $chkBridges = 0;
        $chkDentures = 0;
        $chkImplants = 0;
        if($this->input->post('chkRemoval') == "Removal") $chkRemoval = 1;
        if($this->input->post('chkWoundTreatment') == "WoundTreatment") $chkWoundTreatment = 1;
        if($this->input->post('chkFilling') == "Filling") $chkFilling = 1;
        if($this->input->post('chkSealants') == "Sealants") $chkSealants = 1;
        if($this->input->post('chkRetainers') == "Retainers") $chkRetainers = 1;
        if($this->input->post('chkBraces') == "Braces") $chkBraces = 1;
        if($this->input->post('chkCleaning') == "Cleaning") $chkCleaning = 1;
        if($this->input->post('chkPolishing') == "Polishing") $chkPolishing = 1;
        if($this->input->post('chkBridges') == "Bridges") $chkBridges = 1;
        if($this->input->post('chkDentures') == "Dentures") $chkDentures = 1;
        if($this->input->post('chkImplants') == "Implants") $chkImplants = 1;
        $past_treatment_data = array(
            'Removal' => $chkRemoval,
            'Wound_treatment' => $chkWoundTreatment,
            'Fillings' => $chkFilling,
            'Sealants' => $chkSealants,
            'Retainers' => $chkRetainers,
            'Braces' => $chkBraces,
            'Cleaning' => $chkCleaning,
            'Polishing' => $chkPolishing,
            'Bridges' => $chkBridges,
            'Dentures' => $chkDentures,
            'Implants' => $chkImplants
        );

        if($success_profile = '1'){
            $success_address = $this->registration_model->insert_address($general_address_data);
            $success_contact = $this->registration_model->insert_contact($general_contact_data);
            $success_reason = $this->registration_model->insert_reason($general_reason_data, $general_reason_queue_data);
            $success_women_health = $this->registration_model->insert_women_health($women_health_data);
            $history_id = $this->registration_model->insert_channel_reason($general_reason_channel_data);
            if($history_id != null || $history_id != '0' || $history_id != '') $success_reason_channel = '1';
            $success_medical_health = $this->registration_model->update_medical_health($medical_health_data, $patient_id);
            $success_dental_health = $this->registration_model->update_dental_health($dental_health_data, $patient_id);
            $success_habitual = $this->registration_model->update_habitual($habitual_data, $patient_id);
            $success_twinges_pain = $this->registration_model->update_twinges_pain($twinges_pain_data, $patient_id);
            $success_other_info = $this->registration_model->update_other_info($other_data, $patient_id);
            $success_past_treatment = $this->registration_model->update_past_treatment($past_treatment_data, $patient_id);
        }

        // success value = 100000111111
        $success_value = $success_profile.$success_address.$success_contact.$success_reason.$success_women_health.$success_medical_health.$success_dental_health.$success_habitual.$success_twinges_pain.$success_other_info.$success_past_treatment;
        if($success_value == '100000111111'){
            $dynamic_data = array(
                'title' => 'New Patient',
                'patient' => 'registered' // patient can be 'new' or 'registered'
            );
            $this->load->view('common/header', $dynamic_data);
            $this->load->view('common/sidebar');
            $this->load->view('core/registration_view');
            $this->load->view('common/footer');
        }
//        echo $success_profile.$success_address.$success_contact.$success_reason.$success_women_health.$success_medical_health.$success_dental_health.$success_habitual.$success_twinges_pain.$success_other_info.$success_past_treatment;
//        echo $success_profile.$success_contact.$success_address.$success_reason.'|women|'.$success_women_health.$success_reason_channel.'|medical|'.$success_medical_health.$success_dental_health.$success_habitual.$success_twinges_pain.$success_other_info.$success_past_treatment.'|id|'.$patient_id;
    }

    public function barcode_string($length){
        $key = '';
        $keys = array_merge(range(0, 9));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }
}
