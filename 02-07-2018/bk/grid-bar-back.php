<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Bar Back Display Rental | Philadelphia</title>
<meta name="description" content="Philadelphia’s Vision Rental’s Grid Bar Back is the perfect compliment to the LUMINARY or VERONA Collection but can stand on its own as a Bar Display or Decorative Display." />
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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> GRID BAR-BACK</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">GRID BAR-BACK</h2>	
		            <div class="float_l"><b>Available Units:</b> 1</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> GRID BAR-BACK pairs well with any of the LUMINARY Collection bars or can be used on it’s own as a display case or bookshelf.</div>
					 <div class="spacer_height10"></div>
		            <div class="float_l"><b>Dimension:</b> 72” wide, 16” deep, 90.5” high</div>
		            <div class="spacer_height20"></div>
		            <div class="lumi-pro-img img3 float_l mobile2-1">
		                <a href="images/luminary/chiavari-grid-bar-back1.jpg" class="anchor_border fancybox" rel="bar-back"><img alt="Chiavarichair Grid bar Back" src="images/luminary/chiavari-grid-bar-back1-t.jpg"></a>
		               <a href="images/luminary/chiavari-grid-bar-back3.jpg" class="anchor_border fancybox" rel="bar-back"><img alt="Chiavarichair Grid bar Back" src="images/luminary/chiavari-grid-bar-back3-t.jpg"></a>
		               <a href="images/luminary/chiavari-grid-bar-back4.jpg" class="anchor_border fancybox" rel="bar-back"><img alt="Chiavarichair Grid bar Back" src="images/luminary/chiavari-grid-bar-back4-t.jpg"></a> 
		            </div>
		            <div class="spacer_height20"></div>
		            <div class="lumi-pro-img img3 float_l mobile2-1">
		               <a href="images/luminary/chiavari-grid-bar-back5.jpg" class="anchor_border fancybox" rel="bar-back"><img alt="Chiavarichair Grid bar Back" src="images/luminary/chiavari-grid-bar-back5-t.jpg"></a> 
		               <a href="images/luminary/chiavari-grid-bar-back6.jpg" class="anchor_border fancybox" rel="bar-back"><img alt="Chiavarichair Grid bar Back" src="images/luminary/chiavari-grid-bar-back6-t.jpg"></a> 
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