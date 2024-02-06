<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Page_model extends CI_Model

{

	public function __construct()

	{

		parent:: __construct();

		

	}

	



	function getAllPage($table_name='')

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

        $query = $this->db->get();

    	return $query->result_array();		

	}

	function getPageByWhere($table_name='',$where)

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

		$this->db->where($where);

        $query = $this->db->get();

		

		//echo $this->db->last_query();

		//die();

    	return $query->result_array();		

	}

	function updatePage($table_name='',$set,$where)

	{

		

		$this->db->where($where);

		$this->db->update($table_name,$set);

		

		

	}

	

	

}

?>