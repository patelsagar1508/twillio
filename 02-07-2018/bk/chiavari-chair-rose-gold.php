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
<title>Rose Gold Chiavari Chairs | ChiavariChairs.com</title>
<meta name="description" content="Our stackable Rose Gold Chiavari Chairs have a lovely rosy-coppery lacquer finish and the elegance of natural wood. We use a high-quality Rose Gold metallic paint which gives our chairs a bright shine and a smooth finish. Rose Gold Chiavari Chairs pass all 6 BIFMA commercial furniture testing standards for safety and durability" />
<?php include("includes/head.php"); ?>
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
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/r/ROSEGOLD-CC.jpg" alt="Chiavari Chairs Rose Gold Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <div class="chair_col_head">
            <h1 class="page_head">Rose Gold Chiavari Chair</h1>
            <div class="spacer_height10"></div>
            <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span><a href="wholesale-chiavari-chairs.php">Chiavari Chairs</a><span class="breadcrumbs-arrow"></span><a href="wood-chiavari-chairs.php">Chair Colors</a><span class="breadcrumbs-arrow"></span>Rose Gold Chiavari Chair</div>
        </div>
        <div class="chair_col_box"><? include("includes/chair-colors.php"); ?></div>
        <div class="spacer_height10"></div>
        <div class="float_l">
        <p>Vision Furniture Rose Gold Chiavari Chairs bring a new element to your space. The slightly metallic Rose Gold finish feels like a fresh look at Chiavari Chairs. Classic Gold is timeless but for your brides who want something a little different, our Rose Gold Chiavari Chairs fit the bill beautifully.</p>
        </div>
        <div class="spacer_height10"></div><div class="spacer_height10"></div>
        <div class="float_l">
            <div class="img4-1">
                <span class="anchor_border_text"><b>Built Solid  and Stackable</b></span>
                <a href="images/chairs/chiavari-rose-gold-solid-stackable.jpg" class="anchor_border" id="circle1"><img src="images/chairs/chiavari-rose-gold-solid-stackable-t.jpg" alt="Chiavarichair Rose Gold Solid Stackable" /></a>
            </div>
            <div class="img4-1">
                <span class="anchor_border_text"><b>Elegant Design</b></span>
                <a href="images/chairs/chiavari-rose-gold-classy-design.jpg" class="anchor_border" id="circle1"><img src="images/chairs/chiavari-rose-gold-classy-design-t.jpg" alt="Chiavarichair Rose Gold Elegant Design" /></a>
            </div>
            <div class="img4-1">
                <span class="anchor_border_text"><b>Great Finish</b></span>
                <a href="images/chairs/chiavari-rose-gold-great-finish.jpg" class="anchor_border" id="circle1"><img src="images/chairs/chiavari-rose-gold-great-finish-t.jpg" alt="Chiavarichair Rose Gold Great Finish" /></a>
            </div>
            <div class="img4-1">
                <span class="anchor_border_text"><b>VF Factory</b></span>
                <a href="images/chairs/Rose-Gold-Chiavari-Chairs-by-Vision-Furniture.jpg" class="anchor_border" id="circle1"><img src="images/chairs/Rose-Gold-Chiavari-Chairs-by-Vision-Furniture-t.jpg" alt="Chiavarichair Rose Gold Event" /></a>
            </div>
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
        <div class="spacer_height20"></div>
        <div class="img1-1 new">
        	<a class="fancybox-media anchor_border" href="https://www.youtube.com/embed/6idSsLyly7w?autoplay=1"><img alt="Chiavari Chairs Vision Furniture Difference" src="images/vision-furniture-difference-video-thumb.jpg"></a>
        </div>
        <div class="spacer_height10"></div>
        <? include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>    