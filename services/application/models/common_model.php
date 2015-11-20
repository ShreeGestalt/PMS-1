<?php
class User_model extends CI_Model
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
	
	
	
	function chechUserExist($user_login_name,$password)
	{
		$this->db->select();
		$this->db->from('user_login');
		$this->db->where('user_login_name',$user_login_name);
		$this->db->where('password',$password);
		$query = $this->db->get();
		$num = $query->num_rows();
		if($num > 0)
		{
		  $row = $query->row();
		  $user_id=$row->user_id;
		}
		else
		{
		  $user_id=0;
		
		}
		return $user_id;
	}
	
	function getUserInfo($id)
	{
	
		$this->db->select();
		$this->db->from('user');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		$num = $query->num_rows();
		$row='';
		if($num > 0)
		{
		  $row = $query->row();
		 }
		return $row; 
	}
	
	function getUserAssignedModule($id)
	{
	   $sql="SELECT m.module_id,m.module_name,uta.is_add,uta.is_delete,uta.is_update, uta.is_received,uta.is_collect,uta.is_reject,uta.is_authorize FROM  user_track_access as uta inner join module as m on (m.module_id=uta.model_id) WHERE uta.user_id=1 and uta.is_visible='Y'";
		$this->db->select('ID,cat_name as name');
		$this->db->from('tbmstcategory');
		$this->db->where('isactive','Y');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
}
?>