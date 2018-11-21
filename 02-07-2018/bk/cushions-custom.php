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
<title>Custom Chiavari Cushions | Vision Furniture</title>
<meta name="description" content="We’re here to produce your Custom Chiavari Cushions in both small and large quantities. Call us at 215.695.3300 for a custom quote." />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
        $(document).ready(function() {
            /*
            *   Examples - images
            */
                $("a[rel=example_group1]").fancybox({
                    'transitionIn'        : 'none',
                    'transitionOut'        : 'none',
                    'titlePosition'     : 'over',
                    'titleFormat'        : function(title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                    }
                });
            
            });
        $(document).ready(function() {
            /*
            *   Examples - images
            */
            $("#custom-cushions1").fancybox();
            $("#custom-cushions2").fancybox();
            $("#custom-cushions3").fancybox();
            $("#custom-cushions4").fancybox();
            $("#custom-cushions5").fancybox();
            $("#custom-cushions14").fancybox();                       
            $("#options1").fancybox();
            $("#options2").fancybox();
            $("#options3").fancybox();
            $("#options4").fancybox();
            $("#cushion2").fancybox();
            $("#cushion3").fancybox();
        });
</script>
<script type="text/javascript" src="//code.jquery.com/ui/1.8.24/jquery-ui.js"></script>
<link rel="stylesheet"  href="css/tabnew.css" type="text/css" />
<script type="text/javascript" src="js/tab-btn.js"></script>
<link rel="Stylesheet" type="text/css" href="css/carousel.css" />
<script type="text/javascript" src="js/carousel2.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
         $('.carousel').carousel({carouselWidth:735, carouselHeight:225, directionNav:true, shadow:true});
    });
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavari-cushions-banner.jpg" alt="Custom Chiavari Chairs and Vision Furniture" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new1.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Custom Cushions</h2>
        <div class="spacer_height10"></div>
        <div class="slip_cover">Custom Cushion Gallery</div>
        <div class="spacer_height10"></div>
        <div class="carousel Custom-Cushion">
            <div class="slides">
                 <div><img src="images/cushions/chiavari-custom-cushion1.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion2.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion3.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion4.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion5.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion6.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion7.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion8.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion9.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion10.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion11.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion12.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-custom-cushion13.jpg" alt="Chiavari Custom Cushion" /></div> 
                
                
                <div><img src="images/cushions/chiavari-cushions-custom18.jpg" alt="Chiavari Custom Cushion" /></div>
                <div><img src="images/cushions/chiavari-cushions-custom19.jpg" alt="Chiavari Custom Cushion" /></div>
            </div>
        </div>
        <div class="spacer_height20"></div>
        <p>Whether you need Classic Chiavari Cushions, Semi-Permanent Panel Board Cushions or Slip Covers to change the color of your existing Chiavari Cushions, Vision Furniture is your go-to source for Custom Chiavari Accessories! We use high quality foam, fabrics and thread to ensure that your cushion will look beautiful and last for years. We work with leather, vinyl, poly-blend and high-end fabrics – so if you have a certain fabric in mind we can make it into a Chiavari Cushion or Slip Cover! Turn around is typically 1-3+ weeks from when we receive fabric – depending on the quantity of your order.</p>
        <div class="spacer_height10"></div>
        <div class="cushions_custom_main">
            <div class="left_cushions">
                <span>Cushions</span>
                <ul>
                    <li><img src="images/chiavari-panel-board-cushions.gif" alt="Chiavari Panel Board Cushion" /><span>Panel Board Cushions</span></li>
                    <li><img src="images/chiavari-standard-cushions.gif" alt="Chiavari standard cushions" /><span>Classic Cushions</span></li>
                    <li><img src="images/chiavari-cushion-slip-covers.gif" alt="Chiavari cushion slip covers" /><span>Cushion Slip Covers</span></li>
                </ul>
            </div>
            <div class="center_arrow"></div>
            <div class="right_fabric">
                <span>Fabric</span>
                <ul>
                    <li>
                         <img src="images/chiavari-poly-spun-fabric.gif" alt="Chiavari poly spun fabric" /><span>Poly-Spun Fabric</span><span class="row2">Low-sheen, Workhorse fabric</span>
                        <a href="images/cushions/poly-spun-swatch.jpg" rel="example_group1">View color Options</a>
                    </li>
                    <li>
                        <img src="images/chiavari-bengaline-img.gif" alt="Chiavari Bengaline Fabric" /><span>Bengaline Fabric</span><span class="row2">High-sheen, Fancy Colors</span>
                        <a href="images/liba_bengaline03_lg.jpg" rel="example_group1">View color Options</a>
                    </li>
                    <li>
                        <img src="images/chiavari-dupioni-darnel.gif" alt="Chiavari Dupioni darnel" /><span>Dupioni Silk Style</span><span class="row2">High Sheen - 100% Polyester</span>
                        <a href="images/dupioni_darnel_lg.gif" rel="example_group1">View color Options</a>
                    </li>
                    <li>
                        <img src="images/chiavari-com-img.gif" alt="Chiavari Com" /><span>COM</span><span class="row2">Customer's own material,<br />Highly-skilled workmanship</span>
                        <a href="images/cushions/com-striped-1.jpg" rel="example_group1">View Example</a>
                    </li>
                    <li>
                        <img src="images/chiavari-viny-fabric.gif" alt="Chiavari Vinyl Fabric" /><span>Vinyl Fabric</span><span class="row2">Commercial-grade, easy to<br />wipe clean</span>
                        <!--<a href="images/cushions/board-black-lg.jpg" rel="example_group1">View Example</a>-->
                    </li>
                </ul>
            </div>
        </div>
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'custom';
        include('includes/tabs-cushions.php');
        ?>            
        <?php include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>