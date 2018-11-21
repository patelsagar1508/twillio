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
<title>White Vinyl Chiavari Cushions | ChiavariChairs.com</title>
<meta name="description" content="White High-Performance Vinyl Chiavari Chair Cushion Pads with Velcro Straps by VF are made with high density foam cores, stain resistant vinyl and have reinforced seams at stress points. Don’t throw your cushions away every year – invest in Chiavari Cushions that last!" />
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
        
    <h1 class="page_head">Off White Vinyl Chiavari Cushions</h1>
    
    <!--START: CATEGORY_HEADER-->
    <div class="float_l">
 <div class="slip-cov-right">
<section id="slip-gallery" class="simplegallery">
    <div class="content">
       <a class="fancybox" rel="damask" href="images/wws3.jpg"><img src="images/wws3.jpg" class="image_2" style="display: inline;" alt=""></a>
        <a class="fancybox" rel="damask" href="images/wws1.jpg"><img src="images/wws1.jpg" class="image_3" style="display: none;" alt=""></a>
		<a class="fancybox" rel="damask" href="images/wws2.jpg"><img src="images/wws2.jpg" class="image_4" style="display: none;" alt=""></a>
		<a class="fancybox" rel="damask" href="images/Chiavari-Cushion-Dims_417x279px.png"><img src="images/Chiavari-Cushion-Dims_417x279px.png" class="image_5" style="display: none;" alt=""></a> 
        
        
    </div>

    <div class="clear"></div>

    <div class="thumbnail">
        
        <div class="thumb">
            <a href="#" rel="2">
                <img src="images/wws3.jpg" id="thumb_2" alt="">
            </a>
        </div>
		<div class="thumb">
            <a href="#" rel="3">
                <img src="images/wws1.jpg" id="thumb_3" alt="">
            </a>
        </div>
		<div class="thumb">
            <a href="#" rel="4">
                <img src="images/wws2.jpg" id="thumb_4" alt="">
            </a>
        </div>
		<div class="thumb">
            <a href="#" rel="5">
                <img src="images/Chiavari-Cushion-Dims_90x67px.png" id="thumb_5" alt="">
            </a>
        </div>
        <div class="best-chivari-two-buttons" style="float:right;margin: 13px 13px;"><a class="best-chivari-quote-button" href="https://shop.visionfurniture.com/Off-White-Vinyl-Chiavari-Cushion-with-Velcro_p_100.html">BUY NOW</a></div>
        
    </div>
</section>
</div> 
<div class="slip-cov-left"> 
<p>Off White Vinyl Chiavari Cushions with Velcro straps are the perfect balance between aesthetics and function. Our high-performance, stain resistant vinyl has a buttery look and feel that is a good substitute for leather. Our vinyl is easy to maintain because of the stain resistant and almost waterproof nature of the material. If soiled, the cushions just need to be wiped down with a soft, damp cloth. At Vision Furniture we only use high quality vinyl that has been tested to not react with most dyes or finishes. Cheaper vinyl tends to have issues with color leaching (think, color leaching out of freshly dyed bridesmaid dresses or denim) and negative interactions with the lacquer finish on Chiavari Chairs.
<br><br>The Classic Off-White Vinyl Cushion has the same structured style as our Poly-Twill Classic Chiavari Cushions but with vinyl covered Velcro straps for a more polished look. This cushion fits all VF Chiavari Chairs and many off-brand styles as well. Custom cushions, fabrics and colors are available on a case by case basis at an additional fee. 
</p>
	<br></div>
	<div class="spacer20"></div>
    <div class="spacer10"></div>
	<br></div><div class="float_l" style="margin-top: 20px;">
	<center> <h2 class="page_head">Vinyl Chiavari Cushions: What You Need to Know</h2><iframe  width="560" height="315" src="https://www.youtube.com/embed/_af4okGM9Rs" frameborder="0" allowfullscreen></iframe></center>
	
	</div>
    <!--END: CATEGORY_HEADER--> 
    <!--START: ITEMS-->
    
    
    
        </div>
       <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'nouveau18';
        include('includes/tabs-cushions1.php');
    ?>
    </div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>
