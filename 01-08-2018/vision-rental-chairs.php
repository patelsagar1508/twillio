<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Chiavari Chair Rentals + More | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Choose among top of the line Chiavari Chair rentals, Cross Back Chairs, Ghost Chairs, Folding Chairs, Designer Chairs & more available for rental in greater Philadelphia. Call 215.695.3300" />
<?php include("includes/head.php"); ?>

<script type="text/javascript">
$(document).ready(function() {
	
	$('.fancybox').fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	
	$('.fancybox-thumbs').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',
	
		closeBtn  : false,
		arrows    : false,
		nextClick : true,
	
		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});
	
	$("#brushed-nickel").click(function() {
		$.fancybox.open([
			{ href : 'images/rental/chelsea-side-chair.jpg'}, 
			{ href : 'images/rental/chelsea-side-chair1.jpg'}, 
			{ href : 'images/rental/chelsea-side-chair2.jpg'}
		], {
			helpers : {
				thumbs : {
					width: 75,
					height: 50
				}
			}
		});
	});
});
</script>
</head>
<body>
<div id="wrap">
	<? include("includes/header-rental.php"); ?>
	<div class="page_banner"><img alt="Event Chair" src="images/event-chair-banner.jpg" /></div>
	<div class="spacer-5px"></div>
	<div class="float_l">
    	<div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    	<div class="right_panel">
    		<h1 class="page_head">Event Chair Rentals</h1>
			<div class="spacer_height10"></div>
			<div class="breadcrumbs">
				<a href="/">Home</a><span class="breadcrumbs-arrow"></span>
				<a href="vision-rental-info.php">Rentals</a><span class="breadcrumbs-arrow"></span>Chiavari Chairs
			</div>
			<div class="spacer_height10"></div>
			<div id="rental_con_main">
				<div id="rental_con">
					<div class="float_l">
						<h2 class="page_head2" id="opus">NEW Opus Chair</h2>
						<div class="float_l">Clear Resin Side Chair with interlocking ovals in squared-off chair back. Compatible with all VF Chiavari Cushion Options.Qty: 400 </div>
						<div class="spacer_height10"></div>
						<div class="img1-1">
		                	<a href="images/vision-rental/Vision_Rentals_Philly_Opus_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox" title=" "><img alt="White Louis Barstool VF" src="images/vision-rental/compressed2X1/Vision_Rentals_Philly_Opus_Chair.jpg"></a>
		            	</div>
		            

						 <div class="spacer_height10"></div><div class="spacer_height10"></div>
					 	<h2 class="page_head2" id="versailles">New Champagne Versailles Chair</h2>
						<div class="float_l">Wooden Side Chair with Scalloped Back and Delicate Turned Spindles.Compatible with all VF Chiavari Cushion Options.Qty:400 </div>
						<div class="spacer_height10"></div>
						<div class="img2-1">
		                	<a href="images/vision-rental/Vision_Rentals_Philly_Versailles_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/Vision_Rentals_Philly_Versailles_Chair.jpg" /></a>
		            	</div>
		            	<!-- <div class="img2-1">
		                	<? //include("includes/luminary-slider15.php"); ?>
		                	<a href="images/vision-rental/VISON_RENTALS_Philly__-_Gold_Cecilia_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/VISON_RENTALS_Philly__-_Gold_Cecilia_Chair.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
						<div class="img2-1">
		                	<a href="images/vision-rental/011.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/01.jpg" /></a>
		            	</div> -->
		            	<div class="img2-1">
		                	<a href="images/vision-rental/022.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/02.jpg" /></a>
		            	</div>
						<div class="spacer_height10"></div>
						<div class="spacer_height10"></div>
						<h2 class="page_head2" id="cecilia">Cecilia Chairs</h2>
						<div class="float_l">Wooden (White & Gold) or Resin (Clear & Black) Side Chairs with interlocking circle pattern in chair back. Compatible with all VF Chiavari Cushion Options. </div>
						<div class="spacer_height10"></div>
						<div class="img2-1">
		                	<a href="images/vision-rental/VISION_RENTALS_PHILLY_White_Cecilia_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/VISION_RENTALS_PHILLY_White_Cecilia_Chair.jpg" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<a href="images/vision-rental/VISION_RENTALS_PHILLY_Gold_Cecilia_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/VISION_RENTALS_PHILLY_Gold_Cecilia_Chair.jpg" /></a>
		            	</div>
		            	
		            	<div class="img2-1">
		                	<a href="images/vision-rental/VISION_RENTALS_PHILLY_Black_Cecilia_Chair.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/VISION_RENTALS_PHILLY_Black_Cecilia_Chair.jpg" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<a href="images/vision-rental/Clear_Cecilia_Chair_Philadelphia_Event_Rental.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/vision-rental/compressed2X1/Clear_Cecilia_Chair_Philadelphia_Event_Rental.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>

		            	<div class="img1-1">
		                	<? include("includes/luminary-slider15.php"); ?>
		            	</div>
						<div class="spacer_height10"></div>
						<div class="spacer_height10"></div>
						<h2 class="page_head2" id="chiavari-chairs">Chiavari Chairs</h2>
		            	<div class="float_l">Wooden Chiavari Chairs are the perfect addition to any wedding, event or gathering. The Chiavari Chair has an elegant, timeless style that compliments formal and more casual events. <br>
		            	<b>Chiavari Chair:</b> 15.5 inches wide<br></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider4.php"); ?></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1">
		            		   <span class="anchor_border_text"><b>NEW! Champange Chiavari Chair</b></span>
                               <a href="images/rental/Champagne-Chiavari-Chair-by-Vision-Furniture.jpg" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Champange Chiavari Chairs" src="images/rental/Champagne-Chiavari-Chair-by-Vision-Furniture-t.jpg" /></a>
		            	</div>
		                <div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="rental3-1">
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Gold Chiavari Chair</b></span>
			                	<a href="images/rental/rental_gold_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Gold Chiavari Chairs" src="images/rental/rental_gold_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Silver Chiavari Chair</b></span>
			                	<a href="images/rental/rental_sliver_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Silver Chiavari Chairs" src="images/rental/rental_sliver_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Mahogany Chiavari Chair</b></span>
			                	<a href="images/rental/rental_mahogany_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Mahogany Chiavari Chairs" src="images/rental/rental_mahogany_t.png" /></a>
			            	</div>
			            	
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Fruitwood Chiavari Chair</b></span>
			                	<a href="images/rental/rental_fruitwood_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Fruitwood Chiavari Chairs" src="images/rental/rental_fruitwood_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Natural Chiavari Chair</b></span>
			                	<a href="images/rental/rental_natural_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Natural Chiavari Chairs" src="images/rental/rental_natural_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Black Chiavari Chair</b></span>
			                	<a href="images/rental/rental_black_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Black Chiavari Chairs" src="images/rental/rental_black_t.png" /></a>
			            	</div>
			            	
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>White Chiavari Chair</b></span>
			                	<a href="images/rental/rental_white_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="White Chiavari Chairs" src="images/rental/rental_white_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Ivory Chiavari Chair</b></span>
			                	<a href="images/rental/rental_ivory_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Ivory Chiavari Chairs" src="images/rental/rental_ivory_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Navy Chiavari Chair</b></span>
			                	<a href="images/rental/rental_navy_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Whitewash Chiavari Chairs" src="images/rental/rental_navy_t.png" /></a>
			            	</div>
			            	
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Red Chiavari Chair</b></span>
			                	<a href="images/rental/rental_red_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Red Chiavari Chairs" src="images/rental/rental_red_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Whitewash Chiavari Chair</b></span>
			                	<a href="images/rental/rental_whitewash_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Whitewash Chiavari Chairs" src="images/rental/rental_whitewash_t.png" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Clear Chiavari Chair</b></span>
			                	<a href="images/rental/rental_clear_l.png" rel="chiavari-chairs" class="anchor_border fancybox"><img alt="Black Chiavari Chairs" src="images/rental/rental_clear_t.png" /></a>
			            	</div>
			        	</div>
		            	<div class="spacer_height10"></div>
		            	<h2 id="thonet" class="page_head2">Thonet Bentwood Chairs + Benches</h2>
		            	<div class="spacer_height5"></div>
		            	<div class="float_l font-13"><i>Parisian-Cafe style bentwood chair and loveseat bench. A classic silhouette in a Walnut finish.Available with cushion in a linen-textured, natural-colored fabric. Bench Dims: Dimensions: 45" long x 17" deep x 34" tall
</i></div><div class="spacer_height5"></div>
						<div class="img2-1" style="width:auto">
		                	<a href="images/Thonet-Chair-for-web.jpg" rel="Louis-Chairs" class="anchor_border fancybox" title=" "><img alt="White Louis Barstool VF" style="max-width:100%!important" src="images/Thonet-Chair-for-web.jpg"></a>
		            	</div>
		            	<div class="img2-1" style="width:auto;float: right;margin-right: 8.3%;">
		                	<a href="images/Thonet-Bench-for-web.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img style="max-width:100%!important" alt="White Louis Chair with Clear Back Vision Furniture" src="images/Thonet-Bench-for-web.jpg" /></a>
		            	</div>
						
						<div class="spacer_height10"></div>
		            	<h2 id="louis-chair" class="page_head2">NEW White Louis Chairs & White Louis Barstools </h2>
		            	<div class="spacer_height5"></div>
		            	<div class="float_l font-13"><i>*The White Louis Chair is larger than Chiavari Chairs so you may not be able to fit as many chairs per table with this style.</i></div>
						<div class="spacer_height10"></div>
		            	<div class="float_l">Louis Chairs have a White wooden chair frame with lux patent leather seat.</div>
		            	<div class="spacer_height20"></div>
		            	<div class="img2-1">
		                	<a href="images/White-Louis-Barstool-VF.jpg" rel="Louis-Chairs" class="anchor_border fancybox" title=" "><img alt="White Louis Barstool VF" src="images/White-Louis-Barstool-VF-thumb.jpg"></a>
		            	</div>
		            	<div class="img2-1">
		                	<a href="images/White-Louis-Chair-with-Clear-Back-Vision-Furniture.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/White-Louis-Chair-with-Clear-Back-Vision-Furniture-thumb.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider5.php"); ?></div>
						
		            	<div class="spacer_height10"></div>
		            	
		            	
		            	<h2 id="Chateau-Chair" class="page_head2">NEW Chateau Side Chair &amp; Barstool</h2>
		            	<div class="spacer_height5"></div>
		            	<div class="float_l"><b>Chateau Side Chair:</b> 19” w x 20” d x 37” h</div>
		            	<div class="spacer_height5"></div>
		            	<div class="float_l font-13"><i>*The Chateau Side Chair is larger than Chiavari Chairs so you may not be able to fit as many chairs per table with this style.</i></div>
						<div class="spacer_height10"></div>
		            	<div class="float_l">A versatile addition to the Vision event rental inventory. The Old World elegance of the Chateau Chair works well in simple, chic or contemporary settings. This romantic style is perfect for sweetheart tables, head tables or your entire party. The Chateau Chair also pairs well with our Chiavari Chairs and Cross Back Chairs.</div>
		            	<div class="spacer_height20"></div>
						
		            	<div class="img2-1">
		                	<a href="images/Chateau-Barstool-for-web.jpg" rel="Louis-Chairs" class="anchor_border fancybox" title=" "><img alt="White Louis Barstool VF" src="images/Chateau-Barstool-for-web11.jpg"></a>
		            	</div>
		            	<div class="img2-1">
		                	<a href="images/Chateau-Chair-for-web.jpg" rel="Louis-Chairs" class="anchor_border fancybox"><img alt="White Louis Chair with Clear Back Vision Furniture" src="images/Chateau-Chair-for-web11.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
						<div class="img1-1"><? include("includes/luminary-slider2.php"); ?></div>
		            	
			            <div class="spacer_height10" id="dorsia1"></div>
			            
		            	
		            	
		            	<h2 class="page_head2" id="dorsia-collection">NEW Dorsia Collection</h2>
		            	<div class="float_l">Dorsia is a playful yet mysterious little collection… Dorsia's mix of metals and opulent fabrics make this exclusive collection hard to pass up. Gold and Silver side chairs have an interchangeable seat cushion that comes in both Black Velvet or a White Leatherette.<br>
		            	<b>Dorsia Side Chair :</b>19 inches wide<br></div>
		            	
		            	
						<div class="spacer_height20"></div>
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>Dorsia Gold</b></span>
		                	<a href="images/dorsiagold.jpg" class="anchor_border fancybox" title=" "><img alt="Frenchie Smoke Side Chair" src="images/dorsiagold.jpg"></a>
		            	</div>
		            	
						
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>Dorsia Silver</b></span>
		                	<a href="images/dorsiasilver.jpg" class="anchor_border fancybox" title=" "><img alt="Rental Frenchie" src="images/dorsiasilver.jpg"></a>
		            	</div>
						<div class="spacer_height20"></div>
						<div class="img1-1">
						
		                	<? include("includes/luminary-slider3.php"); ?><div class="float_l font-13">
						<center><i>Thanks to: Jamie Rothstein, Marc Uravic, Langdon Photography and The Logan Hotel.</i></center></div></div>
						<div class="spacer_height20"></div>
						<div class="img2-1">
						<span class="anchor_border_text"><b>Dorsia Barstool</b></span>
		                	<a href="images/dorsiabar.jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/dorsiabar.jpg"></a>
		            	</div>
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>Dorsia Barstool</b></span>
		                	<a href="images/chair-custom/rental-barstools/Gold_Dorsia_Barstool-high_res.jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/chair-custom/rental-barstools/Gold_Dorsia_Barstool-high_res-t.jpg"></a>
		            	</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>ESPACE White Armchair</b></span>
		                	<a href="images/escwhite.jpg" class="anchor_border fancybox"><img alt="Rental Frenchie" src="images/escwhite.jpg" /></a>
		            	</div>
						<div class="img2-1">
						<span class="anchor_border_text"><b>ESPACE Black Armchair</b></span>
		                	<a href="images/escblack.jpg" class="anchor_border fancybox"><img alt="Rental Frenchie" src="images/escblack.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            	<div class="spacer_height10"></div>
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>DORSIA GOLD COCKTAIL TABLE </b></span>
		                	<a href="images/chair-custom/rental-barstools/Dorsia_Cocktail_Table-Gold-high_res.jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/chair-custom/rental-barstools/Dorsia_Cocktail_Table-Gold-high_res-t.jpg"></a>
		            	<center><i>Available with Silver or Gold base. Top available in Black Glass or Mirror.</i></center></div>
		            	<div class="img2-1">
						<span class="anchor_border_text"><b>DORSIA SILVER COCKTAIL TABLE</b></span>
		                	<a href="images/Dorsia-Cocktail-Table-Silver-w-Black-Top-for-web.jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/Dorsia-Cocktail-Table-Silver-w-Black-Top-for-web.jpg"></a>
		            	<center><i>Available with Silver or Gold base. Top available in Black Glass or Mirror.</i></center></div>


		            	<div class="spacer_height10"></div>
		            	<div class="spacer_height10"></div>
		            	<div class="img2-1">
		            	<span class="anchor_border_text"><b>DORSIA SILVER BAR BACK </b></span>
		                	<a href="images/chair-custom/rental-barstools/Straight_Dorsia_Bar_Back_-_Silver_(high_res).jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/chair-custom/rental-barstools/Straight_Dorsia_Bar_Back_-_Silver_(high_res)-t.jpg"></a>
		            	</div>
<div class="img2-1">
		            	<span class="anchor_border_text"><b>DORSIA GOLD BAR BACK </b></span>
		                	<a href="images/chair-custom/rental-barstools/Geo_Dorsia_Bar_Back_-_Gold_(high_res).jpg" class="anchor_border fancybox" title=" " id="dorsia"><img alt="Rental Frenchie" src="images/chair-custom/rental-barstools/Geo_Dorsia_Bar_Back_-_Gold_(high_res)-t.jpg"></a></div>
		            	<div class="spacer_height10"></div>
		            	
		            	
		            	<h2 class="page_head2" id="frenchie-chair">Frenchie Chair</h2>
		            	<div class="float_l">A modern take on the Parisian boudoir chair the Frenchie is adaptable to many styles of decor. With its curvy lines and subtle details this dainty club chair is a throwback to a 1920's smoking lounge while still grounded in modern style.</div>
		            	
		            	<div class="spacer_height20"></div>
		            	<div class="img2-1">
		                	<a href="images/frenchie-smoke-side-chair.jpg" class="anchor_border fancybox" title=" "><img alt="Frenchie Smoke Side Chair" src="images/frenchie-smoke-side-chair-thumb.jpg"></a>
		            	</div>
		            	<div class="img2-1">
		                	<a href="images/rental-frenchie-dinner-chair2.jpg" class="anchor_border fancybox" title=" "><img alt="Rental Frenchie" src="images/rental-frenchie-dinner-chair2-t.jpg"></a>
		            	</div>
		            	
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            		<div class="img1-1"><? include("includes/luminary-slider6.php"); ?></div>
		            	<div class="spacer_height10"></div>

		            	
		            	<h2 class="page_head2" id="chelsea-line">Chelsea Line</h2>
		            	<div class="float_l">These versatile bistro style chairs are crafted using galvanized steel for a vintage, industrial look. The Chelsea line offers a trendy yet timeless effect and pairs well with our rustic Farm Tables or linens.</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		              	<div class="img1-1"><? include("includes/luminary-slider7.php"); ?></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="rental3-1">
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Chelsea Barstool<br />Tobacco</b></span>
			                	<a href="images/rental/chelsea-barstool.jpg" class="anchor_border fancybox"><img alt="Chelsea Barstool" src="images/rental/chelsea-barstool_t.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Chelsea Side Chair<br />Tobacco</b></span>
			                	<a href="images/rental/chelsea-side-chair-tobacco.jpg" class="anchor_border fancybox"><img alt="Chelsea Side Chair" src="images/rental/chelsea-side-chair-tobacco_t.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Corkscrew Stool<br />Black</b></span>
			                	<a href="images/rental/corkscrew-stool.jpg" class="anchor_border fancybox"><img alt="Corkscrew Stool" src="images/rental/corkscrew-stool_t.jpg" /></a>
			            	</div>
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Chelsea Barstool<br />Brushed Nickel</b></span>
			                	<a href="images/rental/chelsea-barstool-nickel.jpg" class="anchor_border fancybox"><img alt="Chelsea Barstool" src="images/rental/chelsea-barstool-nickel_t.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Chelsea Side Chair<br />Brushed Nickel</b></span>
			                	<a id="brushed-nickel" href="javascript:;" class="anchor_border"><img alt="Chelsea Side Chair" src="images/rental/chelsea-side-chair_t.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			                	<span class="anchor_border_text"><b>Chelsea Stool<br />Brushed Nickel</b></span>
			                	<a href="images/rental/chelsea-stool.jpg" class="anchor_border fancybox"><img alt="Chelsea Stool" src="images/rental/chelsea-stool_t.jpg" /></a>
			            	</div>
						</div>
		            
			            
			            <div class="spacer_height10"><a name="designer-chairs"></a></div>
		            	<h2 class="page_head2" id="cross-back-chairs">Cross Back Chairs</h2>
		            	<div class="float_l">Our rustic Cross Back chairs come in two finishes: Raw or Walnut. The Raw chair has a beachy bohemian feel while the Walnut has a rich, classic look. These chairs pair especially well with our Farm Tables.</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider8.php"); ?></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
			            <div class="img2-1">
			                <span class="anchor_border_text"><b>Raw Cross Back Chair</b></span>
			                <a href="images/rental/rental_cross_back_l.png" class="anchor_border fancybox"><img alt="Raw Cross Back Chiavari Chair" src="images/rental/rental_cross_back_t.png" /></a>
			            </div>
			            <div class="img2-1">
			                <span class="anchor_border_text"><b>Walnut Cross Back Chair</b></span>
			                <a href="images/rental/rental_walnut_cross_back_l.png" class="anchor_border fancybox"><img alt="Walnut Cross Back Chiavari Chair" src="images/rental/rental_walnut_cross_back_t.png" /></a>
			            </div>
						
			            <div class="spacer_height10"></div>
		             	<div class="spacer_height10"></div>
		            	<h2 class="page_head2" id="natural-cross-back">NEW Natural Cross Back Bar Stools</h2>
		            	<div class="float_l">Height to Seat Top: 30 inches Pairs perfectly with our Natural (Raw) Cross Back Chairs.</div>
		           		<div class="spacer_height10"></div><div class="spacer_height10"></div>
		           		<div class="img3-1">
		                	<a href="images/rental/cross-back-bar-stool.jpg" class="anchor_border fancybox"><img alt="cross back bar stool." src="images/rental/cross-back-bar-stool.jpg" /></a>
		            	</div>
		             	<div class="img3-1">
		                	<a href="images/rental/cross-back-bar-stool-back.jpg" class="anchor_border fancybox"><img alt="cross back bar stool back" src="images/rental/cross-back-bar-stool-back.jpg" /></a>
		            	</div>
		            
		            	<div class="img3-1">
		                	<a href="images/rental/cross-back-bar-stool-with-cushion.jpg" class="anchor_border fancybox"><img alt="cross back bar stool with cushion" src="images/rental/cross-back-bar-stool-with-cushion.jpg" /></a>
		            	</div>
		            	<h2 class="page_head2" id="tuxedo-chairs">Tuxedo Chairs</h2>
		            	<div class="float_l">These contemporary glassfibre reinforced polypropylene chairs are a fun, modern alternative to our other rental chairs. The sleek design brings unique character to any indoor or outdoor event.</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		             	<div class="img1-1"><? include("includes/luminary-slider9.php"); ?></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Black Tuxedo Chair</b></span>
		                	<a href="images/rental/rental_black_tie_l.png" class="anchor_border fancybox"><img alt="Black Tie Chiavari Chair" src="images/rental/rental_black_tie_t.png" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>White Tuxedo Chair</b></span>
		                	<a href="images/rental/rental_white_tie_l.png" class="anchor_border fancybox"><img alt="White Tie Chiavari Chair" src="images/rental/rental_white_tie_t.png" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            
		            	<h2 class="page_head2" id="resin-folding-chairs">Resin Folding Chairs</h2>
		            	<div class="float_l">Our classic Resin Folding Chairs work well in both outdoor and indoor settings. With your choice of White or Black you can be sure they will look sharp for any occasion.</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider10.php"); ?></div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Black Resin Folding Chair</b></span>
		                	<a href="images/rental/rental_black_folding_l.png" class="anchor_border fancybox"><img alt="Black Folding Chair" src="images/rental/rental_black_folding_t.png" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>White Resin Folding Chair</b></span>
		                	<a href="images/rental/rental_white_folding_l.png" class="anchor_border fancybox"><img alt="White Folding Chair" src="images/rental/rental_white_folding_t.png" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            
		            	<h2 class="page_head2" id="ghost-chairs">Ghost Chairs and Ghost Stools</h2>
		            	<div class="float_l">The Clear Ghost Chair compliments both the Clear Chiavari Chair and the Clear Ghost Stool. Our clear resin options also offer an eclectic juxtaposition when paired with our rustic Farm Tables and glam Charger Plates. 
		            	
		            	</div>
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider11.php"); ?></div>
		            	
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img3-1">
		                	<span class="anchor_border_text"><b>Ghost Stool</b></span>
		                	<a href="images/rental/rental_ghost-stool.png" class="anchor_border fancybox"><img alt="Ghost Stool" src="images/rental/rental_ghost-stool_t.png" /></a>
		            	</div>
		            	<div class="img3-1">
		                	<span class="anchor_border_text"><b>Ghost Chair with Arms</b></span>
		                	<a href="images/rental/ghost-arm-chair.jpg" class="anchor_border fancybox"><img alt="Ghost Chair with Arms" src="images/rental/ghost-arm-chair-t.jpg" /></a>
		            	</div>
		            	<div class="img3-1">
		                	<span class="anchor_border_text"><b>Ghost Chair - Armless</b></span>
		                	<a href="images/rental/rental_gost3.png" class="anchor_border fancybox"><img alt="Ghost Chair - Armless" src="images/rental/rental_gost3_t.png" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            
		            	<h2 class="page_head2" id="ghost-chairs-solid">Ghost Chairs – Solid Black or White</h2>
		            	<div class="float_l">Our solid color Black or White Ghost Side Chairs and Ghost Stools have a sleek but fun look and feel.
		            	<br>
		            	<b>Ghost Chairs:</b> 14.5 inches wide<br></div>
		             	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		             	
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Ghost Chair White</b></span>
		                	<a href="images/rental/ghost-chair-white.jpg" class="anchor_border fancybox"><img alt="Ghost Chair White" src="images/rental/ghost-chair-white-t.jpg" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Ghost Stool White</b></span>
		                	<a href="images/rental/ghost-stool-white.jpg" class="anchor_border fancybox"><img alt="Ghost Stool White" src="images/rental/ghost-stool-white-t.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Ghost Chair Black</b></span>
		                	<a href="images/rental/ghost-chair-black.jpg" class="anchor_border fancybox"><img alt="Ghost Chair Black" src="images/rental/ghost-chair-black-t.jpg" /></a>
		            	</div>
		            	<div class="img2-1">
		                	<span class="anchor_border_text"><b>Ghost Stool Black</b></span>
		                	<a href="images/rental/ghost-stool-black.jpg" class="anchor_border fancybox"><img alt="Ghost Stool Black" src="images/rental/ghost-stool-black-t.jpg" /></a>
		            	</div>
		            	<div class="spacer_height10"></div>
		            
		            	<h2 class="page_head2" id="verona-collection">Verona Collection – (White, Black or Magenta)</h2>
		            	<div class="float_l">We like to call The Verona Collection functional fabulous art. This line has strong baroque themes while remaining whimsical. Perfect for cocktail/lounge scenes and Mitzvahs. (The Juliet Chair is a smaller scale version of the Romeo Chair) <a href="verona-dimensions.pdf" target="_blank">Click here</a> for Verona Collection dimensions</div>
		            	<div class="spacer_height10"></div>
		            	<div class="img1-1"><? include("includes/luminary-slider13.php"); ?></div>
						
		            	<div class="spacer_height10"></div><div class="spacer_height10"></div>
		            	<div class="rental3-1">
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Black Coffee Table</b></span>
			                	<a href="images/black-coffee-table.jpg" class="anchor_border fancybox"><img alt="Black Coffee Table" src="images/black-coffee-table-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Black Pouf Ottoman</b></span>
			                	<a href="images/black-pouf-ottoman.jpg" class="anchor_border fancybox"><img alt="Black Pouf Ottoman" src="images/black-pouf-ottoman-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Black Romeo Chair</b></span>
			                	<a href="images/black-romeo-chair.jpg" class="anchor_border fancybox"><img alt="Black Romeo Chair" src="images/black-romeo-chair-sm.jpg" /></a>
			            	</div>
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Magenta Coffee Table</b></span>
			                	<a href="images/magenta-coffee-table.jpg" class="anchor_border fancybox"><img alt="Magenta Coffee Table" src="images/magenta-coffee-table-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Magenta Pouf Ottoman</b></span>
			                	<a href="images/magenta-pouf-ottoman.jpg" class="anchor_border fancybox"><img alt="Magenta Pouf Ottoman" src="images/magenta-pouf-ottoman-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Magenta Romeo Chair</b></span>
			                	<a href="images/magenta-romeo-chair.jpg" class="anchor_border fancybox"><img alt="Magenta Romeo Chair" src="images/magenta-romeo-chair-sm.jpg" /></a>
			            	</div>
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>White Coffee Table</b></span>
			                	<a href="images/white-coffee-table.jpg" class="anchor_border fancybox"><img alt="White Coffee Table" src="images/white-coffee-table-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>White Pouf Ottoman</b></span>
			                	<a href="images/white-pouf-ottoman.jpg" class="anchor_border fancybox"><img alt="White Pouf Ottoman" src="images/white-pouf-ottoman-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>White Romeo Chair</b></span>
			                	<a href="images/white-romeo-chair.jpg" class="anchor_border fancybox"><img alt="White Romeo Chair" src="images/white-romeo-chair-sm.jpg" /></a>
			            	</div>
			            	<div class="spacer_height10"></div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>White Juliet Chair</b></span>
			                	<a href="images/white-juliet-chair.jpg" class="anchor_border fancybox"><img alt="White Juliet Chair" src="images/white-juliet-chair-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Bella Side Chair</b></span>
			                	<a href="images/bella-sidechair.jpg" class="anchor_border fancybox"><img alt="Bella Side Chair" src="images/bella-sidechair-sm.jpg" /></a>
			            	</div>
			            	<div class="img3-1">
			            		<span class="anchor_border_text"><b>Verona Dimensions</b></span>
			                	<a href="verona-dimensions.pdf" class="anchor_border" target="_blank"><img alt="Bella Side Chair" src="images/pdf-icon.jpg" /></a>
			            	</div>
							
		            		<div class="spacer_height20"></div>
		            		<h2 class="page_head2" id="luminary-collection">LUMINARY Collection – Seating</h2>
		            		<div class="float_l">The LUMINARY Collection contains an assortment of light furniture and accessories that can illuminate and enhance the look and style of any event. <a href="luminary-collection.php">Click here</a> to see full collection. Call us at <b>215.695.3300</b> for more information on renting this line or Request a Quote <a href="contact.php">here</a>.</div>
		            		<div class="spacer_height10"></div>
		           			<div class="rental3-1">
								<div class="img3-1">
			            			<span class="anchor_border_text"><b>S-Bench</b></span>
			                		<a href="images/s-bench.jpg" class="anchor_border fancybox"><img alt="S-Bench" src="images/s-bench-sm.jpg" /></a>
			            		</div>
			            		<div class="img3-1">
			            			<span class="anchor_border_text"><b>Amore Bench</b></span>
			                		<a href="images/amore-bench.jpg" class="anchor_border fancybox"><img alt="Amore Bench" src="images/amore-bench-sm.jpg" /></a>
			            		</div>
			            		<div class="img3-1">
			            			<span class="anchor_border_text"><b>Geo Lounge</b></span>
			                		<a href="images/geo-lounge.jpg" class="anchor_border fancybox"><img alt="S-Bench" src="images/geo-lounge-sm.jpg" /></a>
			            		</div>
			            		<div class="spacer_height10"></div>
			            		<div class="img3-1">
			            			<span class="anchor_border_text"><b>Cube-O</b></span>
			                		<a href="images/cube-o.jpg" class="anchor_border fancybox"><img alt="Cube-O" src="images/cube-o-sm.jpg" /></a>
			            		</div>
			            		<div class="img3-1">
			            			<span class="anchor_border_text"><b>Stella Bench</b></span>
			                		<a href="images/stella-bench.jpg" class="anchor_border fancybox"><img alt="Stella Bench" src="images/stella-bench-sm.jpg" /></a>
			            		</div>
			            		<div class="img3-1">
			            			<span class="anchor_border_text"><b>Elroy Love Seat</b></span>
			                		<a href="images/elroy-love-seat.jpg" class="anchor_border fancybox"><img alt="Elroy Love Seat" src="images/elroy-love-seat-sm.jpg" /></a>
			            		</div>
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
</div>
<? include("includes/footer.php"); ?>
</body>
</html>