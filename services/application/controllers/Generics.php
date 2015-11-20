<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';

class Generics extends CosRestController
{
	public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('user_model');
   }
  public function index_get()
  {
<<<<<<< HEAD
    $this->load->database();
    $this->db->select('generic_id AS id, generic_NAme AS name');  //csId
    //$this->db->select('stateName AS stateName'); //csFirstName
    //$this->db->select('lName AS lastName'); //csLastName
    //$this->db->select('mNumber AS phone');  //csPhone
    //$this->db->select('email AS Email')
    //$this->db->select('csGender AS gender');
    //$this->db->select('csDistrict AS district');
    //$this->db->select('csAboutMe AS aboutMe');
     $this->db->distinct();
    $this->db->order_by("generic_NAme", "asc");
=======
    //$this->load->database();
    $this->db->select('generic_cate_id AS id, generic_cate AS name');  //csId
    $this->db->distinct();
    $this->db->order_by("generic_cate", "asc");
>>>>>>> 2e2a234176834898d95df7bd5398d5e09351f877
    $this->response(array("data" => $this->db->get('generic_category')->result()));  //cosUsers
  }

  public function generic_post()
  {
    
  }
}
?>
