<?php  
if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Location_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	
	function addNewTesttimonial($table_name,$set)
	{
		$str = $this->db->insert_string($table_name, $set);        
		$query = $this->db->query($str); 
	}


	function getAllLocation($table_name)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
        $query = $this->db->get();
    	return $query->result();		
	}

	function getLocationByWhere($table_name,$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result();		
	}

	function updateLocation($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
	}
	
	
	function getLocationImageById($table_name,$where)
	{	
		$this->db->select('image');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
    	$result=$query->result();
		return stripslashes($result[0]->image);	
	}
	
	
	function deleteLocationById($table_name,$where)
	{	
		$this->db->where($where);
        $this->db->delete($table_name);
    	return true;
	}
	
	function updateHomeFlag($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
		return true;
	}
	
	function getAllLocationBySortingFlag($table_name)
	{
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->order_by("prd_order","asc");
        $query = $this->db->get();
    	return $query->result();	
	}
	
	function updateLocationSortingFlag($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
		return true;
	}
	
	

}

?>