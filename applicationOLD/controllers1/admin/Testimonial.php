<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	/**
	 * Index testimonial for this controller.
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
		$this->load->model('admin/testimonial_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function testimonial_list()
	{
		$group['testimonial_details'] = $this->testimonial_model->getAllTestimonial("testimonial"); 
		//print_r($group);
		//die();
		$this->load->view('admin/testimonial/list',$group);
		
	}
	public function edit($id)
	{
		$where=array('id'=>$id);
		$group['testimonial_details'] = $this->testimonial_model->getTestimonialByWhere("testimonial",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/testimonial/edit',$group);
		
	}
	
	public function add()
	{
		$this->load->view('admin/testimonial/add');
	}
	
	public function addTestimonial()
	{
		if(isset($_POST['submit']))
		{
			$client_name=addslashes($_POST['client_name']); 
			$comment=addslashes($_POST['comment']); 
			$status=addslashes($_POST['status']);
			
			
			$set=array(
						'client_name'=>$client_name,
						'comment'=>$comment,
						'status'=>$status,
						'home_flag'=>0
				);
				
			$this->testimonial_model->addNewTesttimonial("testimonial",$set ,$where);			
			redirect(base_url().'admin/testimonial/list');	
				
		}
	}
	
	public function updateTestimonial()
	{
		if(isset($_POST['submit']))
		{
			$client_name=addslashes($_POST['client_name']); 
			$comment=addslashes($_POST['comment']); 
			$status=addslashes($_POST['status']);
			$id=$_POST['hid_id'];
		
		$set=array(
					'client_name'=>$client_name,
					'comment'=>$comment,
					'status'=>$status
				);
		
		$where=array('id'=>$id);
		
		$this->testimonial_model->updateTestimonial("testimonial",$set ,$where);			
		redirect(base_url().'admin/testimonial/list');
			
			
	}
	
	
		
	}
	
	
	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->testimonial_model->deleteTestimonialById("testimonial",$where);
		redirect(base_url().'admin/testimonial/list');
	}
	
	public function homeChecked($id,$flag)
	{
		$where=array('id'=>$id);
		$set=array(
					'home_flag'=>$flag
				);
				
		$this->testimonial_model->updateHomeFlag("testimonial",$set ,$where);
		echo $id;		
	}
	
	public function setting()
	{
		$group['testimonial_details'] = $this->testimonial_model->getAllTestimonialBySortingFlag("testimonial"); 
		//print_r($group);
		//die();
		$this->load->view('admin/testimonial/setting',$group);
		
	}
	
	public function updateTestimonialFlag()
	{
		$updateRecordsArray = $_POST['recordsArray'];
		
		$listingCounter = 1;
		foreach ($updateRecordsArray as $recordIDValue) {
			
		$set=array(
		'prd_order'=>$listingCounter
		);
		$where=array('id'=>$recordIDValue);
	
		$this->testimonial_model->updateTestimonialSortingFlag("testimonial",$set ,$where);
		$listingCounter = $listingCounter + 1;
		}
		
		echo "<p>Update Successfully</p>";
	}
	
	
}
