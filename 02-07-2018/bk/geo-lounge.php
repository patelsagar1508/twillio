<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>CUBE-O LED Cubes | Philly Event Rentals</title>
<meta name="description" content="A treasure trove with countless furnishing options such as round, LED, glow cocktail geo lounge on Chiavari Chairs is waiting for you. Call 215-695-3300 today!" />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Geo Lounge</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">GEO LOUNGE</h2>
		            <div class="float_l"><b>Available Units:</b> 4</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> GEO LOUNGE is round in shape which allows 360° of use. It is equipped with a grey cushion for added comfort. It’s diffused light glows giving a unique feel to the surrounding space.</div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img geo-lounge float_l">
		            	<div class="left">
		                	<a href="images/luminary/chiavari-chair-geo-lounge1.jpg" class="anchor_border fancybox" title="Geo Lounge"><img alt="Chiavari Chair Geo Lounge" src="images/luminary/chiavari-chair-geo-lounge1.jpg"></a>
			                <a href="images/luminary/chiavari-chair-geo-lounge2.jpg" class="anchor_border fancybox" title="Geo Lounge"><img alt="Chiavari Chair Geo Lounge" src="images/luminary/chiavari-chair-geo-lounge2.jpg"></a>
		                </div>
		                <div class="right"> 
			                <a href="images/luminary/chiavari-chair-geo-lounge3.jpg" class="anchor_border fancybox" title="Geo Lounge"><img alt="Chiavari Chair Geo Lounge" src="images/luminary/chiavari-chair-geo-lounge3.jpg"></a>
			        	</div>
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">64 lbs, Polyethylene, Includes Light Grey Cushion, Requires x2 10w LED Pop Lights or 2 Fluorescent Bulb Plug-ins</div>
		            </div>
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>