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
<title>Thank You! | ChiavariChairs.com</title>
<meta name="description" content="Thank You for requesting a quote! Someone from our office will get back to you with a custom estimate within 24 hours. Need info now? Call us at 215.695.3300" />
<? include("includes/head.php"); ?> 
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
<div class="page_banner"><img src="images/chiavari-chair-thanku-banner.gif" alt="Chiavarichair Thanku Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel">
        <? include("includes/col-left_new.php"); ?>
    </div>
    <div class="right_panel">
        <h1 class="page_head tanku">Thank You!</h1>
        <div class="spacer_height20"></div>
        <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span>Thank You!</div>
        <div class="spacer_height20"></div>
        <div class="float_l thank_text">Someone from the Vision Furniture office will get back to you within 24 business hours.</div>
        <div class="spacer_height10"></div>
        <div class="float_l thank_text">If you need <u>immediate</u> service please call us at (215) 695-3300 Monday – Friday 8:30AM-5:30PM</div>
        <div class="spacer_height10"></div>
  
        <div class="float_l thank_text" style="text-align:center"><h3 class="page_head3 thank_head" style="color:red;font-size: 22px !important;margin: 0;">WATCH the VF Chiavari Chair Cart video below</h3><br><span class="anchor_border_text" ><b style="color:red;font-size: 18px !important;">and see how a cart can increase productivity in YOUR business!</b></span>
        	</div>
        
        <div class="img1-1 new">
        	<a class="fancybox-media anchor_border" id="anchor_border" href="https://www.youtube.com/embed/JLg-qFiqpLE?autoplay=1">
			<iframe width="741" height="381" src="https://www.youtube.com/embed/JLg-qFiqpLE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
        </div>
        
        <div class="spacer_height10"></div> 
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>

    
