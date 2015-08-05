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
            'title' => 'New Patient'
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
        $general_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('txtBirthday'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_postal_no' => $this->input->post('txtPostal'),
            'patient_address1' => $this->input->post('txtAddress1'),
            'patient_address2' => $this->input->post('txtAddress2'),
            'patient_city' => $this->input->post('txtCity'),
            'patient_mobile' => $this->input->post('txtMobileTel'),
            'patient_home' => $this->input->post('txtHomeTel'),
            'patient_work' => $this->input->post('txtWorkTel'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_main_reason' => $this->input->post('txtAreaReasonForVisit'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_barcode' => $barcode
        );
        $women_health_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_postal_no' => $this->input->post('txtOccupation'),
            'patient_address1' => $this->input->post('txtOccupation'),
            'patient_address2' => $this->input->post('txtOccupation'),
            'patient_city' => $this->input->post('txtOccupation'),
            'patient_mobile' => $this->input->post('txtOccupation'),
            'patient_home' => $this->input->post('txtOccupation'),
            'patient_work' => $this->input->post('txtOccupation'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_main_reason' => $this->input->post('txtAreaKnownAllergies'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_barcode' => $barcode
        );
        $medical_health_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_postal_no' => $this->input->post('txtOccupation'),
            'patient_address1' => $this->input->post('txtOccupation'),
            'patient_address2' => $this->input->post('txtOccupation'),
            'patient_city' => $this->input->post('txtOccupation'),
            'patient_mobile' => $this->input->post('txtOccupation'),
            'patient_home' => $this->input->post('txtOccupation'),
            'patient_work' => $this->input->post('txtOccupation'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_main_reason' => $this->input->post('txtAreaKnownAllergies'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_barcode' => $barcode
        );
        $dental_health_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1'),
            'patient_occupation' => $this->input->post('txtOccupation'),
            'patient_postal_no' => $this->input->post('txtOccupation'),
            'patient_address1' => $this->input->post('txtOccupation'),
            'patient_address2' => $this->input->post('txtOccupation'),
            'patient_city' => $this->input->post('txtOccupation'),
            'patient_mobile' => $this->input->post('txtOccupation'),
            'patient_home' => $this->input->post('txtOccupation'),
            'patient_work' => $this->input->post('txtOccupation'),
            'patient_email' => $this->input->post('txtEmail'),
            'patient_main_reason' => $this->input->post('txtAreaKnownAllergies'),
            'patient_allergies' => $this->input->post('txtAreaKnownAllergies'),
            'patient_barcode' => $barcode
        );
        $habitual_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1')
        );
        $twinges_pain_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1')
        );
        $other_data = array(
            'patient_first_name' => $this->input->post('txtFirstName')
        );
        $past_treatment_data = array(
            'patient_first_name' => $this->input->post('txtFirstName'),
            'patient_last_name' => $this->input->post('txtSurname'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_gender' => $this->input->post('optionsRadios1'),
            'patient_bday' => $this->input->post('optionsRadios1')
        );
        var_dump($general_data);
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
