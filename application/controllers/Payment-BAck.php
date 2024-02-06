<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
		$this->load->model('contact_model');
		
    }
	 
	public function index()
	{
		$this->load->view('payment');
	}
	
	// For Page Details
	public function getPageDetails()
	{
		$where=array('status'=>'Active',
					 'id'=>'20'
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
	
	
	public function paymentSubmit()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			
			$fname=addslashes($this->input->post('fname'));
			$lname=addslashes($this->input->post('lname'));
			$email=addslashes($this->input->post('email'));
			$phone_no=addslashes($this->input->post('phone_no'));
			$amount=$this->input->post('amount');
			$totalAmount=($amount+(($amount*2.2)/100));
			$message=addslashes($this->input->post('message'));
			
			$this->session->set_userdata('fname', $fname);
			$this->session->set_userdata('lname', $lname);
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('phone_no', $phone_no);
			$this->session->set_userdata('amount', $totalAmount);
			$this->session->set_userdata('message', $message);
			
			redirect(base_url()."square-payment");
		}
	}
	
	public function squarePayment()
	{
		if(!empty($this->session->userdata('amount')))
		{
			$this->load->view('square-payment');
		}
		else
		{
			redirect(base_url()."pay-now");
		}
	}
	
	
	public function squarePaymentProcess()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			
			
			$totalPayment=$this->session->userdata('amount');
			
			require_once APPPATH."third_party/square-payment/vendor/autoload.php";
			//require 'connect-php-sdk-master/vendor/autoload.php';

			$access_token = 'EAAAEARTieOAimPKnFh0_OhkiPsu5DKMzHW_oF631HV-uwwaskVu5zzkYywXLaTv'; 
			# setup authorization
			\SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
			# create an instance of the Transaction API class
			$transactions_api = new \SquareConnect\Api\TransactionsApi();
			$location_id = 'BXBKBMFKA488Y';
			$nonce = $_POST['nonce'];
			
			$request_body = array (
				"card_nonce" => $nonce,
				# Monetary amounts are specified in the smallest unit of the applicable currency.
				# This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
				"amount_money" => array (
					//"amount" => (int) $totalPayment,
					"amount" => (int) $totalPayment,
					"currency" => "AUD"
				),
				# Every payment you process with the SDK must have a unique idempotency key.
				# If you're unsure whether a particular payment succeeded, you can reattempt
				# it with the same idempotency key without worrying about double charging
				# the buyer.
				"idempotency_key" => uniqid()
			);
			
			try {
				$result = $transactions_api->charge($location_id,  $request_body);
				//echo "<pre>";
				//print_r($result);
				//exit;
				
				// echo '';
				if($result['transaction']['id']){
					//echo 'Payment success!';
					//echo "Transation ID: ".$result['transaction']['id']."";
					
					$paymentId="SPAS-".time();
					$fname=$this->session->userdata('fname');
					$lname=$this->session->userdata('lname');
					$name=$fname." ".$lname;
					$email=$this->session->userdata('email');
					$phone_no=$this->session->userdata('phone_no');
					$totalAmount=$this->session->userdata('amount');
					$message=$this->session->userdata('message');
					
					$date=date('Y-m-d');
			
					$set=array('payment_id'=>$paymentId,
							 'name'=>$name,
							 'email'=>$email,
							 'phone_no'=>$phone_no,
							 'message'=>addslashes($message),
							 'amount'=>addslashes($totalAmount),
							 'date'=>$date,
							 'new_flag'=>'0');
		
					$this->contact_model->insertContactUs("pay_now",$set);
					
					$this->session->unset_userdata('fname');
					$this->session->unset_userdata('lname');
					$this->session->unset_userdata('email');
					$this->session->unset_userdata('phone_no');
					$this->session->unset_userdata('amount');
					$this->session->unset_userdata('message');
					
					$msg='';
					$msg.='<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
				<div style="background:#ddd; padding:40px 30px; width:790px;">
			<div style="background:#fff; -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21); box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.21);">
				<div style="background:#fff; padding:10px 15px; border-bottom:5px solid #dd882f">
					<div style="width:50%; display:inline-block; vertical-align:middle;"><img src="'.base_url().'assets/frontend/images/logo.png"></div>
					<div style="width:49%;	text-align:right; font-family: \'Raleway\', sans-serif !important; color:#000; font-size:15px; display:inline-block; vertical-align:middle;">Phone: <a style="color:#000; text-decoration:none" href="tel:'.$this->getSettingVal('order_phn_no').'">'.$this->getSettingVal('order_phn_no').'</a><br>Email: <a style="color:#000; text-decoration:none" href="mailto:'.$this->getSettingVal('order_receive_email').'">'.$this->getSettingVal('order_receive_email').'</a></div>
				</div>
				<div style="padding:30px 15px;">
					Dear '.$fname.',<br>Your payment has been received successfully. Your payment id is <strong>'.$paymentId.'</strong>.<br>
				
				<div class="email_template_order" style="font-size:20px; font-family: \'Raleway\', sans-serif !important; font-weight:700; margin-top:10px; color:#24ABE2; text-transform:uppercase; text-align:center;">Payment Information</div>
				
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
							<td style="color:#000; font-size:16px;">Payment Amount</td>
							<td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">$'.$totalAmount.'</a></td>
						</tr>';
						if($message!='')
						{
						$msg.='<tr>
							<td style="color:#000; font-size:16px;">Message</td>
							<td style="color:#4E4E4E; font-size:16px;"><a style="color:#4E4E4E; font-size:16px; text-decoration:none;">'.$message.'</a></td>
						</tr>';
						}
						
						$msg.='</table>
				</div>
			</div>
		</div>';

					//$bccEmail="abhishek.jrtechnologies@gmail.com";
					$bccEmail=$this->setting_model->getSettingValByFleldName('contact_email');
					
					$this->email->from('info@shireprivateairportservices.com.au', 'Shire Private Airport Services : Admin');
					$this->email->to($email);
					//$this->email->cc('another@another-example.com');
					$this->email->bcc($bccEmail);
					$this->email->subject('Shire Private Airport Services : Payment Confirmation - '.$paymentId);
					$this->email->message($msg);
					$this->email->set_mailtype("html");
					$this->email->send();
					
					$this->session->set_userdata('thankyou_message', 'Your payment has been received successfully.');
					
					?>
                    <script>
						window.location.href="<?=base_url()?>thank-you";
					</script>
                    <?php
					
				}
			} catch (\SquareConnect\ApiException $e) {
				//echo "Exception when calling TransactionApi->charge:";
				//var_dump($e->getResponseBody());
				//exit;
				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('phone_no');
				$this->session->unset_userdata('amount');
				$this->session->unset_userdata('message');
				?>
                    <script>
						window.location.href="<?=base_url()?>sorry";
					</script>
                    <?php
			}
		}
	}
	
	
	
	
	
	
	
	
	
}
