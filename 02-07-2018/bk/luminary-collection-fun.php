<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Decals for Light Up Rental Furniture | Philadelphia</title>
<meta name="description" content="Vision Furniture offers best event rentals in the Philadelphia area. Check out folding Chairs, Barstools & others as full service rentals. Call 215-695-3300" />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Luminary Collection Fun</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
			<h2 class="page_head2 lumi">Add Branding + Adjust Colors of Light Up Furniture</h2>
			<div class="spacer_height10"></div>
				<div class="float_l">
					<p>The LUMINARY Collection is great for corporate events! Add branding and more to your illuminated bars and seating rental items! Call us at 215.695.3300 for details or <a href="contact.php">Request a Quote Online</a>. All decals are made to order and quoted on a case by case basis.</p>
					<div class="spacer_height10"></div>
					<p>Also keep in mind, the LUMINARY Collection has adjustable color settings so that you can play around with color and brightness on any piece that has internal LED lighting! Rental items with color options will come with a remote control and instructions on how to adjust colors. </p>
				</div>
				<div class="spacer_height10"></div>
				<div class="float_l">
		            <h3 class="page_head2 lumi">Fun With Decals...</h3>
		        	<div class="lumi-pro-img luminary-fun float_l mobile2-1">
		        		<a href="images/luminary/chiavari-fun-with-decals1.jpg" class="anchor_border fancybox" title="Luminary Collection Fun"><img alt="Chiavari  Fun With Decals" src="images/luminary/chiavari-fun-with-decals1.jpg"></a>
		        		<a href="images/luminary/chiavari-fun-with-decals2.jpg" class="anchor_border fancybox" title="Luminary Collection Fun"><img alt="Chiavari Fun With Decals" src="images/luminary/chiavari-fun-with-decals2.jpg"></a>
	            	</div>
	            	<div class="spacer_height20"></div>
		            <h3 class="page_head2 lumi">Fun With Colors...</h3>
		        	<div class="lumi-pro-img luminary-colors-fun float_l mobile2-1">
		        		<a href="images/luminary/chiavari-fun-with-colors1.jpg" class="anchor_border fancybox" title="Luminary Collection Fun"><img alt="Chiavari Fun With Colors" src="images/luminary/chiavari-fun-with-colors1.jpg"></a>
		        		<a href="images/luminary/chiavari-fun-with-colors2.jpg" class="anchor_border fancybox" title="Luminary Collection Fun"><img alt="Chiavari Fun With Colors" src="images/luminary/chiavari-fun-with-colors2.jpg"></a>
		        		<a href="images/luminary/chiavari-fun-with-colors3.jpg" class="anchor_border fancybox" title="Luminary Collection Fun"><img alt="Chiavari Fun With Colors" src="images/luminary/chiavari-fun-with-colors3.jpg"></a>
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