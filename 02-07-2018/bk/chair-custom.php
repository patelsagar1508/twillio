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
<title>Custom Chiavari Chairs | ChiavariChairs.com</title>
<meta name="description" content="The classic elegance in custom Chiavari Chair combined with fun, modern looks always comes with custom paint job offered in great Philadelphia area. Call 215.695.3300" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        *   Examples - images
        */

        $("#circle1").fancybox();
        $("#circle2").fancybox();
        });
</script>
<script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	
    $('.fancybox').fancybox();
    
    $(document).ready(function() {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	});

});
</script>
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({carouselWidth:735, carouselHeight:340, directionNav:true, shadow:true});
    });
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavarichairs-custom-painted-banner.gif" alt="Chiavari Chairs Custom Painted Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel">
        <? include("includes/col-left_new.php"); ?>
    </div>
    <div class="right_panel">
        <div class="chair_col_head">
            <h1 class="page_head">Custom-Painted Chiavari Chairs</h1> 
            <div class="spacer_height10"></div>
            <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="wholesale-chiavari-chairs.php">Chiavari Chairs</a><span class="breadcrumbs-arrow"></span><a href="wood-chiavari-chairs.php">Chair Colors</a><span class="breadcrumbs-arrow"></span>Custom-Painted Chiavari Chairs</div>
        </div>
        <div class="chair_col_box"><? include("includes/chair-colors.php"); ?></div>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <div class="img1-1 new">
        	<a class="fancybox-media anchor_border" href="https://www.youtube.com/embed/6idSsLyly7w?autoplay=1"><img alt="Chiavari Chairs Vision Furniture Difference" src="images/vision-furniture-difference-video-thumb.jpg"></a>
        </div>
        <div class="spacer_height10"></div>
        <div class="float_l">
            <div class="left70">
                <p>Need your Chiavari Chairs in a color we don't normally stock? We can paint chairs in any color you like from Tiffany Blue to Crimson Red, Canary Yellow to Hot Pink! </p>
                <p><a href="/custom-chiavari-cushions.php">We make Custom Cushions too!</a></p>
                <div class="spacer_height10"></div>
                <p>Custom Chiavari Chairs are perfect for designer window displays. A leading clothing designer company recently commissioned Vision Furniture to produce &quot;Real Red&quot; chairs for their window displays on 5th Avenue in New York City. If you have special company colors or need to match your room decor, we can paint your chairs in the exact color you need.</p>
                <div class="spacer_height10"></div>
                <h2 class="page_head2">Professional-Quality</h2>
                <div class="spacer_height10"></div>
                <p>Just like all of our chairs, we use premium-quality, durable paints. We use several coats and carefully inspect each chair to ensure there are no imperfections like ugly drips or inconsistent paint coverage.</p>
                <div class="spacer_height10"></div>
                <p><strong>Minimum order:</strong> 10 chairs. <strong>Turnaround time:</strong> 2-4 weeks.</p>
                <div class="spacer_height10"></div>
                <p><a href="contact.php">Contact us for Pricing &amp; Availability.</a></p>
                <div class="spacer_height10"></div>
                <h3 class="page_head3">All Of Our Wood Chairs:</h3>
                <ul class="list">
                    <li>Come backed with a 24-month guarantee on the chair structure.</li>
                    <li>Professionally made with a strong structure and proper finish to last years longer.</li>
                    <li>12-Point Quality Assurance Inspection prior to shipping.</li>
                    <li>Tested to 6 BIFMA furniture testing standards.</li>
                    <li>100% wood chair frame is the most durable construction for longevity.</li>
                </ul>
            </div>
            <div class="right29" align="center">
                <span class="anchor_border_text"><b>"Real Red" Chairs<br />For Window Display:</b></span>
                <a href="images/chairs/chiavari-chair-custom-real-red1-lg.gif" id="circle1" class="anchor_border"><img src="images/chairs/chiavari-chair-custom-real-red1.gif" alt="Chiavari Chair Custom Real Red" /></a>
                <div class="spacer_height10"></div>
                <a href="images/chairs/chiavari-chair-custom-real-red2-lg.gif" id="circle2" class="anchor_border"><img src="images/chairs/chiavari-chair-custom-real-red2.gif" alt="Chiavari Chair Custom Real Red" /></a>
            </div>
        </div>
        <div class="spacer_height10"></div> 
        <? include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>    