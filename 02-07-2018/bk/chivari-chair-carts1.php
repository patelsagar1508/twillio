<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>VISION FURNITURE : Chair Carts</title>
<?php include("includes/head.php"); ?>
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
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chair-banner.gif" alt="" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Chiavari Chair Carts</h2>
        <div class="float_l">
            <div class="innerpage_left chair_cover_left">
                <h3 class="page_head3">“The Chair Shark? by Vision Furniture</h3>
                <p>The Chair Shark is a sleek Chair Cart designed specifically for Chiavari Ballroom Chairs. It quickly scoops up stacks of Chiavari Chairs with ease. The steel frame structure and reinforced wheels are durable and the front gliding wheels allow the chair cart to glide across ballroom surfaces without causing damage or abrasions. </p>
                <p>The Chair Shark excels in both the warehouse and ballroom settings. It is a strong product by Vision Furniture that is durable and will allow your business to quickly transport stacks of Chiavari Chairs. </p>
                <div class="spacer_height10"></div>
                <div class="spacer_height10"></div>
                <div class="float_l" align="center">
                    <a href="http://shop.visionfurniture.com/Chiavari-Chair-Cart--The-Chair-Shark_p_8.html" target="_blank" class="shop_link"></a>
                <p align="center">Wholesale/bulk pricing available.</p>
                </div>
            </div>
            <div class="innerpage_right chair_cover_right" >
                <img src="images/sonya-cart.gif" alt="Sonya Chair Cart" class="imgborder" />
            </div>
        </div>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <div class="float_l">
            <div class="img2-1">
                <span class="anchor_border_text"><b>Large Rear Wheels make it easy<br />to roll over bumps in the road</b></span>
                <img src="images/cart-rearwheels.gif" alt="Cart-rear" class="imgborder" />
            </div>
            <div class="img2-1">
                <span class="anchor_border_text"><b>Wheels in front of cart slide right under<br />the chairs and won't scratch your floor!</b></span>
                <img src="images/chart-frontwheels.jpg" alt="Cart-front" class="imgborder" />
            </div>
            <div class="spacer_height10"></div>
            <div class="img2-1">
                <span class="anchor_border_text"><b>Wide Wheel Base for added stability</b></span>
                <img src="images/cart-rear2.jpg" alt="Cart" class="imgborder" />
            </div>
            <div class="img2-1">
                <span class="anchor_border_text"><b>Rubberized handle for Premium Comfort</b></span>
                <img src="images/cart-handle.jpg" alt="Handle" class="imgborder" />
            </div>
        </div>
        <div class="spacer_height10"></div>
        <h4 class="page_head4">Important Info:</h4>
        <p>Works with all Vision Furniture brand Chiavari Chairs For other chairs, Chair Leg Opening must be at least 10.5&quot; wide x 11&quot; tall to accept the chair cart. Some slight easy assembly required. We recommend stacking no higher than 7 chairs in a stack.</p>
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
            <a href="http://shop.visionfurniture.com/Chiavari-Chair-Cart--The-Chair-Shark_p_8.html" class="continue">Continue</a>
       </div>
    </div>
</div>
</body>
</html>