<?
session_start();
ob_start();
//include("includes/dbconfig.php");
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Black Vinyl Chiavari Board Cushions | ChiavariChairs.com</title>
<meta name="description" content="Black Vinyl Hard Board Cushions for Chiavari Chairs are a great semi-permanent option for your Chiavari Chair Inventory. These pads are made with mold resistant wood boards and stain-resistant vinyl." />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
;(function($,window,document,undefined){$.fn.simplegallery=function(options){var defaults={'galltime':300,'gallcontent':'.content','gallthumbnail':'.thumbnail','gallthumb':'.thumb'};var settings=$.extend({},defaults,options);return this.each(function(){$(settings.gallthumb).click(function(){$(settings.gallcontent).find('img').stop(true,true).fadeOut(settings.galltime).hide();var img_attr=$(this).find('img').attr("id"),image_id=img_attr.replace('thumb_','');$('.image_'+image_id+'').stop(true,true).fadeIn(settings.galltime);return false;});});};})(jQuery,window,document);
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery('#slip-gallery').simplegallery({
            galltime : 400,
            gallcontent: '.content',
            gallthumbnail: '.thumbnail',
            gallthumb: '.thumb'
        });

    });
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
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
<div class="page_banner"><img src="images/chiavarichair-banner.gif" alt="Chiavari Chairs Barstool Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        
    <h2 class="page_head">Black Vinyl Chiavari Board Cushions</h2>
    
    <!--START: CATEGORY_HEADER-->
    <div class="float_l">
 <div class="slip-cov-right">
<section id="slip-gallery" class="simplegallery">
    <div class="content">
       
        <a class="fancybox" rel="damask" href="images/bvv1.jpg"><img src="images/bvv1.jpg" class="image_1" style="display: inline;" alt=""></a>
		<a class="fancybox" rel="damask" href="images/bvv2.jpg"><img src="images/bvv2.jpg" class="image_2" style="display: none;" alt=""></a>
        <a class="fancybox" rel="damask" href="images/Vinyl-Chiavari-Board-Cushion-Dims_417x279px.png"><img src="images/Vinyl-Chiavari-Board-Cushion-Dims_417x279px.png" class="image_3" style="display: none;" alt=""></a> 
        
    </div>

    <div class="clear"></div>

    <div class="thumbnail">
        
        <div class="thumb">
            <a href="#" rel="1">
                <img src="images/bvv_90x67px.png" id="thumb_1" alt="">
            </a>
        </div>
		<div class="thumb">
            <a href="#" rel="2">
                <img src="images/bvv2_90x67px.png" id="thumb_2" alt="">
            </a>
        </div>
		<div class="thumb">
            <a href="#" rel="3">
                <img src="images/Vinyl-Chiavari-Board-Cushion-Dims_90x67px.png" id="thumb_3" alt="">
            </a>
        </div>
        <div class="best-chivari-two-buttons" style="float:right;margin: 13px 13px;"><a class="best-chivari-quote-button" href="https://shop.visionfurniture.com/Black-Vinyl-Chiavari-Board-Cushion_p_231.html">BUY NOW</a></div>
        
    </div>
</section>
</div> 
<div class="slip-cov-left"> 
<p>Black Vinyl Chiavari Hard Cushionsare the perfect balance between aesthetics and function. Our high-performance, stain resistant vinyl has a buttery look and feel that is a good substitute for leather. Our vinyl is easy to maintain because of the stain resistant and almost waterproof nature of the material. If soiled, the cushions just need to be wiped down with a soft, damp cloth. At Vision Furniture we only use high quality vinyl that has been tested to not react with most dyes or finishes. Cheaper vinyl tends to have issues with color leaching (think, color leaching out of freshly dyed bridesmaid dresses or denim) and negative interactions with the lacquer finish on Chiavari Chairs.
<br><br>Vision Vinyl Board Cushions provide a more permanent look for your Chiavari Chairs and attach directly to the Chiavari Chair seat top using Velcro. These hard-back cushions are made to fit all Vision Furniture Chiavari Chairs as well as some off-brand Chiavari Chairs. The cushions feature high density internal foam that is upholstered with a soft, performance vinyl that is durable and easy to maintain. When purchasing the cushions and chair frames together, we will install the Velcro onto to the seat for you before shipping. If purchasing only board cushions, then we will provide additional Velcro so that your staff can install it onto the seat of your chairs.
</p>
	</div>
	<div class="spacer20"></div>
    <div class="spacer10"></div>
	<br>
	</div>
	<div class="float_l" style="margin-top: 20px;">
	<center> <h2 class="page_head">Vinyl Chiavari Cushions: What You Need to Know</h2><iframe  width="560" height="315" src="https://www.youtube.com/embed/_af4okGM9Rs" frameborder="0" allowfullscreen></iframe></center>
	
	</div>
    <!--END: CATEGORY_HEADER--> 
    <!--START: ITEMS-->
    
    <div class="spacer_height10"></div>
            <div class="float_l" style="margin: 0 auto;text-align: center;"><a href="/chiavari-cushions-wholesale.php">Return to Cushion Home Page</a></div>
        <div class="spacer_height10"></div>

        </div>
       <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'nouveau19';
        include('includes/tabs-cushions1.php');
    ?>
    </div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>
