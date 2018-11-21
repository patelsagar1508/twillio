<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Futuristic Elroy Coffee Table | Event Rentals</title>
<meta name="description" content="The fabulous Elroy coffee table adds flair to your party as a perfect conversation furniture rental. This cocktail lounge table lasts long. Call 215-695-3300" />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Elroy Coffee Table</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">ELROY COFFEE TABLE</h2>            
		            <div class="float_l"><b>Available Units:</b> 6</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> ELROY COFFEE TABLEhas a bold design based on clean lines with a beautiful combination of materials: a structure in polyethylene and a central opaque glass top. Sleek and durable, this coffee table is perfect for indoor or outdoor use. Pairs well with ELROY LOVE SEAT. <i>*does not glow</i></div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img float_l mobile2-1">
	                	<a href="images/luminary/chiavari-elroy-coffee-table1.jpg" class="anchor_border fancybox" title="Elroy Coffee Table"><img alt="Chiavari Elroy Coffee Table" src="images/luminary/chiavari-elroy-coffee-table1.jpg"></a>
		                <a href="images/luminary/Elroy Coffee Table Dims.jpg" class="anchor_border fancybox" title="Elroy Coffee Table"><img alt="Chiavari Elroy Coffee Table" src="images/luminary/Elroy Coffee Table Dims.jpg"></a>
		            </div>
		            <div class="spacer_height20 mobile-n"></div>
		            <div class="lumi-pro-img float_l mobile2-1">
	                	<a href="images/luminary/chiavari-elroy-coffee-table3.jpg" class="anchor_border fancybox" title="Elroy Coffee Table"><img alt="Chiavari Elroy Coffee Table" src="images/luminary/chiavari-elroy-coffee-table3.jpg"></a>
		                <a href="images/luminary/chiavari-elroy-coffee-table4.jpg" class="anchor_border fancybox" title="Elroy Coffee Table"><img alt="Chiavari Elroy Coffee Table" src="images/luminary/chiavari-elroy-coffee-table4.jpg"></a>
		            </div>		            
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">26 lbs, Polyethylene, Glass Top, this piece does not use lights</div>
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>