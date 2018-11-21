<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Light Up Display Cube Rentals | Philly</title>
<meta name="description" content="Get creative with these LED display cube rentals & create an immediate party atmosphere at home. It lasts long & stands best in presentation. Call 215-695-3300" />
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
<!--div class="page_banner"><? //include("includes/luminary-slider.php"); ?></div-->
<div class="spacer-15px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Luminary Collection</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span> 
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Display Cubes</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">DISPLAY CUBES</h2>
		            <div class="float_l"><b>Available Units:</b> 26</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> DISPLAY CUBE is a luminous, minimalist shelf that immediately creates a lounge atmosphere. The bottom of the cube glows a soft light that showcases bottles, décor or other objects. DISPLAY CUBES can be arranged in countless combinations –  several cubes can go horizontally side by side or be vertically piled up to create a bar back, room divider, display case or wall of interest.</div>
	            	<div class="spacer_height20"></div>
		        	<div class="lumi-pro-img display-cubes float_l">
		        		<div class="left mobile2-1">
			        		<a href="images/luminary/chiavari-display-cubes1.jpg" class="anchor_border fancybox" title="Display Cubes"><img alt="Chiavari Display Cubes" src="images/luminary/chiavari-display-cubes1.jpg"></a>
			        		<a href="images/luminary/chiavari-display-cubes2.jpg" class="anchor_border fancybox" title="Display Cubes"><img alt="Chiavari Display Cubes" src="images/luminary/chiavari-display-cubes2.jpg"></a>
		                </div>
		                <div class="right mobile2-1"> 
		        			<a href="images/luminary/chiavari-display-cubes3.jpg" class="anchor_border fancybox" title="Display Cubes"><img alt="Chiavari Display Cubes" src="images/luminary/chiavari-display-cubes3t.jpg"></a>
		        		</div>
	            	</div>
		            <div class="spacer_height20"></div>
	            	<div class="lumi-laft48">
	                	<a href="images/luminary/chiavari-display-cubes4.jpg" class="anchor_border full fancybox" title=" "><img alt="Chiavari Display Cubes" src="images/luminary/chiavari-display-cubes4t.jpg"></a>
	               	</div>
	               	<div class="lumi-right48">
	                	<a href="images/luminary/chiavari-display-cubes5.jpg" class="anchor_border full fancybox" title=" "><img alt="Chiavari Display Cubes" src="images/luminary/chiavari-display-cubes5t.jpg"></a>
	               	</div>
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">13lbs, Polyethylene, 3 watt light included</div>
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>