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
<title>Folding Chair Carts | ChiavariChairs.com</title>
<meta name="description" content="Make transporting your Resin Folding Chairs easy with this multifunctional dolly. In addition to moving Folding Chairs this cart can also accommodate large boxes, crates, banquet tables and more!" />
<?php include("includes/head.php"); ?>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-folding-banner.gif" alt="Chiavarichair Folding Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Folding Chair Cart – <b>NEW!</b> </h2>
       <div class="spacer_height10"></div>
        <p>Our Flat Dolly Folding Chair Cart is great for transporting our White Folding Chairs and with its versatile shape this cart is easy to use for other warehouse or ballroom transportation needs. </p>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <p>The VF push cart quickly moves 30-35 resin folding chairs around your ballroom or warehouse with ease. The durable steel/polyethylene frame and reinforced ball-bearing wheels are durable and built to glide around ballroom surfaces without causing damage or abrasions.</p>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <center>
        <div class="float_l" style="text-align: inherit;">
            <a href="https://shop.visionfurniture.com/Folding-Chair-Cart_p_321.html" target="_blank" class="shop_link"></a>
        </div>
		</center>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <ul class="list widht50">
            <li>1,500 lbs capacity</li>
            <li>Stack up to 35 Folding Chairs </li>
            <li>Use safety strap (1 included) to secure cargo to cart</li>
            <li>Durable polyethylene and steel frame</li>
            <li>Made in the USA</li>
            <li>Premium 4" casters with brakes</li>
            <li>Versatile Size 32 x 21 x 7</li>
            <li>Great for other warehouse/ballroom transport needs!</li>
        </ul>
        <div class="spacer_height15"></div>
        <p align="center"><img src="images/chiavari-folding-chair-cart.png" alt="Chiavari Folding Chair Cart" width="730" height="420"/></p>
        <div class="spacer_height10"></div>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/gMv6OpjnzoQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
       		
        <div class="spacer-15px"></div>
        <p align="center" class="font20">Looking for more <b>Moving Carts</b> for Chiavari chairs, banquet tables, etc.?<br />Check out our range of Moving Carts! <a href="https://www.visionfurniture.com/moving-carts/" target="_blank">View Here</a></p>
        <ul class="img3-1-new mov-cart">
        	<li><a href="https://shop.visionfurniture.com/Chiavari-Chair-Cart--The-Chair-Shark_p_187.html" target="_blank"><img src="images/moving-cart/chiavari-shark-cart-t.jpg" alt="Chiavari Chair Moving Cart" /></a></li>
        	<li><a href="https://shop.visionfurniture.com/Mega-Dolly-Cart_p_323.html" target="_blank"><img src="images/moving-cart/chiavari-mega-dolly-cart-t.jpg" alt="Yellow Mega Dolly Cart" /></a></li>
        	<li><a href="https://shop.visionfurniture.com/Cushion-Crawler_p_185.html" target="_blank"><img src="images/moving-cart/chiavari-cushion-crawler-t.jpg" alt="Chiavari Chair Cushion Crawler" /></a></li>
        </ul>     
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'chair-cart';
        include('includes/tabs-folding.php');
        ?>  
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php");?>
</body>
</html>