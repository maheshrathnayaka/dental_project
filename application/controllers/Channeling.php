<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Channeling extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('channeling_model');
    }

    public function index(){
        $data = $this->get_numbering();
        $dynamic_data = array(
            'title' => 'Channeling Queue',
            'channeling_data' => $data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/channeling_view');
        $this->load->view('common/footer');
    }

    public function get_numbering(){
        return $this->channeling_model->get_channel_queue();
    }

    public function filter_health_history($column, $value){
        return $column.':'.$value.'-';
    }

    public function profile($pid){
        $patient_data = $this->channeling_model->get_patient_profile($pid);
        $address_data = $this->channeling_model->get_patient_address($pid);
        $contact_data = $this->channeling_model->get_patient_contact($pid);
        $channel_data = $this->channeling_model->get_channel_info($pid);
        $age_data = $this->channeling_model->get_patient_age($pid);
        $dental_health_history_data = $this->channeling_model->get_dental_health_history($pid);
        $dental_health_history_habitual_data = $this->channeling_model->get_dental_health_history_habitual($pid);
        $dental_health_history_feel_twinges_data = $this->channeling_model->get_dental_health_history_feel_twinges($pid);
        $dental_health_history_womens_health_data = $this->channeling_model->get_dental_health_history_womens_health($pid);
        $dental_health_history_past_treatments_data = $this->channeling_model->get_dental_health_history_past_treatments($pid);
        $dental_health_history_other_data = $this->channeling_model->get_dental_health_history_other($pid);
        $medical_health_history_data = $this->channeling_model->get_medical_health_history($pid);
        $medical_health_history_other_data = $this->channeling_model->get_medical_health_history_other($pid);
        $medications_data = $this->channeling_model->get_medications();


        $dynamic_data = array(
            'title' => 'Patient Profile',
            'profile_data' => $patient_data,
            'address_data' => $address_data,
            'contact_data' => $contact_data,
            'channel_data' => $channel_data,
            'age_data' => $age_data,
            'dental_health_history_data' => $dental_health_history_data,
            'dental_health_history_habitual_data' => $dental_health_history_habitual_data,
            'dental_health_history_feel_twinges_data' => $dental_health_history_feel_twinges_data,
            'dental_health_history_womens_health_data' => $dental_health_history_womens_health_data,
            'dental_health_history_past_treatments_data' => $dental_health_history_past_treatments_data,
            'dental_health_history_other_data' => $dental_health_history_other_data,
            'medical_health_history_data' => $medical_health_history_data,
            'medical_health_history_other_data' => $medical_health_history_other_data,
            'medications_data' => $medications_data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/profile_view');
        $this->load->view('common/footer');
    }

    function profile_save(){
        $profile_data = $this->input->post('profile');
        $status = $this->channeling_model->profile($profile_data);
//        return $status;
//        $name = $this->input->post('fullname');
        echo $status;
//        if($profile_data['identity'] == "ProfileData"){
//            $profile_data = array(
//                'p_id' => $this->input->post('txtPID'),
//                'first_name' => $this->input->post('txtFirstName'),
//                'last_name' => $this->input->post('txtLastName'),
//                'occupation' => $this->input->post('txtOccupation'),
//                'email' => $this->input->post('txtEmail'),
//                'postal_no' => $this->input->post('txtPostalNo'),
//                'address1' => $this->input->post('txtAddress01'),
//                'address2' => $this->input->post('txtAddress02'),
//                'city' => $this->input->post('txtCity'),
//                'home_no' => $this->input->post('txtHomeNo'),
//                'mobile_no' => $this->input->post('txtMobileNo'),
//                'work_no' => $this->input->post('txtWorkNo'),
//                'identity' => $this->input->post('txtIdentity'),
//            );
//            $status = $this->channeling_model->update_profile($profile_data);
//            return $status;
//            echo $this->input->post('txtIdentity');
//        }
    }

    function dentalHistory_save()
    {
        $dentalHealth_data = $this->input->post('dentalHealth');
        $status = $this->channeling_model->updateDentalHealth($dentalHealth_data);

        echo $status;
    }

    function medicalHistory_save()
    {
        $medicalHealth_data = $this->input->post('medicalHealth');
        $status = $this->channeling_model->medecalHealthHostory($medicalHealth_data);

        echo $status;
    }

    function pastTreatment_save()
    {
        $pastTreatment_data = $this->input->post('pastTreatment');
        $status = $this->channeling_model->pastTreatment($pastTreatment_data);

        echo $status;
    }

    function womenHealth_save(){
        $womenHealth_data = $this->input->post('womenHealth');
        $status = $this->channeling_model->womenHealth($womenHealth_data);

        echo $status;

    }
}
