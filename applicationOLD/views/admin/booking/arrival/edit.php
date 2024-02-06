<?php
$controllerInstance = get_instance();
foreach($bookingarrival_details as $row)
{
	$id=stripslashes($row['id']);
	
	$booking_id=stripslashes($row['booking_id']);
	
	$departure_type=stripslashes($row['departure_type']);
	
	$name=stripslashes($row['name']);
	
	$email=stripslashes($row['email']);
	
	$phone=stripslashes($row['phone']);
	
	
	$pick_up_time=stripslashes($row['pick_up_time']);
	$pick_up_date=stripslashes($row['pick_up_date']);
	$destination=stripslashes($row['destination']);
	$other_destination=stripslashes($row['other_destination']);
	$pick_up_address=stripslashes($row['pick_up_address']);
	$post_code=stripslashes($row['post_code']);
	$adult=stripslashes($row['adult']);
	$children=stripslashes($row['children']);
	$infant=stripslashes($row['infant']);
	$infant=stripslashes($row['infant']);
	$date=stripslashes($row['date']);
	$new_flag=stripslashes($row['new_flag']);
	
	
	$controllerInstance->updateArrivalFlag($id);
	
}

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Meta, title, CSS, favicons, etc. -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?=PROJECT_ADMIN?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">

<!-- Bootstrap -->

<link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->

<link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">



<!-- Custom Theme Style -->

<link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">

<style>

.btn.btn-default.active {

	background-color: #1ABB9C !important;

	color: #fff !important;

}

ul.bar_tabs > li.active {

	border-right: 6px solid #2DBBFC !important;

}

#myTab .active a {

	background: #2a3f54 none repeat scroll 0 0 !important;

	border: 1px solid #2a3f54 !important;

	color: #fff !important;

}

#myTab a {

	background: #26b99a none repeat scroll 0 0;

	color: #fff;

}




</style>

<script src="<?php echo base_url(); ?>assets/admin/js/config.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/createUrl.js"></script>

</head>



<body class="nav-md">

<div class="container body">

  <div class="main_container">

    <?php

        	$this->load->view("admin/left_panel.php");

        ?>

    

    <!-- top navigation -->

    <?php

        	$this->load->view("admin/header.php");

        ?>

    <!-- /top navigation --> 

    

    <!-- page content -->

    <div class="right_col" role="main">

      <div class="">

        <div class="page-title">

          <div class="title_left">

            <h3>Booking Management</h3>

          </div>

          

          

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Booking Details <code>(<?=$booking_id?>)</code></h2>

                <div class="clearfix"></div>

              </div>

              <div class="x_content">

               <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Booking Id</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$booking_id?></div>
                 </div>
                 <div class="clearfix"></div>
                 <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Booking Type</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$departure_type?></div>
                 </div>
                  <div class="clearfix"></div>
                 <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$name?></div>
                 </div>
                  <div class="clearfix"></div>
                 <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$email?></div>
                 </div>
                  <div class="clearfix"></div>
                 <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone No</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$phone?></div>
                 </div>
                  <div class="clearfix"></div>
               
               
               
               <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pick Up Date & Time</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=date('d M, Y',strtotime($pick_up_date))?> <?=$pick_up_time?></div>
                 </div>
                  <div class="clearfix"></div>
                  
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Destination</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$destination?></div>
                 </div>
                  <div class="clearfix"></div>
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Other Destination</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$other_destination?></div>
                 </div>
                  <div class="clearfix"></div>
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pick Up Address</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$pick_up_address?></div>
                 </div>
                  <div class="clearfix"></div>
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Post Code</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$post_code?></div>
                 </div>
                  <div class="clearfix"></div>
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Adult</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$adult?></div>
                 </div>
                  <div class="clearfix"></div>
                  
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Children</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$children?></div>
                 </div>
                  <div class="clearfix"></div>
                  
                  <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Infant</label> 
                          <div class="col-md-6 col-sm-6 col-xs-12">: <?=$infant?></div>
                 </div>
                  <div class="clearfix"></div>
                  
                  

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- /page content --> 

    

    <!-- footer content -->

    <?php

       $this->load->view("admin/footer.php");

	   ?>

    <!-- /footer content --> 

  </div>

</div>



<!-- jQuery --> 

<script src="<?php echo base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script> 

<!-- Bootstrap --> 

<script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script> 

<!-- FastClick --> 

<script src="<?php echo base_url(); ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script> 

<!-- NProgress --> 

<script src="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.js"></script> 

<!-- Custom Theme Scripts --> 

<script src="<?php echo base_url(); ?>assets/admin/build/js/custom.min.js"></script> 



<!-- validator --> 







</body>

</html>