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







<div class="about_page_container">

	<div class="container">

    	<?=$page_content?>
        
        
        <div class="col-md-6 col-sm-6 fleet_block">
			<div class="fleet_block_image" wfd-id="43"><img src="<?=base_url()?>upload/page/mbvv.jpg" alt=""></div>
            <div class="home_features_block_text text-center">Mercedes Benz Valente Van</div>
		</div>

        <div class="col-md-6 col-sm-6 fleet_block">
            <div class="fleet_block_image" wfd-id="43"><img src="<?=base_url()?>upload/page/vw.jpg" alt=""></div>
            <div class="home_features_block_text text-center">VW Passatt</div>
        </div>

    </div>

</div>









<?php

	$this->load->view('footer');

?>









</body>

</html>

