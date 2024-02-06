<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
        parent::__construct();
		$this->load->model('setting_model');
		$this->load->model('page_model');
		$this->load->model('location_model');
	    $this->load->model('common_model');
    }
    
    public function index()
    {

		$where=array('status'=>'Active');
		$data['locationList']=$this->common_model->AllRecordWithWhere("locations",$where);
	//	print_r($data['locationList']->result()); exit;
        $this->load->view('location',$data);
    }
	
	public function locationDetails($url_part_str)
    {
		
		$url_part=str_replace('airport-shuttle-','',$url_part_str);
		$where=array('url_part'=>$url_part,'status'=>'Active');
		$data['locationRow']=$this->common_model->AllRecordWithWhere("locations",$where);
		//print_r($data['locationRow']->result()); exit;
        $this->load->view('location-details',$data);
    }
	
	
	
	public function suburbList($url_part)
	{
		$where=array('url_part'=>$url_part);
		$data['locationDetails']=$this->location_model->locationDetails('location',$where);
		$this->load->view('location',$data);
	}
	
	public function getAllSuburbList($location_id)
	{
		$where=array('location_id'=>$location_id,'status'=>'Active');
		$result=$this->location_model->getAllSuburbList('suburb_list',$where);
		return $result;
	}
	
	
public function getLocationPage()
	{ 
		$this->load->view('location-details');
	} 
	
		
	
	// For Setting Values
	public function getSettingVal($field)
	{
		$result=$this->setting_model->getSettingValModel("settings",$field);
		return $result;
	}
	
	
	
	
}
