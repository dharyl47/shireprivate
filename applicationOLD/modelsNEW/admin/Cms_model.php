<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Cms_model extends CI_Model

{

	public function __construct()

	{

		parent:: __construct();

		

	}

	



	function getAllCms($table_name='')

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

        $query = $this->db->get();

    	return $query->result_array();		

	}

	function getCmsByWhere($table_name='',$where)
	{	
		$this->db->select('*');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}

	
	function insertCms($table_name='',$set)
	{
		$str = $this->db->insert_string($table_name, $set);        
		$query = $this->db->query($str); 
	}


	function deleteCms($table_name='',$where)
	{
		$this->db->where($where);
        $this->db->delete($table_name);
    	return true;
	}











	
	function getModelNameById($table_name='',$where)
	{	
		$this->db->select('model_name');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}
	
	function getProblemById($table_name='',$where)
	{	
		$this->db->select('problem_name');
        $this->db->from($table_name);
		$this->db->where($where);
        $query = $this->db->get();
		//echo $this->db->last_query();
		//die();
    	return $query->result_array();		
	}


	

}

?>