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
<title>Folding Chair International Sales |  Vision Furniture </title>
<meta name="description" content="Folding Chiavari Chair International sales become easier when it’s Vision Furniture you’ve chosen to place the order. Call 215.695.3300 & give us the quotation." />
<?php include("includes/head.php"); ?>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-folding-banner.gif" alt="Chiavari Folding International Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <!--h2 class="page_head2">Folding Chair International Sales</h2>
        <h3 class="page_head3">International Clients</h3>
        <h4 class="page_head4">International Shipments are sent by container quantities only:</h4>
        <ul class="list">
            <li>20ft. Container  ships up to: 432 Assembled Resin Folding Chairs with Cushions + room for extra items</li>
            <li>40ft. Container  ships up to: 900 Assembled Resin Folding Chairs with Cushions + room for extra items</li>
            <li>40ft. HC Container  ships up to: 1000 Assembled Resin Folding Chairs with Cushions + room for extra items</li>
            <li>All Container Pricing is CIF your Local Port.</li>
            <li>All documents are handled by our experienced shipping department.</li>
        </ul>
        <div class="spacer_height15"></div>
        <h4 class="page_head4">For an International Quotation, please provide the following info:</h4>
        <ul class="list">
            <li>Which Chair Colors / Cushion colors interest you?</li>
            <li>What Quantities?</li>
            <li>Which country and local port will we be shipping to?</li>
        </ul-->       
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'international';
        include('includes/tabs-folding.php');
        ?>  
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php");?>
</body>
</html>