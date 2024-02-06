<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
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
		$this->load->model('contact_model');
		$this->load->library('email');
    }
	public function index()
	{
		$this->load->view('contact-us');
	}
	// For Page Details
	public function getPageDetails()
	{
		$where=array('status'=>'Active',
					 'id'=>'3'
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
	public function formsubmit()
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
			$name=$this->input->post("name");
			$phone_no=$this->input->post("phone_no");
			$email=$this->input->post("email"); 
			$message=$this->input->post("message");
			$subject=$this->input->post("subject");
			$date=date('Y-m-d');
			$set=array('name'=>$name,
					 'email'=>$email,
					 'phone_no'=>$phone_no,
					 'message'=>addslashes($message),
					 'subject'=>addslashes($subject),
					 'date'=>$date,
					 'new_flag'=>'0'
					 );
			$this->contact_model->insertContactUs("contact_us",$set);
			$msg='';
			$msg.='<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<div style="background:#eee; padding:40px 30px; width:790px;">
	<div style="background:#fff; -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21);">
    	<div style="background:#fff; padding:10px 15px;">
        	<div style="width:50%; display:inline-block; vertical-align:middle;"><img src="'.base_url().'assets/frontend/images/logo.png"></div>
            <div style="width:49%;	text-align:right; font-family: \'Raleway\', sans-serif !important; color:#000; font-size:15px; display:inline-block; vertical-align:middle;">Phone: <a style="color:#000; text-decoration:none" href="tel:'.$this->getSettingVal('order_phn_no').'">'.$this->getSettingVal('order_phn_no').'</a><br>Email: <a style="color:#000; text-decoration:none" href="mailto:'.$this->getSettingVal('order_receive_email').'">'.$this->getSettingVal('order_receive_email').'</a></div>
        </div>
        <div style="padding:30px 15px;">
		<div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase; text-align:center;">Contact Information</div>
            <table width="100%" style="margin-top:20px; font-family: \'Raleway\', sans-serif !important;">
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
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$phone_no.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Subject</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$subject.'</a></td>
                </tr>
				<tr>
                	<td style="color:#000; font-size:16px;">Message</td>
                    <td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$message.'</a></td>
                </tr>
                </table>
        </div>
    </div>
</div>';
					$toEmail=array('jong.spas18@gmail.com','dave.spas18@gmail.com');
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
					$this->email->to($toEmail);
					$this->email->subject('Shire Private Airport Services : Contact Us');
					$this->email->message($msg);
					$this->email->set_mailtype("html");
					$this->email->send();
		$user_msg="";
					$user_msg.='<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<div style="background:#eee; padding:40px 30px; width:790px;">
	<div style="background:#fff; -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21);">
    	<div style="background:#fff; padding:10px 15px;">
        	<div style="width:50%; display:inline-block; vertical-align:middle;"><img src="'.base_url().'assets/frontend/images/logo.png"></div>
            <div style="width:49%;	text-align:right; font-family: \'Raleway\', sans-serif !important; color:#000; font-size:15px; display:inline-block; vertical-align:middle;">Phone: <a style="color:#000; text-decoration:none" href="tel:'.$this->getSettingVal('order_phn_no').'">'.$this->getSettingVal('order_phn_no').'</a><br>Email: <a style="color:#000; text-decoration:none" href="mailto:'.$this->getSettingVal('contact_email').'">'.$this->getSettingVal('contact_email').'</a></div>
        </div>
        <div style="padding:30px 15px;">
		<div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase; text-align:center;">Thank You</div>
        	<div style="color:#000; font-size:16px; font-family: \'Raleway\', sans-serif !important;">Dear '.$name.',</div>
            <div style="color:#4E4E4E; font-family: \'Raleway\', sans-serif !important; font-size:15px; margin-top:10px;">Thank you for your request. We will get back to you as soon as possible.<br>If you have any issues, please contact us at <a href="mailto:'.$this->getSettingVal('contact_email').'" style="color:#24ABE2; text-decoration:none;">'.$this->getSettingVal('contact_email').'</a></div>
        </div>
    </div>
</div>';
			/*echo $user_msg;
			echo "<br>";
			echo $msg; exit;*/
			$formEmail=$this->setting_model->getSettingValByFleldName('contact_email');
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
			//$this->email->cc('another@another-example.com');
			//$this->email->bcc('them@their-example.com');
			$this->email->subject('Shire Private Airport Services : Contact Us');
			$this->email->message($user_msg);
			$this->email->set_mailtype("html");
			$this->email->send();
			$this->session->set_userdata('thankyou_message',"for contacting us. We will get back to you soon.");		
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
}
