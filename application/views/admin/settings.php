<?php
foreach($settings_details as $row)
{
	$email=stripslashes($row['email']);

	$contact_email=stripslashes($row['contact_email']);
	
	$order_receive_email=stripslashes($row['order_receive_email']);
	
	$order_phn_no=stripslashes($row['order_phn_no']);
	
	
	
	$facebook=stripslashes($row['facebook']);
	
	$twitter=stripslashes($row['twitter']);
	
	$google_plus=stripslashes($row['google_plus']);
	
	$instagram=stripslashes($row['instagram']);
	
	$google_analytics_code=stripslashes($row['google_analytics_code']);
	
	$phone_no=stripslashes($row['phone_no']);
	
	$working_hours=stripslashes($row['working_hours']);
	
	$our_address=stripslashes($row['our_address']);
	
	$fax=stripslashes($row['fax']);
	
	$linkedin=stripslashes($row['linkedin']);
	
	 $holiday = $row['holiday']; // New field
	
	 
	
	
	
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css">

<!-- Bootstrap Switch JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>

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



/*#myTab a {

    background: #2a3f54 none repeat scroll 0 0;

    color: #fff;

}

.active > a {

    background: #2a3f54 none repeat scroll 0 0 !important;

}

*/

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

            <h3>Settings Management</h3>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Edit Settings</h2>

                <div class="clearfix"></div>

              </div>

              <div class="x_content">

              

              <?php

              if($msg=='success')
			  {
			  ?>
              	<div style="color: green; text-align: center; padding-bottom: 2%; font-size: 15px;">Update Successfully..</div>
              <?php
			  }

			  ?>

              

                <form method="post" class="form-horizontal form-label-left"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/settings/update_settings">

                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Email</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12" id="email" name="email" placeholder="Site Email"  type="text" value="<?=$email?>">

                    </div>

                  </div>

                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email for Contact </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12"   name="contact_email" id="contact_email" placeholder="Email for Contact"  type="text" value="<?=$contact_email?>">

                    </div>

                  </div>
                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Phone Number</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12"   name="phone_no" id="phone_no" placeholder="Phone Number"  type="text" value="<?=$phone_no?>">

                    </div>

                  </div>
                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Fax</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12"   name="fax" id="fax" placeholder="Fax Number"  type="text" value="<?=$fax?>">

                    </div>

                  </div>

                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email for Order </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12"   name="order_receive_email" id="order_receive_email" placeholder="Email for Order"  type="text" value="<?=$order_receive_email?>">

                    </div>

                  </div>
                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Phone No for Order </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <input class="form-control col-md-7 col-xs-12"   name="order_phn_no" id="order_phn_no" placeholder="Phone No for Order"  type="text" value="<?=$order_phn_no?>">

                    </div>

                  </div>
                  
                  
                  
                  
                  
                  
                  
                  

                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Facebook URL </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="facebook" id="facebook"><?=$facebook?></textarea>

                    </div>

                  </div>
                  
                  
                   <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">LinkedIn URL </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="linkedin" id="linkedin"><?=$linkedin?></textarea>

                    </div>

                  </div>

                  

                  

                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitter URL </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="twitter" id="twitter"><?=$twitter?></textarea>

                    </div>

                  </div>

                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Google+ </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="google_plus" id="google_plus"><?=$google_plus?></textarea>

                    </div>

                  </div>


                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Instagram </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="instagram" id="instagram"><?=$instagram?></textarea>

                    </div>

                  </div>
                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Working Hours </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="working_hours" id="working_hours"><?=$working_hours?></textarea>

                    </div>

                  </div>
                  
                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Our Address </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="our_address" id="our_address"><?=$our_address?></textarea>

                    </div>

                  </div>
                  
                  
                  
                  
                  
                  
                  
               
                    <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Google Analytics Code </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="form-control col-md-7 col-xs-12 myTextEditor"   name="google_analytics_code" id="google_analytics_code"><?=$google_analytics_code?></textarea>

                    </div>

                  </div>

                  

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="holiday">Holiday</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="checkbox" name="holiday" id="holiday" <?= $holiday ? 'checked' : '' ?> data-toggle="switch" data-on-text="Yes" data-off-text="No" data-on-color="success" data-off-color="danger">
  </div>
</div>




                  <div class="ln_solid"></div>

                  <div class="form-group">

                    <div class="col-md-6 col-md-offset-3">

                      <input class="btn btn-primary submit" type="submit" name="submit" value="Update Settings">

                      <input type="hidden" name="hid_id" value="1">

                    </div>

                  </div>

                </form>

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

<script>
    $(document).ready(function() {
        // Initialize Bootstrap Switch
        $('[data-toggle="switch"]').bootstrapSwitch();
    });
</script>

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