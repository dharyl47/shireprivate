<?php

$controllerInstance = get_instance();

$settings = get_instance();

$pageDetails=$controllerInstance->getPageDetails();

foreach($pageDetails as $values)

{

	$seo_title=stripslashes($values['seo_title']);

	$seo_meta=stripslashes($values['seo_meta']);

	$seo_keyword=stripslashes($values['seo_keyword']);

	$page_content=stripslashes($values['content']);

	$page_banner_image=stripslashes($values['image']);

	$page_name=stripslashes($values['name']);

}



?>

<!DOCTYPE HTML>

<html lang="en">

<head>

<meta charset="utf-8">

<title><?=$seo_title?></title>

<meta name="description" content="<?=$seo_meta?>">

<meta name="keywords" content="<?=$seo_keyword?>">

<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">

<?=$controllerInstance->getSettingVal('google_analytics_code')?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<?php $this->load->view('header_cdn'); ?>	
<!-- Animations -->

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/css/animate.css" /> 

<script src="<?=base_url()?>assets/frontend/js/wow.min.js"></script>

<script>

	wow = new WOW(

   {

     boxClass:     'wow',      // default

     animateClass: 'animated', // default

     offset:       0,          // default

     mobile:       true,       // default

   	 live:         true        // default

   }

   )

   wow.init();

</script>



<?=googleCaptchaScript()?>
	
<script src='https://www.google.com/recaptcha/api.js'></script>



</head>

<body>



<body>



<?php

$this->load->view('header');

if($page_banner_image!='')

{

?>



<style>

.inner_banner {

	background:url(<?=base_url()?>upload/page/<?=$page_banner_image?>) no-repeat center;

}

</style>

<?php

}

?>



<div class="inner_banner">

	<div class="container">

    	<div class="inner_page_heading"><?=$page_name?></div>

        <div class="header_breadcrumb">

        	<ol class="breadcrumb">

                <li><a href="<?=base_url()?>">Home</a></li>

                <li class="active"><?=$page_name?></li>

            </ol>

        </div>

    </div>

</div>



<div class="contact_page_container">

	<div class="container">

    	<div class="row">

        	<div class="col-md-7 col-sm-6">

            	<div class="about_page_heading">Get In Touch</div>
				
				<div style="color:red;font-size: 14px; margin-top: 10px;"><?=$_SESSION['captcha_error']?></div>

                <div class="contact_form">
					

                	<form method="post" action="<?=base_url()?>contact/formsubmit">

                    	<div class="row">

                        	<div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Name" name="name" id="name"></div>

                            <div class="col-md-6 col-sm-12"><input type="email" class="contact_input" placeholder="Email" name="email" id="email"></div>

                        </div>

                        <div class="row">

                        	<div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Phone" name="phone_no" id="phone_no"></div>

                            <div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Subject" name="subject" id="subject"></div>

                        </div>

                        <div class="row">

                        	<div class="col-md-12 col-sm-12"><textarea class="contact_input" placeholder="Message" rows="5" name="message" id="message"></textarea></div>

                            <div class="col-md-12 col-sm-12"><button class="contact_button booking_submit" type="submit">Submit</button></div>
							
							<input type="hidden" name="recaptcha_response" id="recaptchaResponse">



            					<input type="hidden" name="hid_page" value="<?=current_url();?>">

                        </div>

                    </form>

                </div>

            </div>

            <div class="col-md-5 col-sm-6 contact_right_section">

            	<div class="about_page_heading">Contact Information</div>

                <div class="contact_page_info">

                	<img src="<?=base_url()?>assets/frontend/images/contact_phone.png" alt="">

                    <div class="contact_page_info_heading">Call Us Anytime:</div>

                    <div class="contact_page_info_text">
                    <a href="tel:<?=str_replace(' ','',$settings->getSettingVal('phone_no'))?>"><?=$settings->getSettingVal('phone_no')?></a> / 					<a href="tel:0430304301">0430 304 301</a></div>

                </div>

                <div class="contact_page_info">

                	<img src="<?=base_url()?>assets/frontend/images/contact_email.png" alt="">

                    <div class="contact_page_info_heading">Email Us:</div>

                    <div class="contact_page_info_text"><a href="mailto:<?=$settings->getSettingVal('contact_email')?>"><?=$settings->getSettingVal('contact_email')?></a></div>

                </div>

                <div class="contact_page_info">

                	<img src="<?=base_url()?>assets/frontend/images/contact_map.png" alt=""> 

                    <div class="contact_page_info_heading">Reach Us:</div>

                    <div class="contact_page_info_text"> Sylvania Water</div>

                </div>

            </div>

            <div class="col-md-12 col-sm-12 contact_map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13227.87155405714!2d151.11251815!3d-34.01903519999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b86d96ecf1ef%3A0x5017d681632cce0!2sSylvania%20Waters%20NSW%202224%2C%20Australia!5e0!3m2!1sen!2sin!4v1675153396628!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

        </div>

    </div>

</div>





<?php

	$this->load->view('footer');

?>



<!---------------- For Validation ------------------------------>

 <link rel="stylesheet" type="text/css" href="<?=base_url()?>validation/jquery.validate.css" />

        <script src="<?=base_url()?>validation/jquery.validate.js" type="text/javascript"></script>

        <script src="<?=base_url()?>validation/jquery.validation.functions.js" type="text/javascript"></script>

        <style>

		span.ValidationErrors

		{

			margin-bottom:0 !important;

		}

		.ErrorField {

			border-color: #D00 !important;

			color: #D00 !important;

		}

		</style>

        <script type="text/javascript">     

            /* <![CDATA[ */

            jQuery(function(){

                jQuery("#name").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Name"

                });

				

				jQuery("#phone_no").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Phone No"

                });

				

				jQuery("#subject").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Subject"

                });

				

                

                jQuery("#email").validate({

                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",

                    message: "Please enter a valid Email ID"

                });

				

				 jQuery("#message").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter the Message"

                });

				

            });

            /* ]]> */

</script>

</body>

</html>

