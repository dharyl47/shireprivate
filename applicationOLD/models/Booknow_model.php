<?php  
if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Booknow_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		
	}
	

	function insertValue($table_name,$set)
	{
		$str = $this->db->insert_string($table_name, $set);        
		$query = $this->db->query($str); 
		return "success";
	}

	
	
	
	
	
	
}
?>