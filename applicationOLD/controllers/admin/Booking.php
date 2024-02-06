<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
		$this->load->library('form_validation');
		$this->load->model('admin/bookingdeparture_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function bookingdeparture_list()
	{
		$group['bookingdeparture_details'] = $this->bookingdeparture_model->getAllDepartureBooking("booking_departure"); 
		//print_r($group);
		//die();
		$this->load->view('admin/booking/departure/list',$group);
		
	}
	
	
	public function details($id)
	{
		$where=array('id'=>$id);
		$group['bookingdeparture_details'] = $this->bookingdeparture_model->getDepartureBookingByWhere("booking_departure",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/booking/departure/edit',$group);
		
	}
	
	
	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->bookingdeparture_model->deleteDepartureBookingByWhere("booking_departure",$where);
		redirect('admin/booking/departure');
	}
	
	public function updateDepartureFlag($id)
	{
		$where=array('id'=>$id);
		$set=array('new_flag'=>1);
		$this->bookingdeparture_model->updateDepartureFlag("booking_departure",$set,$where);
		return "success";
	}
	
	
	
}
