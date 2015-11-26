<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/controllers/CosRestController.php';
class Common extends CosRestController
{


 public function __construct() {
        parent::__construct();
          $this->load->database();
        $this->load->model('common_model');
   }

    
	
	
	
	 public function getTestType_get() {

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
	
	
	
    public function getTestTypeDetails_get() { 

    $test_type_ID =$this->get('test_type_ID');

	$tblName='test_type';
	$columnName='test_type_ID';
	$columnVal=$test_type_ID;
	$resultRow=$this->common_model->getTableRowData($tblName,$columnName,$columnVal);
	if(!empty($resultRow))
	{
	
		$listArr=array();
		$testTypeDetailsArr=array();
		$row['test_type']= trim($resultRow->test_type);
		
		$resultDet= $this->common_model->getTestTypeDetails($test_type_ID);
		foreach($resultDet as $rowDet)
		{
		 $testTypeDetailsArr[]= $rowDet;
		}
		
		
		$row['testTypeDetails']= $testTypeDetailsArr;
		$listArr=$row;
	
	$response=array("status" => "success","messege" => "ok","list" => $listArr);
	}
	else
	{
$response=array("status" => "success","messege" => "ok","list" => $result);
	} 
	    $this->response($response);
	}
	
	public function doDelete_post() { 

    $action = trim($this->post('action'));
	$id = trim($this->post('id'));

	if($action !='' && $id > 0)
	{
		if($action =='generic_instrument')
		{
		$dataArr=array("is_delete" => "1");
		$whereArr=array("generic_instrument_id" => $id);
	    $tblName='generic_instrument_master';
		}
		$this->common_model->updateData($tblName,$dataArr,$whereArr);
		
	
	$response=array("status" => "success","messege" => "ok");
	}
	else
	{
$response=array("status" => "error","messege" => "Insufficiant Parameter");
	} 
	    $this->response($response);
	}
	
	
	public function searchPatient_get() {

	 $searchString =$this->get('searchString');
	$result=array();
	$result=$this->common_model->searchPatient($searchString);
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
	
	public function getPatientById_get() {

	 $patient_id =$this->get('patient_id');
$tblName='patient_master';
	$columnName='patient_id';
	$columnVal=$patient_id;
	$resultRow=$this->common_model->getTableRowData($tblName,$columnName,$columnVal);
	
	$listArr=array();
	if(!empty($resultRow))
	{
	
		
		$listArr=$resultRow;
	
	$response=array("status" => "success","messege" => "ok","list" => $listArr);
	}
	else
	{
$response=array("status" => "error","messege" => "No record Founds");
	} 
	    $this->response($response);
	}
	
	
	public function updateTest_post() { 

		
    $test_id = trim($this->post('test_id'));
	$test_name = trim($this->post('test_name'));
	$test_heading = trim($this->post('test_heading'));
		$test_short_name = trim($this->post('test_short_name'));
			$test_amount = trim($this->post('test_amount'));
				$test_remark = trim($this->post('test_remark'));
					$flag_id = trim($this->post('flag_id'));
						$generic_method_id = trim($this->post('generic_method_id'));
							$generic_sample_id = trim($this->post('generic_sample_id'));
								$generic_instrument_id = trim($this->post('generic_instrument_id'));
	

	if($test_id > 0)
	{
		
		
		$dataArr=array(
	"test_name" =>$test_name, 
	"test_heading" =>$test_heading, 
	"test_short_name" =>$test_short_name, 
	"test_amount" =>$test_amount, 
	"test_remark" =>$test_remark, 
	"flag_id" =>$flag_id, 
	"method_id" =>$generic_method_id, 
	"sample_id" =>$generic_sample_id, 
	"instrument_id" =>$generic_instrument_id

	);
		$whereArr=array("test_id" => $test_id);
	    $tblName='test_master';
		
		$this->common_model->updateData($tblName,$dataArr,$whereArr);
		
	
	$response=array("status" => "success","messege" => "ok");
	}
	else
	{
$response=array("status" => "error","messege" => "Insufficiant Parameter");
	} 
	    $this->response($response);
	}
	
	
  
}
?>