<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
		$this->load->model('admin/page_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function page_list()
	{
		$group['page_details'] = $this->page_model->getAllPage("page"); 
		//print_r($group);
		//die();
		$this->load->view('admin/page/list',$group);
		
	}
	public function edit($id)
	{
		$where=array('id'=>$id);
		$group['page_details'] = $this->page_model->getPageByWhere("page",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/page/edit',$group);
		
	}
	public function update_page()
	{
		if(isset($_POST['submit']))
		{
			$page_name=addslashes($this->input->post('page_name'));
			$url_part=addslashes($this->input->post('url_part'));
			$content=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('content')));
			$status=addslashes($this->input->post('status'));
			$seo_title=addslashes($this->input->post('seo_title')); 
			$seo_meta=addslashes($this->input->post('seo_meta')); 
			$seo_keyword=addslashes($this->input->post('seo_keyword'));
			$id=$this->input->post('hid_id');
			
			//For Image Upload
			
			if ($_FILES['page_img']['size'] != 0 && $_FILES['page_img']['name'] != "")
             {
				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/page/';
				$configUpload['allowed_types'] = 'gif|jpg|png';
				$configUpload['encrypt_name']    = 'TRUE';
				$this->upload->initialize($configUpload);
				$this->upload->do_upload('page_img');
				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$filepath_image = 'upload/product_image/'.$upload_data['file_name'];	
				
				$imgName=$upload_data['file_name'];
				$imagePath=$this->config->item('file_upload_absolute_path').'upload/page/'.$imgName;
				
				$newImageName=time()."-".$imgName;
				/* Resize */
				$configSize3['image_library']   = 'gd2';
				$configSize3['source_image']    = $imagePath;
				$configSize3['create_thumb']    = false;
				$configSize3['maintain_ratio']  = false;
				$configSize3['width']           = 1400;
				$configSize3['height']          = 788;
				$configSize3['new_image']       = $newImageName;
				
				$this->image_lib->initialize($configSize3);
				$this->image_lib->resize();
				$this->image_lib->clear();	
				
				unlink($this->config->item('file_upload_absolute_path').'upload/page/'.$imgName);
				
				if($this->input->post('hid_img')!='')
				{
					unlink($this->config->item('file_upload_absolute_path').'upload/page/'.$this->input->post('hid_img'));
				}
				
				
			 }
			 else
			 {
				 $newImageName=$this->input->post('hid_img');
			 }

		
		$set=array(
			'name'=>$page_name,
			'url_part'=>$url_part,
			'content'=>$content,
			'status'=>$status,
			'seo_title'=>$seo_title,
			'seo_meta'=>$seo_meta,
			'seo_keyword'=>$seo_keyword,
			'image'=>$newImageName
		);
		
		$where=array('id'=>$id);
		
		$this->page_model->updatePage("page",$set ,$where);			
		redirect(base_url().'admin/page/list');
			
			
	}
		else
		{
			
		}
	}
	
	
}
