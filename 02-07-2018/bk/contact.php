<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Contact Us | ChiavariChairs.com</title>

<meta name="description" content="Request a Wholesale Chiavari Chair or Cushion Pad Quote. Request direct containers for our lowest per unit prices." />
<link rel="stylesheet"  href="css/form.css" type="text/css" />
<?php include("includes/head.php"); ?>
</head>
<body>
<div id="wrap">
    <? include("includes/header.php"); ?>
    <div class="page_banner"><img src="images/chiavari-chairs-Contact-banner.jpg" alt="Chiavarichairs Contact Banner"/></div>
    <div class="spacer-5px"></div>
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        
        <h1 class="page_head">Wholesale Pricing - Request a Wholesale Quote</h1>
        <div class="spacer_height10"></div>
        <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span> Wholesale Pricing - Request a Quote</div>
        <div class="req_con_info">
            <div class="spacer_height10"></div>
            <ul>
                <li class="phone">215.695.3300</li>
                <li class="address">4211 Van Kirk St.<br />Philadelphia, PA 19135</li> 
            </ul>
        </div>
        <div id="contactform">
            <div class="float_l">
                <h2 class="page_head3" style="color: #C30101;float: left;font-size: 16px;font-weight: 700;height: auto;margin: 10px 0 5px;padding: 0;width: 100%;">Please Submit a Request for Quote for Wholesale Pricing</h2> 
            </div>
            <div class="spacer-5px"></div>
            <div class="textHead">
                <p><br />Use our contact form below for a quick response or call us at 215.695.3300</p>
                <br>
                <p>Se Habla Espanol/ <i>Falamos Portugues</i></p>
            </div>
            <div class="add">
                <ul>
                    <li class="phone">215.695.3300</li>
                    <li class="address">4211 Van Kirk St.<br />Philadelphia, PA 19135</li>
                </ul>
            </div>
            <div class="spacer_height10"></div>
            <div class="float_l"><b>Fields marked with an <em>*</em> are required.</b></div>
            <div class="spacer_height10"></div>
            <form name="contactform"  method="post" id="ajax-contact-form"  > 
            <div class="float_l">
                <div id="note"></div>
				<div class="spacer_height10"></div>
                <div class="formtext">This Request is for<em>*</em> :</div>
                <div class="formfield">
				
				<div class="checkbox">Purchase <input type="checkbox" name="purchase" id="purchase" value="Purchase"/></div>
				<div class="checkbox">Rentals <input type="checkbox" name="chairs_charts" id="chairs_charts" value="Rentals" /></div>
				</div>
				
                <div class="spacer_height10"></div>
                <div class="formtext">Full Name<em>*</em> :</div>
                <div class="formfield"><input type="text" name="fname" id="fname" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Company<em>*</em> :</div>
                <div class="formfield"><input type="text" name="company" id="company" class="required"/></div>
                <div class="spacer_height10"></div>
                <!-- <div class="formtext">Type of business<em>*</em> :</div>
                <div class="formfield"><input type="text" name="business" id="business" class="required"/></div>
                <div class="spacer_height10"></div> -->
                <div class="formtext">Country<em>*</em> :</div>
                <div class="formfield"><input type="text" name="country" id="country" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Zip Code<em>*</em> :</div>
                <div class="formfield"><input type="text" name="city" id="city" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Phone<em>*</em> :</div>
                <div class="formfield"><input type="text" name="pno" id="pno" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Email<em>*</em> :</div>
                <div class="formfield"><input type="text" name="email" id="email" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">I am interested in<em>*</em> :</div>
                <div class="formfield">
                    <div class="checkbox">Chairs <input type="checkbox" name="chairs" id="chairs" value="Chairs"/></div>
                    <div class="checkbox">Cushions <input type="checkbox" name="cushions" id="cushions" value="Cushions" /></div>
                    <div class="checkbox">Maintenance Products <input type="checkbox" name="mp" id="mp" value="Maintenance Products" /></div>
                    <!--<div class="checkbox">Rentals <input type="checkbox" name="chairs_charts" id="chairs_charts" value="Rentals" /></div>-->
                    <div class="checkbox">Other <input type="checkbox" name="other" id="other" value="Other" /></div>
                </div>
                <div class="spacer_height10"></div>
                <div class="formtext">Color Desired</div>
                <div class="formfield">
                    <select name="color" id="color" class="color">
                        <option value="">--Select One--</option>
                        <option value="Unknown">UNDECIDED</option>
                        <option value="Gold">GOLD</option>
                        <option value="Champagne">CHAMPAGNE</option>
                        <option value="Silver">SILVER</option>
                        <option value="Mahogany">MAHOGANY</option>
                        <option value="Walnut">WALNUT</option>
                        <option value="Fruitwood">FRUITWOOD</option>
                        <option value="Natural">NATURAL</option>
                        <option value="White">WHITE</option>
                        <option value="Black">BLACK</option>
                        <option value="Ivory">IVORY</option>
                        <option value="Whitewash">WHITEWASH</option>
                        <option value="rosegold">ROSE GOLD</option>
                        <option value="Clear">CLEAR</option>
                    </select>
                </div>
                <div class="spacer_height10"></div>
                <div class="formtext">Quantity Desired<em>*</em> :</div>
                <div class="formfield"><input type="text" name="quantity" id="quantity" class="required"/></div>
                <div class="spacer_height10"></div>                
                <div class="formtext">Message<em>*</em> :</div>
                <div class="formfield"><textarea name="comments" class="textarea" rows="1" cols="1"></textarea></div>
                <div class="spacer_height10"></div>
                <div class="formsubmit">
                    <input type="image"  name="Submit" id="Submit" value="Submit" class="btn" src="images/submit.gif"/><div id="load"></div>  
                </div>
                <div class="spacer_height10"></div>
                <div class="float_l center"><b>*Please click the Submit button only once.</b></div>
                <div class="spacer-5px"></div>
            	<div class="spacer_height10"></div>
                <div class="float_l">
            	</div>
            </div>
            </form>
        </div>
    </div>
</div>
<? include('includes/footer.php');?>
<script type="text/javascript">  
/* <![CDATA[ */    
//
//  Also look in contactvalidate.php and contactsetting.php for settings
//
//

$(document).ready(function() {
    var close_note = $("#note");
    close_note.click(function () {
        jQuery("#note").slideUp(1000, function () {
            jQuery(this).hide();
        });
    });

    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="images/ajax-loader.gif" alt="Currently Loading" id="loading" /></center>');

        var fem = $(this).serialize(),
            note = $('#note');
    
        $.ajax({
            type: "POST",
            url: "contact-email.php",
            data: fem,
            success: function(msg) {
                if ( note.height() ) {            
                    note.slideUp(1000, function() {
                        $(this).hide();
                    });
                } 
                else note.hide();

                $('#loading').fadeOut(300, function() {
                    $(this).remove();
                    
                    //result = (msg === 'OK') ? '<div class="success">Your message has been sent. Thank you!</div>' : msg;
                    result = (msg === 'OK') ? '<div style="display: none;">' + (window.location="thankyou.php") + '</div>' : msg;
                    //result1='';

                    var i = setInterval(function() {
                        if ( !note.is(':visible') ) {
                            note.html(result).slideDown(1000);
                            clearInterval(i);
                             $('html, body').animate({scrollTop:100}, 'slow');
                        }
                    }, 40);    
                }); // end loading image fadeOut
            }
        });

        return false;
    });
});
</script>
</body>
</html>