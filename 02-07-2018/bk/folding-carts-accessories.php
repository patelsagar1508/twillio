<?
session_start();
ob_start();
//include("includes/dbconfig.php");
require_once "includes/functions.php";
include("includes/before_header.php");
?>   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Folding Chair Dolly | ChiavariChairs.com</title>
<meta name="description" content="Our Resin Folding Chair Carts are designed to move 30-35 black or white folding chairs at a time. The chair dolly’s steel frame and wheels are durable and built to glide smoothly over ballroom surfaces." />
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
<div class="page_banner"><img src="images/chiavari-folding-banner.gif" alt="Chiavari Folding Banner " /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel">
        <? include("includes/col-left_new.php"); ?>
    </div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Carts and Accessories</h2>
        <div class="spacer_height10"></div>
        <p>Our resin folding chair cart is designed specifically for our white or black resin folding chairs. It quickly moves 30-35 resin folding chairs around your ballroom and into storage with ease. The steel frame structure and reinforced ball-bearing whells are very durable and built to glide around ballroom surfaces without causing damage or abrasions.</p>
        <div class="spacer_height10"></div>
        <h3 class="page_head3">Key features:</h3>
        <ul class="list">
            <li><strong>3-inch ball-bearing wheels</strong> - Easily glide over any ballroom floor surface</li>
            <li><strong>Extended, angled handle</strong> - Provides leverage to move heavy stacks of chairs</li>
            <li><strong>Lightweight</strong> - A stack of chairs is heavy enough, our cart does not add much weight</li>
            <li><strong>Custom-designed for our resin folding chairs</strong> - An exact fit means it is safer!</li>
        </ul>
        <div class="spacer_height10"></div>
        <p align="center"><a href="images/chiavari-folding-resin-dimensions-lg.jpg" id="circle1" class="anchor_border"><img src="images/chiavari-folding-resin-dimensions-sm.jpg" width="350" height="270" alt="Chiavari folding Resin Dimensions" /></a><br /><b>(Click image to zoom in)</b></p>
        <div class="spacer_height10"></div>
        <p>The resin folding chair cart excels in both the warehouse and ballroom settings. It is a strong product that is quite durable and will allow your business to quickly transport stacks of resin folding chairs.</p>
        <div class="spacer_height10"></div>
        <p><a href="folding-most-reliable.php">Read more about our Resin Folding Chairs....</a></p>
        <div class="spacer_height10"></div>
        <div class="float_l" align="center">
            <a href="https://shop.visionfurniture.com/Resin-Folding-Chair-Cart-_p_188.html" target="_blank" class="shop_link"></a>
        </div>
        <h3 align="center" class="page_head3">Call for a Quote: 215.695.3300</h3>
        
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'carts-accessories';
        include('includes/tabs-folding.php');
        ?>
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
<div class="popup-dropbox">
    <div id="shoppop">
       <div class="shoppop_text">You are now leaving Vision Furniture's Main website and entering the Vision Furniture Retail Shop</div> 
       <div class="shoppop_btn">
            <a onclick="$.fancybox.close();" href="javascript:;" class="back">Back</a>
            <a href="http://shop.visionfurniture.com/Resin-Chair-Cart-for-Resin-Folding-Chairs_p_11.html" class="continue">Continue</a>
       </div>
    </div>
</div>
</body>
</html>   