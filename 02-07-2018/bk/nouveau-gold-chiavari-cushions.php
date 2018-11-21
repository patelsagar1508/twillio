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
<title>Nouveau Gold Chiavari Cushions | ChiavariChairs.com</title>
<meta name="description" content="Our subtly metallic gold pattern – Nouveau Gold Chiavari Chair Cushion with ties are made with high density foam cores, stain resistant poly-twill fabric and have reinforced seams at stress points. Don’t throw your cushions away every year – invest in Chiavari Cushions that last!" />
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
        
    <h2 class="page_head">Nouveau Gold Chiavari Cushions</h2>
    
    <!--START: CATEGORY_HEADER-->
    <div class="float_l">
<div class="slip-cov-right">
<section id="slip-gallery" class="simplegallery">
    <div class="content">
        <a class="fancybox" rel="damask" href="images/n1.jpg"><img src="images/n1.jpg" class="image_1" alt="" style="display: inline;"></a>
        <a class="fancybox" rel="damask" href="images/n2.jpg"><img src="images/n2.jpg" class="image_2" style="display: none;" alt=""></a>
        <a class="fancybox" rel="damask" href="images/n3.jpg"><img src="images/n3.jpg" class="image_3" style="display: none;" alt=""></a>
    </div>

    <div class="clear"></div>

    <div class="thumbnail">
        <div class="thumb">
            <a href="#" rel="1">
                <img src="images/n11.jpg" id="thumb_1" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="#" rel="2">
                <img src="images/n21.jpg" id="thumb_2" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="#" rel="3">
                <img src="images/n31.jpg" id="thumb_3" alt="">
            </a>
        </div>
		<div class="best-chivari-two-buttons" style="float:right;margin: 13px 13px;"><a class="best-chivari-quote-button" href="https://shop.visionfurniture.com/Nouveau-Gold-Chiavari-Cushion-with-Ties_p_57.html">BUY NOW</a></div>
       
    </div>
</section>
</div> 
<div class="slip-cov-left"> 
<p>Nouveau Gold Chiavari Cushions are available with ties only. This Classic style Chiavari Cushion has a robust zipper, top and bottom piping, reinforced seams and a high-density foam core. These cushion pads are made with a heavy, commercial grade Poly-Twill fabric that is treated with a stain resistant finish. We only use high quality materials to ensure that your cushions with last for years!<br>The Nouveau Gold pattern is a great neutral cushion option in a subtle gold color. It is made with a Poly-Twill fabric that is low sheen and stain resistant. </p>
	<br><ul class="cat_ul">
	    <li><b>Won't Go Flat</b> – High Density Foam Cores</li>
		<li><b>Ties Won't Rip</b> - Poly-Cord Thread</li>
		<li><b>Robust Zippers</b> - Made to Last</li>
		<li><b>Tear Resistant </b>- Heavy Commercial Grade Fabric</li>
		<li><b>Stain Resistant Finish</b> - Easy to Clean!</li>
		<li><b>Passes CAL-117</b> Fire Safety Tests</li>
		
	</ul></div>
	<div class="spacer20"></div>
    <div class="spacer10"></div>
	<center><p style="margin: 20px 10px 10px 0px;"><b style="color: red;font-size: 18px;">Chiavari Cushions by VF vs The Competition | Head to Head Quality Tests!</b></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/MezfEy-u3U4" frameborder="0" allowfullscreen></iframe>
	<div class="spacer20"></div>
	<a style="margin: 20px 10px 10px 0px;float: left;text-align: center;width: 100%;" href="https://www.youtube.com/user/TheVisionFurniture/featured">View More Chiavari Cushion Product Videos on Vision’s YouTube Channel!</a></center>
<h2 class="page_head">Related Videos:</h2>
<center><a target="_blank" style="margin: 20px 10px 10px 0px;float: left;width: 100%;" href="https://www.youtube.com/watch?v=3V3ERGxEenk">
<img src="/thumbn.png"></a></center>
	</div>
    <!--END: CATEGORY_HEADER--> 
    <!--START: ITEMS-->
    
    
    
        </div>
       <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'nouveau';
        include('includes/tabs-cushions1.php');
    ?>
    </div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>
