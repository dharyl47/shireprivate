<?php  

if(!defined('BASEPATH')) exit("No Direct Acess Allowed ");
class Slider_model extends CI_Model
{
	public function __construct()
	{

		parent:: __construct();

		

	}

	



	function getAllSlider($table_name='')

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

        $query = $this->db->get();

    	return $query->result_array();		

	}

	

	function addSlider($table_name='',$set)

	{

		$str = $this->db->insert_string($table_name, $set);        

		$query = $this->db->query($str); 

	}

	

	function getSliderByWhere($table_name='',$where)

	{	

	  

		$this->db->select('*');

        $this->db->from($table_name);

		$this->db->where($where);

        $query = $this->db->get();

		

		//echo $this->db->last_query();

		//die();

    	return $query->result_array();		

	}

	function updateSlider($table_name='',$set,$where)

	{

		

		$this->db->where($where);

		$this->db->update($table_name,$set);

		

		

	}

	

	function getAllSliderBySortingFlag($table_name='')

	{	

	  

		$this->db->select('id,image');

        $this->db->from($table_name);

		$this->db->order_by("prd_order","asc");

        $query = $this->db->get();

    	return $query->result_array();		

	}

	

	function updateSliderSortingFlag($table_name='',$set,$where)

	{

		

		$this->db->where($where);

		$this->db->update($table_name,$set);

		

		

	}

	

	function getSliderImageByWhere($table_name='',$where)

	{	

	  

		$this->db->select('image,sub_image');

        $this->db->from($table_name);

		$this->db->where($where);

        $query = $this->db->get();

		

		//echo $this->db->last_query();

		//die();

    	return $query->result_array();

	}

	

	function deleteSliderImageByWhere($table_name='',$where)

	{	

	  

		$this->db->where($where);

        $this->db->delete($table_name);

    	return true;

	}

	

	

	

}

?>