<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Password_model extends CI_Model

{

	public function __construct()

	{

		parent:: __construct();

		

	}


	function checkOldPassword($table_name='',$where)
	{	
		$this->db->select('id');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}

	function updatePassword($table_name='',$set)
	{
		//$this->db->where($where);
		$this->db->update($table_name,$set);
		return "success";

	}

	

	

}

?>