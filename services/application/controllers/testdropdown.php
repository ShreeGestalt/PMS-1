<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class testdropdown extends CosRestController
{
  public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('user_model');
   }
  public function index_get()
  {
    //$this->load->database();
    $this->db->select('generic_instrument_name AS name, generic_instrument_id AS id');  //csId
     $this->db->distinct();
   // $this->db->order_by("generic_instrument_name", "asc");
    $this->response(array("data" => $this->db->get('generic_instrument_master')->result()));  //cosUsers
  }

  public function sample_get()
  {
    //$this->load->database();
    $this->db->select('generic_sample_name AS name, generic_sample_id AS id');  //csId
     $this->db->distinct();
   // $this->db->order_by("generic_instrument_name", "asc");
    $this->response(array("data" => $this->db->get('generic_sample_master')->result()));  //cosUsers
  }

   public function methode_get()
  {
    //$this->load->database();
    $this->db->select('generic_method_name AS name, generic_method_id AS id');  //csId
     $this->db->distinct();
   // $this->db->order_by("generic_instrument_name", "asc");
    $this->response(array("data" => $this->db->get('generic_method_master')->result()));  //cosUsers
  }

   public function group_get()
  {
    //$this->load->database();
    $this->db->select('generic_group_name AS name, generic_group_id AS id');  //csId
     $this->db->distinct();
   // $this->db->order_by("generic_instrument_name", "asc");
    $this->response(array("data" => $this->db->get('generic_group_master')->result()));  //cosUsers
  }


  public function flag_get()
  {
    //$this->load->database();
    $this->db->select('flag_name AS name, flag_id AS id');  //csId
     $this->db->distinct();
   // $this->db->order_by("generic_instrument_name", "asc");
    $this->response(array("data" => $this->db->get('flag_master')->result()));  //cosUsers
  }

  

  /*public function index_post()
  {
    try {
      // $fName = $this->input->post("firstName");
      // $fName = $_POST["firstName"];
      // $this->load->library('encrypt');

      $user = array(
        'csFirstName' => $this->post('firstName'),
        'csLastName' => $this->post('lastName'),
        'csPhone' => $this->post('phone'),
        'csGender' => $this->post('gender'),
        'csDistrict' => $this->post('district'),
        'csAboutMe' => $this->post('aboutMe'),
        'csEmail' => $this->post('email'),
        'isBlock' => 1,
        'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
        'csPassword' => MD5($this->post('password')),
        'ipAddress' => $this->input->ip_address(),
        'createdDateTime' => date("Y-m-d H:i:s")
      );

      $this->load->database();
      $this->load->helper('array');

      $this->db->where('csPhone',element( 'csPhone', $user ));
      $this->db->or_where('csEmail', element( 'csEmail', $user ));

      $query = $this->db->get('cosUsers');

      $count = $query->num_rows();
      if( $count === 0 ) {
        $this->db->insert('cosUsers', $user);
        $this->response(array("data" => array(
          "status" => 201,
          "id" => element( 'csPhone', $user ),
          "message" => "User added succefully."
        )));
      } else {
        $this->response(array("data" => array(
          "status" => 301,
          "message" => "Mobile number Or email allready exists.",
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

  public function authorise_post()
  {
    $phone = $this->post('phone');
    $otp = $this->post('otp');

    $this->load->database();
    $this->load->helper('array');

    $this->db->where('csPhone',$phone );
    $this->db->where('csOtp', $otp );
    $this->db->where('isBlock', 1 );

    $query = $this->db->get('cosUsers');

    $count = $query->num_rows();

    if($count === 1 ) {
      $data = array(
        'isBlock' => 0
      );

      $this->db->where('csPhone',$phone );
      $this->db->where('csOtp', $otp );
      $this->db->update('cosUsers', $data);

      $this->response(array("data" => array(
        "status" => 201,
        "message" => "User is authorised.",
        "otp" => $otp,
        "query" => $this->db->last_query()
      )));
    } else {
      $this->response(array("data" => array(
        "status" => 301,
        "message" => "You entered incorrect OTP. Please try agin.",
        "otp" => $otp,
        "query" => $this->db->last_query()
      )));
    }
  }


  public function login_post()
  {
    // $this->load->library('encrypt');

    $phone = $this->post('phone');
    $password = MD5($this->post('password'));

    $this->load->database();
    $this->load->helper('array');

    $this->db->where('csPhone',$phone );
    $this->db->where('csPassword', $password );
    $this->db->where('isBlock', 0 );

    $query = $this->db->get('cosUsers');

    $count = $query->num_rows();

    if($count === 1 ) {
      $this->response(array("data" => array(
        "status" => 201,
        "message" => "Login successful.",
        "query" => $this->db->last_query()
      )));
    } else {
      $this->response(array("data" => array(
        "status" => 301,
        "message" => "User not authorised. Please try agin.",
        "query" => $this->db->last_query()
      )));
    }
  }

  public function demo_post() {
    $this->response(array("data" => array(
      "status" => 301,
      "message" => $this->post('firstName'),
      "query" => md5('demo'),
      "query1" => md5('demo'),
      "query2" => md5('demo')
    )));
    // if( count($this->input->post()) > 0 )
    // {
    //     echo "Wroking";
    // }
    // else
    // {
    //   echo $this->post('firstName');
    // }
  }*/
}
?>
