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
<title>Chiavari Chair Vinyl Cushions | Vision Furniture</title>
<meta name="description" content="Vision Furniture’s Chiavari Board Cushions comes in black or off white vinyl. These are sleek, easy to clean with high stain resistant. Call 215.695.3300" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
    	
    $('.fancybox').fancybox();

});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-cushions-banner.jpg" alt="Chiavari Board Cushions By Vision Furniture" /></div> 
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Vinyl Cushions</h2>
        <div class="spacer_height5"></div>
        <div class="float_l">
            <h3 class="page_head3">Why Choose Vinyl?</h3>
	        <div class="float_l">Vinyl is the perfect balance between aesthetics and function. Our high quality vinyl has a buttery look and feel that is a good substitute for leather. Vinyl is also extremely easy to keep up because of the stain resistant and almost waterproof nature of the material. If soiled the cushions just need to be wiped down with a soft, damp cloth.</div>
	        <div class="spacer_height10"></div>
	        <h3 class="page_head3">Vinyl Chiavari Board Cushions</h3>
	        <div class="float_l">Vision Vinyl Board Cushions provide a more permanent look for your Chiavari Chairs and attach directly to the Chiavari Chair seat top using Velcro. These hard back cushions are made to fit all Vision Furniture Chiavari Chairs as well as some off-brand Chiavari Chairs. The cushions feature high density internal foam that is upholstered with a soft synthetic leather that is durable and easy to maintain. When purchasing the cushions and chairs together, we will install the Velcro to the seat for you. If purchasing only cushions then your staff can install the cushions with Velcro that we will provide.</div>
        </div>
        <div class="spacer_height10"></div>
        <ul class="img3-1-new">
    		<li><a class="fancybox" rel="vinyl-board" href="images/cushions/chiavari-dimensions-board-vinyl-cushion-large.gif">
    			<img src="images/cushions/chiavari-dimensions-board-vinyl-cushion-small.jpg" alt="Chiavari Dimensions Board Vinyl Cushion By Vision Furniture  "></a>
    			<div class="spacer_height10"></div>
    			<div align="center" class="float_l"><a class='fancybox vinyl-care-guide' href="#osx-modal-content6" title=" "></a></div>
    		</li>
    		<li><a class="fancybox" rel="vinyl-board" href="images/cushions/chiavari-off-white-vinyl-board-cushion.jpg">
    			<img src="images/cushions/chiavari-off-white-vinyl-board-cushion.jpg" alt="Chiavari Off White Vinyl Board Cushion By Vision Furniture"></a><span>Off White Vinyl Board Cushion</span></li>
    		<li><a class="fancybox" rel="vinyl-board" href="images/cushions/chiavari-black-vinyl-cushion.jpg">
    			<img src="images/cushions/chiavari-black-vinyl-cushion.jpg" alt="Chiavari Black Vinyl Board Cushion By Vision Furniture"></a><span>Black Vinyl Board Cushion</span></li>
    	</ul>
    	
        <div class="spacer_height10"></div>
        <h3 class="page_head3">Vinyl Classic Chiavari Cushions</h3>
        <div class="float_l">The Classic Off White Vinyl Cushion has they same structured style as our Poly-Twill Classic Cushions but with vinyl covered Velcro straps for a more polished look. This cushion fits all VF Chiavari Chairs and many off-bran styles. Customized cushions and colors are available on a case by case basis for an additional cost.</div>
        <div class="spacer_height10"></div>
        
        <ul class="img2-1-new">
    		<li><a class="fancybox" rel="vinyl-cushion" href="images/cushions/chiavari-off-white-vinyl-cushion.jpg">
    			<img src="images/cushions/chiavari-off-white-vinyl-cushion.jpg" alt="Chiavari Off White Classic Vinyl Cushion By Vision Furniture"></a><span>Off White Classic Vinyl Cushion</span></li>
    		<li><a class="fancybox" rel="vinyl-cushion" href="images/cushions/chiavari-classic-cushions-dimensions.jpg">
    			<img src="images/cushions/chiavari-classic-cushions-dimensions.jpg" alt="Chiavari Classic Cushion Dimensions By Vision Furniture"></a><span>Classic Chiavari Cushion Dimensions</span></li>
    	</ul>
        
        <div style="clear: both;"></div>
        <?php include('includes/vinylCleaning_popup.php'); ?>
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'vinyl-cushions';
        include('includes/tabs-cushions.php');
        ?>
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>