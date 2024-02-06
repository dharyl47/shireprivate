<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

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
		$this->load->model('admin/cms_model');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function cms_list()
	{
		$group['cms_details'] = $this->cms_model->getAllCms("device_model_problem"); 
		//print_r($group);
		//die();
		$this->load->view('admin/cms/list',$group);
		
	}
	public function edit($model_id,$problem_id)
	{
		$group['model_id']=$model_id;
		$group['problem_id']=$problem_id;
		
		$where=array('model_id'=>$model_id,'problem_id'=>$problem_id);
		$group['cms_details'] = $this->cms_model->getCmsByWhere("cms",$where); 
		//print_r($group);
		//die();
		$this->load->view('admin/cms/edit',$group);
		
	}
	public function update_cms()
	{
		if(isset($_POST['submit']))
		{
			$short_content=addslashes($this->input->post('short_content'));
			$about_problem=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('about_problem')));
			$bottom_content=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('bottom_content')));
			$seo_title=addslashes($this->input->post('seo_title')); 
			$seo_meta=addslashes($this->input->post('seo_meta')); 
			$seo_keyword=addslashes($this->input->post('seo_keyword'));
			$extra_content=addslashes($this->input->post('extra_content'));
			
			
			$model_id=addslashes($this->input->post('hid_model_id'));
			$problem_id=$this->input->post('hid_problem_id');
			
			//For Image Upload
			
		    	
		// delete 
			$where=array('model_id'=>$model_id,'problem_id'=>$problem_id);
			$this->cms_model->deleteCms("cms",$where);
		// end delete
		
		$set=array(
			'extra_content'=>$extra_content,
			'short_content'=>$short_content,
			'about_problem'=>$about_problem,
			'bottom_content'=>$bottom_content,
			'seo_title'=>$seo_title,
			'seo_meta'=>$seo_meta,
			'seo_keyword'=>$seo_keyword,
			'model_id'=>$model_id,
			'problem_id'=>$problem_id
		);
		
		$this->cms_model->insertCms("cms",$set);			
		redirect(base_url().'admin/cms/list');
			
			
	}
}

public function getModelNameById($id)
{
	$where=array('id'=>$id);
	$result = $this->cms_model->getModelNameById("device_model",$where); 
	return $result[0]['model_name'];
}

public function getProblemById($id)
{
	$where=array('id'=>$id);
	$result = $this->cms_model->getProblemById("problem",$where); 
	return $result[0]['problem_name'];
}


	
	
}
