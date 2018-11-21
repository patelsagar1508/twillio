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
<title>Wholesale China Direct | ChiavariChairs.com</title>
<meta name="description" content="Vision Furniture features International sales for Chiavari Chair range which is fully assembled, beautiful finishing, sturdy framing and others. Visit chiavarichairs.com." />
<? include("includes/head.php"); ?>
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
         $('.carousel').carousel({carouselWidth:735, carouselHeight:340, directionNav:true, shadow:true});
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
<div class="page_banner"><img src="images/chiavarichair-banner.gif" alt="Chiavarichairs International Sales Banner" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Chiavari Wholesale China Direct</h2>
        <div class="spacer_height10"></div>
        <div class="spacer_height10"></div>
        <div class="img1-1 new">
        	<a class="fancybox-media anchor_border" href="https://www.youtube.com/embed/6idSsLyly7w?autoplay=1"><img alt="Chiavari Chairs Vision Furniture Difference" src="images/vision-furniture-difference-video-thumb.jpg"></a>
        </div>
        <div class="spacer_height10"></div>
        <p>We ship Wood Chiavari chairs world-wide in container load quantities of 432, 900 or 1,000 fully-assembled chairs. Our pricing is very competitive for strong chairs with beautiful finishes.</p>
        <div class="spacer_height10"></div>
          <p>With the production experience of over 150,000+ chairs since 2003, much research and development has been put into our Chiavari Chairs. Using 1st grade woods, high quality lacquers, glues and hardware, we are able to create investment grade Chiavari Chairs for your event business. </p>
          <div class="spacer_height10"></div>
          <h3 class="page_head3">Unlike other  managed factories which are poorly managed, we will promise the following:</h3>
          <ul class="list">
              <li>We perform our 12-Point Quality Assurance Inspection on every chair we build.</li>
              <li>Our Chiavari Chairs will NOT use inferior quality wood or cheap quality glues.</li>
              <li>Our Chiavari Chairs will NOT use rotten wood that has been &quot;fixed.&quot;</li>
              <li>Our finishes  have NO lead. And, the lacquers will be applied in the correct way.</li>
              <li>No chairs will be sent to customers that are poorly painted or sanded incorrectly.</li>
              <li>Our clients can trust to receive highest quality Chiavari Chairs from Vision Furniture.</li>
          </ul>
          <div class="spacer_height10"></div>
          <p>Vision Furniture has been producing Chiavari Chairs since 2003 and, we have shipped our product to : USA, Canada, Mexico, Panama, Colombia, Brazil, El Salvador, Nicaragua, Romania, Greece, Singapore, Angola and many Caribbean Islands.</p>
          <div class="spacer_height10"></div>
          <p>CIF or FOB Pricing is Available.</p>
          <div class="spacer_height10"></div>
          <p>All documents are handled by our experienced shipping department.</p>
          <div class="spacer_height10"></div>
          <p>For a quotation, please fill out the <a href="contact.php">quote request form.</a><br />Or contact us at: 001.215.695.3300. Ext. 350</p>
          <div class="spacer_height10"></div>
          <p><b>We speak:</b> English, Spanish and Portuguese </p>
          <div class="spacer_height10"></div>
          <h4 class="page_head4">Please provide the the following information:</h4>
          <ul class="list">
            <li>Quantity of chairs / colors</li>
            <li>Timing needs for acquiring chair</li>
            <li>Contact Email &amp; Phone Number</li>
            <li>Country of origin</li>
          </ul>
          <div class="spacer_height15"></div> 
          <div class="quotebox-tab">
            <div class="quotebox-tab-left"></div>
            <div class="quotebox-tab-text">The initial customer service I got from Vision Furniture compelled me to continue communicating with them. With me based in United Kingdom they made me feel comfortable with the transaction from the get go. The chairs were delivered in good condition as promised. What really got me was the honesty, sincerity and above all the immaculate customer service I got as it was a daunting experience to ship to the destination. Vision Furniture helped me to achieve my quest and I was able to perform the whole transaction from the United Kingdom.<br />I was indeed very pleased with the transaction!</div>
            <div class="spacer_height10"></div>
            <span class="quotebox-tab-auth">M.A.O | UNITED KINGDOM</span>
            <div class="quotebox-tab-right"></div>
        </div>
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'international-sales';
        include('includes/tab-chivari-chair.php');
        ?>        
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>