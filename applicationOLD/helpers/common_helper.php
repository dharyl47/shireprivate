<?php
if(!function_exists('getSettingVal'))
{
	function getSettingVal($field)
	{
		// Get a reference to the controller object
		$CI = get_instance();
		// You may need to load the model if it hasn't been pre-loaded
		$CI->load->model('setting_model');
		$result=$CI->setting_model->getSettingVal("settings",$field);
		return $result;
	}
}
if(!function_exists('getPageName'))
{
	function getPageName($pagename)
	{
		// Get a reference to the controller object
		$CI = get_instance();
		// You may need to load the model if it hasn't been pre-loaded
		$CI->load->model('page_model');
		// Call a function of the model
		$where=array('status'=>'1','slug'=>$pagename);
		$result=$CI->page_model->getPageDetails("locations",$where);
		return $result;
	}
}
if(!function_exists('getFieldValue'))
{
	function getFieldValue($table,$field,$where)
	{
		// Get a reference to the controller object
		$CI = get_instance();
		// You may need to load the model if it hasn't been pre-loaded
		$CI->load->model('setting_model');
		$result=$CI->setting_model->getFieldValue($table,$field,$where);
		return $result;
	}
}
if(!function_exists('valueToArray'))
{
	function valueToArray($value,$sep)
	{
		$resultArr=explode($sep,$value);
		return $resultArr;
	}
}
if(!function_exists('googleCaptchaScript'))
{
	function googleCaptchaScript()
	{
		$sitekey=getSettingVal('gc_sitekey');
		$code='
		<script src="https://www.google.com/recaptcha/api.js?render='.$sitekey.'"></script>
		<script>
			grecaptcha.ready(function () {
				grecaptcha.execute("'.$sitekey.'", { action: "contact" }).then(function (token) {
					var recaptchaResponse = document.getElementById("recaptchaResponse");
					recaptchaResponse.value = token;
				});
			});
		</script>';
		return $code;
	}
}
if(!function_exists('googleCaptchaScriptBooking'))
{
	function googleCaptchaScriptBooking()
	{
		$sitekey=getSettingVal('gc_sitekey');
		$code='
		<script src="https://www.google.com/recaptcha/api.js?render='.$sitekey.'"></script>
		<script>
			grecaptcha.ready(function () {
				grecaptcha.execute("'.$sitekey.'", { action: "contact" }).then(function (token) {
					var recaptchaResponse = document.getElementById("recaptchaResponse");
					recaptchaResponse.value = token;
					
					var recaptchaResponse1 = document.getElementById("recaptchaResponse1");
					recaptchaResponse1.value = token;
				});
			});
		</script>';
		return $code;
	}
}
if(!function_exists('googleCaptchaError'))
{
	function googleCaptchaError()
	{
		$CI = get_instance();
		$CI->session->set_tempdata('captcha_error', 'Captcha Error! Please try again.', 10);
		return "";
	}
}
?>
