<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
		$this->load->model('admin/video_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function index()
	{
		$where=array('id'=>1);
		$group['video_details'] = $this->video_model->getVideoByWhere("home_page_video",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/video',$group);
		
	}
	
	
	
	
	
	
	
	public function update_video()
	{
		if(isset($_REQUEST['submit']))
		{
			$content=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('content')));
			$id=$this->input->post('hid_id');
			
			//For Image Upload
			
			if ($_FILES['video_file']['size'] != 0 && $_FILES['video_file']['name'] != "")
             {
				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/video/';
				$configUpload['allowed_types'] = 'mp4|3gp';
				$configUpload['encrypt_name']    = 'TRUE';
				$this->upload->initialize($configUpload);
				$this->upload->do_upload('video_file');
				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$filepath_image = 'upload/video/'.$upload_data['file_name'];	
				
				$videoName=$upload_data['file_name'];
				$videoPath=$this->config->item('file_upload_absolute_path').'upload/video/'.$videoName;
				
				if($this->input->post('hid_video')!='')  
				{
					unlink($this->config->item('file_upload_absolute_path').'upload/video/'.$this->input->post('hid_video'));
				}
				  
			 }
			 else
			 {
				 $videoName=$this->input->post('hid_video');
			 }

		
		$set=array(
		'content'=>$content,
		'video'=>$videoName
		);
		
		$where=array('id'=>$id);
		
		$this->video_model->updateVideo("home_page_video",$set ,$where);			
		redirect(base_url().'admin/video');
			
			
	}
		else
		{
			
		}
	}
	
	
	
	
	
	
}
