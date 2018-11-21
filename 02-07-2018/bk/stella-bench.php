<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Stella Star Bench | Philadelphia Party Rentals</title>
<meta name="description" content="Spruce up your home with gorgeous stella rental benches to give interiors a boost of personality. Call us 215-695-3300 and know all about cocktail seating." />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Stella Bench</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">STELLA BENCH</h2>            
		            <div class="float_l"><b>Available Units:</b> 2</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> STELLA BENCH is a star-shaped two-seater for indoor or outdoor use. This sculptural accent chair will add whimsy and interest to your event space. <i>*does not glow</i></div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img float_l mobile2-1">
	                	<a href="images/luminary/chiavari-stella-bench1.jpg" class="anchor_border fancybox" title="Stella Bench"><img alt="Chiavari Stella Bench" src="images/luminary/chiavari-stella-bench1.jpg"></a>
		                <a href="images/luminary/chiavari-stella-bench2.jpg" class="anchor_border fancybox" title="Stella Bench"><img alt=" Chiavari Stella Bench" src="images/luminary/chiavari-stella-bench2.jpg"></a>
		            </div>		            
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">26 lbs, Polyethylene, Color: White Only, This piece does not use lights</div>
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>