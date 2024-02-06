<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Bookingdeparture_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();

	}


	function getAllDepartureBooking($table_name)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
        $query = $this->db->get();
    	return $query->result_array();		
	}


	function getDepartureBookingByWhere($table_name,$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}

	function updateDepartureFlag($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
		return true;
	}


	function deleteDepartureBookingByWhere($table_name,$where)
	{	
		$this->db->where($where);
        $this->db->delete($table_name);
    	return true;
	}
}

?>