<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Baroque Display Cube Wall Rentals | Philly</title>
<meta name="description" content="Check out the versatile design, elegant design & presentation offered by Verona bar back display cubes rental for a special event. Call 215-695-3300 now." />

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
			<a href="luminary-collection.php">Luminary Collection</a><span class="breadcrumbs-arrow"></span> Verona Cubes</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2 lumi">VERONA CUBES</h2>
		            <div class="float_l"><b>Available Units:</b> 20</div>
		            <div class="spacer_height10"></div>
		            <div class="float_l"><b>Description:</b> VERONA CUBE is a versatile design element that can be arranged many ways. With its intricate rococò style the VERONA CUBE can be arranged with other modules to become a display wall, coffee table, room divider, side table, bar back or countless other creations. <i>*does not glow</i></div>
		            <div class="spacer_height10"></div>
		            <div class="lumi-pro-img verona-cubes float_l">
		            	<div class="left mobile2-1">
		                	<a href="images/luminary/chiavari-verona-cubes1.jpg" class="anchor_border fancybox" title="Verona cubes"><img alt="Chiavari Verona Cubes" src="images/luminary/chiavari-verona-cubes1.jpg"></a>	                	
			                <a href="images/luminary/chiavari-verona-cubes-dims.jpg" class="anchor_border fancybox" title="Verona cubes"><img alt="Chiavari Verona Cubes " src="images/luminary/chiavari-verona-cubes-dims.jpg"></a>
						</div>
						<div class="right mobile2-1">
		                	<a href="images/luminary/chiavari-verona-cubes2.jpg" class="anchor_border fancybox" title="Verona cubes"><img alt="Chiavari Verona Cubes" src="images/luminary/chiavari-verona-cubes2.jpg"></a>
		                	<a href="images/luminary/chiavari-verona-cubes3.jpg" class="anchor_border fancybox" title="Verona cubes"><img alt="Chiavari Verona Cubes" src="images/luminary/chiavari-verona-cubes3.jpg"></a>
		                </div>
			        </div> 
		            <div class="spacer_height20"></div>
	               	<div class="float_l font-size18">20 lbs, Polyethylene</div>  
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>