
<?
session_start();
ob_start();
require_once "includes/functions.php";
include("includes/before_header.php");
?>   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Chiavari Chair Rentals | ChiavariChairs.com</title>
<meta name="description" content="We bring the best Chiavari Chair rentals for weddings and other special events in the Philadelphia area. We also offer barstools and other unique rental items with full service rental delivery and pick up." />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header-rental.php"); ?>
<!-- <div class="page_banner"><? //include("includes/vision-rental-inventory-slider.php"); ?></div> -->
<div class="spacer-15px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Chiavari Chair Rentals + Special Event Furniture</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span> Philadelphia Party Rentals</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2">Philadelphia Party Rentals</h2>
		            <div class="float_l">VF offers Business to Business rentals with delivery to approximately 150 miles outside of Philadelphia, including New York, Washington DC, Baltimore, the Main Line, South Jersey, Wilmington, Allentown, etc. (minimum order may apply) If you have a special request, please  <a href="contact.php">contact us</a>.</div>
		            <div class="spacer_height10"></div>
		            <div class="rental-inventery-two-images">
		            	<div class="rental-inventery-chivari-first-section">	
		            		<h3 class="page_head3 link"><a href="vision-rental-chairs.php">Chiavari Chairs</a></h3>
		            		<div class="rental_inven big-img float_l">
		            			<a class="anchor_border" href="vision-rental-chairs.php"><img src="images/rental/vision-rental-chiavari-chairs.jpg" alt="Vision Rental Chiavari Chairs" /></a>
		            			<span>Wooden Chiavari Chairs are the perfect addition to any wedding, event or gathering. The Chiavari Chair has an elegant, timeless style that compliments formal and more casual events. <a href="vision-rental-chairs.php">Click to see more.</a></span>
		            		</div>
		            	</div>
		            
		            	<div class="rental-inventery-chivari-second-section">
		            		<h3 class="page_head3 link"><a href="vision-rental-barstools.php">Chiavari Barstools</a></h3> 
		            		<div class="rental_inven big-img float_l">
		            			<a class="anchor_border" href="vision-rental-barstools.php"><img src="images/rental/vision-rental-barstool.jpg" alt="Vision Furniture Rental Barstool" /></a>
		            			<span>Vision Furniture Chiavari Barstools are lightweight, stackable and available to rent in the following colors: Black, White, Ivory, Mahogany, Fruitwood, Natural, Gold, Silver, Raw, and Clear Resin. <a href="vision-rental-barstools.php">Click to see more.</a></span>
		            		</div>
		            	</div>
		            </div>
		            <div class="spacer_height10"></div>
		            
		            <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="vision-rental-chairs.php#louis-chair">Designer Chairs</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-rental-chairs.php#louis-chair"><img src="images/rental/vision-rental-designer-chairs.jpg" alt="Vision Furniture Rental Designer Chairs" /></a>
		            	<span><b class="font20">New Inventory</b>! Cross Back Chairs, Tuxedo Chairs, Verona Cocktail Furniture, Chelsea Chairs and Barstools, Ghost Chairs, Ghost Stools... <a href="vision-rental-chairs.php#designer-chairs">Click to see more.</a></span>
		            </div></div>
		            <div class="rental-inventery-chivari-second-section">
		            <h3 class="page_head3 link"><a href="vision-rental-barstools.php#natural-cross-back-bar-stools">Designer Barstools</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-rental-barstools.php#natural-cross-back-bar-stools"><img src="images/rental/vision-rental-designer-barstools.jpg" alt="Vision Furniture Rental Designer Barstool" /></a>
		            	<span>In addition to Chiavari Barstools Vision Furniture also has a growing inventory of designer style barstools including Cross Back Barstools, Ghost Stools, French Bistro style barstools and more! <a href="vision-rental-barstools.php#chelsea-line">Click to see more.</a></span>
		            </div></div></div>
		            <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="vision-slip-cover-rental.php">Chiavari Cushions</a></h3> 
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-slip-cover-rental.php"><img src="images/rental/vision-rental-chiavari-cushions.jpg" alt="Vision Furniture Rental Chiavari Cushions" /></a>
		            	<span>Our classic rental cushions include: White, Ivory, Black and Damask. We also have over 30 different colorful Bengaline Cushion options! <a href="vision-slip-cover-rental.php">Click to see more.</a></span>
		            </div></div>
		            <div class="rental-inventery-chivari-second-section">
		            <h3 class="page_head3 link"><a href="vision-event-table.php">Banquet Tables </a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-event-table.php"><img src="images/rental/square-banquet-table.jpg" alt="Vision Furniture Rental square banquet table" /></a>
		            	<span>Vision Furniture offers a variety of unique tables for rental including King, Round, Cocktail, Farm Tables and more. <a href="vision-event-table.php">Click to see more.</a></span>
		            </div></div></div>
		            
		           
		           <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="rental-mirror-table.php">Mirror Tables </a></h3> 
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="rental-mirror-table.php"><img src="images/rental/VF-Mirror-Table.jpg" alt="Vision Furniture Rental Mirror Tables" /></a>
		            	<span>Elegant Mirrored Tables available in standard height and bar height with beveled glass and tapered legs. Add Glamour to any event! <a href="rental-mirror-table.php">Click to see more.</a></span>
		            </div></div>
		            <div class="rental-inventery-chivari-second-section">
		            <h3 class="page_head3 link"><a href="farm-tables.php">Farm Tables</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="farm-tables.php"><img src="images/rental/Farmhouse-Tables-by-Vision-Furniture.jpg" alt="Farmhouse Tables by Vision Furniture" /></a>
		            	<span>We hand make our Farmhouse Tables from reclaimed wood and finish them with rustic Tung Oil to bring out the natural character of the wood. Available in many different sizes for rent! <a href="farm-tables.php">Click to see more.</a></span>
		            </div></div></div>
		            
		            
		            
		            
		            <div class="spacer_height10"></div>
		            <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="luminary-collection.php">LUMINARY Collection</a></a></h3>
		            <div class="rental_inven big-img float_l">
<a class="anchor_border" href="luminary-collection.php"><img src="images/rental/vision-rental-luminary-collection.jpg" alt="Vision Furniture Rental Luminary Collection" /></a>		            	<span>The LUMINARY Collection contains an assortment of light up bars, furniture and accessories that can illuminate and enhance the look and style <a href="luminary-collection.php">Click to see more.</a></span>
		            </div></div>
		            <div class="rental-inventery-chivari-second-section">
		            <h3 class="page_head3 link"><a href="verona.php">VERONA Collection</a></h3></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="verona.php"><img src="images/rental/vision-rental-verona-collection.jpg" alt="Vision Furniture Rental Verona Collection" /></a>
		            	<span>We like to call The Verona Collection functional fabulous art. This line has strong baroque themes while remaining whimsical. <a href="verona.php">Click to see more.</a></span>
		            </div></div></div>
		            
		            <div class="spacer_height10"></div>
		            <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="wine-barrels.php">Wine Barrels</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="wine-barrels.php"><img src="images/vision-rental-wine-barrels.jpg" alt="Vision Furniture Rental Wine Barrels" /></a>
		            	<span>We found amazing Italian Wine Barrels for our rental inventory. These authentic barrels have a romantic, rustic look that we hope will inspire you! <a href="wine-barrels.php">Click to see more.</a></span>
		            </div></div>
		            <div class="rental-inventery-chivari-second-section">
		            <h3 class="page_head3 link"><a href="vision-charger-rentals.php">Charger Plates</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-charger-rentals.php"><img src="images/rental/vision-rental-charger-plates.jpg" alt="Vision Furniture Rental Charger Plates" /></a>
		            	<span>Deck out your table with hand-painted, designer charger plates by Vision Furniture. Whether you have classic or contemporary tastes <a href="vision-charger-rentals.php">Click to see more.</a></span>
		            </div></div></div>
		            <div class="spacer_height10"></div>
		            <div class="rental-inventery-two-images">
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="vision-rental-pizza-oven.php">Pizza Oven</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-rental-pizza-oven.php"><img src="images/pizza.jpg" alt="Vision Furniture Rental Pizza Oven" /></a>
		            	<span>We are now renting this portable, high-end, firing burning pizza oven that uses the famous French Four Grand Mere Oven System. <a href="vision-rental-pizza-oven.php">Click to see more.</a></span> 
		            </div></div>
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="vision-rental-ofyr-grill.php">OFYR Grill </a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="vision-rental-ofyr-grill.php"><img src="images/rental/OFYR-Grill-Vision-Furniture.jpg" alt="OFYR Grill Vision Furniture" /></a>
		                <span>The OFYR Grill is a new way to cook outdoors. 6 of these Wood Fired Grills from the Netherlands are now available for rent!. <a href="vision-rental-ofyr-grill.php">Click to see more.</a></span> 
		            </div></div></div>
		            
		            <div class="spacer_height10"></div>
		            <div class="rental-inventery-two-images">
		           
		            <div class="rental-inventery-chivari-first-section">
		            <h3 class="page_head3 link"><a href="moving-carts.php">Moving Carts</a></h3>
		            <div class="rental_inven big-img float_l">
		            	<a class="anchor_border" href="moving-carts.php"><img src="images/rental/vision-rental-moving-cart.jpg" alt="Vision Furniture Rental Moving Carts" /></a>
		            	<span>It is amazing how a simple cart can save so much time and money for your business. We build our accessories with our customer in mind, using <a href="moving-carts.php">Click to see more.</a></span> 
		            </div></div></div>
		            
		        </div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>