<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booknow extends CI_Controller {

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
		$this->load->model('booknow_model');
		$this->load->model('slider_model');
		$this->load->library('email');
		$this->load->library('upload');
		$this->load->library('image_lib');
		$this->load->model('common_model');
    }
	 
	public function index()
	{
	    $where=array('status'=>1);
		$data['locationList']=$this->common_model->AllRecordWithWhere("locations",$where);
		$this->load->view('book-now',$data);
	}
	
	// For Page Details
	public function getPageDetails()
	{
		$where=array('status'=>'Active',
					 'id'=>'5'
					 );
		$pageDetails = $this->page_model->getPageDetails("page",$where); 
		//print_r($group);
		//die();
		return $pageDetails;
	}
	
	// For Setting Values
	public function getSettingVal($field)
	{
		$result=$this->setting_model->getSettingValModel("settings",$field);
		return $result;
	}
	
	
	// For Departure
	public function departure()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$recaptchaResponse = trim($this->input->post('recaptcha_response'));
       
      //$userIp=$this->request->ip_address();
         
      $secret=getSettingVal('gc_secretkey');
       
      $credential = array(
            'secret' => $secret,
            'response' => $recaptchaResponse
        );
 
      $verify = curl_init();
      curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($verify, CURLOPT_POST, true);
      curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
      curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($verify);
 
      $status= json_decode($response, true);
       
          if($status['success']){ 
			  //echo 1; exit;
			$booking_id='SPAS-D'.time();
			$departure_type=addslashes($this->input->post('departure_type')); 
			$fname=addslashes($this->input->post('fname'));
			$lname=addslashes($this->input->post('lname'));
			$name=$fname." ".$lname;
			$email=addslashes($this->input->post('email'));
			$phone=addslashes($this->input->post('phone'));
			$pick_up_time=addslashes($this->input->post('pick_up_time'));
			$pick_up_date=addslashes($this->input->post('pick_up_date'));
			$destination=addslashes($this->input->post('destination'));
			$other_destination=addslashes($this->input->post('other_destination'));
			$pick_up_address=addslashes($this->input->post('pick_up_address'));
			$adult=addslashes($this->input->post('adult'));
			$children=addslashes($this->input->post('children'));
			$infant=addslashes($this->input->post('infant'));
			$post_code=addslashes($this->input->post('post_code'));
			
			$child_age=addslashes($this->input->post('child_age'));
			$infant_age=addslashes($this->input->post('infant_age'));
			$client_message=addslashes($this->input->post('client_message'));
			$booking_type=addslashes($this->input->post('booking_type'));
			$flight_no=addslashes($this->input->post('flight_no'));
			
			$date=date('Y-m-d');
			
			$set=array('booking_id'=>$booking_id,
					   'departure_type'=>$departure_type,
					   'name'=>$name,
					   'email'=>$email,
					   'phone'=>$phone,
					   'pick_up_time'=>$pick_up_time,
					   'pick_up_date'=>date('Y-m-d',strtotime($pick_up_date)),
					   'destination'=>$destination,
					   'other_destination'=>$other_destination,
					   'pick_up_address'=>$pick_up_address,
					   'adult'=>$adult,
					   'children'=>$children,
					   'infant'=>$infant,
					   'date'=>$date,
					   'post_code'=>$post_code,
					   'flight_no'=>$flight_no,
					   'new_flag'=>0);
			
            $this->booknow_model->insertValue("booking_departure",$set);                    
					   
			$msg='';
		$msg.='<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<div style="background:#eee; padding:40px 30px; width:790px;">
	<div style="background:#fff; -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21);">
    	<div style="background:#fff; padding:10px 15px;">
        	<div style="width:50%; display:inline-block; vertical-align:middle;"><img src="'.base_url().'assets/frontend/images/logo.png"></div>
            <div style="width:49%;	text-align:right; font-family: \'Raleway\', sans-serif !important; color:#000; font-size:15px; display:inline-block; vertical-align:middle;">Phone: <a style="color:#000; text-decoration:none" href="tel:'.$this->getSettingVal('order_phn_no').'">'.$this->getSettingVal('order_phn_no').'</a><br>Email: <a style="color:#000; text-decoration:none" href="mailto:'.$this->getSettingVal('order_receive_email').'">'.$this->getSettingVal('order_receive_email').'</a></div>
        </div>
        <div style="padding:30px 15px;">
		<div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase; text-align:center;">Booking Confirmation</div>
        	<div style="color:#000; font-size:16px; font-family: \'Raleway\', sans-serif !important;">Dear '.$fname.',</div>
            <div style="color:#4E4E4E; font-family: \'Raleway\', sans-serif !important; font-size:15px; margin-top:10px;">Thank you for <strong>'.$departure_type.' (Departure)</strong> booking from Shire Private Airport Services.<br>If you have any issues, please contact us at <a href="mailto:'.$this->getSettingVal('order_receive_email').'" style="color:#24ABE2; text-decoration:none;">'.$this->getSettingVal('order_receive_email').'</a></div>
            <div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase;">Booking ID :<a style="text-decoration:none; color:#F6891F" href="javascript:void(0)">&nbsp;'.$booking_id.'</a></div>
            <table width="100%" style="margin-top:20px; font-family: \'Raleway\', sans-serif !important;">
				
				<tr>
                	<td style="color:#000; font-size:16px;">Booking Type</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$departure_type.'</td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Name</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$name.'</td>
                </tr>
                <tr>
                	<td style="color:#000; font-size:16px;">Email</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#24ABE2; text-decoration:none;" href="#">'.$email.'</a></td>
                </tr>
                <tr>
                	<td style="color:#000; font-size:16px;">Phone No</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$phone.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Date</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_date.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Time</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_time.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Address</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_address.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Place / Post Code</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$post_code.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Destination</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$destination.'</a></td>
                </tr>';
				if($destination=='Other')
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Specify</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$other_destination.'</td>
                </tr>';
				}
				
				if($flight_no!='')
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Flight No</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$flight_no.'</td>
                </tr>';
				}
				
				if($adult>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">No Of Person</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$adult.'</td>
                </tr>';
				}
				
				if($children>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Children</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$children.'</td>
                </tr>';
				}
				if($child_age>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Children Age</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$child_age.'</td>
                </tr>';
				}
				if($infant>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Infant</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$infant.'</td>
                </tr>';
				}
				if($infant_age>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Infant Age</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$infant_age.'</td>
                </tr>';
				}
				
            $msg.='<tr>
                	<td style="color:#000; font-size:16px;">Message</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$client_message.'</td>
                </tr><tr>
                	<td style="color:#000; font-size:16px;">Booking Type</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$booking_type.'</td>
                </tr>
				</table>
        </div>
        <div style="background:#000; padding:15px; text-align:center">&nbsp;</div>
    </div>
</div>';
		
		//echo $msg; exit;	
		//$bccList = "abhishek.jrtechnologies@gmail.com";
		$bccList = array('jong.spas18@gmail.com','dave.spas18@gmail.com');
		$config = array();
		$config['protocol'] = SMTP_PROTOCOL;
		$config['smtp_host'] = SMTP_HOST;
		$config['smtp_user'] = SMTP_USERNAME;
		$config['smtp_pass'] = SMTP_PASSWORD;
		$config['smtp_port'] = SMTP_PORT;
		$config['smtp_crypto'] = 'ssl';
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");	
		$this->email->from('jong.spas18@gmail.com', "Shire Private Airport Services");
			
		$this->email->to($email);
		
		
		$this->email->bcc($bccList);
		
		$this->email->subject("Booking Confirmation - Your Booking with Shire Private Airport Services [".$booking_id."] has been successfully placed!");
		$this->email->message($msg);
		$this->email->set_mailtype("html");
		$this->email->send();
		
		$this->session->set_userdata('thankyou_message',"for your booking. We will get back to you soon.");	
		redirect(base_url().'thank-you');
			                  
		}
		else
		{
			$page=$this->input->post('hid_page');
			googleCaptchaError();
			redirect($page);
		}
	  }
	}
	 
	
	
	// For Arrival
	public function arrival()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$recaptchaResponse = trim($this->input->post('recaptcha_response'));
       
      //$userIp=$this->request->ip_address();
         
      $secret=getSettingVal('gc_secretkey');
       
      $credential = array(
            'secret' => $secret,
            'response' => $recaptchaResponse
        );
 
      $verify = curl_init();
      curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($verify, CURLOPT_POST, true);
      curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
      curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($verify);
 
      $status= json_decode($response, true);
       
          if($status['success']){ 
			 // echo 1; exit;
			$booking_id='SPAS-A'.time();
			$departure_type=addslashes($this->input->post('departure_type')); 
			$fname=addslashes($this->input->post('fname'));
			$lname=addslashes($this->input->post('lname'));
			$name=$fname." ".$lname;
			$email=addslashes($this->input->post('email'));
			$phone=addslashes($this->input->post('phone'));
			$pick_up_time=addslashes($this->input->post('pick_up_time'));
			$pick_up_date=addslashes($this->input->post('pick_up_date'));
			$destination=addslashes($this->input->post('destination'));
			$other_destination=addslashes($this->input->post('other_destination'));
			$pick_up_address=addslashes($this->input->post('pick_up_address'));
			$adult=addslashes($this->input->post('adult'));
			$children=addslashes($this->input->post('children'));
			$infant=addslashes($this->input->post('infant'));
			$post_code=addslashes($this->input->post('post_code'));
			
			$child_age=addslashes($this->input->post('child_age'));
			$infant_age=addslashes($this->input->post('infant_age'));
			$client_message=addslashes($this->input->post('client_message'));
			$booking_type=addslashes($this->input->post('arr_booking_type'));
			$flight_no=addslashes($this->input->post('flight_no'));
			$date=date('Y-m-d');
			
			
			$newFileName="";
			$file_ext ="";

			if ($_FILES['plane_ticket']['size'] != 0 && $_FILES['plane_ticket']['name'] != "")
             {
				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/plane_ticket/';
				$configUpload['allowed_types'] = 'jpg|jpeg|png';
				$configUpload['encrypt_name']    = 'TRUE';
				$this->upload->initialize($configUpload);
				$this->upload->do_upload('plane_ticket');
				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$fileName=$upload_data['file_name'];
				
				if($fileName!='')
				{
					$file_ext = pathinfo($fileName,PATHINFO_EXTENSION);
					$newFileName=time()."-".$fileName;
					$filePath=$this->config->item('file_upload_absolute_path').'upload/plane_ticket/';
					rename($filePath.$fileName,$filePath.$newFileName);
				}
				
			 }
			
			
			
			$set=array('booking_id'=>$booking_id,
					   'departure_type'=>$departure_type,
					   'name'=>$name,
					   'email'=>$email,
					   'phone'=>$phone,
					   'pick_up_time'=>$pick_up_time,
					   'pick_up_date'=>date('Y-m-d',strtotime($pick_up_date)),
					   'destination'=>$destination,
					   'other_destination'=>$other_destination,
					   'pick_up_address'=>$pick_up_address,
					   'adult'=>$adult,
					   'children'=>$children,
					   'infant'=>$infant,
					   'date'=>$date,
					   'post_code'=>$post_code,
					   'flight_no'=>$flight_no,
					   'file_name'=>$newFileName,
					   'new_flag'=>0);
			
            $this->booknow_model->insertValue("booking_arrival",$set);                    
					   
			$msg='';
		$msg.='<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<div style="background:#eee; padding:40px 30px; width:790px;">
	<div style="background:#fff; -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21);">
    	<div style="background:#fff; padding:10px 15px;">
        	<div style="width:50%; display:inline-block; vertical-align:middle;"><img src="'.base_url().'assets/frontend/images/logo.png"></div>
            <div style="width:49%;	text-align:right; font-family: \'Raleway\', sans-serif !important; color:#000; font-size:15px; display:inline-block; vertical-align:middle;">Phone: <a style="color:#000; text-decoration:none" href="tel:'.$this->getSettingVal('order_phn_no').'">'.$this->getSettingVal('order_phn_no').'</a><br>Email: <a style="color:#000; text-decoration:none" href="mailto:'.$this->getSettingVal('order_receive_email').'">'.$this->getSettingVal('order_receive_email').'</a></div>
        </div>
        <div style="padding:30px 15px;">
		<div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase; text-align:center;">Booking Confirmation</div>
        	<div style="color:#000; font-size:16px; font-family: \'Raleway\', sans-serif !important;">Dear '.$fname.',</div>
            <div style="color:#4E4E4E; font-family: \'Raleway\', sans-serif !important; font-size:15px; margin-top:10px;">Thank you for <strong>'.$departure_type.' (Arrival)</strong> booking from Shire Private Airport Services.<br>If you have any issues, please contact us at <a href="mailto:'.$this->getSettingVal('order_receive_email').'" style="color:#24ABE2; text-decoration:none;">'.$this->getSettingVal('order_receive_email').'</a></div>
            <div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase;">Booking ID :<a style="text-decoration:none; color:#F6891F" href="javascript:void(0)">&nbsp;'.$booking_id.'</a></div>
            <table width="100%" style="margin-top:20px; font-family: \'Raleway\', sans-serif !important;">
				
				<tr>
                	<td style="color:#000; font-size:16px;">Booking Type</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$departure_type.'</td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Name</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$name.'</td>
                </tr>
                <tr>
                	<td style="color:#000; font-size:16px;">Email</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#24ABE2; text-decoration:none;" href="#">'.$email.'</a></td>
                </tr>
                <tr>
                	<td style="color:#000; font-size:16px;">Phone No</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$phone.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Date</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_date.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Time</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_time.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pick Up Address</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$pick_up_address.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Pickup Location</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$post_code.'</a></td>
                </tr>';
				if($post_code=='Other')
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Specify</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$other_destination.'</td>
                </tr>';
				}
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Destination</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$destination.'</a></td>
                </tr>';
				
				
				if($flight_no!='')
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Flight No</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$flight_no.'</td>
                </tr>';
				}
				
				if($adult>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">No Of Person</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$adult.'</td>
                </tr>';
				}
				
				if($children>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Children</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$children.'</td>
                </tr>';
				}
				if($child_age>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Children Age</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$child_age.'</td>
                </tr>';
				}
				if($infant>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Infant</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$infant.'</td>
                </tr>';
				}
				if($infant_age>0)
				{
				$msg.='<tr>
                	<td style="color:#000; font-size:16px;">Infant Age</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$infant_age.'</td>
                </tr>';
				}
				
            $msg.='<tr>
                	<td style="color:#000; font-size:16px;">Message</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$client_message.'</td>
                </tr><tr>
                	<td style="color:#000; font-size:16px;">Booking Type</td>
                    <td style="color:#4E4E4E; font-size:16px;">'.$booking_type.'</td>
                </tr>
				</table>
        </div>
        <div style="background:#000; padding:15px; text-align:center">&nbsp;</div>
    </div>
</div>';
		
		//echo $msg; exit;	
		//$bccList = "abhishek.jrtechnologies@gmail.com";
		$bccList = array('jong.spas18@gmail.com','dave.spas18@gmail.com');
		$config = array();
		$config['protocol'] = SMTP_PROTOCOL;
		$config['smtp_host'] = SMTP_HOST;
		$config['smtp_user'] = SMTP_USERNAME;
		$config['smtp_pass'] = SMTP_PASSWORD;
		$config['smtp_port'] = SMTP_PORT;
		$config['smtp_crypto'] = 'ssl';
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");	
		$this->email->from('jong.spas18@gmail.com', "Shire Private Airport Services");
			
		$this->email->to($email);
		
		
		$this->email->bcc($bccList);
		
		$this->email->subject("Booking Confirmation - Your Booking with Shire Private Airport Services [".$booking_id."] has been successfully placed!");
		
		if($newFileName!='')
		{
			$this->email->attach(base_url().'upload/plane_ticket/'.$newFileName);
		}
		
		
		$this->email->message($msg);
		$this->email->set_mailtype("html");
		$this->email->send();
		
		$this->session->set_userdata('thankyou_message',"for your booking. We will get back to you soon.");	
		redirect(base_url().'thank-you');
			                  
		}
		else
		{
			$page=$this->input->post('hid_page');
			googleCaptchaError();
			redirect($page);
		}
	 }
	}
	
	
	public function testmail()
	{
		
		$email='abhishek.jrtechnologies@gmail.com';
		$msg='<div>This is test mail.</div>';
		
		$bccList = array('anilshah.jrtechnologies@gmail.com','tapan.jrtechnologies@gmail.com');
		$config = array();
		$config['protocol'] = SMTP_PROTOCOL;
		$config['smtp_host'] = SMTP_HOST;
		$config['smtp_user'] = SMTP_USERNAME;
		$config['smtp_pass'] = SMTP_PASSWORD;
		$config['smtp_port'] = SMTP_PORT;
		$config['smtp_crypto'] = 'ssl';
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");	
		$this->email->from('jong.spas18@gmail.com', "Shire Private Airport Services");
			
		$this->email->to($email);
		
		
		$this->email->bcc($bccList);
		
		$this->email->subject("Test Mail");
		
		
		
		$this->email->message($msg);
		$this->email->set_mailtype("html");
		$this->email->send();
		
		echo $this->email->print_debugger();
	}
	
	
	
}
