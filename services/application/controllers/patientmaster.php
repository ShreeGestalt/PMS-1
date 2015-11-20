<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class patientmaster extends CosRestController
{
  public function index_get()
  {
    $this->load->database();
    $this->db->select('patient_id AS id, patient_name AS name, patient_address AS address, patient_state AS state, patient_distric AS distric, patient_city AS city, patient_dob AS dob, patient_gender AS gender, patient_phone AS phone, patient_mobile AS mobile, patient_email AS email');  //csId
    $this->db->distinct();
    $this->response(array("data" => $this->db->get('patient_master')->result()));  //cosUsers
  }


  public function index_post()
  {
    
    /*try {*/
         $data = array(
             'patient_id' => $this->post('id'),
             'patient_name' => $this->post('name'),
             'patient_address' => $this->post('address'),
             'patient_state' => $this->post('state'),
             'patient_distric' => $this->post('distric'),
             'patient_city' => $this->post('city'),
             'patient_dob' => $this->post('dob'),
             'patient_gender' => $this->post('gender'),
             'patient_phone' => $this->post('phone'),
             'patient_mobile' => $this->post('mobile'),
             'patient_email' => $this->post('email')
         );
        $this->load->database();
        $this->load->helper('array');
        $this->db->insert('patient_master', $data);
        $this->response(array("data" => array(
           "message" => "User added succefully."
        )));
       /*} catch(Exception $e) {
           $this->response(array("data" => array(
           "message" => "Some error occured. Please contact admin."
       )));
       }*/
  }
}
?>
