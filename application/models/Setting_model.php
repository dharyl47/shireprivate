<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");

class Setting_model extends CI_Model

{

	public function __construct()

	{

		parent:: __construct();

	}



	function getSettingValModel($table_name='',$field)

	{	

		$this->db->select($field);

        $this->db->from($table_name);

        $query = $this->db->get();

    	$result=$query->result_array();	

		return 	$result[0][$field];

	}
	
	function getSettingVal($table_name='',$field)

	{	

		$this->db->select($field);

        $this->db->from($table_name);

        $query = $this->db->get();

    	$result=$query->result_array();	

		return 	$result[0][$field];

	}

	function getSettingValByFleldName($field)

	{	

		$table_name='settings';

		$this->db->select($field);

        $this->db->from($table_name);

        $query = $this->db->get();

    	$result=$query->result_array();	

		return 	$result[0][$field];

	}

	

	function cartCount($table_name='',$where)

	{	

		$this->db->select('count(id) as tot_count');

        $this->db->from($table_name);

		$this->db->where($where);

        $query = $this->db->get();

    	$result=$query->result_array();	

		return $result[0]['tot_count'];

	}

	

	function cartTotalAmount($table_name='',$where)

	{	

		$this->db->select('sum(total_price) as tot_amount');

        $this->db->from($table_name);

		$this->db->where($where);

        $query = $this->db->get();

    	$result=$query->result_array();	

		return $result[0]['tot_amount'];

	}

	

	

}



?>