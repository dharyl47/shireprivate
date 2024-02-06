<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingarrival extends CI_Controller {

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
		$this->load->model('admin/bookingarrival_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function bookingarrival_list()
	{
		$group['bookingarrival_details'] = $this->bookingarrival_model->getAllArrivalBooking("booking_arrival"); 
		//print_r($group);
		//die();
		$this->load->view('admin/booking/arrival/list',$group);
		
	}
	
	
	public function details($id)
	{
		$where=array('id'=>$id);
		$group['bookingarrival_details'] = $this->bookingarrival_model->getArrivalBookingByWhere("booking_arrival",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/booking/arrival/edit',$group);
		
	}
	
	
	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->bookingarrival_model->deleteArrivalBookingByWhere("booking_arrival",$where);
		redirect('admin/booking/arrival');
	}
	
	public function updateArrivalFlag($id)
	{
		$where=array('id'=>$id);
		$set=array('new_flag'=>1);
		$this->bookingarrival_model->updateArrivalFlag("booking_arrival",$set,$where);
		return "success";
	}
	
	
	
}
