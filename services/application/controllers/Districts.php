<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';
class Districts extends CosRestController
{
  public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('user_model');
   }
  public function index_get()
  {
    // $this->load->database();
    // $this->response( $this->db->get('district')->result() );
    // $data = array('returned: '. $this->get('id'));
    // $this->response($data);
    //$this->load->database();
    // $this->db->select('districtID, districtName');
    // $sql = $this->db->get_compiled_select( 'districts' );
    // $this->response( $sql );
    $this->db->select('district_id AS district_id, district_name AS district_name');
    $this->db->distinct();
    $this->db->order_by("district_name", "asc");
    $this->response(array("data" =>$this->db->get('district_master')->result()));
  }

  public function district_get()
  {
    //$this->load->database();
    $id = $this->get('id');
    $this->db->select('district_id AS district_id, district_name AS district_name');
    $this->db->distinct();
    $this->db->order_by("district_name", "asc");
    $this->db->where('state_id', $id);
    $this->response(array("data" => $this->db->get('district_master')->result()));
  }

public function index_post()
  {
    try {
      
      $user = array(
        'state_id' => $this->post('state_id'),
        'district_name' => $this->post('district_name'),
      );

      //$this->load->database();
      $this->load->helper('array');

      $this->db->where('district_name',element( 'district_name', $user ));
      $this->db->where('state_id', element( 'state_id', $user ));

      $query = $this->db->get('district_master');

      $count = $query->num_rows();
      if( $count === 0 ) {
        $this->db->insert('district_master', $user);
        $this->response(array("data" => array(
          "status" => 201,
          "id" => element( 'district_name', $user ),
          "message" => "District added succefully."
        )));
      } else {
        $this->response(array("data" => array(
          "status" => 301,
          "message" => "District And State allready exists.",
          "query" => $this->db->last_query()
        )));
      }
    } catch(Exception $e) {
      $this->response(array("data" => array(
        "status" => 501,
        "message" => "Some error occured. Please contact admin.",
        "query" => $this->db->last_query()
      )));
    }
  }
}
?>