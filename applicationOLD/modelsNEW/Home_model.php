<?php  
if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Home_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		
	}
	

	
	function getVideoDetails($table_name='',$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
		//$this->db->order_by("prd_order","asc");
        $query = $this->db->get();
    	return $query->result_array();		
	}
	
	function getServicesForHome($table_name='',$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
		$this->db->order_by("prd_order","asc");
        $query = $this->db->get();
    	return $query->result_array();		
	}
	
	function getTestimonialForHome($table_name='',$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
		$this->db->order_by("prd_order","asc");
        $query = $this->db->get();
    	return $query->result_array();		
	}
	
	
	
	
}
?>