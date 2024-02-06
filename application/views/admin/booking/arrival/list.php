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
.green_bg
{
	background:#03971D !important;
	color:#fff !important;
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
            <h3>Booking Management</h3>
          </div>
          
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Arrival Booking List</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable-fixed-header_booking" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Booking Id</th>
                      <th>Type</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone No.</th>
                      <th>Date & Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if($bookingarrival_details!='')
					  {
						  foreach($bookingarrival_details as $values)
						  {
							  $booking_id=stripslashes($values['booking_id']);
							  $id=$values['id'];
							  $departure_type=$values['departure_type'];
							  $name=$values['name'];
							  $email=$values['email'];
							  $phone=$values['phone'];
							  $pick_up_date=date('d M, Y',strtotime($values['pick_up_date']));
							  $pick_up_time=$values['pick_up_time'];
							  $new_flag=stripslashes($values['new_flag']);
							  if($new_flag==0)
							  {
								  $class="green_bg";
							  }
							  else
							  {
								  $class="";
							  }
					  ?>
                    <tr class="<?=$class?>">
                      <td><?=$booking_id?></td>
                      <td><?=$departure_type?></td>
                      <td><?=$name?></td>
                      <td><?=$email?></td>
                      <td><?=$phone?></td>
                      <td><?=$pick_up_date?> <?=$pick_up_time?></td>
                      
                      <td>
                          <a href="<?php echo base_url(); ?>admin/bookingarrival/details/<?=$id?>" target="_blank">
                              <button class="btn btn-default btn-xs" type="button">
                                <span aria-hidden="true" class="glyphicon glyphicon-eye-open"></span> View
                               </button>
                          </a>
                          <a href="<?php echo base_url(); ?>admin/bookingarrival/delete/<?=$id?>" onclick="return confirm('Are you sure you want to delete?')">
                            <button class="btn btn-default btn-xs" type="button">
                                <span aria-hidden="true" class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                          </a>
                           
                        </td>
                    </tr>
                    <?php
						  }
					  }
					  else
					  {
					?>
                    <tr>
                      <td colspan="4">No Record(s) Found</td>
                    </tr>
                    <?php  
					  }
					?>
                  </tbody>
                </table>
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
<script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "<?php echo base_url(); ?>assets/admin/js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header_booking').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script> 
<!-- /Datatables -->
</body>
</html>