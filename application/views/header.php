<?php

 


	$settings = get_instance();



	$page_url_part=$this->uri->segment(1);



?>



<script>

$(window).scroll(function() {

    var scroll = $(window).scrollTop();



    if (scroll >= 50) {

        $(".header").addClass("darkHeader");

    } else {

        $(".header").removeClass("darkHeader");

    }

});

</script>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1214968349365045');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1214968349365045&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<div class="floting_buttons">

<a href="tel:0411 763 520" class="sticky_btn1">Call Now</a>

<a href="https://www.shireprivateairportservices.com.au/book-now" class="sticky_btn2">Book Now</a>

</div>



<header class="header">



	<div class="header_top">



    	<div class="container">



        	<div class="row">



            	<div class="col-md-3 logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>assets/frontend/images/logo.png" alt=""></a></div>



            	<div class="col-md-9 header_top_right">



                	<span>

                        <!--call image goes here-->

                    	<img class="header-img-icon header_phone_svg" src="<?php echo base_url()?>assets/frontend/images/Call-01.svg">


                        <div class="header_top_right_heading">For all Bookings call :</div>



                        <div class="header_top_right_phone"><a href="tel:<?=str_replace(' ','',$settings->getSettingVal('phone_no'))?>"><?=$settings->getSettingVal('phone_no')?></a><br><a class="" href="tel:0430 304 301">0430 304 301</a></div> 



                    </span>



                    <span>

                    	<!--email image goes here-->
                        <img class="header-img-icon" src="<?php echo base_url()?>assets/frontend/images/Message-01.svg">

                        <div class="header_top_right_heading">Email Us :</div>



                        <div class="header_top_right_email"><a href="mailto:<?=$settings->getSettingVal('contact_email')?>"><?=$settings->getSettingVal('contact_email')?></a></div>



                    </span>



                </div>



            </div>



        </div>



    </div>



    <div class="header_bottom">



    	<div class="container">



        	<div class="row">



                
                <div class="col-md-4 header_button_right"><a style="margin-right:10px;" href="<?=base_url()?>pay-now" class="header_button">PAY NOW</a><a href="<?=base_url()?>book-now" class="header_button">BOOK NOW</a></div>



                <div class="col-md-8 navigation_main">



                	<div id="main-nav" class="stellarnav">



                        <ul>



                            <li class="<?php if($page_url_part==''){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>">HOME</a></li>



                            <li class="<?php if($page_url_part=='about-us'){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>about-us">ABOUT US</a></li>



                            <li class="<?php if($page_url_part=='services'){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>services">SERVICES</a></li>
                            
                            <li class="<?php if($page_url_part=='location'){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>location">Location</a>
                            	<!--<ul>-->
                             <!--   	<li><a href="<?=base_url()?>location/wollondilly">Wollondilly</a></li>-->
                             <!--       <li><a href="<?=base_url()?>location/campbelltown">Campbelltown</a></li>-->
                             <!--       <li><a href="<?=base_url()?>location/wollongong">Wollongong</a></li>-->
                             <!--   </ul>-->
                            
                            </li>



                            <!--<li><a class="menu_hover" href="javascript:void(0)">SERVICES</a>



                            	<ul>



                                    <li><a href="#">Airport Transfer</a></li>



                                    <li><a href="#">Cruise Ship Transfer</a></li>



                                    <li><a href="#">Race Day Transfer</a></li>



                                    <li><a href="#">Corporate Transfer</a></li>



                                    <li><a href="#">Event Transfer</a></li>



                                    <li><a href="#">Wedding or Charters</a></li>



                                </ul>



                            </li>-->



                            <li class="<?php if($page_url_part=='fleet'){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>fleet">Fleet</a></li>



                            <li class="<?php if($page_url_part=='contact'){?> active<?php } ?>"><a class="menu_hover" href="<?=base_url()?>contact">CONTACT</a></li>



                        </ul>



                    </div>



                </div>



            </div>



        </div>



    </div>



</header>