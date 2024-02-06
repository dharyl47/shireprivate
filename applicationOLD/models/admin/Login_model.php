<?php  
if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Login_model extends CI_Model
{

	public function __construct()
	{
		parent:: __construct();
	}


	function checkLogin($table_name,$where)
	{	
		$this->db->select('id');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
    	$result=$query->result_array();
		return $result;	

	}
}

?>