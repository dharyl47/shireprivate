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

<!-- <'?=$controllerInstance->getSettingVal('google_analytics_code')?> -->

<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- <'? $this->load->view('header_cdn'); ?>	 -->
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


<?=googleCaptchaScriptBooking()?>
	
<script src='https://www.google.com/recaptcha/api.js'></script>	


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

        <div class="booking_tab_section">

              <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active"><a href="#departure" aria-controls="departure" role="tab" data-toggle="tab"><div class="dep_icon"></div>Departure</a></li>

                <li role="presentation"><a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab"><div class="arri_icon"></div>Arrival</a></li>

              </ul>

              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="departure">

                	<form method="post" action="<?=base_url()?>booknow/departure">

                    <div class="row home_suburb_list" style="margin-top:0;">

                        <ul>

                            <li style="width:100%;">From Sutherland Shire</li>

                          </ul>

                        </div>

                        <div class="booking_form_radio">

                            <span>

                            	<input id="departure_type1" name="departure_type" value="One Way" checked="" type="radio">

                            	<label for="departure_type1">One Way</label>

                            </span>

                            <span>

                                <input id="departure_type2" name="departure_type" value="Two Way" type="radio">

                                <label for="departure_type2">Two Way</label>

                            </span>

                        </div>

                       

                        <div class="row booking_inputs">

                        	<div class="col-md-9 col-sm-12">

                            	<div class="row">

                                <div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="fname" id="fname" placeholder="FIRST NAME*"></div>

                                

                                	<div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="lname" id="lname" placeholder="LAST NAME*"></div>

                                    <div class="col-md-4 col-sm-4"><input type="email" class="form-control" name="email" id="email" placeholder="EMAIL*"></div>

                                    </div>

                                

                                <div class="row">

                                <div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="phone" id="phone"placeholder="PHONE*"></div>

                                	<div class="col-md-4 col-sm-4">
										
										<input type="text" class="form-control" name="pick_up_time" id="pick_up_time" placeholder="PICK UP TIME*">

                                    	<!--<select class="form-control" name="pick_up_time" id="pick_up_time">

                                        	<option value="">PICK UP TIME*</option>

                                            <?php

											$start=strtotime('8:00');

											$end=strtotime('19:00');

											for ($halfhour=$start;$halfhour<=$end;$halfhour=$halfhour+30*60) {

												printf('<option value="%s">%s</option>',date('g:i a',$halfhour),date('g:i a',$halfhour));

											}

											?>

                                        </select>-->

                                    </div>

                                    <div class="col-md-4 col-sm-4"><input type="text" data-language="en"  data-date-format="dd/mm/yyyy" class="datepicker-here form-control" placeholder="PICK UP DATE*"  name="pick_up_date" id="pick_up_date"></div>

                                    

                                </div>

                                <div class="row">

                                <div class="col-md-4 col-sm-4">

  <select class="form-control" name="post_code" id="post_code">

    <option value="">PICKUP PLACE / POSTCODE*</option>

    <option value="Alfords Point - 2234">Alfords Point - 2234</option>

    <option value="Audley - 2232">Audley - 2232</option>

    <option value="Bangor - 2234">Bangor - 2234</option>

    <option value="Barden Ridge - 2234">Barden Ridge - 2234</option>

    <option value="Bonnet Bay - 2226">Bonnet Bay - 2226</option>

    <option value="Bundeena - 2230">Bundeena - 2230</option>

    <option value="Burraneer - 2230">Burraneer - 2230</option>

    <option value="Caringbah - 2229">Caringbah - 2229</option>

    <option value="Caringbah South - 2229">Caringbah South - 2229</option>

    <option value="Como - 2226">Como - 2226</option>

    <option value="Cronulla - 2230">Cronulla - 2230</option>

    <option value="Dolans Bay - 2229">Dolans Bay - 2229</option>

    <option value="Engadine - 2233">Engadine - 2233</option>

    <option value="Garie - 2232">Garie - 2232</option>

    <option value="Grays Point - 2232">Grays Point - 2232</option>

    <option value="Gymea - 2227">Gymea - 2227</option>

    <option value="Gymea Bay - 2227">Gymea Bay - 2227</option>

    <option value="Heathcote - 2233">Heathcote - 2233</option>

    <option value="Illawong - 2234">Illawong - 2234</option>

    <option value="Jannali - 2226">Jannali - 2226</option>

    <option value="Kangaroo Point - 2224">Kangaroo Point - 2224</option>

    <option value="Kareela - 2232">Kareela - 2232</option>

    <option value="Kirrawee - 2232">Kirrawee - 2232</option>

    <option value="Kurnell - 2231">Kurnell - 2231</option>

    <option value="Lilli Pilli - 2229">Lilli Pilli - 2229</option>

    <option value="Loftus - 2232">Loftus - 2232</option>

    <option value="Lucas Heights - 2234">Lucas Heights - 2234</option>

    <option value="Maianbar- 2230">Maianbar- 2230</option>

    <option value="Menai - 2234">Menai - 2234</option>

    <option value="Menai Central - 2234">Menai Central - 2234</option>

    <option value="Miranda - 2228">Miranda - 2228</option>

    <option value="Oyster Bay - 2225">Oyster Bay - 2225</option>

    <option value="Port Hacking - 2229">Port Hacking - 2229</option>

    <option value="Sandy Point - 2172">Sandy Point - 2172</option>

    <option value="Sutherland - 2232">Sutherland - 2232</option>

    <option value="Sylvania - 2224">Sylvania - 2224</option>

    <option value="Sylvania Southgate - 2224">Sylvania Southgate - 2224</option>

    <option value="Sylvania Waters - 2224">Sylvania Waters - 2224</option>

    <option value="Taren Point - 2229">Taren Point - 2229</option>

    <option value="Waterfall - 2233">Waterfall - 2233</option>

    <option value="Woolooware - 2230">Woolooware - 2230</option>

    <option value="Woronora - 2232">Woronora - 2232</option>

    <option value="Woronora Heights - 2233">Woronora Heights - 2233</option>

    <option value="Yarrawarrah - 2233">Yarrawarrah - 2233</option>

    <option value="Yowie Bay - 2228">Yowie Bay - 2228</option>

  </select>

</div>

                                <div class="col-md-4 col-sm-4">

                                    	<select class="form-control" name="destination" id="destination" onChange="selectDestination(this.value)">

                                        	<option value="">DESTINATION*</option>

                                            <option value="Domestic Airport T2 or T3">Domestic Airport T2 or T3</option>

                                            <option value="International Airport T1">International Airport T1</option>

                                            <option value="White Bay Cruise Terminal">White Bay Cruise Terminal</option>

                                            <option value="Circular Bay Cruise Terminal">Circular Bay Cruise Terminal</option>

                                            <option value="Other">Other (Please Specify)</option>

                                        </select>

                                      <script>

									  function selectDestination(val)

									  {

										  if(val=='Other')

										  {

											  $('#destinationDiv').show();

											  $('#other_destination').val('');

										  }

										  else

										  {

											  $('#destinationDiv').hide();

											  $('#other_destination').val(1);

										  }

									  }

									  </script>  

                                        

                                    </div>

                                    

                                	<div class="col-md-4 col-sm-4" id="destinationDiv" style="display:none;"><input type="text" class="form-control" name="other_destination" id="other_destination" placeholder="Please Specify*" value="1"></div>
                                    
                                    <div class="clearfix"></div>
                    
                                    <div class="col-md-5 col-sm-5">
                                      <input type="text" class="form-control" name="flight_no" id="flight_no" placeholder="Flight No">
                                    </div>
                                    
                                    
                                    </div>

                                

                            </div>

                            <div class="col-md-3 col-sm-12"><textarea name="pick_up_address" id="pick_up_address" class="form-control" placeholder="Pick Up Address*"></textarea></div>

                        </div>

                        <div class="booking_inputs_title"><div>No. of Passengers</div></div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Adult: </div>

                            <select class="booking_bottom_inputs" name="adult" id="adult">

                                <?php

                                for($i=1; $i<=10; $i++)

								{

								?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

								}

							   ?>

                            </select>

                        </div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Children: </div>

                            <select class="booking_bottom_inputs" name="children" id="children">

                                <option value="">Select</option>

							   <?php

                                for($i=1; $i<=5; $i++)

                                {

                                ?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

                                }

                               ?>

                            </select> 

                        </div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Infant: </div>

                            <select class="booking_bottom_inputs" name="infant" id="infant">

                                <option value="">Select</option>

							   <?php

                                for($i=1; $i<=5; $i++)

                                {

                                ?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

                                }

                               ?>

                            </select>

                        </div>
                        
                        <div class="row">
              <div class="col-md-3 col-sm-12 booking_inputs" id="cAgeDiv" style="display:none;">
                  <input type="text" name="child_age" id="child_age" class="form-control" placeholder="Children Age.">
                </div>
                <div class="col-md-3 col-sm-12 booking_inputs" id="iAgeDiv" style="display:none;">
                  <input type="text" name="infant_age" id="infant_age" class="form-control" placeholder="Infant Age.">
                </div>
              </div>
              
              <div class="row">
              <div style="clear:both;"></div>
              <div class="col-md-7 col-sm-12 booking_inputs">
                  <textarea name="client_message" id="client_message" class="form-control" placeholder="Message*"></textarea>
                </div>
              
              <div class="booking_inputs_title col-md-12 col-sm-12">
                <div>Do you want a booking or quotation?</div>
              </div>
              <div class="booking_form_radio col-md-4 col-sm-12"> <span>
                <input id="booking_type1" name="booking_type" value="Confirm Booking" checked="" type="radio">
                <label for="booking_type1">Confirm Booking</label>
                </span> <span>
                <input id="booking_type2" name="booking_type" value="Quote" type="radio">
                <label for="booking_type2">Quote</label>
                </span> </div>
                
               </div> 
                        

                        <div class="booking_inputs_bottom">

                        	<button class="booking_submit" type="submit" name="departure_submit">Submit</button>
							<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
				  			<input type="hidden" name="hid_page" value="<?=current_url();?>">

                        </div>

                    </form>

                </div>

                <div role="tabpanel" class="tab-pane fade" id="arrival">

                	<form method="post" action="<?=base_url()?>booknow/arrival"  enctype="multipart/form-data"> 

                    <div class="row home_suburb_list" style="margin-top:0;">

                        <ul>

                            <li style="width:100%;">Back to Sutherland Shire</li>

                          </ul>

                        </div>

                        <div class="booking_form_radio">

                            <span>

                            	<input id="departure_type1_arr" name="departure_type" value="One Way" checked="" type="radio">

                            	<label for="departure_type1_arr">One Way</label>

                            </span>

                            <span>

                                <input id="departure_type2_arr" name="departure_type" value="Two Way" type="radio">

                                <label for="departure_type2_arr">Two Way</label>

                            </span>

                        </div>

                       

                        <div class="row booking_inputs">

                        	<div class="col-md-9 col-sm-12">

                            	<div class="row">

                                <div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="fname" id="arr_fname" placeholder="FIRST NAME*"></div>

                                

                                	<div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="lname" id="arr_lname" placeholder="LAST NAME*"></div>

                                    <div class="col-md-4 col-sm-4"><input type="email" class="form-control" name="email" id="arr_email" placeholder="EMAIL*"></div>

                                    </div>

                                

                                <div class="row">

                                <div class="col-md-4 col-sm-4"><input type="text" class="form-control" name="phone" id="arr_phone"placeholder="PHONE*"></div>

                                	<div class="col-md-4 col-sm-4">
										
										<input type="text" class="form-control" name="pick_up_time" id="arr_pick_up_time"placeholder="PICK UP TIME*">

                                    	<!--<select class="form-control" name="pick_up_time" id="arr_pick_up_time">

                                        	<option value="">PICK UP TIME*</option>

                                            <?php

											$start=strtotime('8:00');

											$end=strtotime('19:00');

											for ($halfhour=$start;$halfhour<=$end;$halfhour=$halfhour+30*60) {

												printf('<option value="%s">%s</option>',date('g:i a',$halfhour),date('g:i a',$halfhour));

											}

											?>

                                        </select>-->

                                    </div>

                                    <div class="col-md-4 col-sm-4"><input type="text" data-language="en" class="datepicker-here form-control" placeholder="PICK UP DATE*"  data-date-format="dd/mm/yyyy"  name="pick_up_date" id="arr_pick_up_date"></div>

                                    

                                </div>

                                <div class="row">

                                <div class="col-md-4 col-sm-4">

                                  <select class="form-control" name="post_code" id="arr_post_code" onChange="selectArrivalDestination(this.value)">
                                    <option value="">PICKUP PLACE *</option>
                                    <option value="Domestic Airport T2 or T3">Domestic Airport T2 or T3</option>
                                    <option value="International Airport T1">International Airport T1</option>
                                    <option value="White Bay Cruise Terminal">White Bay Cruise Terminal</option>
                                    <option value="Circular Bay Cruise Terminal">Circular Bay Cruise Terminal</option>
                                    <option value="Other">Other (Please Specify)</option>
                                    
                                
                                  </select>
                                  
                                  <script>

									  function selectArrivalDestination(val)

									  {

										  if(val=='Other')

										  {

											  $('#destinationArrivalDiv').show();

											  $('#arr_other_destination').val('');

										  }

										  else



										  {

											  $('#destinationArrivalDiv').hide();

											  $('#arr_other_destination').val(1);

										  }

									  }

									  </script>  

</div>

<div class="col-md-4 col-sm-4" id="destinationArrivalDiv" style="display:none;"><input type="text" class="form-control" name="other_destination" id="arr_other_destination" placeholder="Please Specify Pickup Location*" value="1"></div>

                                <div class="col-md-4 col-sm-4">

                                    	<select class="form-control" name="destination" id="arr_destination">

                                        	<option value="">DESTINATION*</option>

                                            <option value="Alfords Point - 2234">Alfords Point - 2234</option>

    <option value="Audley - 2232">Audley - 2232</option>

    <option value="Bangor - 2234">Bangor - 2234</option>

    <option value="Barden Ridge - 2234">Barden Ridge - 2234</option>

    <option value="Bonnet Bay - 2226">Bonnet Bay - 2226</option>

    <option value="Bundeena - 2230">Bundeena - 2230</option>

    <option value="Burraneer - 2230">Burraneer - 2230</option>

    <option value="Caringbah - 2229">Caringbah - 2229</option>

    <option value="Caringbah South - 2229">Caringbah South - 2229</option>

    <option value="Como - 2226">Como - 2226</option>

    <option value="Cronulla - 2230">Cronulla - 2230</option>

    <option value="Dolans Bay - 2229">Dolans Bay - 2229</option>

    <option value="Engadine - 2233">Engadine - 2233</option>

    <option value="Garie - 2232">Garie - 2232</option>

    <option value="Grays Point - 2232">Grays Point - 2232</option>

    <option value="Gymea - 2227">Gymea - 2227</option>

    <option value="Gymea Bay - 2227">Gymea Bay - 2227</option>

    <option value="Heathcote - 2233">Heathcote - 2233</option>

    <option value="Illawong - 2234">Illawong - 2234</option>

    <option value="Jannali - 2226">Jannali - 2226</option>

    <option value="Kangaroo Point - 2224">Kangaroo Point - 2224</option>

    <option value="Kareela - 2232">Kareela - 2232</option>

    <option value="Kirrawee - 2232">Kirrawee - 2232</option>

    <option value="Kurnell - 2231">Kurnell - 2231</option>

    <option value="Lilli Pilli - 2229">Lilli Pilli - 2229</option>

    <option value="Loftus - 2232">Loftus - 2232</option>

    <option value="Lucas Heights - 2234">Lucas Heights - 2234</option>

    <option value="Maianbar- 2230">Maianbar- 2230</option>

    <option value="Menai - 2234">Menai - 2234</option>

    <option value="Menai Central - 2234">Menai Central - 2234</option>

    <option value="Miranda - 2228">Miranda - 2228</option>

    <option value="Oyster Bay - 2225">Oyster Bay - 2225</option>

    <option value="Port Hacking - 2229">Port Hacking - 2229</option>

    <option value="Sandy Point - 2172">Sandy Point - 2172</option>

    <option value="Sutherland - 2232">Sutherland - 2232</option>

    <option value="Sylvania - 2224">Sylvania - 2224</option>

    <option value="Sylvania Southgate - 2224">Sylvania Southgate - 2224</option>

    <option value="Sylvania Waters - 2224">Sylvania Waters - 2224</option>

    <option value="Taren Point - 2229">Taren Point - 2229</option>

    <option value="Waterfall - 2233">Waterfall - 2233</option>

    <option value="Woolooware - 2230">Woolooware - 2230</option>

    <option value="Woronora - 2232">Woronora - 2232</option>

    <option value="Woronora Heights - 2233">Woronora Heights - 2233</option>

    <option value="Yarrawarrah - 2233">Yarrawarrah - 2233</option>

    <option value="Yowie Bay - 2228">Yowie Bay - 2228</option>
                                            
                                            

                                        </select>

                                      

                                        

                                    </div>

                                    

                                	
                                    
                                    
                                    <div class="clearfix"></div>
                    
                    <div class="col-md-5 col-sm-5">
                      <input type="text" class="form-control" name="flight_no" id="arr_flight_no" placeholder="Flight No">
                    </div>
                    
                    <div style="padding-top: 15px;font-size: 16px;text-transform: uppercase;" class="col-md-4 col-sm-4">Attach your plane ticket:<span style="font-size: 11px;color: red;">(.jpg, .png)</span></div>
                    <div class="col-md-3 col-sm-3">
                      <input type="file" name="plane_ticket" id="plane_ticket" class="" style="padding-top: 15px;">
                    </div>
                                    
                                    
                                    
                                    
                                    </div>

                                

                            </div>

                            <div class="col-md-3 col-sm-12"><textarea name="pick_up_address" id="arr_pick_up_address" class="form-control" placeholder="Pick Up Address*"></textarea></div>

                        </div>

                        <div class="booking_inputs_title"><div>No. of Passengers</div></div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Adult: </div>

                            <select class="booking_bottom_inputs" name="adult" id="arr_adult">

                                <?php

                                for($i=1; $i<=10; $i++)

								{

								?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

								}

							   ?>

                            </select>

                        </div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Children: </div>

                            <select class="booking_bottom_inputs" name="children" id="arr_children">

                                <option value="">Select</option>

							   <?php

                                for($i=1; $i<=5; $i++)

                                {

                                ?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

                                }

                               ?>

                            </select> 

                        </div>

                        <div class="booking_inputs_bottom">

                        	<div class="booking_inputs_bottom_text">Infant: </div>

                            <select class="booking_bottom_inputs" name="infant" id="arr_infant">

                                <option value="">Select</option>

							   <?php

                                for($i=1; $i<=5; $i++)

                                {

                                ?>

                                <option value="<?=$i?>"><?=$i?></option>

                               <?php

                                }

                               ?>

                            </select>

                        </div>
                        
                        <div class="row">
              <div class="col-md-3 col-sm-12 booking_inputs" id="arr_cAgeDiv" style="display:none;">
                  <input type="text" name="child_age" id="child_age" class="form-control" placeholder="Children Age.">
                </div>
                <div class="col-md-3 col-sm-12 booking_inputs" id="arr_iAgeDiv" style="display:none;">
                  <input type="text" name="infant_age" id="infant_age" class="form-control" placeholder="Infant Age.">
                </div>
              </div>
              
              
              <div class="row">
              <div style="clear:both;"></div>
              <div class="col-md-7 col-sm-12 booking_inputs">
                  <textarea name="client_message" id="arr_client_message" class="form-control" placeholder="Message*"></textarea>
                </div>
              
              <div class="booking_inputs_title col-md-12 col-sm-12">
                <div>Do you want a booking or quotation?</div>
              </div>
              <div class="booking_form_radio col-md-4 col-sm-12"> <span>
                <input id="booking_type11" name="arr_booking_type" value="Confirm Booking" checked="" type="radio">
                <label for="booking_type11">Confirm Booking</label>
                </span> <span>
                <input id="booking_type21" name="arr_booking_type" value="Quote" type="radio">
                <label for="booking_type21">Quote</label>
                </span> </div>
                
               </div> 

                        <div class="booking_inputs_bottom">

                        	<button class="booking_submit" type="submit" name="arrival_submit">Submit</button>
							<input type="hidden" name="recaptcha_response" id="recaptchaResponse1">
				  			<input type="hidden" name="hid_page" value="<?=current_url();?>">

                        </div>

                    </form>

                </div>

              </div>

        </div>

    </div>
<div class="home_suburb_section">
  <div class="container">
    <div class="home_suburb_section_heading">We provide quick and reliable end-to-end airport shuttle services in Sutherland to save your time and elevate your comfort.<br>
      We cover areas such as</div>
    <div class="row home_suburb_list">
      <ul>
          <?php foreach($locationList->result() as $locRow) { ?>
         <li><a href="<?=base_url()?><?php echo $locRow->slug?>"><?php echo $locRow->name?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>

</div>


<div class="clearfix">&nbsp;</div>




<?php

	$this->load->view('footer');

?>



<!---------------- For Validation ------------------------------>

 <link rel="stylesheet" type="text/css" href="<?=base_url()?>validation/jquery.validate.css" />

        <script src="<?=base_url()?>validation/jquery.validate.js" type="text/javascript"></script>

        <script src="<?=base_url()?>validation/jquery.validation.functions.js" type="text/javascript"></script>

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

                

                jQuery("#email").validate({

                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",

                    message: "Please enter a valid Email ID"

                });

				

				 jQuery("#pick_up_date").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter the Pick Up Date"

                });

                jQuery("#phone").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter the Contact No"

                });

				jQuery("#pick_up_address").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Pick Up Address"

                });

				

				jQuery("#pick_up_time").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Pick Up Time"

                });
				
				jQuery("#flight_no").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Flight No"

                });

				jQuery("#destination").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Destination"

                });

				

				jQuery("#other_destination").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please specify your Destination"

                });

				

				jQuery("#post_code").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Place / Postcode"

                });
				jQuery("#client_message").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Message"

                });

				

				
			$("#children").change(function() {
						   var noc=$("#children").val(); 
						   if(noc>0)
						   {
							   $("#cAgeDiv").show();
						   }
						   else
						   {
							   $("#cAgeDiv").hide();
						   }
						});
						
						$("#infant").change(function() {
						   var noc=$("#infant").val(); 
						   if(noc>0)
						   {
							   $("#iAgeDiv").show();
						   }
						   else
						   {
							   $("#iAgeDiv").hide();
						   }
						});
				

				
					
				

				// For Arrival

				

				jQuery("#arr_fname").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your First Name"

                });

				

				jQuery("#arr_lname").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Last Name"

                });
				
				
				jQuery("#arr_flight_no").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Flight No"

                });

                

                jQuery("#arr_email").validate({

                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",

                    message: "Please enter a valid Email ID"

                });

				

				 jQuery("#arr_pick_up_date").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter the Pick Up Date"

                });

                jQuery("#arr_phone").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter the Contact No"

                });

				jQuery("#arr_pick_up_address").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please enter your Pick Up Address"

                });

				

				jQuery("#arr_pick_up_time").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Pick Up Time"

                });

				jQuery("#arr_destination").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Destination"

                });

				

				jQuery("#arr_other_destination").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please specify your Pickup Location"

                });

				jQuery("#arr_post_code").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Pickup Place"

                });

				jQuery("#arr_client_message").validate({

                    expression: "if (VAL) return true; else return false;",

                    message: "Please select your Message"

                });
				
				

				

				

            });
			
			
			$("#arr_children").change(function() {
               var noc=$("#arr_children").val(); 
			   if(noc>0)
			   {
				   $("#arr_cAgeDiv").show();
			   }
			   else
			   {
				   $("#arr_cAgeDiv").hide();
			   }
            });
			
			$("#arr_infant").change(function() {
               var noc=$("#arr_infant").val(); 
			   if(noc>0)
			   {
				   $("#arr_iAgeDiv").show();
			   }
			   else
			   {
				   $("#arr_iAgeDiv").hide();
			   }
            });

            /* ]]> */

</script>





</body>

</html>

