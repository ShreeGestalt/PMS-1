<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class testmasterdetail extends CosRestController
{
  public function index_get()
  {
    $this->load->database();
    $this->db->select('test_detail_id AS tid, test_id AS id, test_exam_type AS examtype, test_details AS testdetail, test_unit AS tunit, test_display_order AS order, test_min_ref AS minref, test_max_ref AS maxref, patient_min_age AS minage, patient_max_age AS maxage, patient_gender AS gender');  //csId
    $this->db->distinct();
    $this->response(array("data" => $this->db->get('test_detail_master')->result()));  //cosUsers
  }


  public function index_post()
  {
    
    /*try {*/
         $data = array(
             'test_detail_id' => $this->post('tid'),
             'test_id' => $this->post('id'),
             'test_exam_type' => $this->post('examtype'),
             'test_details' => $this->post('testdetail'),
             'test_unit' => $this->post('tunit'),
             ' test_display_order' => $this->post('order'),
             'test_min_ref' => $this->post('minref'),
             'test_max_ref' => $this->post('maxref'),
             'patient_min_age' => $this->post('minage'),
             'patient_max_age' => $this->post('maxage'),
             'patient_gender' => $this->post('gender')
         );
        $this->load->database();
        $this->load->helper('array');
        $this->db->insert('test_detail_master', $data);
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
