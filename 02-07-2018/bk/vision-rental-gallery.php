<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Event Gallery | Philadelphia Wedding + Event Rentals</title>
<meta name="description" content="Our Chiavari Rental Gallery showcases our rental inventory of Chiavari Chairs, folding chairs, rental tables, charger plates, Chiavari Cushions and more." />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
 $(document).ready(function() {
        /*
		 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
		 */

		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : true,
			arrows    : true,
			nextClick : true,

			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});
            
});
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header-rental.php"); ?>
<!--div class="page_banner"><? //include("includes/luminary-slider.php"); ?></div-->
<div class="spacer-15px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/rental-left.php"); ?></div>
    <div class="right_panel">
    	<h1 class="page_head">Chiavari Rental Gallery</h1>
		<div class="spacer_height10"></div>
		<div class="breadcrumbs">
			<a href="/">Home</a><span class="breadcrumbs-arrow"></span>
			<a href="vision-rental-info.php">Rentals</a><span class="breadcrumbs-arrow"></span>Chiavari Rental Gallery</div>
		<div class="spacer_height10"></div>
		<div id="rental_con_main">
			<div id="rental_con">
				<div class="float_l">
		            <h2 class="page_head2">Vision Rental Photo Gallery</h2>
		            <div class="float_l">Whether it is Chiavari Chairs, folding chairs, Farm tables, Cocktail tables or Charger Plates – Vision Furniture has the best rental products and service in the Philadelphia region. Check our rental event gallery for photos of our beautiful rental products in action!</div>
		            <div class="spacer_height10"></div>
		            
		            <div class="rental-gall">
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo1.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo1-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo2.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo2-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo3.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo3-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo4.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo4-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo5.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo5-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo6.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo6-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo7.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo7-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo8.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo8-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo9.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo9-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo10.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo10-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo34.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo34-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo35.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo35-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo11.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo11-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo12.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo12-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo13.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo13-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo14.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo14-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo15.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo15-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo16.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo16-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo17.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo17-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo18.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo18-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo19.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo19-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo20.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo20-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo21.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo21-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo22.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo22-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo23.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo23-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-galery-photo24.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-galery-photo24-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-galery-photo25.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-galery-photo25-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo26.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo26-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo27.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo27-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo28.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo28-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-galery-photo29.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-galery-photo29-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-galery-photo30.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo30-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo31.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo31-t.jpg" /></a>
		            	<a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallery-photo33.jpg"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallery-photo33-t.jpg" /></a>
		            	
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gall1-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gall1.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary2-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary2.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary3-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary3.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary4-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary4.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary5-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary5.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary6-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary6.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary7-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary7.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary8-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary8.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary9-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary9.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary10-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary10.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary11-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary11.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary12-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary12.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary13-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary13.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary15-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary15.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary16-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary16.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary17-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary17.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary18-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary18.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary19-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary19.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary20-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary20.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary21-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary21.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary25-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary25.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary26-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary26.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary27-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary27.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary28-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary28.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary29-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary29.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary30-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary30.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary33-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary33.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary34-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary34.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary35-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary35.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary37-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary37.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-galary38-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-galary38.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary39-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary39.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary40-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary40.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary41-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary41.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary42-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary42.png" /></a>
		                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/rental/vision-rental-gallary43-l.png"><img alt="Vision Rental Gallery" src="images/rental/vision-rental-gallary43.png" /></a>
		            </div>
		            
		        </div>
		        <div class="spacer_height10"></div>
							<div class="float_l" style="margin: 0 auto;text-align: center;"><a href="/vision-rental-inventory.php">Return to Main Rental Page</a></div>
							<div class="spacer_height10"></div>
			</div>			
		</div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>