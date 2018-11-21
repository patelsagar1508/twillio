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
<title>Chiavari Cushion Crawler | ChiavariChairs.com</title>
<meta name="description" content="Chiavari Chair Cushion Crawler adds speed & mobility to transport several cushions from one place to another. It’s faster & easier than ever. Call 215.695.3300" />
<? include("includes/head.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
    /*
            *   Examples - images
            */
    $("#circle1").fancybox();
    $("#circle2").fancybox();
    $("#circle3").fancybox();
    $("#circle4").fancybox();
});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-cushions-banner.jpg" alt="Chiavari Cushion Crawler" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new1.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Cushion Crawler&trade;</h2>
        <div class="float_l">
            <div class="left70">
                <h3 class="page_head3">Stop Bending Over To Tie Your Chiavari Chair Cushions!</h3>
                <p>Sitting on a cushion crawler adds speed and mobility while virtually eliminating back strain from tying hundreds of cushions to your Chiavari Chairs. With our Cushion Crawler, your job is now faster and easier which saves time, money and much backache.</p>
                <div class="spacer_height10"></div>
                <h3 class="page_head3">Up to 3 times faster than the bend over tying method!</h3>
                <p>Easily move around your ballroom floor from one chair to another on your Cushion Crawlers. They are equipped with comfortable, padded seats, durable synthetic leather upholstery, heavy duty chrome-plated steel frame, and long lasting 3&quot; ball bearing wheels that will allow you to glide easily over wood floors and low pile carpets. Our Cushion Crawlers weighs only 20 lbs.</p>
                <div class="spacer_height10"></div>
                <p>Make tying cushions fun and more profitable - <a href="blog/the-cushion-crawler-saving-time-money-aches-pains-since-2013/">Cushion Crawler</a></p>
            </div>
            <div class="right29">
                <a href="images/chiavari-cushion-crawler-lg.gif" class="anchor_border" id="circle3">
                	<img src="images/chiavari-cushion-crawler-sm.gif" alt="Chiavari Cushion Crawler" align="right" /></a>
            </div>
        </div>
        <div class="spacer_height10"></div>
        <div class="float_l">
            <div class="img3-1"><a href="images/chiavari-cushion-crawler1-l.gif" class="anchor_border" id="circle2">
            	<img alt="Chiavari Cushion Crawler" src="images/chiavari-cushion-crawler1.gif" /></a></div>
            <div class="img3-1"><a href="images/chiavari-cushion-crawler2-l.gif" class="anchor_border" id="circle1">
            	<img alt="Chiavari Cushion Crawler" src="images/chiavari-cushion-crawler2.gif" /></a></div>
            <div class="img3-1"><a href="images/chiavari-cushion-crawler3-l.gif" class="anchor_border" id="circle4">
            	<img alt="Chiavari Cushion Crawler" src="images/chiavari-cushion-crawler3.gif" /></a></div>
        </div>
        <h4 class="page_head4">Important Info:</h4>
        <p>Works great on wood floors and low-pile carpets. Weighs only 20 lbs.</p>
        <div class="spacer_height10"></div>
                <div align="center" class="float_l">
                    <a class="shop_link" target="_blank" href="https://shop.visionfurniture.com/Cushion-Crawler_p_185.html"></a>
                </div>
        <? 
            $main_content = ob_get_clean();
            global $page_name;
            $page_name = 'crawler';
            include('includes/tabs-cushions.php');
        ?>            
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>