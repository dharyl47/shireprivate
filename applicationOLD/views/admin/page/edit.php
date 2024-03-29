<?php
foreach($page_details as $row)
{
	$id=stripslashes($row['id']);
	
	$page_name=stripslashes($row['name']);
	
	$url_part=stripslashes($row['url_part']);
	
	$content=stripslashes($row['content']);
	
	$image=stripslashes($row['image']);
	
	$status=stripslashes($row['status']);
	
	$seo_title=stripslashes($row['seo_title']); 
	
	$seo_meta=stripslashes($row['seo_meta']); 
	
	$seo_keyword=stripslashes($row['seo_keyword']); 
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

            <h3>Page Management</h3>

          </div>

          

          <!--<div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">

                    <input type="text" class="form-control" placeholder="Search for...">

                    <span class="input-group-btn">

                              <button class="btn btn-default" type="button">Go!</button>

                          </span>

                  </div>

                </div>

              </div>--> 

        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

              <div class="x_title">

                <h2>Edit Page</h2>

                <div class="clearfix"></div>

              </div>

              <div class="x_content">

                <form method="post" class="form-horizontal form-label-left"  enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/page/update_page">

                  <div class="" role="tabpanel" data-example-id="togglable-tabs">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;</label>

                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Page Details</a> </li>

                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">SEO</a> </li>

                    </ul>

                    <div class="clearfix"></div>

                    <div id="myTabContent" class="tab-content">

                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Page Name </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <input class="form-control col-md-7 col-xs-12" id="page_name" name="page_name" placeholder="Page Name" value="<?=$page_name?>"  type="text" onBlur="createUrl(this.value)">

                          </div>

                        </div>

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Page Url Part </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <input class="form-control col-md-7 col-xs-12"   name="url_part" id="page_url" value="<?=$url_part?>" placeholder="Page URL Part"  type="text">

                          </div>

                        </div>

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Content </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <textarea class="form-control col-md-7 col-xs-12 myTextEditor" name="content" id="content"><?=$content?>

</textarea>

                          </div>

                        </div>

                        <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Image  </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="file" name="page_img" id="page_img"  class="col-md-12 col-xs-12">

                          <input type="hidden" name="hid_img" value="<?=$image?>">

                        </div>

                  </div>

                  <?php

                  if($image!='')

				  {

				  ?>

                  <div class="item form-group">

                       <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>

                       <div class="col-md-6 col-sm-6 col-xs-12">

                          	<img src="<?php echo base_url(); ?>upload/page/<?=$image?>" width="100">

                          </div>

                      </div>

                     <?php

				  }

					 ?>   

                        <div class="form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <div id="gender" class="btn-group" data-toggle="buttons">

                              <label class="btn btn-default <?php if($status=='Active'){ echo 'active'; }?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">

                                <input type="radio" name="status"  <?php if($status=='Active'){ echo 'checked'; }?> value="Active">

                                &nbsp; Active &nbsp; </label>

                              <label class="btn btn-default <?php if($status=='Inactive'){ echo 'active'; }?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">

                                <input type="radio" name="status" <?php if($status=='Inactive'){ echo 'checked'; }?> value="Inactive">

                                Inactive </label>

                            </div>

                          </div>

                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Meta Title </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <textarea class="form-control col-md-7 col-xs-12"   name="seo_title" id="seo_title"><?=$seo_title?>

</textarea>

                          </div>

                        </div>

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Meta Description </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <textarea class="form-control col-md-7 col-xs-12"   name="seo_meta" id="seo_meta"><?=$seo_meta?>

</textarea>

                          </div>

                        </div>

                        <div class="item form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Keywords </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <textarea class="form-control col-md-7 col-xs-12"   name="seo_keyword" id="seo_keyword"><?=$seo_keyword?>

</textarea>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="ln_solid"></div>

                  <div class="form-group">

                    <div class="col-md-6 col-md-offset-3"> 
                    
                    <input class="btn btn-primary submit" type="submit" name="submit" value="Update">
                    
                    <a href="<?php echo base_url(); ?>admin/page/list" class="btn btn-default">Cancel</a>

                      

                      <input type="hidden" name="hid_id" value="<?=$id?>">

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