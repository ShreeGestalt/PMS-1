<?php
class User_model extends CI_Model
{
	function __construct()
	{
	    parent:: __construct();
	}
	

	
	function getTodaysPatientTest($patient_id)
	{
	 
$sql="SELECT  pt.`patient_test_id`, tm.`test_id`, tm.`test_name`, tm.`test_heading`, tm.`test_short_name`
,pt.`is_collected`, pt.`test_status`, pt.`rejection_desc`, pt.`test_start_date`, pt.`test_end_date` 
,tdm. `test_exam_type`, tdm.`test_details`, tdm.`test_unit`, tdm.`test_display_order`, tdm.`test_min_ref`, tdm.`test_max_ref`, tdm.`patient_min_age`, tdm.`patient_max_age`
FROM `patient_test` as pt inner join `test_master` as tm on (pt.`test_id`=tm.`test_id`)  
inner join `test_detail_master` as tdm on (tdm.`test_id`=tm.`test_id`) 
WHERE pt.`patient_id`='".$patient_id."' order by pt.`test_start_date` asc
";
//echo $sql; //die;

		$query=$this->db->query($sql);
		return $query->result();
	}
	
	
	function getTodaysPatient()
	{
	 $sql="SELECT  pm.`patient_id`, pm.`patient_name`, pm.`patient_address`, pm.`patient_state`, pm.`patient_distric`, pm.`patient_city`, pm.`patient_dob`, pm.`patient_gender`, pm.`patient_phone`, pm.`patient_mobile`, pm.`patient_email`, pm.`patient_barcode`           
FROM `patient_test`as pt inner join `patient_master` as pm on(pt.`patient_id`=pm.`patient_id`)
 WHERE `test_start_date` > DATE_SUB(NOW(), INTERVAL 1 DAY) group by pm.`patient_id` ORDER BY `test_start_date` asc";

		$query=$this->db->query($sql);
		return $query->result();
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
		$this->db->where('user_name',$user_login_name);
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
	
	
	function getUserModuleAndTrackAccess($id)
	{
	 $sql="SELECT m.module_id,m.module_name,uma.is_visible,uta.is_add,uta.is_delete,uta.is_update, uta.is_received,uta.is_collect,uta.is_reject,uta.is_authorize FROM  user_module_access as uma inner join module as m on (m.module_id=uma.module) inner join user_track_access as uta on (uta.model_id=uma.module)   WHERE uma.user_id='".$id."'";

		$query=$this->db->query($sql);
		return $query->result();
	}
/*********start Not in Use***********/
	function getUserAssignedModuleAssigned($id)
	{
	    $sql="SELECT m.module_id,m.module_name,uta.is_add,uta.is_delete,uta.is_update, uta.is_received,uta.is_collect,uta.is_reject,uta.is_authorize,uta.is_visible FROM  user_track_access as uta inner join module as m on (m.module_id=uta.model_id) WHERE uta.user_id='".$id."'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	/*********end Not in Use***********/
	
	
}
?>