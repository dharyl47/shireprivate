<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Contact_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	
	function insertQuickQuote($table_name,$set)
	{
		$str = $this->db->insert_string($table_name, $set);        
		$query = $this->db->query($str); 
		return true;
	}
	
	function insertContactUs($table_name,$set)
	{
		$str = $this->db->insert_string($table_name, $set);        
		$query = $this->db->query($str); 
		return true;
	}
	
	

}

?>