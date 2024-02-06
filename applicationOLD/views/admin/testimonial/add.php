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

<script src="<?php echo base_url(); ?>assets/admin/js/config.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/createUrl.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>tiny_mce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

	tinyMCE.init({

		// General options

		//mode : "textareas",

		  mode : "specific_textareas",

          editor_selector : "myTextEditor",

		

		theme : "advanced",

		plugins : "imgmanager,openmanager,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",



		// Theme options

		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",

		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",

		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks,|,openmanager,|,imgmanager",

		

		theme_advanced_toolbar_location : "top",

		theme_advanced_toolbar_align : "left",

		theme_advanced_statusbar_location : "bottom",

		theme_advanced_resizing : true,

		

		

		//FILE UPLOAD MODS

		file_browser_callback: "openmanager/",

		open_manager_upload_path: '../../../../../upload/',



		// Example content CSS (should be your site CSS)

		//content_css : "../css/style.css",



		// Drop lists for link/image/media/template dialogs

		template_external_list_url : "lists/template_list.js",

		external_link_list_url : "lists/link_list.js",

		external_image_list_url : "lists/image_list.js",

		media_external_list_url : "lists/media_list.js",



		// Style formats

		style_formats : [

			{title : 'Bold text', inline : 'b'},

			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},

			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},

			{title : 'Example 1', inline : 'span', classes : 'example1'},

			{title : 'Example 2', inline : 'span', classes : 'example2'},

			{title : 'Table styles'},

			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}

		],



		// Replace values for the template plugin

		template_replace_values : {

			username : "Some User",

			staffid : "991234"

		}

	});

</script>

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

            <h3>Testimonial Management</h3>

          </div>

          

          

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Add Testimonial</h2>

                <div class="clearfix"></div>

              </div>

              <div class="x_content">

                <form method="post" class="form-horizontal form-label-left"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/testimonial/addTestimonial">

                  <div class="" role="tabpanel" data-example-id="togglable-tabs">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;</label>


                    <div class="clearfix"></div>

                    <div id="myTabContent" class="tab-content">

                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Client Name </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <input class="form-control col-md-7 col-xs-12" id="client_name" name="client_name" placeholder="Client Name" value=""  type="text">

                          </div> 

                        </div>
                        
                        

                       

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Comment </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <textarea class="form-control col-md-7 col-xs-12" name="comment" id="comment"></textarea>

                          </div>

                        </div>

                        

                   

                        <div class="form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <div id="gender" class="btn-group" data-toggle="buttons">

                              <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">

                                <input type="radio" name="status" checked value="Active">

                                &nbsp; Active &nbsp; </label>

                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">

                                <input type="radio" name="status" value="Inactive">

                                Inactive </label>

                            </div>

                          </div>

                        </div>

                      </div>

                      

                    </div>

                  </div>

                  <div class="ln_solid"></div>

                  <div class="form-group">

                    <div class="col-md-6 col-md-offset-3"> 
                    
                    <input class="btn btn-primary submit" type="submit" name="submit" value="Add New">
                    
                    <a href="<?php echo base_url(); ?>admin/testimonial/list" class="btn btn-default">Cancel</a>

                      <!--<button id="send" type="submit" class="btn btn-success">Submit</button>--> 

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







</body>

</html>