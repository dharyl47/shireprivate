<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Video_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}


	function getVideoByWhere($table_name,$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}
	
	function updateVideo($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
		
		return "success";
		
		//echo $this->db->last_query();
		//die();
	}
	
	

	

}

?>