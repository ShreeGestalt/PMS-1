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

	   $sql="SELECT m.module_id,m.module_name,uma.is_visible FROM  user_module_access as uma inner join module as m on (m.module_id=uma.module) WHERE uma.user_id='".$id."'";

	  
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	

	function getUserAssignedModuleAssigned($id)
	{
	    $sql="SELECT m.module_id,m.module_name,uta.is_add,uta.is_delete,uta.is_update, uta.is_received,uta.is_collect,uta.is_reject,uta.is_authorize,uta.is_visible FROM  user_track_access as uta inner join module as m on (m.module_id=uta.model_id) WHERE uta.user_id='".$id."'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	
	
	
}
?>