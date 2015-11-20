<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require APPPATH . '/controllers/CosRestController.php';
	class Common extends CosRestController
	{


		public function __construct() {
	        parent::__construct();
	        $this->load->database();
	        $this->load->model("common_model");
	        echo "Pravin1"; exit();
		}

	    public function getTestType_get() {
	    	echo "Pravin"; exit();
			$tblName='test_type';
			$result=array();
			$result=$this->common_model->getTableAllData($tblName,$optColumnName='',$optColumnVal='');
			if(!empty($result))
			{
				$response=array("status" => "success","messege" => "ok","list" => $result);
			}
			else
			{
				$response=array("status" => "success","messege" => "ok","list" => $result);
			} 
			$this->response($response);
		}
	}
?>