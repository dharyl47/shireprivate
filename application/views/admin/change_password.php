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



/*#myTab a {

    background: #2a3f54 none repeat scroll 0 0;

    color: #fff;

}

.active > a {

    background: #2a3f54 none repeat scroll 0 0 !important;

}

*/

</style>






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

            <h3>Password Management</h3>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Change Password</h2>

                <div class="clearfix"></div>

              </div>

              <div class="x_content">

              <?php
			 // print_r($msg);
              if(isset($success[0])=='success')
			  {
			  ?>

              <div style="color: green; text-align: center; padding-bottom: 2%; font-size: 15px;">Your Password has been update successfully.</div>

              <?php
			  }
			  if(isset($error[0])=='error')
			  {

			  ?>

              <div style="color: red; text-align: center; padding-bottom: 2%; font-size: 15px;">Old password does not match.</div>

              <?php

			  }

			  ?>

              

                <form method="post" class="form-horizontal form-label-left"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/changepassword/update">

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="old_password">Old Password <span class="required" style="color:red;">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" id="old_password" name="old_password"  type="password">
                        </div>
                  </div>
                      <div class="item form-group"> 
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_password">New Password <span class="required" style="color:red;">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"   name="new_password" id="new_password" type="password">
                        </div>
                  </div>
                  
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm_password">Confirm Password <span class="required" style="color:red;">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"   name="confirm_password" id="confirm_password"  type="password">
                        </div>
                  </div>

                  

                  <div class="ln_solid"></div>

                  <div class="form-group">

                    <div class="col-md-6 col-md-offset-3">

                      <input class="btn btn-primary submit" type="submit" name="submit" value="Update Password">

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


<!---------------- For Validation ------------------------------>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>validation-admin/jquery.validate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>validation-admin/style.css" />
        <!--<script src="validation-admin/jquery-1.3.2.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>--> 
<script src="<?php echo base_url(); ?>validation-admin/jquery.validate.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>validation-admin/jquery.validation.functions.js" type="text/javascript"></script> 

<script type="text/javascript">
            /* <![CDATA[ */      
            jQuery(function(){    
                jQuery("#old_password").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter Old Password"
                });
                jQuery("#new_password").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the New Password"
                });
				jQuery("#confirm_password").validate({
                    expression: "if ((VAL == jQuery('#new_password').val()) && VAL) return true; else return false;",
                    message: "Confirm password doesn't match"
                });
				
				
				
            });
            /* ]]> */
        </script> 

<!---------------- For Validation ------------------------------>




</body>

</html>