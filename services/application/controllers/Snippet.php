<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class Snippet extends CosRestController
{
  public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('user_model');
   }
  public function index_get()
  {
    //$this->load->database();
    $this->db->select('short_code AS short_code, description AS description');  
    $this->db->distinct();
    $this->response(array("data" => $this->db->get('snippet_master')->result()));
  }

  public function index_post()
  {
    try {
          $data = array(
              'short_code' => $this->post('short_code'),
              'description' => $this->post('description'),
          );
           //$this->load->database();
           $this->load->helper('array');
           $this->db->insert('snippet_master', $data);
           $this->response(array("data" => array(
              "message" => "User added succefully."
            )));
        } catch(Exception $e) {
            $this->response(array("data" => array(
            "message" => "Some error occured. Please contact admin."
        )));
        }
   }
}
?>
