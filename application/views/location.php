<?php 
$controllerInstance = get_instance();
// print_r($locationDetails);die('line3333');
foreach($locationDetails as $values)
{
	$seo_title=stripslashes($values->seo_title);
	$seo_meta=stripslashes($values->seo_meta);
	$seo_keyword=stripslashes($values->seo_keyword);
	$page_banner_image="inner_banner.jpg";
	$page_name=stripslashes($values->name);
	$location_id=$values->id;
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
    <div class="inner_page_heading">
      Location
    </div>
    <div class="header_breadcrumb">
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>">Home</a></li>
        <li class="active">
          Location
        </li>
      </ol>
    </div>
  </div>
</div>
<div class="home_suburb_section">
  <div class="container">
    <div class="home_suburb_section_heading">We provide a safe and reliable DOOR-TO-DOOR airport shuttle services in Sutherland.<br>
      We cover areas such as</div>
    <div class="row home_suburb_list">
      <ul>
          <?php foreach($locationList->result() as $locRow) { ?>
         <li><a href="<?=base_url()?>location/airport-shuttle-<?php echo $locRow->url_part?>"><?php echo $locRow->location?></a></li>
        <?php } ?>
      </ul>
    </div>
    
    <!--<div class="home_suburb_section_bottom_heading" style="margin-top:25px;">We Also Serve</div>-->
    
    <!--<div class="row other_suburb">-->
    <!--	<a href="<?=base_url()?>location/wollondilly">Wollondilly</a>-->
    <!--    <a href="<?=base_url()?>location/campbelltown">Campbelltown</a>-->
    <!--    <a href="<?=base_url()?>location/wollongong">Wollongong</a>-->
    <!--</div>-->
    
  </div>
</div>
    
  
<?php

	$this->load->view('footer');

?>
</body>
</html>
