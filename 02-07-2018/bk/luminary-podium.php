<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>LED Light Up Podium | Event Rentals Philly</title>
<meta name="description" content="Modern classic rental LED light up podium is perfect for modern meetings. As a music stand party rental, it delivers elegance & strength. Call 215-695-3300" />
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
<!-- <div class="page_banner"><? //include("includes/luminary-slider.php"); ?></div> -->
<div class="spacer-15px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Luminary Collection</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span> 
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Luminary Podium</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">LUMINARY PODIUM</h2>
		            <div class="float_l"><b>Available Units:</b> 2</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> LIGHT PODIUM is a luminous lecternthat’s elegant shape brings to mind concepts of fluidity and lightness.LIGHT PODIUM is perfect for speeches, displays and performances.</div>
	            	<div class="spacer_height20"></div>
		        	<div class="lumi-pro-img float_l mobile2-1">
		        		<a href="images/luminary/chiavari-luminary-podium1.jpg" class="anchor_border fancybox" title="Luminary Podium"><img alt="Chiavari Luminary Podium" src="images/luminary/chiavari-luminary-podium1.jpg"></a>
		        		<a href="images/luminary/chiavari-luminary-podium2.jpg" class="anchor_border fancybox" title="Luminary Podium"><img alt="Chiavari Luminary Podium" src="images/luminary/chiavari-luminary-podium2.jpg"></a>
	            	</div>		            
		            <div class="spacer_height20"></div>
		            <div class="float_l"><b>Dimensions</b></div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img float_l">
		                <a href="images/luminary/chiavari-luminary-podium-dimensions.jpg" class="anchor_border fancybox" title="Luminary Podium"><img alt="Chiavari Luminary Podium Dimensions" src="images/luminary/chiavari-luminary-podium-dimensions.jpg"></a> 
		            </div>
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">35 pounds, Polyethylene Requires x1 10w LED Pop Lights or 1 Fluorescent Bulb Plug-ins</div>		            
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>