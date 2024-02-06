<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Settings_model extends CI_Model

{

	public function __construct()

	{

		parent:: __construct();

		

	}

	



	function getAllSettings($table_name='')

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

        $query = $this->db->get();

    	return $query->result_array();		

	}

	

	

	function updateSettings($table_name='',$set,$where)

	{

		

		$this->db->where($where);

		$this->db->update($table_name,$set);

		

		

	}

	

	

	

	

	

}

?>