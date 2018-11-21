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
<title>Folding Chair Info | ChiavariChairs.com</title>
<meta name="description" content="Our Resin Folding Chairs are made in the USA and pass all BIFMA U.S. furniture testing standards for safety and durability. Call us for a custom quote!" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
	/*
			*   Examples - images
			*/
	$("#circle1").fancybox();
});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-folding-banner.gif" alt="Chiavari Chairs Folding Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Folding Chairs Info</h2>
        <div class="spacer_height10"></div>
        <p>Our Vision Furniture Resin Folding Chair passes all BIFMA testing and is the most reliable chair of its kind on the market. Learn more about how our chair stacks up against our competitor's cheaper, lower quality chair here,<br />"<a href="blog/vf-resin-folding-chair-vs-an-18-00-resin-folding-chair/" class="the_value1">VF Resin Folding Chair vs. an $18.00 Resin Folding Chair</a>".</p>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <p align="center"><a href="images/chiavari-resin-folding-dimensions2.jpg" id="circle1" class="anchor_border"><img src="images/chiavari-resin-folding-dimensions2.jpg" alt="Chiavari Chair Resin Folding Dimensions" width="550"/></a></p>
          <div class="spacer_height15"></div>
        <div class="spacer_height10"></div>
         <div class="quotebox-tab">
            <div class="quotebox-tab-left"></div>
            <div class="quotebox-tab-text">We chose Vision Furniture due to their outstanding rating of an A+ business on the BBB. It gave us comfort in knowing that we could rely on Vision Furniture to deliver a great and reliable product! Our order of 250 Gold Chiavari and White Resin Chairs were delivered ahead of schedule and are beautiful. The difference in quality really shows when we compare them to other chair samples.  I know these chairs will last for years to come! We also ordered a few chair dollies for both the Chiavari and White Resin chairs. They are very sturdy and make transporting easy! I would highly recommend Vision Furniture to anyone in the event industry. </div>
            <div class="spacer_height10"></div>
            <span class="quotebox-tab-auth">Angela Ha | <a href="http://tuscancourtyard.com/" target="_blank">Tuscan Courtyard</a> | Houston, TX</span>
            <div class="quotebox-tab-right"></div>
        </div>            
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'chair-info';
        include('includes/tabs-folding.php');
        ?>
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php");?>
</body>
</html>