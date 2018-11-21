<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>CUBE-O | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Unleash the interior designer in you with the full spectrum of cube-o bar furniture for cocktail seating. Call 215-695-3300 for more info on cube seating!" />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Cube-o 17”</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">CUBE-O 17”</h2>
		            <div class="float_l"><b>Available Units:</b> 36</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> TheCUBE-O 17”lets you create a stylish lounge environment with one or more pieces.The glow of CUBE-O invites you to relax andenjoy yourself. Can be used as a side table or small coffee table in addition to seating.</div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img float_l">
		                <a href="images/luminary/chiavari-cube-o1.jpg" class="anchor_border fancybox" title="Cube-o"><img alt="Chiavari Chairs Cube O" src="images/luminary/chiavari-cube-o1.jpg"></a> 
		                <a href="images/luminary/chiavari-cube-o2.jpg" class="anchor_border fancybox" title="Cube-o"><img alt="Chiavari Chairs Cube O" src="images/luminary/chiavari-cube-o2.jpg"></a>
		            </div>
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">9 lbs, Polyethylene, 3 watt light included</div>
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>