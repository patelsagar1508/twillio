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
<title>Raw Chiavari Chairs | ChiavariChairs.com</title>
<meta name="description" content="Our stackable Raw Chiavari Chairs have a blonde wood with a primer base but no gloss finish. These chairs are primed and ready for the paint of your choice. Raw Wood Chiavari Chairs pass all 6 BIFMA commercial furniture testing standards for safety and durability." />
<?php include("includes/head.php"); ?>
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
<script type="text/javascript">
    $(document).ready(function() {
        /*
        *   Examples - images
        */
        $("#circle1").fancybox();
        $("#circle2").fancybox();
        $("#circle3").fancybox();
        $("#circle4").fancybox();
        $("#circle5").fancybox();
    });
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/r/RAW-CC.jpg" alt="Chiavari Chairs Raw Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <div class="chair_col_head">
            <h1 class="page_head">Raw &amp; Primed Chiavari Chair</h1>
            <div class="spacer_height10"></div>
            <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="wholesale-chiavari-chairs.php">Chiavari Chairs</a><span class="breadcrumbs-arrow"></span><a href="wood-chiavari-chairs.php">Chair Colors</a><span class="breadcrumbs-arrow"></span>Raw &amp; Primed Chiavari Chair</div>
        </div>
        <div class="chair_col_box"><? include("includes/chair-colors.php"); ?></div>
        <div class="spacer_height10"></div>
        <p>Our Raw Chiavari Chair frame has been sanded, primed and is ready to be painted for your custom Chiavari Chair projects. This chair frame still includes chair glides and a warranty on the frame structure.</p>
        <div class="spacer_height10"></div><div class="spacer_height10"></div>
        <div class="float_l">
            <div class="img2-1">
                <a href="images/chairs/chiavari-chair-raw-primed1.jpg" class="anchor_border" id="circle1"><img src="images/chairs/chiavari-chair-raw-primed1-t.jpg" alt="Chiavari Chairs Raw &amp; Primed " /></a>
            </div>
            <div class="img2-1">
                <a href="images/chairs/chiavari-chair-raw-primed2.jpg" class="anchor_border" id="circle1"><img src="images/chairs/chiavari-chair-raw-primed2-t.jpg" alt="Chiavari Chairs Raw &amp; Primed " /></a>
            </div>
        </div>
        
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <div class="img1-1 new">
        	<a class="fancybox-media anchor_border" href="https://www.youtube.com/embed/6idSsLyly7w?autoplay=1"><img alt="Chiavari Chairs Vision Furniture Difference" src="images/vision-furniture-difference-video-thumb.jpg"></a>
        </div>
        
        <div class="spacer_height10"></div>
        <h3 class="page_head3">All Of Our Chairs:</h3>
        <ul class="list">
            <li>Come backed with a 24-month guarantee on the chair structure.</li>
            <li>Professionally made with a strong structure and proper finish to last years longer.</li>
            <li>12-Point Quality Assurance Inspection prior to shipping.</li>
            <li>Tested to 6 BIFMA furniture testing standards.</li>
            <li>100% wood chair frame is the most durable construction for longevity.</li>
        </ul>
        <div class="spacer_height10"></div>
        <? include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>    