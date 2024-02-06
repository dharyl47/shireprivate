<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('home_model');
		$this->load->model('slider_model');
		$this->load->model('common_model');
    }
	 
	public function index()
	{
		$this->load->view('home');
	}
	
	// For Page Details
	public function getPageDetails()
	{
		$where=array('status'=>'Active',
					 'id'=>'1'
					 );
		$pageDetails = $this->page_model->getPageDetails("page",$where); 
		//print_r($group);
		//die();
		return $pageDetails;
	}
	
	// For Setting Values
	public function getSettingVal($field)
	{
		echo "sds";
		$result=$this->setting_model->getSettingValModel("settings",$field);
		return $result;
	}
	
	
	// For Slider
	public function getAllActiveSlider()
	{
		$where=array('status'=>'Active');
		$result=$this->slider_model->getAllActiveSlider("slider",$where);
		return $result;
		
	}
	
	// For Video
	public function getVideoDetails()
	{
		$where=array('id'=>'1');
		$videoDetails = $this->home_model->getVideoDetails("home_page_video",$where); 
		return $videoDetails;
	}
	
	// For Testimonial
	public function getTestimonialForHome()
	{
		$where=array('status'=>'Active','home_flag'=>1 );
		$result=$this->home_model->getTestimonialForHome("testimonial",$where);
		return $result;
		
	}
	

	
}
