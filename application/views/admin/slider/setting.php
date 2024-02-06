

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
<!-- iCheck -->
<link href="<?php echo base_url(); ?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- Datatables -->
<link href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
<style>
#contentLeft {
	float: left;
	width: 263px;
}
#contentLeft li {
	list-style: none;
	margin: 0 0 4px 0;
	padding: 10px;
	background-color: #2BB7DA;
	border: #CCCCCC solid 1px;
	color: #fff;
	cursor: move;
	min-height: 62px;
	overflow: hidden;
}
#contentTop {
	background-color: #336600;
	color: #ffffff;
	float: right;
	margin: 10px;
	padding: 10px;
	width: 98%;
}






.content {
	display: none;
}





</style>

</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container"> 
    
    <!-- top navigation -->
    <?php
        	$this->load->view("admin/header.php");
        ?>
    <!-- /top navigation --> 
    
    <!-- left panel -->
    <?php
        	$this->load->view("admin/left_panel.php");
        ?>
    
    <!-- /left panel --> 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Slider Management</h3>
          </div>
          
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Setting</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div id="contentTop" style="display:none; visibility:hidden;"> </div>
              <div id="contentLeft">
             
               <ul>
              
                    <?php
					if($slider_details!='')
					{
						foreach($slider_details as $row)
						{
							$id=stripslashes($row['id']);
							
							$image=stripslashes($row['image']);
							 
							  
					  ?>
                    <li id="recordsArray_<?=$id?>"> <img src="<?php echo base_url(); ?>upload/slider/<?=$image?>" width="200"></li>
                    
                    <?php
						  }
					}
					else
					{
					?>
                    <li>No records found</li>
                    <?php
					}
					?>
                  </ul>
                  </div>
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
<!-- Datatables --> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/jszip/dist/jszip.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script> 

<!-- Custom Theme Scripts --> 
<script src="<?php echo base_url(); ?>assets/admin/build/js/custom.min.js"></script> 

<!-- Datatables --> 
 
<!-- /Datatables -->

<!-- Shorting --> 
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery-ui-1.7.1.custom.min.js"></script>  
<script type="text/javascript">
jQuery.noConflict();
	jQuery(document).ready(function(){ 
							   
		jQuery(function() {
			
			
			// For SubCategory
			jQuery("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
				//alert(2);
					document.getElementById("contentTop").style.display="block";
					document.getElementById("contentTop").style.visibility="visible";
					jQuery("#contentTop").html("Processing...");
				
				var order = jQuery(this).sortable("serialize") + '&action=updateRecordsListings'; 
				jQuery.post("<?php echo base_url(); ?>admin/slider/updateSlider", order, function(theResponse){
					jQuery("#contentTop").html(theResponse);
					document.getElementById("contentTop").style.display="block";
					document.getElementById("contentTop").style.visibility="visible";
				}); 															 
			}								  
			});
		
			
		});
	
	});	
	</script>
    
    <!-- /Shorting --> 

</body>
</html>