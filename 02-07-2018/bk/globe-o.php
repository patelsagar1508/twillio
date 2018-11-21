<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>GLOBE-O | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Illuminate your outdoor or indoor event space with GLOBE-O LED light up balls. We have a variety of sizes available for rent – call us today at 215.695.3300." />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.js"></script>
<!-- bxSlider CSS file -->
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript">
	$(document).ready(function(){
	  $('.bxslider').bxSlider();
	});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header-rental.php"); ?>
<div class="page_banner"><img alt="LED Balls" src="images/globe-o-banner.jpg" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Luminary Collection</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span> 
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> GLOBE-O</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">GLOBE-O <small>(4 sizes)</small></h2>	
		            <div class="spacer_height10"></div>
		            <div class="float_l">LED light up globes that bring imagination and stylized interested to any space. Great accents for pathways, landscapes and interiors. GLOBE-O comes in 4 versatile sizes to fit any space. </div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-laft48">
		            	<b>Standard Series:</b><br />12" Round - 16 units Available<br />16" Round - 16 units Available<br />20" Round - 16 Units Available
		            </div>
		            <div class="lumi-laft48">
		            	<b>Monumental Series:</b><br />48" Round - 3 units Available
		            </div>
		            <div class="spacer_height20"></div>
		            <div class="lumi-pro-img img3 float_l mobile2-1">
		                <a href="images/luminary/chiavari-chair-globe-o1.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o1-t.jpg"></a> 
		                <a href="images/luminary/chiavari-chair-globe-o2.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o2-t.jpg"></a> 
		                <a href="images/luminary/chiavari-chair-globe-o3.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o3-t.jpg"></a> 
		            	<div class="spacer_height20 mobile-n"></div>
		                <a href="images/luminary/chiavari-chair-globe-o4.jpg" class="anchor_border fancybox child4" rel="Chiavarichair Globe-o4"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o4-t.jpg"></a>
		                <a href="images/luminary/chiavari-chair-globe-o5.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o5-t.jpg"></a> 
		                <a href="images/luminary/chiavari-chair-globe-o6.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/chiavari-chair-globe-o6-t.jpg"></a>
		           <div class="spacer_height20 mobile-n"></div>
				   <a href="images/luminary/Luminary-Globes-Image-2-Low-Res.jpg" class="anchor_border fancybox child4" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/Luminary-Globes-Image-2-Low-Res1.jpg"></a>
		            <a href="images/luminary/Luminary-Globes-Image-1-Low-Res.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/Luminary-Globes-Image-1-Low-Res1.jpg"></a>
		          <a href="images/luminary/Barnes.jpg" class="anchor_border fancybox" rel="globe-o"><img alt="Chiavarichair Globe o" src="images/luminary/Barnes1.jpg"></a>
		           </div>
		        </div>
		        <div class="spacer_height10"></div>
							<div class="float_l" style="margin: 0 auto;text-align: center;"><a href="/vision-rental-inventory.php">Return to Main Rental Page</a></div>
							<div class="spacer_height10"></div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>