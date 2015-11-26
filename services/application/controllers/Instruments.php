<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';


class Instruments extends CosRestController
{
  public function __construct() {
        parent::__construct();
        $this->load->database();
  }

  public function index_get() /**/
  {
    $this->db->select('generic_cate_id AS id, generic_cate AS name');  
    $this->db->distinct();
    $this->db->order_by("generic_cate", "asc");
    
    $this->response(array("data" => $this->db->get('generic_category')->result()));  //cosUser
  }

  public function categorydelete_post() /*deleting the category from database*/
  {
    $this->load->helper('array');
    $gId = $this->post('genericId');
    $rowId = $this->post('rowId');
    $rowData = array('is_delete'=> 1);

      switch ($gId) {

        case 1:
                $this->db->where('generic_instrument_id', $rowId);
                $this->db->update('generic_instrument_master', $rowData);
               $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;
          
        case 2:
                $this->db->where('generic_faculty_id', $rowId);
                $this->db->update('generic_faculty_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;

        case 3:
                $this->db->where('generic_exam_type_id', $rowId);
                $this->db->update('generic_exam_type_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;

        case 4:
                $this->db->where('generic_group_id', $rowId);
                $this->db->update('generic_group_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;

        case 5:
                $this->db->where('generic_method_id', $rowId);
                $this->db->update('generic_method_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;

        case 6:
                $this->db->where('generic_sample_id', $rowId);
                $this->db->update('generic_sample_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;

        case 7:
                $this->db->where('generic_staff_category_id', $rowId);
                $this->db->update('generic_staff_category_master', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;
        case 8:
                $this->db->where('contact_category_id', $rowId);
                $this->db->update('generic_contact_category', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;
        case 9:
                $this->db->where('employee_category_id', $rowId);
                $this->db->update('generic_employee_category', $rowData);
                $this->response(array("data" => array(
                    "status" => 201,
                    "message" => "Row deleted successfully"
                )));
                break;
        default:
                $this->response(array("data" =>"Please check your input"));
                break;
       }
  }

  public function instrument_get()
  {
    $id = $this->get('id');
    $is_delete = 0;
      switch ($id) {
         case 1:
                  $this->db->select('generic_instrument_id AS row_id, generic_instrument_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_instrument_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_instrument_master')->result()));
                  break;
          
          case 2:
                  $this->db->select('generic_faculty_id AS row_id, generic_faculty_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_faculty_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_faculty_master')->result()));
                  break;

          case 3 :
                  $this->db->select('generic_exam_type_id AS row_id, generic_exam_type_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_exam_type_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_exam_type_master')->result()));
                  break;

           case 4 :
                  $this->db->select('generic_group_id AS row_id, generic_group_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_group_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_group_master')->result()));
                  break;

           case 5 :
                  $this->db->select('generic_method_id AS row_id, generic_method_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_method_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_method_master')->result()));
                  break;

           case 6 :
                  $this->db->select('generic_sample_id AS row_id, generic_sample_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_sample_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_sample_master')->result()));
                  break;

           case 7 :
                  $this->db->select('generic_staff_category_id AS row_id, generic_staff_category_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("generic_staff_category_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_staff_category_master')->result()));
                  break;

          case 8 :
                  $this->db->select('contact_category_id AS row_id, contact_category_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("contact_category_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_contact_category')->result()));
                  break;

          case 9 :
                  $this->db->select('employee_category_id AS row_id, employee_category_name AS generic_name, generic_category_id AS generic_id');
                  $this->db->distinct();
                  $this->db->order_by("employee_category_name", "asc");
                  $this->db->where('generic_category_id', $id);
                  $this->db->where('is_delete', $is_delete);
                  $this->response(array("data" => $this->db->get('generic_employee_category')->result()));
                  break;
          default:
                  $this->response(array("data" =>"Invalid input"));
                  break;
       }
  }

  public function instrument_post()
  {
    try {
      $this->load->database();
      $this->load->helper('array');
      switch ($this->post('category_id')) {
        case 1:
                $user = array(
                    'generic_instrument_name'=> $this->post('generic_name'),
                    'generic_category_id'=> $this->post('category_id')
                  );
                $this->db->where('generic_instrument_name', element('generic_instrument_name', $user));
                $query = $this->db->get('generic_instrument_master');
                $count = $query->num_rows();
                if( $count === 0 ) {
                  $this->db->insert('generic_instrument_master', $user);
                  $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_instrument_name', $user ),
                        "message" => "User added succefully"
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
                          'generic_faculty_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                        );
                $this->db->where('generic_faculty_name', element('generic_faculty_name', $user));
                $query = $this->db->get('generic_faculty_master');
                $count = $query->num_rows();
                if( $count === 0 ) {
                  $this->db->insert('generic_faculty_master', $user);
                  $this->response(array("data" => array(
                    "status" => 201,
                    "id" => element( 'generic_faculty_name', $user ),
                    "message" => "User added succefully"
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
                          'generic_exam_type_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('generic_exam_type_name', element('generic_exam_type_name', $user));
                    $query = $this->db->get('generic_exam_type_master');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_exam_type_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_exam_type_name', $user ),
                        "message" => "User added succefully"
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
                          'generic_group_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('generic_group_name', element('generic_group_name', $user));
                    $query = $this->db->get('generic_group_master');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_group_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_group_name', $user ),
                        "message" => "User added succefully"
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
                          'generic_method_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('generic_method_name', element('generic_method_name', $user));
                    $query = $this->db->get('generic_method_master');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_method_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_method_name', $user ),
                        "message" => "User added succefully"
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
                          'generic_sample_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('generic_sample_name', element('generic_sample_name', $user));
                    $query = $this->db->get('generic_sample_master');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_sample_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_sample_name', $user ),
                        "message" => "User added succefully"
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
                          'generic_staff_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('generic_staff_category_name', element('generic_staff_category_name', $user));
                    $query = $this->db->get('generic_staff_category_master');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_staff_category_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_staff_category_name', $user ),
                        "message" => "User added succefully"
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 8 :
                  $user = array(
                          'contact_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('contact_category_name', element('contact_category_name', $user));
                    $query = $this->db->get('generic_contact_category');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_contact_category', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'contact_category_name', $user ),
                        "message" => "User added succefully"
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "Mobile number Or email allready exists.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 9 :
                  $user = array(
                          'employee_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('category_id')
                              );
                    $this->db->where('employee_category_name', element('employee_category_name', $user));
                    $query = $this->db->get('generic_employee_category');
                    $count = $query->num_rows();
                    if( $count === 0 ) {
                      $this->db->insert('generic_employee_category', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'employee_category_name', $user ),
                        "message" => "User added succefully"
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
       }
      
    } catch(Exception $e) {
      $this->response(array("data" => array(
        "status" => 501,
        "message" => "Some error occured. Please contact admin.",
        "query" => $this->db->last_query()
      )));
    }
  }

  public function instru_post()
    {
      try {
       $this->load->helper('array');
       switch ($this->post('generic_id')) {
         case 1:
          $user = array('generic_instrument_name'=> $this->post('generic_name'));
                   $this->db->where('generic_category_id', element('generic_category_id', $user));
                  $query = $this->db->get_where('generic_instrument_master', array('generic_instrument_name' => $this->post('generic_name')));
                    $count = $query->num_rows();

                   if($count == 0) {
                    $this->db->where('generic_faculty_id', $this->post('row_id'));
                    $this->db->update('generic_faculty_master',$user);
                    $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_faculty_name', $user ),
                        "message" => "generic faculty name updated successfully"
                    )));
                  } else {
                    $this->response(array("data" => array(
                      "status" => 301,
                      "message" => "generic faculty name not updated successfully.",
                      "query" => $this->db->last_query()
                    )));
                  }
                  break;
          
          case 2:
                  $user = array(
                          'generic_faculty_name'=> $this->post('generic_name'));
                           $this->db->where('generic_category_id', element('generic_category_id', $user));
                           $query = $this->db->get_where('generic_faculty_master', array('generic_faculty_name' => $this->post('generic_name')));
                             $count = $query->num_rows();

                   if($count == 0) {
                    $this->db->where('generic_faculty_id', $this->post('row_id'));
                    $this->db->update('generic_faculty_master',$user);
                    $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_faculty_name', $user ),
                        "message" => "generic faculty name updated successfully."
                    )));
                  } else {
                    $this->response(array("data" => array(
                      "status" => 301,
                      "message" => "generic faculty name not updated successfully.",
                      "query" => $this->db->last_query()
                    )));
                  }
                  break;

          case 3 :
                  $user = array('generic_exam_type_name'=> $this->post('generic_name'));
                  $this->db->where('generic_category_id', element('generic_category_id', $user));
                  $query = $this->db->get_where('generic_exam_type_master', array('generic_exam_type_name' => $this->post('generic_name')));
                  $count = $query->num_rows();

                  if($count == 0) {
                    $this->db->where('generic_exam_type_id', $this->post('row_id'));
                    $this->db->update('generic_exam_type_master',$user);
                    $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_exam_type_name', $user ),
                        "message" => "generic exam type name updated successfully."
                    )));
                  } else {
                    $this->response(array("data" => array(
                      "status" => 301,
                      "message" => "generic exam type name not updated successfully.",
                      "query" => $this->db->last_query()
                    )));
                  }
                  break;

           case 4 :
                  $user = array(
                          'generic_group_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('generic_id'),
                          'generic_group_id'=> $this->post('row_id')
                              );
                    $this->db->where('generic_group_id', element('generic_group_id', $user));
                    $this->db->where('generic_category_id', element('generic_category_id', $user));
                    $query = $query = $this->db->get_where('generic_group_master', array('generic_exam_type_name' => $this->post('generic_name')));
                    $count = $query->num_rows();
                    if( $count !== 0 ) {
                      $this->db->update('generic_group_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_group_name', $user ),
                        "message" => "generic group name updated successfully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "generic group name not updated successfully.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 5 :
                  $user = array(
                          'generic_method_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('generic_id'),
                          'generic_method_id'=> $this->post('row_id')
                              );
                    $this->db->where('generic_method_id', element('generic_method_id', $user));
                    $this->db->where('generic_category_id', element('generic_category_id', $user));
                    $query = $this->db->get('generic_method_master');
                    $count = $query->num_rows();
                    if( $count !== 0 ) {
                      $this->db->pdate('generic_method_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_method_name', $user ),
                        "message" => "generic method name updated successfully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "generic method name not updated successfully..",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 6 :
                  $user = array(
                          'generic_sample_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('generic_id'),
                          'generic_sample_id'=> $this->post('row_id')
                              );
                    $this->db->where('generic_sample_id', element('generic_sample_id', $user));
                    $this->db->where('generic_category_id', element('generic_category_id', $user));
                    $query = $this->db->get('generic_sample_master');
                    $count = $query->num_rows();
                    if( $count !== 0 ) {
                      $this->db->update('generic_sample_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_sample_name', $user ),
                        "message" => "generic sample name updated successfully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "generic sample name not updated successfully.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 7 :
                  $user = array(
                          'generic_staff_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('generic_id'),
                          'generic_staff_category_id'=> $this->post('row_id')
                              );
                    $this->db->where('generic_staff_category_id', element('generic_staff_category_id', $user));
                    $this->db->where('generic_category_id', element('generic_category_id', $user));
                    $query = $this->db->get('generic_staff_category_master');
                    $count = $query->num_rows();
                    if( $count !== 0 ) {
                      $this->db->update('generic_staff_category_master', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'generic_staff_category_name', $user ),
                        "message" => "generic staff category name updated successfully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "generic staff category name not updated successfully.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 8 :
                  $user = array(
                          'contact_category_name'=> $this->post('generic_name'),
                          'generic_category_id'=> $this->post('generic_id'),
                          'contact_category_id'=> $this->post('row_id')
                              );
                    $this->db->where('contact_category_id', element('contact_category_id', $user));
                    $this->db->where('generic_category_id', element('generic_category_id', $user));
                    $query = $this->db->get('generic_contact_category');
                    $count = $query->num_rows();
                    if( $count !== 0 ) {
                      $this->db->update('generic_contact_category', $user);
                      $this->response(array("data" => array(
                        "status" => 201,
                        "id" => element( 'contact_category_name', $user ),
                        "message" => "contact category name updated successfully."
                      )));
                    } else {
                      $this->response(array("data" => array(
                        "status" => 301,
                        "message" => "contact category name not updated successfully.",
                        "query" => $this->db->last_query()
                      )));
                    }
           break;

           case 9 :
                  $user = array(
                      'employee_category_name'=> $this->post('generic_name'),
                      'generic_category_id'=> $this->post('generic_id'),
                      'employee_category_id'=> $this->post('row_id')
                    );
                  $this->db->where('employee_category_id', element('employee_category_id', $user));
                  $this->db->where('generic_category_id', element('generic_category_id', $user));
                  $query = $this->db->get('generic_employee_category');
                  $count = $query->num_rows();
                  if( $count !== 0 ) {
                    $this->db->update('generic_employee_category', $user);
                    $this->response(array("data" => array(
                      "status" => 201,
                      "id" => element( 'employee_category_name', $user ),
                      "message" => "employee category name updated successfully."
                    )));
                  } else {
                    $this->response(array("data" => array(
                      "status" => 301,
                      "message" => "employee category name not updated successfully.",
                      "query" => $this->db->last_query()
                    )));
                  }
                  break;
            default:
                    $this->response(array("data" => "Invalid input"));
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