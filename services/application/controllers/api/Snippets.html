<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class Instruments extends CosRestController
{
  public function index_get() /**/
  {
    //echo $id;
    //$user = $this->rest->get('user', array('id' => $id), 'json');
     
    //echo $user->name;
    $this->load->database();
    $this->db->select('generic_cate_id AS id, generic_cate AS name');  
    $this->db->distinct();
    $this->db->order_by("generic_cate", "asc");
    /*if(empty($id))
    {
     $this->db->where("generic_id", $id);
    }*/
    $this->response(array("data" => $this->db->get('generic_category')->result()));  //cosUser
  }

  public function instrument_get()
  {
    // $this->load->database();
    // $this->response( $this->db->get('district')->result() );

    // $data = array('returned: '. $this->get('id'));
    // $this->response($data);

    $this->load->database();
    // $this->db->select('districtID, districtName');
    // $sql = $this->db->get_compiled_select( 'districts' );
    // $this->response( $sql );
    $id = $this->get('id');
      switch ($id) {
         case 1:
                $this->db->select('generic_instrument_id AS category_id, generic_instrument_name AS generic_name, generic_category_id AS generic_id');
                $this->db->distinct();
                $this->db->order_by("generic_instrument_name", "asc");
                $this->db->where('generic_category_id', $id);
                $this->response(array("data" => $this->db->get('generic_instrument_master')->result()));
           break;
          
          case 2:
                 $this->db->select('generic_faculty_name AS category_id, generic_faculty_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_faculty_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_faculty_master')->result()));
           break;

          case 3 :
                  $this->db->select('generic_exam_type_name AS category_id, generic_exam_type_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_exam_type_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_exam_type_master')->result()));
           break;

           case 4 :
                  $this->db->select('generic_group_name AS category_id, generic_group_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_group_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_group_master')->result()));
           break;

           case 5 :
                  $this->db->select('generic_method_name AS category_id, generic_method_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_method_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_method_master')->result()));
           break;

           case 6 :

                  $this->db->select('generic_sample_name AS category_id, generic_sample_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_sample_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_sample_master')->result()));
           break;

           case 7 :

                  $this->db->select('generic_staff_category_name AS category_id, generic_staff_category_name AS generic_name, generic_category_id AS generic_id');
                 $this->db->distinct();
                 $this->db->order_by("generic_staff_category_name", "asc");
                 $this->db->where('generic_category_id', $id);
                 $this->response(array("data" => $this->db->get('generic_staff_category_master')->result()));
           break;
         default:
           # code...
              $this->response(array("data" =>"Invalid input"));
           break;
       }
  }

  public function index_post()
  {
    try {
      // $fName = $this->input->post("firstName");
      // $fName = $_POST["firstName"];
      // $this->load->library('encrypt');
      //$_POST["instrument_id"] = 2;
      //$_POST["instrument_name"] = "Instruments-2";
      //$_POST["generic_id"] = 1;
      //$this->post('generic_id');
       $this->load->database();
       $this->load->helper('array');
       //$query = "";
      // $user ="";
       switch ($this->post('category_id')) {
         case 1:
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_instrument_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_instrument_name', element('generic_instrument_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_instrument_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_instrument_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_instrument_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;
          
          case 2:
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_faculty_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_faculty_name', element('generic_faculty_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_faculty_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_faculty_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_faculty_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

          case 3 :
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_exam_type_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_exam_type_name', element('generic_exam_type_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_exam_type_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_exam_type_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_exam_type_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 4 :
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_group_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_group_name', element('generic_group_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_group_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_group_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_group_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 5 :
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_method_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_method_name', element('generic_method_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_method_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_method_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_method_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 6 :
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_sample_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_sample_name', element('generic_sample_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_sample_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_sample_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_sample_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 7 :
                  $user = array(
                          //'generic_instrument_id'=> $this->post('generic_instrument_id'),
                          'generic_staff_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              /*'isBlock' => 1,
                                'csOtp'=> rand(pow(10, 3), pow(10, 4)-1),
                                'csPassword' => MD5($this->post('password')),
                                'ipAddress' => $this->input->ip_address(),
                                'createdDateTime' => date("Y-m-d H:i:s")*/
                              );
                    //print_r($user);
                    $this->db->where('generic_staff_category_name', element('generic_staff_category_name', $user));
                    //$this->db->or_where('csEmail', element( 'csEmail', $user ));
                    $query = $this->db->get('generic_staff_category_master');
                   // print_r($query);
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_staff_category_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_staff_category_name', $user ),
                        "message" => "User added succefully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;
         default:
           $this->response(array("data" => "Invalid input"));
           break;
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
