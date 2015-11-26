<?php
class Common_model extends CI_Model
{
	function __construct()
	{
	    parent:: __construct();
	}
	function insertData($table,$data)
	{
		$this->db->insert($table, $data); 
	}
	function insertDataWithReturn($table,$data)
	{
		$this->db->insert($table, $data); 
		return $this->db->insert_id();
	}
	
	function updateData($table,$data,$where_arr)
	{
		 $this->db->update($table, $data, $where_arr);
	}
	
	function getTableAllData($tblName,$optColumnName='',$optColumnVal='')
	{
	   
		$this->db->select();
		$this->db->from($tblName);
		if($optColumnName != '' && $optColumnName != '' )
		{
				$this->db->where($optColumnName,$optColumnVal);
		}

		$query = $this->db->get();
		return $query->result();
	}
	
	
	function getTableRowData($tblName,$columnName='',$columnVal='')
	{
	   
		$this->db->select();
		$this->db->from($tblName);
		if($columnName != '' && $columnVal != '' )
		{
				$this->db->where($columnName,$columnVal);
		}

		$query = $this->db->get();
		return $query->row();
	}
	
	
	
	
	function getTestTypeDetails($id)
	{
	   $sql="select tm.`test_id`, tm.`test_name`, tm.`test_heading`, tm.`test_short_name`, tm.`test_amount`, tm.`test_remark`
,fm.`flag_id`,fm.`flag_name`,fm.`percent`, fm.`amount`,gmm.`generic_method_id`, gmm.`generic_method_name`, gsm.`generic_sample_id`, gsm.`generic_sample_name`,gim.`generic_instrument_id`,gim.`generic_instrument_name`
 from test_master as tm left join flag_master as fm on(tm.`flag_id`=fm.`flag_id`)  
left join generic_method_master as gmm  on(tm.`method_id`=gmm.`generic_method_id`)  
left join generic_sample_master as gsm on(tm.`sample_id` = gsm.`generic_sample_id`)  
left join generic_instrument_master as gim on(tm.`instrument_id` = gim.`generic_instrument_id`)
group by tm.`test_id`";
	
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
	
	
	
	function searchPatient($searchString)
	{
	   
		$this->db->select();
		$this->db->from('patient_master');
		$this->db->like('patient_name', $searchString);
$this->db->or_like('patient_mobile',$searchString);
		$query = $this->db->get();
		return $query->result();
	}
	
	
}
?>