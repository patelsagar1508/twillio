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
<title>Touch Up Paint | ChiavariChairs.com</title>
<meta name="description" content="Chiavari Chair maintenance products in Philadelphia area helps you provide well-maintained products every time you buy at Vision Furniture. Call 215.695.3300" />
<?php include("includes/head.php"); ?>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<link rel="stylesheet"  href="css/tabnew.css" type="text/css" />
<script type="text/javascript" src="js/tab-btn.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        *   Examples - images
        */
        $('.fancybox').fancybox();
        $("#circle1").fancybox();            
        $("#shop_link").fancybox({
            'transitionIn'    :    'elastic',
            'transitionOut'    :    'elastic',
            'speedIn'        :    600, 
            'speedOut'        :    200, 
            'overlayShow'    :    true
        });            
        });
</script>
</head>
<body>
<div id="wrap">
<? include("includes/header.php"); ?>
<div class="page_banner"><img src="images/chiavarichair-banner.gif" alt="Chiavari Chair Maintenance Products" /></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <? ob_start(); ?>
        <h2 class="page_head2">Chiavari Chair Paint for Touch Ups</h2>    
        <div class="spacer_height10"></div>
        <div class="float_l">
            <div class="maintence_left">
                <h3 class="page_head3">We make it easy for you because we've been through it!</h3>
                <p>We have everything you need to keep your chairs looking nice for years. In addition to manufacturing chairs, we have <a href="/">chiavari chairs for rent in Philadelphia</a> area and have been renting since 2007. Over the years we have become very good at fixing and maintaining our own rental inventory- we know exactly how to do it so you can have more confidence in the company you buy your chairs from.</p>
                <div class="spacer_height10"></div>
                <h3 class="page_head3">Reliability for years</h3>
                <p>All of our maintenance products are made in the USA and follow strict consistency guidelines. Our chair colors are consistent from batch to batch which means you don't have to worry about how the colors will match with the paints you receive or if you buy more chairs to add to your inventory.</p>
                <div class="spacer_height10"></div>
                <p>From day one you get to be on a first name basis with the owners, Anthony and Sonya Tokarchyk. We're not the type of company that will just sell you chairs and then leave you high and dry. We work personally with every one of our clients to ensure satisfaction from day one through year five and beyond.</p>
            </div>
            <div class="maintence_right">
                <img src="images/Chiavari-maintenance-products.jpg" alt="Chiavari Chairs Touch Up Kits" width="240" height="274" />
            </div>
        </div>
        <div class="spacer_height10"></div>
        <h3 class="page_head3">Maintenance Products and Pricing</h3>
        <p>One can of paint can repair anywhere from 15 to 30 chairs depending on how much damage needs attention. Maintenance instructions will be included in the package when you order.</p>
        <div class="spacer_height10"></div>
        <div class="float_l" align="center">
            <a href="https://shop.visionfurniture.com/Maintenance_c_57.html" target="_blank" class="shop_link"></a>
        </div>
        <div class="spacer_height5"></div>
		<div class="quotebox-tab">
            <div class="quotebox-tab-left"></div>
            <div class="quotebox-tab-text">This is some awesome paint. I own an Event decor company and was looking to touch the paint on my inventory of chiavari chairs. I ordered 1 can and that lasted on 10 chairs.</div>
            <div class="spacer_height10"></div>
            <span class="quotebox-tab-auth">Amazon Purchase | Clarissa Brown</span>
            <div class="quotebox-tab-right"></div>
        </div>
           <!-- <div id="tabs">
                <ul>
                    <li><a href="#fragment-1"><span class="singe_line">Natural Finish</span></a></li>
                    <li><a href="#fragment-2"><span class="singe_line">Painted</span></a></li>
                    <li><a href="#fragment-3"><span class="singe_line">Glues</span></a></li>
                    <li><a href="#fragment-4"><span class="singe_line">Transportation</span></a></li>
                </ul>
                <div class="inner_tab_content">
                    <div id="fragment-1" class="ui-tabs-panel">
                        <div class="spacer_height5"></div>
                        <h3 class="page_head3">Natural Finish Chairs</h3>
                        <div class="spacer_height5"></div>
                        <div style="clear: both;"> </div>
                        <div class="float_l"><b>Mahogany Maintenance Kit:</b><span class="maintenance_tab_text">$ 26.95/kit</span></div>
                        <div class="float_l">Seat edge paint only:<span class="maintenance_tab_text">$ 10.95/can</span></div>
                        <div class="float_l">Lacquer finish only:<span class="maintenance_tab_text">$ 10.95/can</span></div>
                        <div class="float_l">Touchup pen only:<span class="maintenance_tab_text">$ 4.95/pen</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Fruitwood Maintenance Kit:</b><span class="maintenance_tab_text">$ 24.95/kit</span></div>
                        <div class="float_l">Seat edge paint only:<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="float_l">Lacquer finish only:<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="float_l">Touchup pen only:<span class="maintenance_tab_text">$ 4.95/pen</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Walnut Maintenance Kit:</b><span class="maintenance_tab_text">$ 24.95/kit</span></div>
                        <div class="float_l">Seat edge paint only:<span class="maintenance_tab_text">Backorder</span></div>
                        <div class="float_l">Lacquer finish only:<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="float_l">Touchup pen only:<span class="maintenance_tab_text">$ 4.95/pen</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Natural Maintenance Kit:</b><span class="maintenance_tab_text">$ 24.95/kit</span></div>
                        <div class="float_l">Seat edge paint only:<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="float_l">Lacquer finish only:<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="float_l">Touchup pen only:<span class="maintenance_tab_text">$ 4.95/pen</span></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
                        <div class="spacer_height5"></div>
                        <h3 class="page_head3">Painted  Chairs</h3>
                        <div class="spacer_height5"></div>
                        <div style="clear: both;"> </div>
                        <div class="float_l"><b>Vision Gold Paint</b> (gloss finish is built in)<span class="maintenance_tab_text">$ 12.75/can</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Vision Silver Paint</b> (gloss finish is built in)<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Vision Black Gloss Paint</b><span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Vision White Gloss Paint</b><span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l"><b>Vision Ivory Paint</b> (gloss finish is built in)<span class="maintenance_tab_text">$ 9.75/can</span></div>
                        <div style="clear: both;"> </div>
                    </div>
                    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                        <div class="spacer_height5"></div>
                        <h3 class="page_head3">Glues</h3>
                        <p>Special adhesive quickly repairs faulty chair joints which may be loose and wobbly. The process is to simply apply the joint glue into the loose joint and then carefully spray the repair with activator to instantly set the glue.</p>
                        <div class="spacer_height10"></div>
                        <p>Each bottle of glue repairs approximately 40-50 chairs.</p>
                        <div class="spacer_height10"></div>
                        <div style="clear: both;"> </div>
                        <div class="float_l"><b>Vision joint glue and tips:</b><span class="maintenance_tab_text">$ 14.95/unit</span></div>
                        <div class="float_l"><b>Vision glue spray activator:</b><span class="maintenance_tab_text">$ 11.00/can</span></div>
                        <div class="float_l"><b>Glue kit</b> (glue, tips, and activator)<span class="maintenance_tab_text">$ 25.95/kit</span></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
                        <div class="spacer_height5"></div>
                        <h3 class="page_head3">Chair Transportation</h3>
                        <div class="spacer_height5"></div>
                        <div style="clear: both;"> </div>
                        <div class="float_l"><b>Chiavari Chair Cart:</b><span class="maintenance_tab_text">$250.00</span></div>
                        <div class="spacer_height10"></div>
                        <div class="float_l">
                            <div class="left29"><img src="images/chair-cart.jpg" alt="Chiavari Chair Cart" /></div>
                            <div class="right70">Easily transport and move stacks of Chiavari Chairs from one location to another. high quality wheels are safe for all floors both indoors and outdoors. Out cart easily and safely glides along the floor because of its unique 4-wheel design.<br /><a href="chivari-chair-carts.php">More info...</a></div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="spacer_height10"></div>
                    </div>
                   </div>
                </div>-->
        <div class="spacer_height10"></div>
        <? 
        $main_content = ob_get_clean();
        global $page_name;
        $page_name = 'maintenance';
        include('includes/tab-chivari-chair.php');
        ?>
        <? include('includes/topchairquestions.php'); ?>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
<div class="popup-dropbox">
    <div id="shoppop">
       <div class="shoppop_text">You are now leaving Vision Furniture's Main website and entering the Vision Furniture Retail Shop</div> 
       <div class="shoppop_btn">
            <a onclick="$.fancybox.close();" href="javascript:;" class="back">Back</a>
            <a href="http://shop.visionfurniture.com/Maintenance_c_57.html" class="continue">Continue</a>
       </div>
    </div>
</div>
</body>
</html>    