<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Slider_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}


	function getAllActiveSlider($table_name='',$where)
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