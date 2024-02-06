<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		$this->load->model('admin/settings_model');
		$this->load->library('upload');
		
		if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
	 
	public function index()
	{
		
		$group['settings_details'] = $this->settings_model->getAllSettings("settings");
		$group['msg'] ='';
		//print_r($group);
		//die();
		$this->load->view('admin/settings',$group);
		
	}
	
	public function success()
	{
		$group['settings_details'] = $this->settings_model->getAllSettings("settings");
		$group['msg'] = "success"; 
		//print_r($group);
		//die();
		$this->load->view('admin/settings',$group);
	}
	
	
	
	public function update_settings()
	{
		if(isset($_REQUEST['submit']))
		{
			$email=addslashes($this->input->post('email'));
			$contact_email=addslashes($this->input->post('contact_email'));
			$order_receive_email=addslashes($this->input->post('order_receive_email'));
			$order_phn_no=addslashes($this->input->post('order_phn_no'));
			$facebook=addslashes($this->input->post('facebook'));
			$twitter=addslashes($this->input->post('twitter'));
			$google_plus=addslashes($this->input->post('google_plus'));
			$google_analytics_code=addslashes($this->input->post('google_analytics_code'));
			$instagram=addslashes($this->input->post('instagram'));
			$phone_no=addslashes($this->input->post('phone_no'));
			$working_hours=addslashes($this->input->post('working_hours'));
			$our_address=addslashes($this->input->post('our_address'));
			$fax=addslashes($this->input->post('fax'));
			$linkedin=addslashes($this->input->post('linkedin'));
			$certified_technician=addslashes($this->input->post('certified_technician'));
			$warranty_parts=addslashes($this->input->post('warranty_parts'));
			
			$secret_key=addslashes($this->input->post('secret_key'));
			$publishable_key=addslashes($this->input->post('publishable_key'));
			 $holiday = $this->input->post('holiday') ? 1 : 0; // Assuming 'holiday' is a boolean field

			$id=1;

		
			$set=array(
				'email'=>$email,
				'contact_email'=>$contact_email,
				'order_receive_email'=>$order_receive_email,
				'order_phn_no'=>$order_phn_no,
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'google_plus'=>$google_plus,
				'instagram'=>$instagram,
				'linkedin'=>$linkedin,
				'google_analytics_code'=>$google_analytics_code,
				'working_hours'=>$working_hours,
				'our_address'=>$our_address,
				'certified_technician'=>$certified_technician,
				'warranty_parts'=>$warranty_parts,
				'fax'=>$fax,
				'secret_key'=>$secret_key,
				'publishable_key'=>$publishable_key,
				'phone_no'=>$phone_no,
 'holiday' => $holiday
			);
			
			$where=array('id'=>$id);
			
			$this->settings_model->updateSettings("settings",$set ,$where);
			
			redirect(base_url().'admin/settings/success');
			
			
	}
		else
		{
			
		}
	}
	
	
	
	
	
	
	
	
}
