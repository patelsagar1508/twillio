<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Chiavari Chair Cart Dolly | ChiavariChairs.com</title>
<meta name="description" content="Chiavari Chair Carts specifically designed to cradle the stack easily for an easy transport and durable handling. Order at 215.695.3300 for fast delivery" />
<?php include("includes/head-chair.php"); ?>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        *   Examples - images
        */
        $('.fancybox').fancybox();
        $("#circle1").fancybox();            
        $("#shop_link").fancybox({
            'transitionIn'    :    'elastic',
            'transitionOut'    :    'elastic',
            'speedIn'        :    600, 
            'speedOut'        :    200, 
            'overlayShow'    :    true
        });            
        });
</script>
<script>
	$(function(){
		$('#cart-slider').slides({
			preload: true,
			preloadImage: 'images/loading.gif',
			effect: 'slide, fade',
			crossfade: true,
			slideSpeed: 350,
			fadeSpeed: 500,
			generateNextPrev: false,
			generatePagination: false
		});
	});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chair-banner.gif" alt="Chiavari Chair Cart Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Chiavari Chair Carts  and Dollies</h2>
        <div class="float_l">
            <div class="innerpage_left chair_cover_left">
                <h3 class="page_head3">The Chair Shark by Vision Furniture</h3>
                <p>The Chair Shark is a sleek Chiavari Chair Cart designed specifically for Chiavari Ballroom Chairs. It quickly scoops up stacks of Chiavari Chairs. The steel frame structure and reinforced wheels on this chair dolly are durable and the front gliding wheels allow the chair cart to glide across surfaces without causing damage.</p>
                <div class="spacer-15px"></div>
                <div class="float_l" align="center">
                    <a href="https://shop.visionfurniture.com/Chiavari-Chair-Cart--The-Chair-Shark_p_187.html" target="_blank" class="shop_link"></a>
                </div>
                <div class="spacer-15px"></div>
		        <h4 class="page_head4">Important Info:</h4>
		        <p>Cart works with all VF Chiavari Chairs. For other brands, chair leg opening must be at least 10.5" wide x 11" tall to accept the chair cart. Some assembly required. We recommend stacking no higher than 7 chairs.</p>
            </div>
            <div class="innerpage_right chair_cover_right" >
                <div id="cart-slider-main">
					<div id="cart-slider">
						<div class="slides_container">
							<img src="images/chiavari-more-moving-cart-2.jpg" alt="Chiavari More Moving cart">
							<!--<img src="images/chiavari-more-moving-cart.gif"  alt="Chiavari More Moving cart">-->
						</div>
						<!--<ul class="pagination">
							<li><a href="#"><img src="images/chiavari-more-moving-cart-2.jpg" width="75" alt="Chiavari More Moving cart"></a></li>
							<!--<li><a href="#"><img src="images/chiavari-more-moving-cart.gif" width="75" alt="Chiavari More Moving cart"></a></li>-->
						<!--</ul>-->
					</div>
				</div>                
            </div>
        </div>
        <div class="spacer_height10"></div>
        <!--<div class="spacer_height10"></div>
        <div class="float_l">
            <div class="img2-1">
                <span class="anchor_border_text"><b>Large Rear Wheels make it Easy<br /> to Roll Over Bumps</b></span>
                <img src="images/chiavari-large-rear-wheels.gif" alt="Chiavari Large Rear Wheels Cart" class="imgborder" />
            </div>
            <div class="img2-1">
                <span class="anchor_border_text"><b><br />Wide Wheel Base for added stability</b></span>
                <img src="images/chiavari-wide-wheel-base.jpg" alt="Chiavari Wide Wheel Base for added stability" class="imgborder" />
            </div>
        </div>-->
		<div class="spacer_height10"></div>
		
		<center><h3 class="page_head3">Chiavari Chair Cart Dolly by Vision Furniture</h3><iframe width="560" height="315" src="https://www.youtube.com/embed/JLg-qFiqpLE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
		<div class="spacer_height10"></div>.
		<div class="quotebox-tab">
            <div class="quotebox-tab-left"></div>
            <div class="quotebox-tab-text">We absolutely love the Chiavari chairs that are provided by Vision Furniture. The quality of the chairs is phenomenal, and we always receive tons of compliments on them. Anthony is always quick to respond to any needs we may have, and has been a pleasure to work with from the very beginning. We also love the chair carts we received from Vision. They are very handy with the big wheels and they make moving the chairs around very simple. I would highly recommend ordering these as well. When comparing different Chiavari chair companies, I would recommend ordering through Vision as the quality of product is much higher than other chairs I've seen.</div>
            <div class="spacer_height10"></div>
            <span class="quotebox-tab-auth">Ryan Mennenga​ | <a href="http://www.elitemobiledj.com/" target="_blank">Elite Entertainment</a> | Champaign, IL ​</span>
            <div class="quotebox-tab-right"></div>
        </div>
        <div class="spacer-15px"></div>
        <p align="center" class="font20">Looking for more <b>Moving Carts</b> for folding chairs, banquet tables, etc.?<br />Check out our range of Moving Carts! <a href="http://www.visionfurniture.com/moving-carts/" target="_blank">View Here</a></p>
        <ul class="img2-1-new mov-cart">
        	<li><a href="https://shop.visionfurniture.com/Folding-Chair-Cart_p_321.html" target="_blank">
			<span class="anchor_border_text"><b>Folding Chair Cart</b></span>
			<img src="images/moving-cart/snap-loc_platform_truck_black__1-14_.jpg" title="Folding ChairCart" alt="Resin Folding Chair Push Cart" /></a></li>
        	<!--<li><a href="https://shop.visionfurniture.com/Mega-Dolly-Cart_p_323.html" target="_blank">
			<span class="anchor_border_text"><b>Mega Dolly</b></span>
			<img src="images/moving-cart/chiavari-mega-dolly-cart-t.jpg" title="Mega Dolly" /></a></li>-->
        	<li><a href="https://shop.visionfurniture.com/Cushion-Crawler_p_185.html" target="_blank">
			<span class="anchor_border_text"><b>Cushion Crawler</b></span>
			<img src="images/moving-cart/chiavari-cushion-crawler-t.jpg" title="Chiavari Chair Cushion Crawler" alt="Chiavari Chair Cushion Crawler" /></a></li>
        </ul>
		 <div class="spacer_height10"></div>
        <div class="quotebox-tab">
            <div class="quotebox-tab-left"></div>
            <div class="quotebox-tab-text">We decided to test the Cushion Crawler and here was the response from our setup crew last night: ‘You can go ahead and order another Cushion Crawler, best thing you've ever bought, the back pain alone is worth it, and it's almost twice as fast.</div>
            <div class="spacer_height10"></div>
            <span class="quotebox-tab-auth"><a href="javascript:void(0)" target="_blank">SOHO Event and Rentals</a> | Fairhope, AL</span>
            <div class="quotebox-tab-right"></div>
        </div>
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'chair-carts';
        include('includes/tab-chivari-chair.php');
        ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
<div class="popup-dropbox">
    <div id="shoppop">
       <div class="shoppop_text">You are now leaving Vision Furniture's Main website and entering the Vision Furniture Retail Shop</div> 
       <div class="shoppop_btn">
            <a onclick="$.fancybox.close();" href="javascript:;" class="back">Back</a>
            <a href=" https://shop.visionfurniture.com/Chiavari-Chair-Cart--The-Chair-Shark_p_187.html" class="continue">Continue</a>
       </div>
    </div>
</div>
</body>
</html>