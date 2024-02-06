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


<?=googleCaptchaScriptBooking()?>
	
<script src='https://www.google.com/recaptcha/api.js'></script>	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>


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
      <div class="home_book_section_heading">Book Now</div>
      <div class="booking_tab_section">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#departure" aria-controls="departure" role="tab" data-toggle="tab">
            <div class="dep_icon"></div>
            Departure</a></li>
          <li role="presentation"><a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">
            <div class="arri_icon"></div>
            Arrival</a></li>
        </ul>
        <div class="tab-content">
			<!-- <div style="color:red;font-size: 14px; margin-top: 10px;"></?=$_SESSION['captcha_error']?></div> -->
          <div role="tabpanel" class="tab-pane active" id="departure">
            <form method="post" action="<?=base_url()?>booknow/departure">
              <div class="row home_suburb_list" style="margin-top:0;">
                <ul>
                  <li style="width:100%;">From Sutherland Shire</li>
                </ul>
              </div>
              <div class="booking_form_radio"> <span>
                <input id="departure_type1" name="departure_type" value="One Way" checked="" type="radio">
                <label for="departure_type1">One Way</label>
                </span> <span>
                <input id="departure_type2" name="departure_type" value="Two Way" type="radio">
                <label for="departure_type2">Two Way</label>
                </span> </div>
              <div class="row booking_inputs">
                <div class="col-md-9 col-sm-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="fname" id="fname" placeholder="FIRST NAME*">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="lname" id="lname" placeholder="LAST NAME*">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="phone" id="phone"placeholder="PHONE*">
                    </div>
                    <div class="col-md-4 col-sm-4">
						        <input type="time" class="form-control" name="pick_up_time" id="arr_pick_up_time" placeholder="PICK UP TIME*" autocomplete="off">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" data-language="en" class="datepicker-here form-control" data-date-format="dd/mm/yyyy" placeholder="PICK UP DATE*"  name="pick_up_date" id="pick_up_date">
                    </div>
                  </div>

<script>
  $(document).ready(function(){
    $('.timepicker').timepicker({
      showMeridian: false,
      minuteStep: 1,
      defaultTime: false
    });
  });
</script>









<div class="booking_inputs_title">
    <div>No. of Passengers</div>
</div>
<div class="booking_inputs_bottom">
    <div class="booking_inputs_bottom_text">Adult: </div>
    <select class="booking_bottom_inputs" name="adult" id="adult">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
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
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
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
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
            <?php
        }
        ?>
    </select>
   
</div>

 <div class="child-seat-options" style="display: none;"><br/>
        <label>
            <input type="checkbox" name="require_child_seat" id="require_child_seat">Would you require a child seat?
        </label>
        <div class="additional-options" style="display: none;">
            <label>
                <input type="checkbox" name="rear_facing_seat">Rear Facing Seat
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
                <input type="checkbox" name="forward_facing_seat">Forward Facing Seat with Harness
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
                
                <input type="checkbox" name="booster_seat">Booster Seat
            </label>
        </div>
    </div>



<div class="extra_luggage_options">
    <br/>
    <!-- Add a checkbox to show additional options -->
    <label>
        <input type="checkbox" name="show_additional_options" id="show_additional_options"> Extra Luggage Charges
    </label><br>

    <!-- Additional options hidden by default -->
    <div id="additional_options" style="display: none;">
        <label>
            <input type="checkbox" name="surfboards" id="surfboards"> Surfboards
        </label>
        <label>
            <input type="checkbox" name="golf_clubs" id="golf_clubs"> Golf Clubs
        </label>
        <label>
            <input type="checkbox" name="skis" id="skis"> Skis
        </label><br>
        <label>
            <input type="checkbox" name="snowboards" id="snowboards"> Snowboards
        </label>
        <label>
            <input type="checkbox" name="prams" id="prams"> Prams
        </label>
        <label>
            <input type="checkbox" name="bike_cases" id="bike_cases"> Bike Cases
        </label>
        <label>
            <input type="checkbox" name="other_items" id="other_items"> Other Items
            <input type="text" name="other_items_text" id="other_items_text" placeholder="Enter items">
        </label><br>
    </div>
</div>












                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <select class="form-control" name="post_code" id="post_code" onChange="selectDestination(this.value)">
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
                        <option value="Domestic Airport T2 and T3">Domestic Airport T2 and T3</option>
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
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="passengersTotal" id="passengersTotal" placeholder="Passengers" style="width: 500px; display: none" disabled>
    <input type="text" class="form-control" name="quotation" id="quotation" placeholder="Quotation" disabled>
    <input type="hidden" name="total_quotation" id="total_quotation">

   

</div>


                    <div class="col-md-4 col-sm-4" id="destinationDiv" style="display:none;">
                      <input type="text" class="form-control" name="other_destination" id="other_destination" placeholder="Please Specify*" value="1">
                    </div>
                     <div class="col-md-5 col-sm-5">
                        <br/>
<!-- Add the following HTML for the additional stops -->
<div id="additional_stops" style="display: flex; flex-direction: column; align-items: left; background-color: #DD882F; width: 313px;">
  <div id="add_stop_icon" style="cursor: pointer; padding: 5px; border: 1px solid #000; color: #ffffff;">Additional Stops (Click to add more)</div>
<!-- Add 10 hidden text fields -->

  <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_1" name="departure_stop_1" placeholder="Stop 1" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
    <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_2" name="departure_stop_2" placeholder="Stop 2" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_3" name="departure_stop_3" placeholder="Stop 3" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_4" name="departure_stop_4" placeholder="Stop 4" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_5" name="departure_stop_5" placeholder="Stop 5" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfield" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfield" id="departure_stop_6" name="departure_stop_6" placeholder="Stop 6" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stop" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
  <!-- Repeat the above div for 9 more stops -->
</div>
</div>

                    <div class="clearfix"></div>
                    
                    
                    <div class="col-md-5 col-sm-5">
                      <input type="text" class="form-control" name="flight_no" id="flight_no" placeholder="Flight No">
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-3 col-sm-12">
                  <textarea name="pick_up_address" id="pick_up_address" class="form-control" placeholder="Pick Up Address*"></textarea>
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
				  <!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse"> -->
				  <!-- <input type="hidden" name="hid_page" value="<?=current_url();?>"> -->
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="arrival">
            <form method="post" action="<?=base_url()?>booknow/arrival" enctype="multipart/form-data">
              <div class="row home_suburb_list" style="margin-top:0;">
                <ul>
                  <li style="width:100%;">Back to Sutherland Shire</li>
                </ul>
              </div>
              <div class="booking_form_radio"> <span>
                <input id="departure_type1_arr" name="departure_type" value="One Way" checked="" type="radio">
                <label for="departure_type1_arr">One Way</label>
                </span> <span>
                <input id="departure_type2_arr" name="departure_type" value="Two Way" type="radio">
                <label for="departure_type2_arr">Two Way</label>
                </span> </div>
              <div class="row booking_inputs">
                <div class="col-md-9 col-sm-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="fnameArrival" id="arr_fname" placeholder="FIRST NAME*">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="lnameArrival" id="arr_lname" placeholder="LAST NAME*">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control" name="emailArrival" id="arr_email" placeholder="EMAIL*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="phoneArrival" id="arr_phone" placeholder="PHONE*">
                    </div>
                    <div class="col-md-4 col-sm-4">
						 <input type="time" class="form-control" name="pick_up_timeArrival" id="arr_pick_up_timeArrival" placeholder="PICK UP TIME*" autocomplete="off">
                   
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" data-language="en" class="datepicker-here form-control" placeholder="PICK UP DATE*"  name="pick_up_dateArrival" id="arr_pick_up_dateArrival" data-date-format="dd/mm/yyyy">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <select class="form-control" name="destinationArrival" id="destinationArrival" onChange="selectDestinationArrival(this.value)">
                        <option value="">DESTINATION*</option>
                        <option value="Domestic Airport T2 and T3">Domestic Airport T2 and T3</option>
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
                    <div class="col-md-4 col-sm-4" id="destinationArrivalDiv" style="display:none;">
                      <input type="text" class="form-control" name="other_destination" id="arr_other_destination" placeholder="Please Specify Pickup Location*" value="1">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select class="form-control" name="post_codeArrival" id="post_codeArrival" onChange="selectDestinationArrival(this.value)">
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
                    
                    
                    <div class="clearfix"></div>
                     <div class="col-md-5 col-sm-5">
                        <br/>
<!-- Add the following HTML for the additional stops -->
<div id="additional_stopsArrival" style="display: flex; flex-direction: column; align-items: left; background-color: #DD882F; width: 313px;">
  <div id="add_stop_iconArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; color: #ffffff;">Additional Stops (Click to add more)</div>
<!-- Add 10 hidden text fields -->

  <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival" id="arrival_stop_1" name="arrival_stop_1" placeholder="Stop 1" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
    <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival" id="arrival_stop_2" name="arrival_stop_2" placeholder="Stop 2" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival" id="arrival_stop_3" name="arrival_stop_3" placeholder="Stop 3" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival"  id="arrival_stop_4" name="arrival_stop_4" placeholder="Stop 4" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival"  id="arrival_stop_5" name="arrival_stop_5" placeholder="Stop 5" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
   <div class="hidden_textfieldArrival" style="display: none; margin-bottom: 10px; width: 500px;">
  <br/>
    <input type="text" class="stop_textfieldArrival"  id="arrival_stop_6" name="arrival_stop_6" placeholder="Stop 6" style="margin-bottom: 5px; margin-left: 5px; height: 40px; width: 273px;">
    <span class="remove_stopArrival" style="cursor: pointer; padding: 5px; border: 1px solid #000; background-color: #fff; color: #000;">x</span>
  </div>
  <!-- Repeat the above div for 9 more stops -->
</div>
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
                <div class="col-md-3 col-sm-12">
                  <textarea name="pick_up_addressArrival" id="arr_pick_up_address" class="form-control" placeholder="Pick Up Address*"></textarea>
                </div>
              </div>








   <input type="text" class="form-control" name="passengersTotalArrival" id="passengersTotalArrival" placeholder="Passengers" style="width: 500px; display: none" disabled>
    
    <input type="hidden" name="total_quotationArrival" id="total_quotationArrival">












              <div class="booking_inputs_title">
    <div>No. of Passengers</div>
</div>
<div class="booking_inputs_bottom">
    <div class="booking_inputs_bottom_text">Adult: </div>
    <select class="booking_bottom_inputs" name="adultArrival" id="adultArrival">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
            <?php
        }
        ?>
    </select>
</div>
<div class="booking_inputs_bottom">
    <div class="booking_inputs_bottom_text">Children: </div>
    <select class="booking_bottom_inputs" name="childrenArrival" id="childrenArrival">
        <option value="">Select</option>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
            <?php
        }
        ?>
    </select>
</div>
<div class="booking_inputs_bottom">
    <div class="booking_inputs_bottom_text">Infant: </div>
    <select class="booking_bottom_inputs" name="infantArrival" id="infantArrival">
        <option value="">Select</option>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <option value="<?= $i ?>">
                <?= $i ?>
            </option>
            <?php
        }
        ?>
    </select>
   
</div>

 <div class="child-seat-optionsArrival" style="display: none;"><br/>
        <label>
            <input type="checkbox" name="require_child_seatArrival" id="require_child_seatArrival">Would you require a child seat?
        </label>
        <div class="additional-optionsArrival" style="display: none;">
            <label>
                <input type="checkbox" name="rear_facing_seatArrival">Rear Facing Seat
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
                <input type="checkbox" name="forward_facing_seatArrival">Forward Facing Seat with Harness
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
                
                <input type="checkbox" name="booster_seatArrival">Booster Seat
            </label>
        </div>
    </div>



<div class="extra_luggage_optionsArrival">
    <br/>
    <!-- Add a checkbox to show additional options -->
    <label>
        <input type="checkbox" name="show_additional_optionsArrival" id="show_additional_optionsArrival"> Extra Luggage Charges
    </label><br>

    <!-- Additional options hidden by default -->
    <div id="additional_optionsArrival" style="display: none;">
        <label>
            <input type="checkbox" name="surfboardsArrival" id="surfboardsArrival"> Surfboards
        </label>
        <label>
            <input type="checkbox" name="golf_clubsArrival" id="golf_clubsArrival"> Golf Clubs
        </label>
        <label>
            <input type="checkbox" name="skisArrival" id="skisArrival"> Skis
        </label><br>
        <label>
            <input type="checkbox" name="snowboardsArrival" id="snowboardsArrival"> Snowboards
        </label>
        <label>
            <input type="checkbox" name="pramsArrival" id="pramsArrival"> Prams
        </label>
        <label>
            <input type="checkbox" name="bike_casesArrival" id="bike_casesArrival"> Bike Cases
        </label>
        <label>
            <input type="checkbox" name="other_itemsArrival" id="other_itemsArrival"> Other Items
            <input type="text" name="other_items_textArrival" id="other_items_textArrival" placeholder="Enter items">
        </label><br>
    </div>
</div>
              
               <div class="booking_inputs_bottom">
              <input type="text" class="form-control" name="quotationArrival" id="quotationArrival" placeholder="Quotation" disabled>
    </div>
              <div class="row">
              <div style="clear:both;"></div>
             
              <div class="col-md-7 col-sm-12 booking_inputs">
                  <textarea name="client_messageArrival" id="arr_client_message" class="form-control" placeholder="Message*"></textarea>
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
				  <!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse1"> -->
				  <input type="hidden" name="hid_page" value="<?=current_url();?>">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

<script>
   var totalQuotation = 0; // Initialize the global variable
  document.addEventListener('DOMContentLoaded', function () {






 $('#add_stop_icon').on('click', function() {
      // Find the first hidden text field and show it
      $('.hidden_textfield:hidden:first').show();
      recalculateQuotation(); // Recalculate quotation on adding a stop
    });

    // Function to handle the click event for the "x" icon
    $('#additional_stops').on('click', '.remove_stop', function() {
      // Hide the parent text field and clear its value
      var parentDiv = $(this).closest('.hidden_textfield');
      parentDiv.hide().find('.stop_textfield').val('');
      recalculateQuotation(); // Recalculate quotation on removing a stop
    });

    // Function to recalculate the quotation based on the stops
    function recalculateQuotation() {
      var additionalStopCount = $('.hidden_textfield:visible').length;

      recalculateExtraLuggageCharge();
      
      //totalQuotation += additionalStopCount * 10;
      // Add the totalQuotation to your existing calculation logic
      // ...
      updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), totalQuotation, "departure");
    }









$('#add_stop_iconArrival').on('click', function() {
      // Find the first hidden text field and show it
      $('.hidden_textfieldArrival:hidden:first').show();
      recalculateQuotationArrival(); // Recalculate quotation on adding a stop
    });

    // Function to handle the click event for the "x" icon
    $('#additional_stopsArrival').on('click', '.remove_stopArrival', function() {
      // Hide the parent text field and clear its value
      var parentDiv = $(this).closest('.hidden_textfieldArrival');
      parentDiv.hide().find('.stop_textfieldArrival').val('');
      recalculateQuotationArrival(); // Recalculate quotation on removing a stop
    });

    // Function to recalculate the quotation based on the stops
    function recalculateQuotationArrival() {
      var additionalStopCount = $('.hidden_textfieldArrival:visible').length;

      recalculateExtraLuggageChargeArrival();
      
      //totalQuotation += additionalStopCount * 10;
      // Add the totalQuotation to your existing calculation logic
      // ...
      updateQuotation($('#destinationArrival').val(), $('#post_codeArrival').val(), $('#passengersTotalArrival').val(), totalQuotation, "arrival");
    }











    

    function recalculateExtraLuggageCharge() {  
        var extraLuggageCharge = 0;
        totalQuotation = 0; 
           var additionalStopCount = $('.hidden_textfield:visible').length;
      totalQuotation = additionalStopCount * 10;
        // Check the status of each checkbox
        if ($('#surfboards').prop('checked')) extraLuggageCharge += 10;
        if ($('#golf_clubs').prop('checked')) extraLuggageCharge += 10;
        if ($('#skis').prop('checked')) extraLuggageCharge += 10;
        if ($('#snowboards').prop('checked')) extraLuggageCharge += 10;
        if ($('#prams').prop('checked')) extraLuggageCharge += 10;
        if ($('#bike_cases').prop('checked')) extraLuggageCharge += 10;
        if ($('#other_items').prop('checked') && $('#other_items_text').val() !== '') extraLuggageCharge += 10;

        // Deduct 10 for each previously checked and now unchecked checkbox
       

        // Add the recalculated extra luggage charge to the total quotation
        totalQuotation += extraLuggageCharge;

        // Check if the time is between 23:00 and 05:00 and add an additional charge of +35
    var pickupTime = $('#arr_pick_up_time').val();
    console.log(pickupTime)
    var pickupHour = parseInt(pickupTime.split(':')[0], 10);

    if (pickupHour >= 23 || pickupHour < 5) {
        totalQuotation += 35;
    }

        // Reset the quotation field
      //  $('#quotation').val('$' + totalQuotation.toFixed(2));

        updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), totalQuotation , "departure");
    }
       

    // ... rest of your code

    // Event listener for showing/hiding additional options
    $('#show_additional_options').change(function () {
        $('#additional_options').toggle(this.checked);
        // Trigger recalculation when showing/hiding
        recalculateExtraLuggageCharge();
    });

    // Event listener for extra luggage options
    $('#additional_options :checkbox, #other_items_text').change(function () {
        // Trigger recalculation when any option is changed
        recalculateExtraLuggageCharge();
    });
 $('#arr_pick_up_time').change(function() {
        recalculateExtraLuggageCharge();
    });

   $('#show_additional_options').change(function () {
            $('#additional_options').toggle(this.checked);
        });




    // Bind change events to update functions
    $('#adult, #children, #infant').change(function() {
        updatePassengers();
         recalculateExtraLuggageCharge();
       // updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), 0);
    });

    $('#post_code').change(function() {
       recalculateExtraLuggageCharge();
        //updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), 0);
    });


        // Bind change events to update functions
    $('#adultArrival, #childrenArrival, #infantArrival').change(function() {
        updatePassengersArrival();
         recalculateExtraLuggageChargeArrival();
       // updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), 0);
    });

    $('#post_codeArrival').change(function() {
       recalculateExtraLuggageChargeArrival();
        //updateQuotation($('#destination').val(), $('#post_code').val(), $('#passengersTotal').val(), 0);
    });




function recalculateExtraLuggageChargeArrival() {  
        var extraLuggageCharge = 0;
        totalQuotation = 0; 

         var additionalStopCountArrival = $('.hidden_textfieldArrival:visible').length;
      totalQuotation = additionalStopCountArrival * 10;
        // Check the status of each checkbox
        if ($('#surfboardsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#golf_clubsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#skisArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#snowboardsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#pramsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#bike_casesArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#other_itemsArrival').prop('checked') && $('#other_items_textArrival').val() !== '') extraLuggageCharge += 10;

        // Deduct 10 for each previously checked and now unchecked checkbox
       

        // Add the recalculated extra luggage charge to the total quotation
        totalQuotation += extraLuggageCharge;

        // Check if the time is between 23:00 and 05:00 and add an additional charge of +35
    var pickupTime = $('#arr_pick_up_timeArrival').val();
    console.log(pickupTime)
    var pickupHour = parseInt(pickupTime.split(':')[0], 10);

    if (pickupHour >= 23 || pickupHour < 5) {
        totalQuotation += 35;
    }

        // Reset the quotation field
      //  $('#quotation').val('$' + totalQuotation.toFixed(2));

        updateQuotation($('#destinationArrival').val(), $('#post_codeArrival').val(), $('#passengersTotalArrival').val(), totalQuotation, "arrival");
    }
       

    // ... rest of your code

    // Event listener for showing/hiding additional options
    $('#show_additional_optionsArrival').change(function () {
        $('#additional_optionsArrival').toggle(this.checked);
        // Trigger recalculation when showing/hiding
        recalculateExtraLuggageChargeArrival();
    });

    // Event listener for extra luggage options
    $('#additional_optionsArrival :checkbox, #other_items_textArrival').change(function () {
        // Trigger recalculation when any option is changed
        recalculateExtraLuggageChargeArrival();
    });
 $('#arr_pick_up_timeArrival').change(function() {
        recalculateExtraLuggageChargeArrival();
    });

   $('#show_additional_optionsArrival').change(function () {
            $('#additional_optionsArrival').toggle(this.checked);
        });






      var infantSelectArrival = document.getElementById('infantArrival');
        var childSeatOptionsArrival = document.querySelector('.child-seat-optionsArrival');
        var additionalOptionsArrival = document.querySelector('.additional-optionsArrival');

        infantSelectArrival.addEventListener('change', function () {
            if (infantSelectArrival.value !== '') {
                childSeatOptionsArrival.style.display = 'block';
            } else {
                childSeatOptionsArrival.style.display = 'none';
                additionalOptionsArrival.style.display = 'none';
            }
        });

        var requireChildSeatCheckboxArrival = document.getElementById('require_child_seatArrival');
        requireChildSeatCheckboxArrival.addEventListener('change', function () {
            if (requireChildSeatCheckboxArrival.checked) {
                additionalOptionsArrival.style.display = 'block';
            } else {
                additionalOptionsArrival.style.display = 'none';
            }
        });
    











        var infantSelect = document.getElementById('infant');
        var childSeatOptions = document.querySelector('.child-seat-options');
        var additionalOptions = document.querySelector('.additional-options');

        infantSelect.addEventListener('change', function () {
            if (infantSelect.value !== '') {
                childSeatOptions.style.display = 'block';
            } else {
                childSeatOptions.style.display = 'none';
                additionalOptions.style.display = 'none';
            }
        });

        var requireChildSeatCheckbox = document.getElementById('require_child_seat');
        requireChildSeatCheckbox.addEventListener('change', function () {
            if (requireChildSeatCheckbox.checked) {
                additionalOptions.style.display = 'block';
            } else {
                additionalOptions.style.display = 'none';
            }
        });
    });


    function updatePassengers() {
        var adult = parseInt($('#adult').val()) || 0; // Default to 0 if NaN
        var children = parseInt($('#children').val()) || 0; // Default to 0 if NaN
        var infant = parseInt($('#infant').val()) || 0; // Default to 0 if NaN
        var totalPassengers = adult + children + infant;
        $('#passengersTotal').val('(FOR TESTING FIELD) Total Passenger: '+totalPassengers);
    }
    function updatePassengersArrival() {
        var adult = parseInt($('#adultArrival').val()) || 0; // Default to 0 if NaN
        var children = parseInt($('#childrenArrival').val()) || 0; // Default to 0 if NaN
        var infant = parseInt($('#infantArrival').val()) || 0; // Default to 0 if NaN
        var totalPassengers = adult + children + infant;
        $('#passengersTotalArrival').val('(FOR TESTING FIELD) Total Passenger: '+totalPassengers);
    }
    

    function updateQuotation(destination, pickupPlace, passengers, luggage, type) {
      var adult, children, infant, totalPassengers;

    if (type === 'departure') {
        adult = parseInt($('#adult').val()) || 0;
        children = parseInt($('#children').val()) || 0;
        infant = parseInt($('#infant').val()) || 0;
        totalPassengers = adult + children + infant;

        // Update departure quotation
        $('#quotation').val('');
    } else if (type === 'arrival') {
        adult = parseInt($('#adultArrival').val()) || 0;
        children = parseInt($('#childrenArrival').val()) || 0;
        infant = parseInt($('#infantArrival').val()) || 0;
        totalPassengers = adult + children + infant;

        // Update arrival quotation
        $('#quotationArrival').val('');
    }
    var tollFee = 0;
    var stateGovt = 0;

    //Circular Bay Cruise Terminal
    if (pickupPlace === 'Alfords Point - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(160.00, 169.10, 195.80, 230.50, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Bangor - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(175.65, 185.75, 215.55, 254.25, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Barden Ridge - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(177.90, 188.30, 218.55, 257.70, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Bonnet Bay - 2226' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(177.20, 186.00, 218.00, 262.20, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Bundeena - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(234.10, 249.20, 274.60, 310.40, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Burraneer - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(159.10, 167.70, 196.40, 253.30, 9.99, 1.32), totalPassengers, luggage, type;
    } else if (pickupPlace === 'Caringbah - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(140.85, 148.35, 173.55, 207.65, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Caringbah South - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(147.00, 154.85, 181.20, 217.00, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Como - 2226' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(161.35, 170.20, 199.40, 238.80, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Cronulla - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(151.55, 159.90, 187.20, 224.00, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Dolans Bay - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(154.60, 162.65, 190.40, 228.30, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Engadine - 2233' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(183.20, 193.35, 226.80, 271.90, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Grays Point - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(168.90, 178.00, 208.60, 250.10, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Greenhills Beach - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(156.85, 165.10, 193.40, 231.80, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Gymea - 2227' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(150.65, 158.70, 185.75, 222.45, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Gymea Bay - 2226' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(149.90, 158.45, 185.55, 221.65, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Heathcote - 2233' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(189.45, 199.85, 234.45, 283.00, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Illawong - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(160.90, 170.30, 197.20, 232.05, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Jannali - 2226' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(149.90, 158.45, 185.55, 221.65, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Kangaroo Point - 2224' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(129.35, 136.60, 159.70, 190.50, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Kareela - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(140.00, 148.15, 173.35, 206.85, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Kirrawee - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(142.70, 150.80, 176.45, 210.75, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Kurnell - 2231' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(169.10, 179.00, 209.80, 250.85, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Lilli Pilli - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(148.95, 157.25, 184.10, 220.10, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Loftus - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(158.35, 167.45, 196.20, 234.50, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Lucas Heights - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(184.65, 195.85, 227.55, 268.20, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Maianbar - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(233.55, 248.10, 291.74, 348.95, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Menai - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(169.40, 179.30, 207.90, 244.90, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Menai Central - 2234' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(169.40, 179.30, 207.90, 244.90, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Miranda - 2228' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(133.30, 140.60, 164.35, 196.35, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Oyster Bay - 2225' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(148.95, 157.25, 184.10, 220.40, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Port Hacking - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(150.55, 158.60, 185.65, 222.00, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Sandy Point - 2172' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(191.85, 203.55, 236.65, 279.15, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Sutherland - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(153.85, 162.40, 190.20, 227.50, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Sylvania - 2224' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(132.90, 140.45, 164.25, 195.95, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Sylvania Waters - 2224' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(126.70, 133.95, 156.60, 186.60, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Taren Point - 2229' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(124.45, 131.45, 153.60, 183.10, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Waterfall - 2233' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(216.20, 228.10, 267.95, 321.75, 23.51, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Woolooware - 2230' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(145.35, 153.40, 179.55, 214.60, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Woronora - 2232' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(179.45, 188.55, 221.00, 265.70, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Woronora Heights - 2233' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(192.25, 203.45, 238.80, 285.90, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Yarrawarrah - 2233' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(173.00, 182.95, 214.50, 256.70, 9.99, 1.32, totalPassengers, luggage, type);
    } else if (pickupPlace === 'Yowie Bay - 2228' && destination === 'Circular Bay Cruise Terminal') {
        applyPricing(151.55, 159.90, 187.20, 224.00, 9.99, 1.32, totalPassengers, luggage, type);
    } 
//White Bay Cruise Terminal
else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Alfords Point - 2234') {
    applyPricing(167.30, 176.94, 203.90, 238.40, 30.28, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Bangor - 2234') {
    applyPricing(181.65, 192.30, 222.10, 260.20, 30.28, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Barden Ridge - 2234') {
    applyPricing(183.90, 194.80, 225.10, 263.70, 30.28, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Bonnet Bay - 2226') {
    applyPricing(183.95, 192.75, 224.75, 268.95, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Bundeena - 2230') {
    applyPricing(240.90, 255.95, 281.35, 317.15, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Burraneer - 2230') {
    applyPricing(165.85, 174.45, 203.15, 242.05, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Caringbah - 2229') {
    applyPricing(147.60, 155.10, 180.30, 214.40, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Caringbah South - 2229') {
    applyPricing(153.75, 161.60, 187.95, 223.75, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Como - 2226') {
    applyPricing(168.10, 176.95, 206.15, 245.55, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Cronulla - 2230') {
    applyPricing(158.30, 166.65, 193.95, 230.75, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Dolans Bay - 2229') {
    applyPricing(161.35, 169.40, 197.15, 235.05, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Engadine - 2233') {
    applyPricing(189.95, 200.10, 233.55, 257.25, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Grays Point - 2232') {
    applyPricing(175.65, 184.75, 215.35, 256.85, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Greenhills Beach - 2230') {
    applyPricing(163.60, 171.85, 200.15, 238.55, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Gymea - 2227') {
    applyPricing(157.40, 165.45, 192.50, 229.20, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Gymea Bay - 2226') {
    applyPricing(156.65, 165.20, 192.30, 228.40, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Heathcote - 2233') {
    applyPricing(196.20, 206.60, 241.20, 289.75, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Illawong - 2234') {
    applyPricing(167.65, 177.05, 203.95, 238.80, 29.58, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Jannali - 2226') {
    applyPricing(156.65, 165.20, 192.30, 228.40, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Kangaroo Point - 2224') {
    applyPricing(136.10, 143.35, 166.45, 197.25, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Kareela - 2232') {
    applyPricing(146.75, 154.90, 180.10, 213.60, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Kirrawee - 2232') {
    applyPricing(149.45, 157.55, 183.20, 217.50, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Kurnell - 2231') {
    applyPricing(175.85, 185.75, 216.55, 257.60, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Lilli Pilli - 2229') {
    applyPricing(155.70, 164.00, 190.85, 226.85, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Loftus - 2232') {
    applyPricing(165.10, 174.20, 202.95, 241.25, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Lucas Heights - 2234') {
    applyPricing(191.45, 202.60, 234.30, 275.00, 29.58, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Maianbar - 2230') {
    applyPricing(240.30, 254.85, 298.50, 355.70, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Menai - 2234') {
    applyPricing(176.10, 186.05, 214.65, 251.55, 29.58, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Miranda - 2228') {
    applyPricing(140.05, 147.35, 171.10, 203.10, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Oyster Bay - 2225') {
    applyPricing(155.70, 164.00, 190.85, 227.15, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Port Hacking - 2229') {
    applyPricing(157.30, 165.35, 192.40, 227.15, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Sandy Point - 2172') {
    applyPricing(198.60, 210.30, 243.40, 285.90, 29.58, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Sutherland - 2232') {
    applyPricing(160.60, 169.15, 196.95, 234.25, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Sylvania - 2224') {
    applyPricing(139.65, 147.20, 171.00, 202.70, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Sylvania Waters - 2224') {
    applyPricing(133.45, 140.70, 163.35, 193.35, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Taren Point - 2229') {
    applyPricing(131.20, 138.20, 160.35, 189.85, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Waterfall - 2233') {
    applyPricing(222.95, 234.85, 274.70, 328.50, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Woolooware - 2230') {
    applyPricing(152.10, 160.15, 186.30, 221.35, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Woronora - 2232') {
    applyPricing(186.20, 195.30, 227.75, 272.45, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Woronora Heights - 2233') {
    applyPricing(199.00, 210.20, 245.55, 292.65, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Yarrawarrah - 2233') {
    applyPricing(179.75, 189.70, 221.25, 263.45, 16.76, 1.32, totalPassengers, luggage, type);
} else if (destination === 'White Bay Cruise Terminal' && pickupPlace === 'Yowie Bay - 2228') {
    applyPricing(158.30, 166.65, 193.95, 230.75, 16.76, 1.32, totalPassengers, luggage, type);
} 
//Domestic
else if (pickupPlace === 'Alfords Point - 2234' && destination === 'Domestic Airport T2 and T3') {
  console.log("Sdadadadsadad")
    applyPricing(107.60 + 20, 114.20 + 20, 144.60 + 20, 165.85 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bangor - 2234' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(115.50 + 20, 134.50 + 20, 176.03 + 20, 201.44 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Barden Ridge - 2234' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(117.55 + 20, 137.00 + 20, 178.86 + 20, 204.16 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bonnet Bay - 2226' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(109.70 + 20, 121.50 + 20, 153.63 + 20, 177.12 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bundeena - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(183.60 + 20, 214.50 + 20, 278.69 + 20, 316.96 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Burraneer - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(100.28 + 20, 117.50 + 20, 154.89 + 20, 177.85 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Caringbah - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(84.00 + 20, 91.20 + 20, 120.00 + 20, 140.95 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Caringbah South - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(93.10 + 20, 101.00 + 20, 135.20 + 20, 154.05 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Como - 2226' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(100.20 + 20, 108.85 + 20, 147.85 + 20, 169.90 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Cronulla - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(92.15 + 20, 107.80 + 20, 136.80 + 20, 161.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Dolans Bay - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(91.70 + 20, 106.35 + 20, 134.25 + 20, 154.50 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Engadine - 2233' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(111.95 + 20, 128.40 + 20, 164.20 + 20, 188.45 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Grays Point - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(106.65 + 20, 120.85 + 20, 152.85 + 20, 178.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Greenhills Beach - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(91.15 + 20, 106.05 + 20, 133.70 + 20, 154.65 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Gymea - 2227' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(79.90 + 20, 91.40 + 20, 115.65 + 20, 134.55 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Gymea Bay - 2226' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(94.20 + 20, 107.55 + 20, 135.25 + 20, 157.95 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Heathcote - 2233' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(119.50 + 20, 137.40 + 20, 177.10 + 20, 204.20 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Illawong - 2234' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(99.55 + 20, 112.90 + 20, 143.20 + 20, 162.35 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Jannali - 2226' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(91.45 + 20, 104.70 + 20, 133.30 + 20, 154.60 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kangaroo Point - 2224' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(72.60 + 20, 82.55 + 20, 103.80 + 20, 122.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kareela - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(80.30 + 20, 89.45 + 20, 112.50 + 20, 133.50 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kirrawee - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(84.00 + 20, 95.90 + 20, 121.40 + 20, 140.25 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kurnell - 2231' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(116.30 + 20, 132.00 + 20, 168.25 + 20, 195.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Lilli Pilli - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(94.55 + 20, 107.60 + 20, 135.10 + 20, 156.90 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Loftus - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(102.10 + 20, 116.60 + 20, 148.00 + 20, 171.00 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Lucas Heights - 2234' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(124.25 + 20, 141.10 + 20, 179.85 + 20, 203.55 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Maianbar - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(181.45 + 20, 208.60 + 20, 269.70 + 20, 309.70 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Menai - 2234' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(107.60 + 20, 121.90 + 20, 154.80 + 20, 174.75 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Miranda - 2228' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(77.20 + 20, 90.00 + 20, 110.00 + 20, 132.25 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Oyster Bay - 2225' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(92.50 + 20, 102.50 + 20, 127.25 + 20, 146.90 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Port Hacking - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(93.25 + 20, 106.10 + 20, 133.55 + 20, 154.95 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sandy Point - 2172' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(130.50 + 20, 148.70 + 20, 191.10 + 20, 215.65 + 20, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sutherland - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(93.10 + 20, 106.25 + 20, 134.70 + 20, 155.60 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sylvania - 2224' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(71.60 + 20, 82.30 + 20, 103.85 + 20, 122.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sylvania Waters - 2224' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(72.30 + 20, 85.25 + 20, 105.85 + 20, 124.10 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Taren Point - 2229' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(69.00 + 20, 81.00 + 20, 103.60 + 20, 120.50 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Waterfall - 2233' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(144.25 + 20, 167.10 + 20, 215.30 + 20, 247.40 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woolooware - 2230' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(86.75 + 20, 98.80 + 20, 124.50 + 20, 145.25 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woronora - 2232' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(105.95 + 20, 121.00 + 20, 153.85 + 20, 177.85 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woronora Heights - 2233' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(129.00 + 20, 147.75 + 20, 189.00 + 20, 217.90 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Yarrawarrah - 2233' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(108.50 + 20, 124.05 + 20, 158.10 + 20, 182.40 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Yowie Bay - 2228' && destination === 'Domestic Airport T2 and T3') {
    applyPricing(91.90 + 20, 104.70 + 20, 131.95 + 20, 153.90 + 20, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
}
//International
else if (pickupPlace === 'Alfords Point - 2234' && destination === 'International Airport T1') {
    applyPricing(107.60 + 23.10, 114.20 + 23.10, 144.60 + 23.10, 165.85 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bangor - 2234' && destination === 'International Airport T1') {
    applyPricing(115.50 + 23.10, 134.50 + 23.10, 176.03 + 23.10, 201.44 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Barden Ridge - 2234' && destination === 'International Airport T1') {
    applyPricing(117.55 + 23.10, 137.00 + 23.10, 178.86 + 23.10, 204.16 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bonnet Bay - 2226' && destination === 'International Airport T1') {
    applyPricing(109.70 + 23.10, 121.50 + 23.10, 153.63 + 23.10, 177.12 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Bundeena - 2230' && destination === 'International Airport T1') {
    applyPricing(183.60 + 23.10, 214.50 + 23.10, 278.69 + 23.10, 316.96 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Burraneer - 2230' && destination === 'International Airport T1') {
    applyPricing(100.28 + 23.10, 117.50 + 23.10, 154.89 + 23.10, 177.85 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Caringbah - 2229' && destination === 'International Airport T1') {
    applyPricing(84.00 + 23.10, 91.20 + 23.10, 120.00 + 23.10, 140.95 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Caringbah South - 2229' && destination === 'International Airport T1') {
    applyPricing(93.10 + 23.10, 101.00 + 23.10, 135.20 + 23.10, 154.05 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Como - 2226' && destination === 'International Airport T1') {
    applyPricing(100.20 + 23.10, 108.85 + 23.10, 147.85 + 23.10, 169.90 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Cronulla - 2230' && destination === 'International Airport T1') {
    applyPricing(92.15 + 23.10, 107.80 + 23.10, 136.80 + 23.10, 161.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Dolans Bay - 2229' && destination === 'International Airport T1') {
    applyPricing(91.70 + 23.10, 106.35 + 23.10, 134.25 + 23.10, 154.50 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Engadine - 2233' && destination === 'International Airport T1') {
    applyPricing(111.95 + 23.10, 128.40 + 23.10, 164.20 + 23.10, 188.45 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Grays Point - 2232' && destination === 'International Airport T1') {
    applyPricing(106.65 + 23.10, 120.85 + 23.10, 152.85 + 23.10, 178.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Greenhills Beach - 2230' && destination === 'International Airport T1') {
    applyPricing(91.15 + 23.10, 106.05 + 23.10, 133.70 + 23.10, 154.65 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Gymea - 2227' && destination === 'International Airport T1') {
    applyPricing(79.90 + 23.10, 91.40 + 23.10, 115.65 + 23.10, 134.55 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Gymea Bay - 2226' && destination === 'International Airport T1') {
    applyPricing(94.20 + 23.10, 107.55 + 23.10, 135.25 + 23.10, 157.95 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Heathcote - 2233' && destination === 'International Airport T1') {
    applyPricing(119.50 + 23.10, 137.40 + 23.10, 177.10 + 23.10, 204.20 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Illawong - 2234' && destination === 'International Airport T1') {
    applyPricing(99.55 + 23.10, 112.90 + 23.10, 143.20 + 23.10, 162.35 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Jannali - 2226' && destination === 'International Airport T1') {
    applyPricing(91.45 + 23.10, 104.70 + 23.10, 133.30 + 23.10, 154.60 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kangaroo Point - 2224' && destination === 'International Airport T1') {
    applyPricing(72.60 + 23.10, 82.55 + 23.10, 103.80 + 23.10, 122.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kareela - 2232' && destination === 'International Airport T1') {
    applyPricing(80.30 + 23.10, 89.45 + 23.10, 112.50 + 23.10, 133.50 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kirrawee - 2232' && destination === 'International Airport T1') {
    applyPricing(84.00 + 23.10, 95.90 + 23.10, 121.40 + 23.10, 140.25 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Kurnell - 2231' && destination === 'International Airport T1') {
    applyPricing(116.30 + 23.10, 132.00 + 23.10, 168.25 + 23.10, 195.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Lilli Pilli - 2229' && destination === 'International Airport T1') {
    applyPricing(94.55 + 23.10, 107.60 + 23.10, 135.10 + 23.10, 156.90 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Loftus - 2232' && destination === 'International Airport T1') {
    applyPricing(102.10 + 23.10, 116.60 + 23.10, 148.00 + 23.10, 171.00 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Lucas Heights - 2234' && destination === 'International Airport T1') {
    applyPricing(124.25 + 23.10, 141.10 + 23.10, 179.85 + 23.10, 203.55 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Maianbar - 2230' && destination === 'International Airport T1') {
    applyPricing(181.45 + 23.10, 208.60 + 23.10, 269.70 + 23.10, 309.70 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Menai - 2234' && destination === 'International Airport T1') {
    applyPricing(107.60 + 23.10, 121.90 + 23.10, 154.80 + 23.10, 174.75 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Miranda - 2228' && destination === 'International Airport T1') {
    applyPricing(77.20 + 23.10, 90.00 + 23.10, 110.00 + 23.10, 132.25 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Oyster Bay - 2225' && destination === 'International Airport T1') {
    applyPricing(92.50 + 23.10, 102.50 + 23.10, 127.25 + 23.10, 146.90 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Port Hacking - 2229' && destination === 'International Airport T1') {
    applyPricing(93.25 + 23.10, 106.10 + 23.10, 133.55 + 23.10, 154.95 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sandy Point - 2172' && destination === 'International Airport T1') {
    applyPricing(130.50 + 23.10, 148.70 + 23.10, 191.10 + 23.10, 215.65 + 23.10, 12.31 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sutherland - 2232' && destination === 'International Airport T1') {
    applyPricing(93.10 + 23.10, 106.25 + 23.10, 134.70 + 23.10, 155.60 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sylvania - 2224' && destination === 'International Airport T1') {
    applyPricing(71.60 + 23.10, 82.30 + 23.10, 103.85 + 23.10, 122.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Sylvania Waters - 2224' && destination === 'International Airport T1') {
    applyPricing(72.30 + 23.10, 85.25 + 23.10, 105.85 + 23.10, 124.10 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Taren Point - 2229' && destination === 'International Airport T1') {
    applyPricing(69.00 + 23.10, 81.00 + 23.10, 103.60 + 23.10, 120.50 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Waterfall - 2233' && destination === 'International Airport T1') {
    applyPricing(144.25 + 23.10, 167.10 + 23.10, 215.30 + 23.10, 247.40 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woolooware - 2230' && destination === 'International Airport T1') {
    applyPricing(86.75 + 23.10, 98.80 + 23.10, 124.50 + 23.10, 145.25 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woronora - 2232' && destination === 'International Airport T1') {
    applyPricing(105.95 + 23.10, 121.00 + 23.10, 153.85 + 23.10, 177.85 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Woronora Heights - 2233' && destination === 'International Airport T1') {
    applyPricing(129.00 + 23.10, 147.75 + 23.10, 189.00 + 23.10, 217.90 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Yarrawarrah - 2233' && destination === 'International Airport T1') {
    applyPricing(108.50 + 23.10, 124.05 + 23.10, 158.10 + 23.10, 182.40 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
} else if (pickupPlace === 'Yowie Bay - 2228' && destination === 'International Airport T1') {
    applyPricing(91.90 + 23.10, 104.70 + 23.10, 131.95 + 23.10, 153.90 + 23.10, 0.00 + 0.7, 1.32, totalPassengers, luggage, type);
}


else {
    // Reset the quotation if conditions are not met
        var adult, children, infant, totalPassengers;

    if (type === 'departure') {
        $('#quotation').val('');
    } else if (type === 'arrival') {
        $('#quotationArrival').val('');
    }
}

    
  }
    function applyPricing(pp1, pp4, pp5_6, pp7_9, toll, govt, totalPassengers, luggage, type) {
var isHoliday = <?=$controllerInstance->getSettingVal('holiday') ? 'true' : 'false'?>;
   

       if (totalPassengers >= 1 && totalPassengers <= 3) {
    tollFee = toll;
    stateGovt = govt;

    if (type === 'departure') {
         if (isHoliday) {
         // Apply a 25% increase
         $('#quotation').val('$' + ((pp1 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotation').value = ((pp1 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotation').val('$' + ((pp1 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotation').value = (pp1 + tollFee + stateGovt + luggage).toFixed(2);
    }
       
    } else if (type === 'arrival') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotationArrival').val('$' + ((pp1 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotationArrival').value = ((pp1 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotationArrival').val('$' + ((pp1 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotationArrival').value = (pp1 + tollFee + stateGovt + luggage).toFixed(2);
    }
    }
} else if (totalPassengers == 4) {
    tollFee = toll;
    stateGovt = govt;

    if (type === 'departure') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotation').val('$' + ((pp4 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotation').value = ((pp4 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotation').val('$' + ((pp4 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotation').value = (pp4 + tollFee + stateGovt + luggage).toFixed(2);
    }
    } else if (type === 'arrival') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotationArrival').val('$' + ((pp4 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotationArrival').value = ((pp4 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotationArrival').val('$' + ((pp4 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotationArrival').value = (pp4 + tollFee + stateGovt + luggage).toFixed(2);
    }
    }
} else if (totalPassengers >= 5 && totalPassengers <= 6) {
    tollFee = toll;
    stateGovt = govt;

    if (type === 'departure') {
         if (isHoliday) {
         // Apply a 25% increase
         $('#quotation').val('$' + ((pp5_6 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotation').value = ((pp5_6 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotation').val('$' + ((pp5_6 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotation').value = (pp5_6 + tollFee + stateGovt + luggage).toFixed(2);
    }
    } else if (type === 'arrival') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotationArrival').val('$' + ((pp5_6 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotationArrival').value = ((pp5_6 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotationArrival').val('$' + ((pp5_6 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotationArrival').value = (pp5_6 + tollFee + stateGovt + luggage).toFixed(2);
    }
    }
} else if (totalPassengers >= 7 && totalPassengers <= 9) {
    tollFee = toll;
    stateGovt = govt;

    if (type === 'departure') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotation').val('$' + ((pp7_9 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotation').value = ((pp7_9 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotation').val('$' + ((pp7_9 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotation').value = (pp7_9 + tollFee + stateGovt + luggage).toFixed(2);
    }
    } else if (type === 'arrival') {
        if (isHoliday) {
         // Apply a 25% increase
         $('#quotationArrival').val('$' + ((pp7_9 + tollFee + stateGovt + luggage) * 1.25).toFixed(2));
        document.getElementById('total_quotationArrival').value = ((pp7_9 + tollFee + stateGovt + luggage) * 1.25).toFixed(2);
    }else{
        $('#quotationArrival').val('$' + ((pp7_9 + tollFee + stateGovt + luggage)).toFixed(2));
        document.getElementById('total_quotationArrival').value = (pp7_9 + tollFee + stateGovt + luggage).toFixed(2);
    }
    }
} else {
    if (type === 'departure') {
        $('#quotation').val('');
        document.getElementById('total_quotation').value = 0.0;
    } else if (type === 'arrival') {
        $('#quotationArrival').val('');
        document.getElementById('total_quotationArrival').value = 0.0;
    }
}
    }

  
function selectDestinationArrival(val) {
    console.log("data in arrival "+$('#destinationArrival').val())
    // if (val === 'Other') {
    //     $('#destinationDiv').show();
    //     $('#other_destination').val('');
    // } else {
        // $('#destinationDiv').hide();
        // $('#other_destination').val(1);

        // Convert the values to integers before passing to updateQuotation
        var adult = parseInt($('#adultArrival').val(), 10) || 0;
        var children = parseInt($('#childrenArrival').val(), 10) || 0;
        var infant = parseInt($('#infantArrival').val(), 10) || 0;
        var totalPassengers = adult + children + infant;
        
        
        recalculateExtraLuggageChargeDestinationArrival($('#destinationArrival').val(), $('#post_codeArrival').val(), totalPassengers);
   // }
}
   function selectDestination(val) {
    console.log("data in departure "+$('#destination').val())
    // if (val === 'Other') {
    //     $('#destinationDiv').show();
    //     $('#other_destination').val('');
    // } else {
        // $('#destinationDiv').hide();
        // $('#other_destination').val(1);

        // Convert the values to integers before passing to updateQuotation
        var adult = parseInt($('#adult').val(), 10) || 0;
        var children = parseInt($('#children').val(), 10) || 0;
        var infant = parseInt($('#infant').val(), 10) || 0;
        var totalPassengers = adult + children + infant;
        

        
        recalculateExtraLuggageChargeDestination($('#destination').val(), $('#post_code').val(), totalPassengers);
   // }
}
 function recalculateExtraLuggageChargeDestinationArrival(des, post, pass) {
        var extraLuggageCharge = 0;
        totalQuotation = 0; 
           var additionalStopCountArrival = $('.hidden_textfieldArrival:visible').length;
      totalQuotation = additionalStopCountArrival * 10;
        // Check the status of each checkbox
        if ($('#surfboardsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#golf_clubsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#skisArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#snowboardsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#pramsArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#bike_casesArrival').prop('checked')) extraLuggageCharge += 10;
        if ($('#other_itemsArrival').prop('checked') && $('#other_items_textArrival').val() !== '') extraLuggageCharge += 10;

        // Deduct 10 for each previously checked and now unchecked checkbox
       
        // Check if the time is between 23:00 and 05:00 and add an additional charge of +35
    var pickupTime = $('#arr_pick_up_timeArrival').val();
    var pickupHour = parseInt(pickupTime.split(':')[0], 10);

    if (pickupHour >= 23 || pickupHour < 5) {
        totalQuotation += 35;
    }

        // Add the recalculated extra luggage charge to the total quotation
        totalQuotation += extraLuggageCharge;

        // Reset the quotation field
        // $('#quotation').val('$' + totalQuotation.toFixed(2));

        updateQuotation(des, post, pass, totalQuotation, "arrival");
    }
 function recalculateExtraLuggageChargeDestination(des, post, pass) {
        var extraLuggageCharge = 0;
        totalQuotation = 0; 
           var additionalStopCount = $('.hidden_textfield:visible').length;
      totalQuotation = additionalStopCount * 10;
        // Check the status of each checkbox
        if ($('#surfboards').prop('checked')) extraLuggageCharge += 10;
        if ($('#golf_clubs').prop('checked')) extraLuggageCharge += 10;
        if ($('#skis').prop('checked')) extraLuggageCharge += 10;
        if ($('#snowboards').prop('checked')) extraLuggageCharge += 10;
        if ($('#prams').prop('checked')) extraLuggageCharge += 10;
        if ($('#bike_cases').prop('checked')) extraLuggageCharge += 10;
        if ($('#other_items').prop('checked') && $('#other_items_text').val() !== '') extraLuggageCharge += 10;

        // Deduct 10 for each previously checked and now unchecked checkbox
       
        // Check if the time is between 23:00 and 05:00 and add an additional charge of +35
    var pickupTime = $('#arr_pick_up_time').val();
    var pickupHour = parseInt(pickupTime.split(':')[0], 10);

    if (pickupHour >= 23 || pickupHour < 5) {
        totalQuotation += 35;
    }

        // Add the recalculated extra luggage charge to the total quotation
        totalQuotation += extraLuggageCharge;

        // Reset the quotation field
        // $('#quotation').val('$' + totalQuotation.toFixed(2));

        updateQuotation(des, post, pass, totalQuotation, "departure");
    }

  
</script>
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
