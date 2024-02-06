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
        $this->load->library('form_validation');
		$this->load->model('admin/login_model');
    }
	 
	public function index()
	{
		if ($this->session->userdata('is_admin_login')) 
		{
            redirect('admin/dashboard');
        } 
		else 
		{
			$this->load->view('admin/home');
		}
	}
	
	public function login()
	{
		if ($this->session->userdata('is_admin_login')) {
            redirect('admin/home/dashboard');
        } 
		else 
		{
			if(isset($_POST['submit']))
			{
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				
				$enc_pass  = md5($password);
				$where=array('username'=>$username,'password'=>$enc_pass);
				$result = $this->login_model->checkLogin('admin',$where);
				if(!empty($result))
				{
					$this->session->set_userdata('is_admin_login',"Login");
					redirect('admin/dashboard');
				}
				else
				{
					$message = 'Username or Password incorrect';
					$this->session->set_flashdata('message', $message); 
					redirect('admin/home');
				}
			
			}
			else
			{
				redirect('admin/home');
			}
		}
		
	}
}
