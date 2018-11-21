<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Rental Info | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Explore Chiavari Chairs event rentals & services in the greater Philadelphia area including South Jersey, Delaware and the Philadelphia suburbs. Call 215.695.3300" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
    /*
            *   Examples - images
            */
    $("#circle1").fancybox();
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
    	<h1 class="page_head">Vision Event Rentals</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span>
			<a href="vision-rental-info.php">Rentals</a><span class="breadcrumbs-arrow"></span>Rental Information</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <div class="left49">
		                <h2 class="page_head2">Philadelphia Rental Info</h2>
		                <h3 class="page_head3">How We Operate</h3>
		                <p>Vision Furniture is a business to business special event rental company providing Chiavari chairs, folding chairs, banquet tables, farm tables, bars, charger plates and other specialty rental solutions for events in the Philadelphia, New York, Baltimore and DC area. We also have rental customers in New Jersey, Delaware and the greater Philadelphia region of Pennsylvania.</p>
		                <div class="spacer_height10"></div>
		                <p>We do business in an efficient, fair and reputable manner. Our rental business has grown primarily through referrals due to our focus on high quality products and excellent customer service. We will work around your schedule to ensure that you have the smoothest rental possible.</p>
		                <div class="spacer_height10"></div>
		                <p>Our professional staff makes sure that the chairs, cushions, bars, tables and charger plates provided by Vision Furniture meet our client's standards for beauty and safety. And that the products are delivered in a prompt and reliable manner. At Vision Furniture you can expect only the best!</p>
		            </div>
		            <div class="right49" align="center">
		                <h4 class="page_head4" align="center">Area We Serve</h4>
		                <a href="images/map-large.jpg" id="circle1" class="anchor_border" ><img src="images/map-small.jpg" alt="Vision Rental Area" width="410" height="294" /></a>
		                <div class="spacer_height10"></div>
		                <p>VF offers delivery to approximately 150 miles outside of Philadelphia, including New York, Washington DC, Baltimore, the Main Line, South Jersey, Wilmington, Allentown, etc. (minimum order may apply) If you have a special request, please <a href="contact.php">contact us</a>.</p>
		            </div>
		            <div class="right49" align="center">
		               
		                <div class="spacer_height10"></div>
		                <p> <a href="/">We also sell commercial Chiavari Chairs, Cushions and other accessories!</a>.</p>
		            </div>
		        </div>
			</div>
			<div class="spacer_height10"></div>
			<div class="rental-inv"><a href="vision-rental-inventory.php"> </a></div>
			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>