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
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <style>
	.redtxt
	{
		color:#FF0004;
	}
	</style>
    
  </head>

  <body class="login">
    <div>
     
		
      <div class="login_wrapper">
      <div> <img src="<?php echo base_url(); ?>assets/admin/images/logo.png" style="margin:0 auto; height:100px;"></div>
            <div style="clear:both;"></div>
        <div class="animate form login_form" style="margin-top:30%; background:#fff; border-radius:5px; padding:0 10px;">
          <section class="login_content">
            <form method="post" name="f1" id="f1" action="<?php echo base_url(); ?>admin/home/login">
            
              <h1>Login Form</h1>
              <div class="redtxt" style="margin-bottom:3%;">
				<?php 
					$message = $this->session->flashdata('message');
					if($message){
						echo $message;
					}
				?>
      		</div>
              
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?php echo set_value('username'); ?>" style="margin-bottom:10px;" />
                <span class="redtxt"><?php echo form_error('username'); ?></span>

              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo set_value('password'); ?>" style="margin-bottom:10px;" />
                <span class="redtxt"><?php echo form_error('password'); ?></span>
              </div>
              <div>
              <input class="btn btn-success submit" type="submit" name="submit" value="Log in" style="float:left;">
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <p><?=COPY_RIGHT?></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
