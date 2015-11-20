<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';
class States extends CosRestController
{
  public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('user_model');
   }
  public function index_get()
  {
    //$this->load->database();
    $this->db->select('state_id AS state_id, state_name AS state_name');
    $this->db->distinct();
    $this->db->order_by("state_name", "asc");
    $this->response(array("data" => $this->db->get('state_master')->result()));
  }

  public function state_get()
  {
    //$this->load->database();
    $id = $this->get('id');
    $this->db->select('state_id AS state_id, state_name AS state_name');
    $this->db->distinct();
    $this->db->order_by("state_name", "asc");
    $this->db->where('state_id', $id);
    $this->response(array("data" => $this->db->get('state_master')->result()));
  }
}
?>