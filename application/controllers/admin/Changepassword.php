<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

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
		$this->load->model('admin/password_model');
		$this->load->library('upload');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function index()
	{
		$this->load->view('admin/change_password');
	}
	
	public function update()
	{
		if(isset($_POST['submit']))
		{
			$old_password=md5($_POST['old_password']);
			$new_password=md5($_POST['new_password']);
			
			$where=array('password'=>$old_password);
			
			$result=$this->password_model->checkOldPassword("admin",$where);	
			if(!empty($result))
			{
				$set=array('password'=>$new_password);
				$result=$this->password_model->updatePassword("admin",$set);
				redirect('admin/change-password/success');
			}
			else
			{
				redirect('admin/change-password/error');
			}
			
			
			
		}
	}
	
	public function success()
	{
		$group="";
		$group['success']="success";
		$this->load->view('admin/change_password',$group);
	}
	
	public function error()
	{
		$group['error']="error";
		$this->load->view('admin/change_password',$group);
	}
	
	
	
}
