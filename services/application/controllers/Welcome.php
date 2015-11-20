<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once(APPPATH.'libraries/Format.php');
	require_once(APPPATH.'libraries/REST_Controller.php');
class Welcome extends REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function getCourse()
	{
		$this->db->select('course_id, course_name');
		$query = $this->db->get('course');
		
		$this->load->model(array('user_model'));
		$data = $this->user_model->getAll();					
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
