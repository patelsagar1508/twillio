<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Catering Equipment | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Our Wood Fired Pizza Oven and OFYR Grills are available for rentals in the Philadelphia and east coast region. Both are portable and come with additional cooking equipment and tools." />
<?php include("includes/head.php"); ?>

<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	
	$(document).ready(function() {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header-rental.php"); ?>
<!--div class="page_banner"><img alt="Vision Furniture Culinary Rental Banner" src="images/Vision-Furniture-culinary-rental-banner.jpg" /></div-->
<div class="spacer-15px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Culinary Rentals</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span>
			<a href="vision-rental-info.php">Rentals</a><span class="breadcrumbs-arrow"></span>Culinary Rentals</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
					<h2 class="page_head2">CULINARY RENTALS</h2>
					<div class="float_l">Beautiful and unique cooking, baking and grilling rental options from Vision Furniture. Pizza Oven rentals and Grill rentals in the Philadelphia area. Call 215.695.3300 for more info or to reserve.</div>
		            <ul class="img2-1-new pizza">
		            	<li><a href="vision-rental-ofyr-grill.php">
			    			<img src="images/rental/vision-furniture-culinary-rental-ofyr-grill.jpg" alt="Vision Furniture Culinary Rental OFYR Grill"><span><b>OFYR Grill</b></span></a></li>
			    		<li><a href="vision-rental-pizza-oven.php">
			    			<img src="images/rental/vision-furniture-culinary-rental-Pizza-Oven.jpg" alt="Vision Furniture Culinary Rental Pizza Oven"><span><b>Pizza Oven</b></span></a></li>  
			    	</ul> 
		        </div>
		        <div class="spacer_height10"></div>
							<div class="float_l" style="margin: 0 auto;text-align: center;"><a href="/vision-rental-inventory.php">Return to Main Rental Page</a></div>
							<div class="spacer_height10"></div>
			</div>			
		</div>
    </div>
</div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>