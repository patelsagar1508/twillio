<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Glow Club Bench Event Rentals | Philly</title>
<meta name="description" content="The Y-Bench is part of the Vision Rentals LUMINARY Collection. Use this Y-shaped bench on its own or part of a larger, modular bench system. Compatible with S-Benches." />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Y-BENCH</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">Y-BENCH</h2>	
		            <div class="float_l"><b>Available Units:</b> 3</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> The Y-BENCH can be used on it’s own as seating or a coffee table. Or can be used with the S-BENCH to create simple or elaborate winding bench seating.</div>
		            <div class="spacer_height20"></div>
		            <div class="lumi-pro-img img3 float_l mobile2-1">
		                <a href="images/luminary/chiavari-y-bench1.jpg" class="anchor_border fancybox" rel="Y-Bench"><img alt="Chiavari chair Y-Bench" src="images/luminary/chiavari-y-bench1-t.jpg"></a> 
		                <a href="images/luminary/chiavari-y-bench2.jpg" class="anchor_border fancybox" rel="Y-Bench"><img alt="Chiavari chair Y-Bench" src="images/luminary/chiavari-y-bench2-t.jpg"></a> 
		                <a href="images/luminary/chiavari-y-bench3.jpg" class="anchor_border fancybox" rel="Y-Bench"><img alt="Chiavari chair Y-Bench" src="images/luminary/chiavari-y-bench3-t.jpg"></a> 
		            </div>
		            <div class="spacer_height20"></div>
		            <div class="float_l">
	                	<a href="images/luminary/chiavari-y-bench4.jpg" class="anchor_border full fancybox"><img alt="Chiavari chair Y-Bench Martini Lamp" src="images/luminary/chiavari-y-bench4t.jpg"></a>
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