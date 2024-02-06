<?php

$controllerInstance = get_instance();

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



<link href="<?=base_url()?>assets/frontend/css/owl.carousel.css" rel="stylesheet">

<link href="<?=base_url()?>assets/frontend/css/owl.theme.css" rel="stylesheet">

<script src="<?=base_url()?>assets/frontend/js/owl.carousel.js"></script>

<script>

    $(document).ready(function() {

    var owl = $("#owl-demo");

    owl.owlCarousel({

    items : 1, //10 items above 1000px browser width

    itemsDesktop : [1000,1], //5 items between 1000px and 901px

    itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px

    itemsTablet: [600,1], //2 items between 600 and 0;

    //itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    navigation: true,

        navigationText: [

        "<div class='prev-btn-1' style='left:-70px;top:140px;'><a href='javascript:void(0)'><img src='<?=base_url()?>assets/frontend/images/prev.png'></a></div>",

        "<div class='next-btn-1' style='right:-110px;top:140px;'><a href='javascript:void(0)'><img src='<?=base_url()?>assets/frontend/images/next.png'></a></div>"

        ]

      });

        owl.trigger('owl.play',4000);

    });

</script>



<!-- Datepicker -->

<link href="<?=base_url()?>assets/frontend/css/datepicker.min.css" rel="stylesheet" type="text/css">

<script src="<?=base_url()?>assets/frontend/js/datepicker.js"></script>

<script src="<?=base_url()?>assets/frontend/js/datepicker.en.js"></script>





</head>

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







<div class="airport_page_container">

	<div class="container">

    	<div class="row">

        	<div class="col-md-7 col-sm-7">

            	<div class="airport_page_top_heading">Professional Airport Shuttle Transfer Service in Sutherland Shire</div>

                <div class="airport_page_top_text">Be prepared to be welcomed and comforted by a luxurious charm offered by our airport transfer services. We provide the most punctual airport shuttle with fascinating benefits.<br><br>



Well, at SHIRE PRIVATE AIRPORT SERVICES, we make sure that you need not wait at the airport for the cab or taxi after you land. Our prompt, professional, and on-time airport services make sure that you reach your destination just-in-time.<br><br>



What you need to do is fill in the particulars. Our professionals will get back to you to confirm you with the details.<br><br>



We are the budgeted and one of the most luxurious airport shuttle service providers in Sutherland Shire. Our efforts are always towards making your ride comfy and secure.</div>

            </div>

            <div class="col-md-5 col-sm-5 airport_page_image"><img src="<?=base_url()?>assets/frontend/images/airport_page_image.jpg" alt=""></div>

        </div>

    </div>

</div>







<div class="airport_page_mid_container">

	<div class="container">

    	<div class="airport_page_mid_heading">What’s the Best Way to Reach to the Airport?</div>

        <div class="airport_page_mid_text">The best way to reach the airport is to hire the best service. Our private airport shuttle service ensures that you get to the destination just at the right time. With no hidden cost, extra charge, we are the reliable airport transfer service provider in Sutherland Shire to reach the Sydney Airport.</div>

    </div>

</div>







<div class="airport_page_container">

	<div class="container">

    	<div class="row">

        	<div class="col-md-12 col-sm-12">

            	<div class="airport_page_top_heading">Salient Features</div>

                <div class="airport_page_top_text">With so many companies catering to luxurious airport transfer in Sutherland Shire, we strive to make sure that we outperform the others with our most competitive services. The following are some of the salient features of our Sutherland to Sydney airport transfer:</div>

                <div class="airport_page_bottom_subheading">All Inclusive Pricing</div>

                <div class="airport_page_top_text">There is no hidden cost for our services. Our prices are inclusive of all the rates and if any, are intimated to the customers prior to booking. This makes us trustworthy and reliable service providers.</div>

                

                <div class="airport_page_bottom_subheading">Trusted and Professional Chauffeurs</div>

                <div class="airport_page_top_text">Ride with the fleet of trusted, experienced and professional chauffeurs who leave no stone unturned when it comes to providing you a comfortable drop from the first to the last mile.</div>

                

                <div class="airport_page_bottom_subheading">Easy Booking and Cancellation</div>

                <div class="airport_page_top_text">We keep in concern the comfort and clients' ease of booking and cancellation. We provide flexible booking and cancellation subjected to the availability. Get in touch with us for more details.</div>

                

                <a href="http://www.shireprivateairportservices.com.au/book-now" class="home_welcome_btn airport_page_btn">Book our Airport Transfer services Now!</a>

            </div>

        </div>

    </div>

</div>









<?php

	$this->load->view('footer');

?>









</body>

</html>

