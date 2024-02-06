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

        	<div class="col-md-6 col-md-offset-3 col-sm-6">

            	<div class="about_page_heading">Pay Now</div>

                <div class="contact_form">

                	<form method="post" action="<?=base_url()?>step-one-submit">

                    	<div class="row">

                        	<div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="First Name" name="fname" id="fname"></div>

                            <div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Last Name" name="lname" id="lname"></div>

                        </div>
                        
                         <div class="row">
                          <div class="col-md-12 col-sm-12"><input type="email" class="contact_input" placeholder="Email" name="email" id="email"></div>
                         </div>

                        <div class="row">

                        	<div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Phone" name="phone_no" id="phone_no"></div>

                            <div class="col-md-6 col-sm-12"><input type="text" class="contact_input" placeholder="Payment Amount" name="amount" id="amount"></div>

                        </div>

                        <div class="row">

                        	<div class="col-md-12 col-sm-12"><textarea class="contact_input" placeholder="Message" rows="5" name="message" id="message"></textarea></div>
                            <span class="ValidationErrors">** 2.2% Merchant fee</span>

                            <div class="col-md-12 col-sm-12"><button class="contact_button booking_submit" type="submit">Submit</button></div>

                        </div>

                    </form>

                </div>

            </div>

            

            

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

                jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your First Name"
                });
				
				jQuery("#lname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your Last Name"
                });

				jQuery("#phone_no").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your Phone No"
                });

				jQuery("#amount").validate({
                    expression: "if (!isNaN(VAL) && (VAL>0)) return true; else return false;",
                    message: "Please enter a valid Amount"
                });

                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });

            });

            /* ]]> */

</script>

</body>

</html>

