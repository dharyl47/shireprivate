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







<div class="fleet_page_container">

	<div class="container">

    	<?=$page_content?>

    </div>

</div>





<div class="home_features_section">

	<div class="container">

    	<div class="home_features_section_heading">Our Vehicles Feature</div>

        <div class="row">

        	<div class="home_features_block">

            	<div class="home_features_blockicon wow zoomIn" data-wow-delay="200ms"><svg version="1.1" id="HkZtGtUlm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve"><style>@-webkit-keyframes H1LebFGtLlm_H1kpMK8eX_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}@keyframes H1LebFGtLlm_H1kpMK8eX_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}#HkZtGtUlm *{-webkit-animation-duration: 3s;animation-duration: 3s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#S1lWKGY8gQ{fill: none;stroke: #000000;stroke-width: 2.925;}#rkZWKGK8lm{fill: none;stroke: #000000;stroke-width: 2.925;}#S1MZKMtUeQ{fill: none;stroke: #000000;stroke-width: 2.925;}#ryQZFztUeQ{fill: none;stroke: #000000;stroke-width: 2.925;}#SkEZFfFIlm{fill: none;stroke: #000000;stroke-width: 2.925;}#HJBZYMtUlQ{fill: none;stroke: #000000;stroke-width: 2.925;}#B18WYfK8lQ{fill: none;stroke: #000000;stroke-width: 2.925;}#S1vWYGYUlX{fill: none;stroke: #000000;stroke-width: 2.925;}#SJdbFMFLg7{fill: none;stroke: #000000;stroke-width: 2.925;}#rkYWYzYIxX{fill: none;stroke: #000000;stroke-width: 2.925;}#HJqZYGFUlX{fill: none;stroke: #000000;stroke-width: 2.925;}#rJoWKGtLgQ{fill: none;stroke: #000000;stroke-width: 2.925;}#By2bFfYIe7{fill: none;stroke: #000000;stroke-width: 2.925;}#S10ZYGtLem{fill: none;stroke: #000000;stroke-width: 2.925;}#rJ1eZFzF8xX{fill: none;stroke: #000000;stroke-width: 2.925;}#S1elbYfYUlX{fill: none;stroke: #000000;stroke-width: 2.925;}#SJZeZtftLlQ{fill: none;stroke: #000000;stroke-width: 2.925;}#rkGxWYGYLem{fill: none;stroke: #000000;stroke-width: 2.925;}#SyQgZYMYLlX{fill: none;stroke: #000000;stroke-width: 2.925;}#ByEeZtMY8xX{fill: none;stroke: #000000;stroke-width: 2.925;}#ryBxZFGF8lQ{fill: none;stroke: #000000;stroke-width: 2.925;}#ry_lWYft8em{fill: none;stroke: #000000;stroke-width: 1.95;}#BJtg-FfYLl7{fill: none;stroke: #000000;stroke-width: 1.95;}#BJcg-KMYLxX{fill: none;stroke: #000000;stroke-width: 1.95;}#Hk3ebKfYIgX{fill: none;stroke: #000000;stroke-width: 1.95;}#S1plbKzFIlm{fill: none;stroke: #000000;stroke-width: 1.95;}#S1RgbFftIx7{fill: none;stroke: #000000;stroke-width: 1.95;}#Skl-ZtzYUgQ{fill: none;stroke: #000000;stroke-width: 1.95;}#HkZWWFfFUxX{fill: none;stroke: #000000;stroke-width: 1.95;}#r1MZbKzKUl7{fill: none;stroke: #000000;stroke-width: 1.95;}#B11--YMK8xQ_H1eszF8lX{-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: rotate(360deg);transform: rotate(360deg);}#H1LebFGtLlm_H1kpMK8eX{-webkit-animation-name: H1LebFGtLlm_H1kpMK8eX_Animation;animation-name: H1LebFGtLlm_H1kpMK8eX_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: rotate(0deg);transform: rotate(0deg);}</style>

<line stroke-miterlimit="10" x1="50" y1="77.6" x2="79" y2="77.6" id="S1lWKGY8gQ"/>

<line stroke-miterlimit="10" x1="45" y1="77.6" x2="47.6" y2="77.6" id="rkZWKGK8lm"/>

<line stroke-miterlimit="10" x1="19.6" y1="77.6" x2="42.5" y2="77.6" id="S1MZKMtUeQ"/>

<line stroke-miterlimit="10" x1="7.4" y1="77.6" x2="9.8" y2="77.6" id="ryQZFztUeQ"/>

<polyline stroke-miterlimit="10" points="1,77.6 2.3,77.6 4.8,77.6 " id="SkEZFfFIlm"/>

<circle stroke-miterlimit="10" cx="18.7" cy="70.1" r="7.5" id="HJBZYMtUlQ"/>

<circle stroke-miterlimit="10" cx="61.3" cy="70.1" r="7.5" id="B18WYfK8lQ"/>

<circle stroke-miterlimit="10" cx="18.7" cy="70.1" r="2.7" id="S1vWYGYUlX"/>

<circle stroke-miterlimit="10" cx="61.3" cy="70.1" r="2.7" id="SJdbFMFLg7"/>

<line stroke-miterlimit="10" x1="26.2" y1="70.1" x2="53.8" y2="70.1" id="rkYWYzYIxX"/>

<path stroke-miterlimit="10" d="M43,22.3C43,30.7,38,37.9,30.8,41" id="HJqZYGFUlX"/>

<path stroke-miterlimit="10" d="M22.7,2c8,0,14.9,4.6,18.2,11.2" id="rJoWKGtLgQ"/>

<path stroke-miterlimit="10" d="M2.3,22.3c0-2.1,0.3-4.1,0.9-5.9&#10;&#9;C4.9,10.8,8.9,6.3,14.2,3.8" id="By2bFfYIe7"/>

<g id="BkpZFMFIeX">

	<path stroke-miterlimit="10" d="M4.2,30.8c2.5,5.5,7.4,9.6,13.3,11.2&#10;&#9;&#9;c1.6,0.4,3.2,0.6,4.9,0.7c-1,1.2-4.8,5.9-5.8,6.7c-1.2,1-6.7,2-10.2,2.2c-3.4,0.2-4.2,5.2-4.2,5.2s-0.3,7,0,10.1&#10;&#9;&#9;c0.3,3.1,3.3,3.3,3.3,3.3h5.3" id="S10ZYGtLem"/>

</g>

<polyline stroke-miterlimit="10" points="3.3,36.2 3.6,29.8 9.6,29.8 " id="rJ1eZFzF8xX"/>

<polyline stroke-miterlimit="10" points="8.5,3 14.6,3 14.6,9.6 " id="S1elbYfYUlX"/>

<polyline stroke-miterlimit="10" points="42.6,8.3 40.3,14.2 35,12.2 " id="SJZeZtftLlQ"/>

<polyline stroke-miterlimit="10" points="31.7,35.5 29.7,41.5 36.2,42.4 " id="rkGxWYGYLem"/>

<path stroke-miterlimit="10" d="M39.1,34.9h16.3c0,0,5.4,0.2,6.7,3&#10;&#9;c1.3,2.8,4,9.2,6.6,10.7c2.6,1.5,8,3,8.7,6.7v11.3c0,0,0.2,3.5-1.4,3.5h-7.4" id="SyQgZYMYLlX"/>

<path stroke-miterlimit="10" d="M32.4,51.9L32.4,51.9c0-3,2.5-5.5,5.5-5.5h15.2&#10;&#9;c3,0,5.5,2.5,5.5,5.5v0c0,3-2.5,5.5-5.5,5.5h-14" id="ByEeZtMY8xX"/>

<polyline stroke-miterlimit="10" points="43.8,52.5 38.6,57.4 43.8,62.6 " id="ryBxZFGF8lQ"/>

<g id="H1LebFGtLlm_H1kpMK8eX" data-animator-group="true" data-animator-type="1"><g id="H1LebFGtLlm">

	<g id="H1DeZYzFIeX">

		<line stroke-miterlimit="10" x1="22.4" y1="9.8" x2="22.4" y2="34.8" id="ry_lWYft8em"/>

		<polyline stroke-miterlimit="10" points="18.5,12.3 22.4,16.4 26,12.3 &#9;&#9;" id="BJtg-FfYLl7"/>

		<polyline stroke-miterlimit="10" points="26,32.4 22.2,28.2 18.5,32.4 &#9;&#9;" id="BJcg-KMYLxX"/>

	</g>

	<g id="Byig-KGYLgX">

		<line stroke-miterlimit="10" x1="33" y1="15.9" x2="11.7" y2="28.9" id="Hk3ebKfYIgX"/>

		<polyline stroke-miterlimit="10" points="28.9,13.8 27.4,19.3 32.8,20.2 &#9;&#9;" id="S1plbKzFIlm"/>

		<polyline stroke-miterlimit="10" points="15.7,30.8 17.2,25.3 11.8,24.4 &#9;&#9;" id="S1RgbFftIx7"/>

	</g>

	<g id="B11--YMK8xQ">

		<line stroke-miterlimit="10" x1="32.9" y1="28.9" x2="11.7" y2="15.8" id="Skl-ZtzYUgQ"/>

		<polyline stroke-miterlimit="10" points="32.8,24.3 27.3,25.4 28.9,30.7 &#9;&#9;" id="HkZWWFfFUxX"/>

		<polyline stroke-miterlimit="10" points="11.8,20.1 17.4,19 15.7,13.8 &#9;&#9;" id="r1MZbKzKUl7"/>

	</g>

</g></g>

<script>(function(){var a=document.querySelector('#HkZtGtUlm'),b=a.querySelectorAll('style'),c=function(d){b.forEach(function(f){var g=f.textContent;g&amp;&amp;(f.textContent=g.replace(/transform-box:[^;\r\n]*/gi,'transform-box: '+d))})};c('initial'),window.requestAnimationFrame(function(){return c('fill-box')})})();</script></svg></div>

                <div class="home_features_block_text">Air conditioning</div>

            </div>

            <div class="home_features_block">

            	<div class="home_features_blockicon wow zoomIn" data-wow-delay="400ms"><svg version="1.1" id="SJfLNK8gm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve"><style>@-webkit-keyframes H1pMUNYLxX_S1-r8FIgm_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}70%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}75%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes H1pMUNYLxX_S1-r8FIgm_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}70%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}75%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes rJhzI4FUem_rkcsSYIlQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}65%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}70%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes rJhzI4FUem_rkcsSYIlQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}65%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}70%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes SkofIEKLxQ_ryXiSFUlQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}55.00%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}60%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes SkofIEKLxQ_ryXiSFUlQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}55.00%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}60%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes Bk9f84FIeX_H1GcrF8lQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}45%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}50%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes Bk9f84FIeX_H1GcrF8lQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}45%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}50%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes BJKzI4t8e7_S18dHFUgQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}35%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}40%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes BJKzI4t8e7_S18dHFUgQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}35%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}40%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes rk_MLEK8x7_HkswrtUgX_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}25%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}30%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes rk_MLEK8x7_HkswrtUgX_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}25%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}30%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes ByvMUEtIxX_Sk7PStUlm_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}15%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}20%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes ByvMUEtIxX_Sk7PStUlm_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}15%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}20%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes ry8GUVKLeQ_S1mLrYUgQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}5%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}10%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@keyframes ry8GUVKLeQ_S1mLrYUgQ_Animation{0%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}5%{-webkit-transform: scale(1, 0);transform: scale(1, 0);}10%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}100%{-webkit-transform: scale(1, 1);transform: scale(1, 1);}}@-webkit-keyframes Hkez8VYIlQ_ry5dEK8xm_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}5%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}10%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}15%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}20%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}25%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}30%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}35%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}40%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}45%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}50%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}55.00%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}60%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}65%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}70%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}75%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}80%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}100%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}}@keyframes Hkez8VYIlQ_ry5dEK8xm_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}5%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}10%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}15%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}20%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}25%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}30%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}35%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}40%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}45%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}50%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}55.00%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}60%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}65%{-webkit-transform: rotate(-10deg);transform: rotate(-10deg);}70%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}75%{-webkit-transform: rotate(3deg);transform: rotate(3deg);}80%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}100%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}}#SJfLNK8gm *{-webkit-animation-duration: 2s;animation-duration: 2s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#H1bzLNtLxQ{fill: none;stroke: #000000;stroke-width: 3;}#Byzz8EtIlQ{fill: #000000;}#Hkmf84KIeQ{fill: none;stroke: #000000;stroke-width: 3;}#BkBzL4YLeQ{fill: #000000;}#ry8GUVKLeQ{fill: none;stroke: #000000;stroke-width: 3;}#ByvMUEtIxX{fill: none;stroke: #000000;stroke-width: 3;}#rk_MLEK8x7{fill: none;stroke: #000000;stroke-width: 3;}#BJKzI4t8e7{fill: none;stroke: #000000;stroke-width: 3;}#Bk9f84FIeX{fill: none;stroke: #000000;stroke-width: 3;}#SkofIEKLxQ{fill: none;stroke: #000000;stroke-width: 3;}#rJhzI4FUem{fill: #000000;}#H1pMUNYLxX{fill: #000000;}#Hkez8VYIlQ_ry5dEK8xm{-webkit-animation-name: Hkez8VYIlQ_ry5dEK8xm_Animation;animation-name: Hkez8VYIlQ_ry5dEK8xm_Animation;-webkit-transform-origin: 100% 100%;transform-origin: 100% 100%;transform-box: fill-box;-webkit-transform: rotate(0deg);transform: rotate(0deg);}#ry8GUVKLeQ_S1mLrYUgQ{-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);-webkit-animation-name: ry8GUVKLeQ_S1mLrYUgQ_Animation;animation-name: ry8GUVKLeQ_S1mLrYUgQ_Animation;}#ByvMUEtIxX_Sk7PStUlm{-webkit-animation-name: ByvMUEtIxX_Sk7PStUlm_Animation;animation-name: ByvMUEtIxX_Sk7PStUlm_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#rk_MLEK8x7_HkswrtUgX{-webkit-animation-name: rk_MLEK8x7_HkswrtUgX_Animation;animation-name: rk_MLEK8x7_HkswrtUgX_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#BJKzI4t8e7_S18dHFUgQ{-webkit-animation-name: BJKzI4t8e7_S18dHFUgQ_Animation;animation-name: BJKzI4t8e7_S18dHFUgQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#Bk9f84FIeX_H1GcrF8lQ{-webkit-animation-name: Bk9f84FIeX_H1GcrF8lQ_Animation;animation-name: Bk9f84FIeX_H1GcrF8lQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#SkofIEKLxQ_ryXiSFUlQ{-webkit-animation-name: SkofIEKLxQ_ryXiSFUlQ_Animation;animation-name: SkofIEKLxQ_ryXiSFUlQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#rJhzI4FUem_rkcsSYIlQ{-webkit-animation-name: rJhzI4FUem_rkcsSYIlQ_Animation;animation-name: rJhzI4FUem_rkcsSYIlQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}#H1pMUNYLxX_S1-r8FIgm{-webkit-animation-name: H1pMUNYLxX_S1-r8FIgm_Animation;animation-name: H1pMUNYLxX_S1-r8FIgm_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: scale(1, 0);transform: scale(1, 0);}</style>

<g id="Hkez8VYIlQ_ry5dEK8xm" data-animator-group="true" data-animator-type="1"><g id="Hkez8VYIlQ">

	<line stroke-miterlimit="10" x1="13.1" y1="7" x2="66.5" y2="23.7" id="H1bzLNtLxQ"/>

	<circle cx="12.3" cy="6.9" r="3.4" id="Byzz8EtIlQ"/>

</g></g>

<path stroke-miterlimit="10" d="M72,78.3H8.1c-3.7,0-6.7-3-6.7-6.7V30.4&#10;&#9;c0-3.7,3-6.7,6.7-6.7H72c3.7,0,6.7,3,6.7,6.7v41.3C78.7,75.3,75.7,78.3,72,78.3z" id="Hkmf84KIeQ"/>

<g id="rJVGLVFUxQ">

	<path d="M71,31.5H8v15.2h13.2v-9.3c0-0.7,0.6-1.3,1.3-1.3s1.3,0.6,1.3,1.3v9.3H71V31.5z" id="BkBzL4YLeQ"/>

</g>

<g id="ry8GUVKLeQ_S1mLrYUgQ" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="10.8" y1="53.4" x2="10.8" y2="71.4" id="ry8GUVKLeQ"/></g>

<g id="ByvMUEtIxX_Sk7PStUlm" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="19.3" y1="53.4" x2="19.3" y2="71.4" id="ByvMUEtIxX"/></g>

<g id="rk_MLEK8x7_HkswrtUgX" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="27.5" y1="53.4" x2="27.5" y2="71.4" id="rk_MLEK8x7"/></g>

<g id="BJKzI4t8e7_S18dHFUgQ" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="36" y1="53.4" x2="36" y2="71.4" id="BJKzI4t8e7"/></g>

<g id="Bk9f84FIeX_H1GcrF8lQ" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="44.2" y1="53.4" x2="44.2" y2="71.4" id="Bk9f84FIeX"/></g>

<g id="SkofIEKLxQ_ryXiSFUlQ" data-animator-group="true" data-animator-type="2"><line stroke-linecap="round" stroke-miterlimit="10" x1="52.8" y1="53.4" x2="52.8" y2="71.4" id="SkofIEKLxQ"/></g>

<g id="rJhzI4FUem_rkcsSYIlQ" data-animator-group="true" data-animator-type="2"><circle cx="66.3" cy="56.6" r="4.9" id="rJhzI4FUem"/></g>

<g id="H1pMUNYLxX_S1-r8FIgm" data-animator-group="true" data-animator-type="2"><circle cx="66.3" cy="68.8" r="4.1" id="H1pMUNYLxX"/></g>

<script>(function(){var a=document.querySelector('#SJfLNK8gm'),b=a.querySelectorAll('style'),c=function(d){b.forEach(function(f){var g=f.textContent;g&amp;&amp;(f.textContent=g.replace(/transform-box:[^;\r\n]*/gi,'transform-box: '+d))})};c('initial'),window.requestAnimationFrame(function(){return c('fill-box')})})();</script></svg></div>

                <div class="home_features_block_text">CD/Radio</div>

            </div>

            <div class="home_features_block">

            	<div class="home_features_blockicon wow zoomIn" data-wow-delay="600ms"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

	 viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">

	 <style>

   path{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	line{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	circle{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}

	rect{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	@keyframes my_animation{

		0%{

			stroke-dashoffset: 0;

		}

		50%{

			stroke-dashoffset: 1400;

		}

		100%{

			stroke-dashoffset: 0;

		}

		}		

</style>

<g>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" d="M68.4,44.9H11.6c-0.5,0-0.9-0.4-0.9-0.9v-8.2

		c0-0.5,0.4-0.9,0.9-0.9h56.8c0.5,0,0.9,0.4,0.9,0.9v8.2C69.3,44.6,68.9,44.9,68.4,44.9z"/>

	<line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="27" y1="35.1" x2="27" y2="44.9"/>

	<line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="59" y1="35.1" x2="59" y2="44.9"/>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="

		M61.2,35.1c0,0,3.5-3,2-6.1c-1.4-3.1-4.2-2.9-4.2-2.9h-5.2c0,0-5.2-0.5-4.8-5.6s7.8-4.4,9.2-4.3h1.1"/>

	

		<circle fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="40" cy="40" r="38.3"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.7" y1="13.2" x2="67" y2="67"/>

</g>

</svg></div>

                <div class="home_features_block_text">Smoke Free</div>

            </div>

            <div class="home_features_block">

            	<div class="home_features_blockicon wow zoomIn" data-wow-delay="800ms"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

	 viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve">

	 <style>

   path{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	line{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	circle{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}

	polyline{	

	stroke-dasharray: 1400;

    animation: my_animation 3s infinite;	

	}	

	@keyframes my_animation{

		0%{

			stroke-dashoffset: 0;

		}

		50%{

			stroke-dashoffset: 1400;

		}

		100%{

			stroke-dashoffset: 0;

		}

		}		

</style>

<g>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="

		M59.8,77.8H20.2c-5,0-9.1-4.1-9.1-9.1v0c0-5,4.1-9.1,9.1-9.1h39.6c5,0,9.1,4.1,9.1,9.1v0C68.9,73.8,64.8,77.8,59.8,77.8z"/>

	

		<circle fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="19.5" cy="53.8" r="6"/>

	

		<circle fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="60.8" cy="53.8" r="6"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" x1="21" y1="48" x2="67.6" y2="10.7"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" x1="25.5" y1="54.2" x2="68.1" y2="18.9"/>

	<polyline fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" points="67.6,6.4 

		67.6,22.2 67.6,27.1 	"/>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" d="M48.9,12.5H30.7

		c-2.8,0-5.2-2.3-5.2-5.2v0c0-2.8,2.3-5.2,5.2-5.2h18.2c2.8,0,5.2,2.3,5.2,5.2v0C54,10.2,51.7,12.5,48.9,12.5z"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" x1="32.7" y1="12.5" x2="32.7" y2="16.2"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" x1="47.2" y1="12.5" x2="47.2" y2="16.2"/>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" d="M19.5,47.8V25.7

		c0-5.3,4.3-9.7,9.7-9.7h21.9c5.3,0,9.7,4.3,9.7,9.7v22.1"/>

	

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="18.4" y1="53.8" x2="20.6" y2="53.8"/>

	

		<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="5" x1="59.5" y1="53.8" x2="61.6" y2="53.8"/>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" d="M36,35.5h-7

		c-2.2,0-3.9-1.7-3.9-3.9v-5.6c0-2.2,1.7-3.9,3.9-3.9h21.6c0.7,0,1.3,0.2,1.9,0.5"/>

	<path fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10" d="M54.5,29.8v1.8

		c0,2.2-1.7,3.9-3.9,3.9h-2.5"/>

</g>

</svg></div>

                <div class="home_features_block_text">Child Seats Available on Request</div>

            </div>

            <div class="home_features_block">

            	<div class="home_features_blockicon wow zoomIn" data-wow-delay="1000ms"><svg version="1.1" id="Hy3-1iXkde7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve"><style>@-webkit-keyframes HyHf1o7Jdgm_BJ51Hy_e7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@keyframes HyHf1o7Jdgm_BJ51Hy_e7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@-webkit-keyframes B1EMJoQ1dlm_HyB1Sy_g7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@keyframes B1EMJoQ1dlm_HyB1Sy_g7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@-webkit-keyframes ByIMkj71deQ_HkLTV1OlQ_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@keyframes ByIMkj71deQ_HkLTV1OlQ_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}12.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}25%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}37.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}50%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}62.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}75%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}87.50%{-webkit-transform: translate(0px, -2px);transform: translate(0px, -2px);}100%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}}@-webkit-keyframes HyHf1o7Jdgm_rJccEJulQ_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}93.75%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}@keyframes HyHf1o7Jdgm_rJccEJulQ_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}93.75%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}@-webkit-keyframes B1EMJoQ1dlm_rJvFVJ_lm_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}93.75%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}@keyframes B1EMJoQ1dlm_rJvFVJ_lm_Animation{0%{-webkit-transform: rotate(0deg);transform: rotate(0deg);}93.75%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}100%{-webkit-transform: rotate(360deg);transform: rotate(360deg);}}@-webkit-keyframes SkWfyi71ul7_r1LVNydx7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}93.75%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}100%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}}@keyframes SkWfyi71ul7_r1LVNydx7_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}93.75%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}100%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}}@-webkit-keyframes rya-yimyOlm_B1ZaQkOxQ_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}93.75%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}100%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}}@keyframes rya-yimyOlm_B1ZaQkOxQ_Animation{0%{-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}93.75%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}100%{-webkit-transform: translate(-10px, 0px);transform: translate(-10px, 0px);}}#Hy3-1iXkde7 *{-webkit-animation-duration: 1.6s;animation-duration: 1.6s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);animation-timing-function: cubic-bezier(0, 0, 1, 1);}#B10Z1s7J_e7{fill: none;stroke: #000000;stroke-width: 3;}#SkJzJo71uxm{fill: none;stroke: #000000;stroke-width: 3;}#r1gG1jmyul7{fill: none;stroke: #000000;stroke-width: 3;}#S1MfJjQJ_lQ{fill: none;stroke: #000000;stroke-width: 3;}#SkQz1o7yOxm{fill: none;stroke: #000000;stroke-width: 3;}#B1EMJoQ1dlm{fill: none;stroke: #000000;stroke-width: 3;}#HyHf1o7Jdgm{fill: none;stroke: #000000;stroke-width: 3;}#BJDGJsXydxm{fill: none;stroke: #000000;stroke-width: 3;}#rJ_z1iXJOgm{fill: none;stroke: #000000;stroke-width: 3;}#rytM1iQ1uxX{fill: none;stroke: #000000;stroke-width: 3;}#SJ9fkoQ1dxX{fill: none;stroke: #000000;stroke-width: 3;}#SyiM1sQ1dlX{fill: none;stroke: #000000;stroke-width: 3;}#H1hMJsQy_gX{fill: none;stroke: #000000;stroke-width: 3;}#B16MJiXJOe7{fill: none;stroke: #000000;stroke-width: 3;}#HyAGkjQJdxQ{fill: none;stroke: #000000;stroke-width: 3;}#HkkXyjXydgm{fill: none;stroke: #000000;stroke-width: 3;}#ByeXkj71OxQ{fill: none;stroke: #000000;stroke-width: 3;}#rk-X1sXJdl7{fill: none;stroke: #000000;stroke-width: 3;}#rJfXyomydgm{fill: none;stroke: #000000;stroke-width: 3;}#rkXQJsXkulQ{fill: none;stroke: #000000;stroke-width: 3;}#S1VQJjmJdx7{fill: none;stroke: #000000;stroke-width: 3;}#rya-yimyOlm_B1ZaQkOxQ{-webkit-animation-name: rya-yimyOlm_B1ZaQkOxQ_Animation;animation-name: rya-yimyOlm_B1ZaQkOxQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}#SkWfyi71ul7_r1LVNydx7{-webkit-animation-name: SkWfyi71ul7_r1LVNydx7_Animation;animation-name: SkWfyi71ul7_r1LVNydx7_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}#B1EMJoQ1dlm_rJvFVJ_lm{-webkit-animation-name: B1EMJoQ1dlm_rJvFVJ_lm_Animation;animation-name: B1EMJoQ1dlm_rJvFVJ_lm_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: rotate(0deg);transform: rotate(0deg);}#HyHf1o7Jdgm_rJccEJulQ{-webkit-animation-name: HyHf1o7Jdgm_rJccEJulQ_Animation;animation-name: HyHf1o7Jdgm_rJccEJulQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: rotate(0deg);transform: rotate(0deg);}#ByIMkj71deQ_HkLTV1OlQ{-webkit-animation-name: ByIMkj71deQ_HkLTV1OlQ_Animation;animation-name: ByIMkj71deQ_HkLTV1OlQ_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}#B1EMJoQ1dlm_HyB1Sy_g7{-webkit-animation-name: B1EMJoQ1dlm_HyB1Sy_g7_Animation;animation-name: B1EMJoQ1dlm_HyB1Sy_g7_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}#HyHf1o7Jdgm_BJ51Hy_e7{-webkit-animation-name: HyHf1o7Jdgm_BJ51Hy_e7_Animation;animation-name: HyHf1o7Jdgm_BJ51Hy_e7_Animation;-webkit-transform-origin: 50% 50%;transform-origin: 50% 50%;transform-box: fill-box;-webkit-transform: translate(0px, 0px);transform: translate(0px, 0px);}</style>

<g id="rya-yimyOlm_B1ZaQkOxQ" data-animator-group="true" data-animator-type="0"><g id="rya-yimyOlm">

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M47.7,68.8H86" id="B10Z1s7J_e7"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="37.8" y1="68.8" x2="42" y2="68.8" id="SkJzJo71uxm"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-4" y1="68.8" x2="29.8" y2="68.8" id="r1gG1jmyul7"/>

</g></g>

<g id="SkWfyi71ul7_r1LVNydx7" data-animator-group="true" data-animator-type="0"><g id="SkWfyi71ul7">

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M19.1,73.3h38.3" id="S1MfJjQJ_lQ"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.1" y1="73.3" x2="13.3" y2="73.3" id="SkQz1o7yOxm"/>

</g></g>

<g id="B1EMJoQ1dlm_HyB1Sy_g7" data-animator-group="true" data-animator-type="0"><g id="B1EMJoQ1dlm_rJvFVJ_lm" data-animator-group="true" data-animator-type="1"><path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;M21.8,60.5c0,1.5-1.2,2.8-2.8,2.8s-2.8-1.2-2.8-2.8c0-1.5,1.2-2.8,2.8-2.8" id="B1EMJoQ1dlm"/></g></g>

<g id="HyHf1o7Jdgm_BJ51Hy_e7" data-animator-group="true" data-animator-type="0"><g id="HyHf1o7Jdgm_rJccEJulQ" data-animator-group="true" data-animator-type="1"><path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;M67.8,60.5c0,1.5-1.2,2.8-2.8,2.8s-2.8-1.2-2.8-2.8c0-1.5,1.2-2.8,2.8-2.8" id="HyHf1o7Jdgm"/></g></g>

<g id="ByIMkj71deQ_HkLTV1OlQ" data-animator-group="true" data-animator-type="0"><g id="ByIMkj71deQ">

	

		<circle stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="18.7" cy="61.1" r="7.6" id="BJDGJsXydxm"/>

	

		<circle stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="65" cy="61.1" r="7.6" id="rJ_z1iXJOgm"/>

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M6.1,53.9V28.8c0,0,0.2-4.2,3.8-4.3h36.6c0,0,2.6,0.1,3.7,3.3s4.9,12,4.9,12s15.6,0.7,17.7,1c2.1,0.3,2.3,2.3,2.3,2.8s0,1.3,0,1.3&#10;&#9;&#9;s1,0.7,1.1,2.8c0.1,2.1-0.1,7.2-0.3,7.9s-1.9,1.7-2.2,1.8h-0.4c0,0-1.5-5-1.8-5.9c-0.3-0.9-1.1-1.8-3.2-1.8c-2.1,0-8.5,0-8.5,0&#10;&#9;&#9;s-2,1-2.5,3.6c-0.4,2.5-1.3,5.1-1.3,5.1H27.5c0,0-1.6-5.3-2.1-6.8c-0.5-1.4-2.2-2.1-4.6-2.1s-7.5,0-7.5,0s-1.1,0.1-1.5,1.6&#10;&#9;&#9;s-1.7,6-1.7,6S6.1,55.2,6.1,53.9z" id="rytM1iQ1uxX"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.1" y1="29.8" x2="50.9" y2="29.8" id="SJ9fkoQ1dxX"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.1" y1="44.6" x2="67" y2="44.6" id="SyiM1sQ1dlX"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="70.8" y1="44.6" x2="75.2" y2="44.6" id="H1hMJsQy_gX"/>

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M11.1,24.4v-5.6c0,0-0.3-2.2,2.1-2.1c2.4,0.1,12.7,0,12.7,0v7.8" id="B16MJiXJOe7"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="18.7" y1="24.4" x2="18.7" y2="17.2" id="HyAGkjQJdxQ"/>

	

		<polyline stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="&#10;&#9;&#9;25.9,24 25.9,14.6 31.3,14.6 43.8,14.6 43.8,23.6 &#9;" id="HkkXyjXydgm"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="31.3" y1="23.4" x2="31.3" y2="14.9" id="ByeXkj71OxQ"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="38.8" y1="23.4" x2="38.8" y2="14.9" id="rk-X1sXJdl7"/>

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M11.1,30.3v6.3c0,0-0.3,3.3,3.7,3.4S30,40,30,40s4-0.2,3.9-3.1v-6.8" id="rJfXyomydgm"/>

	

		<line stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="22.3" y1="30.1" x2="22.3" y2="39.6" id="rkXQJsXkulQ"/>

	<path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="&#10;&#9;&#9;M38.8,30.1v5.7c0,0-0.3,3.7,3.3,3.8h13.5" id="S1VQJjmJdx7"/>

</g></g>

<script>(function(){var a=document.querySelector('#Hy3-1iXkde7'),b=a.querySelectorAll('style'),c=function(d){b.forEach(function(f){var g=f.textContent;g&amp;&amp;(f.textContent=g.replace(/transform-box:[^;\r\n]*/gi,'transform-box: '+d))})};c('initial'),window.requestAnimationFrame(function(){return c('fill-box')})})();</script></svg></div>

                <div class="home_features_block_text">Multiple Shuttle options</div>

            </div>

        </div>

    </div>

</div>







<?php

	$this->load->view('footer');

?>









</body>

</html>

