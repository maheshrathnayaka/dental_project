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
        /*$history_data='';
        foreach($dental_health_history_data as $key => $history){
            $history_data .= $this->filter_health_history($key, $history);
        }
        echo $history_data;*/
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
            'medical_health_history_other_data' => $medical_health_history_other_data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/profile_view');
        $this->load->view('common/footer');
    }
}
