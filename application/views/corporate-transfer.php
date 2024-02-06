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

            	<div class="airport_page_top_heading">Specialised Corporate Transfer in Sutherland Shire</div>

                <div class="airport_page_top_text">Be on time for your presentation or board meetings with efficient car hire services we provide. Your official purpose would be relevantly met along with extra comfort in journeying that provides you more confidence.<br><br>



At Shire Private Airport Services, our core clientele mainly constitutes of corporate professionals and government officials. With several years of experience in the shuttle service, we have been able to understand the needs of the corporate professionals. Therefore, since our inception in this service, we have refined our services ensuring that we successfully cater to every group of professionals.</div>

            </div>

            <div class="col-md-5 col-sm-5 airport_page_image"><img src="<?=base_url()?>assets/frontend/images/corporate_page_image.jpg" alt=""></div>

        </div>

    </div>

</div>







<div class="airport_page_mid_container">

	<div class="container">

    	<div class="airport_page_mid_heading">Our Pillars of Success</div>

        <div class="airport_page_mid_text">Over the years we have gained trust from our wide client base only because of our strictness towards our professionalism. Our dedicated team of chauffeurs always strive to focus on the efficiency, reliability, and comfort of the officials during the corporate transfer in Sutherland Shire. We believe in dedicated service; therefore, we make all efforts to drop you at the venue just at the right time.<br><br>



Our fleet of vehicles is attached to the latest technologies that enable you to provide you with the most relaxing cab ride of your life. We also stress on the safety of your clients as a whole.</div>

    </div>

</div>







<div class="airport_page_container">

	<div class="container">

    	<div class="row">

        	<div class="col-md-12 col-sm-12">

            	<div class="airport_page_top_heading">Why us?</div>

                <div class="airport_page_top_text">Amongst so many corporate transfer service providers, we have ensured every aspect of the corporate rules and regulations are maintained.<br><br>



We are one of the most reliable and budgeted service providers in Sutherland Shire stressing on maintaining the high standard of professional service as per the business norms. We rely on maintaining the clients’ privacy and confidentiality. Therefore, get in touch with us for your corporate hire.<br><br>



The following are some of the traits that make us different from the others:</div>

                <div class="airport_page_bottom_list">

                	<ul>

                    	<li>Flexible booking and cancellation policy.</li>

                        <li>Convenient pick and drop keeping comfort in mind.</li>

                        <li>Comfortable ride with the team of the experienced professional chauffeurs.</li>

                    </ul>

                </div>

                

                <a href="http://www.shireprivateairportservices.com.au/book-now" class="home_welcome_btn airport_page_btn">Book a Luxury Corporate Ride with us Now!</a>

            </div>

        </div>

    </div>

</div>









<?php

	$this->load->view('footer');

?>









</body>

</html>

