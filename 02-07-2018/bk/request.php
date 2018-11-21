<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<?php include("includes/analytics.php"); ?>
<title>Request a Quote | ChiavariChairs.com</title>
<meta name="description" content="Fill out this form to request a wholesale quote. Someone will get back to you with more information, pricing and freight options within 24 hours. Or call us at 215.695.3300." />
<link rel="stylesheet"  href="css/form.css" type="text/css" />
<?php include("includes/head.php"); ?>
</head>
<body>
<div id="wrap">
    <? include("includes/header.php"); ?>
    <div class="page_banner"><img src="images/chiavari-request-banner.gif" alt="Chiavari Request Banner" /></div>
    <div class="spacer-5px"></div>
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <h1 class="page_head">Request Quote Form</h1>
        <div class="spacer_height10"></div>
        <div class="breadcrumbs"><a href="/">Home</a><span class="breadcrumbs-arrow"></span>Request Quote</div>
        <div class="req_con_info">
            <div class="spacer_height10"></div>
            <ul>
                <li class="phone">215.695.3300</li>
                <li class="address">4211 Van Kirk St.<br>Philadelphia, PA 19135</li>
            </ul>
        </div>
        <div id="contactform">
            <div class="float_l">
                <a href="https://www.chiavarichairs.com/blog/pricing-philosophy/" target="_blank">Read about Vision Furniture's Fair Pricing Philosophy</a>
            </div>
            <div class="spacer-5px"></div>
            <div class="float_l"><b>Fields marked with an <em>*</em> are required.</b></div>
            <div class="spacer_height10"></div>
            <form name="contactform"  method="post" id="ajax-contact-form"  > 
            <div class="float_l">
                <div id="note"></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Full Name<em>*</em>:</div>
                <div class="formfield"><input type="text" name="fname" id="fname" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Company:</div>
                <div class="formfield"><input type="text" name="company" id="company"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Type of business<em>*</em>:</div>
                <div class="formfield"><input type="text" name="business" id="business" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Country<em>*</em>:</div>
                <div class="formfield"><input type="text" name="country" id="country" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">City and State, or Zip Code<em>*</em>:</div>
                <div class="formfield"><input type="text" name="city" id="city" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Phone<em>*</em>:</div>
                <div class="formfield"><input type="text" name="pno" id="pno" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Email<em>*</em>:</div>
                <div class="formfield"><input type="text" name="email" id="email" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">I am interested in<em>*</em>:</div>
                <div class="formfield">
                    <div class="checkbox">Chairs <input type="checkbox" name="chairs" id="chairs" value="Chairs"/></div>
                    <div class="checkbox">Cushions <input type="checkbox" name="cushions" id="cushions" value="Cushions" /></div>
                    <div class="checkbox">Maintenance Products <input type="checkbox" name="mp" id="mp" value="Maintenance Products" /></div>
                    <div class="checkbox">Rentals <input type="checkbox" name="chairs_charts" id="chairs_charts" value="Rentals" /></div>
                    <div class="checkbox">Other <input type="checkbox" name="other" id="other" value="Other" /></div>
                </div>
                <div class="spacer_height10"></div>
                <div class="formtext">Color Desired</div>
                <div class="formfield">
                    <select name="color" id="color" class="color">
                        <option value="">--Select One--</option>
                        <option value="Unknown">Undecided</option>
                        <option value="Clear">CLEAR</option>
                        <option value="White">WHITE</option>
                        <option value="Black">BLACK</option>
                        <option value="Ivory">IVORY</option>
                        <option value="Silver">SILVER</option>
                        <option value="Mahogany">MAHOGANY</option>
                        <option value="Walnut">WALNUT</option>
                        <option value="Fruitwood">FRUITWOOD</option>
                        <option value="Natural">NATURAL</option>
                        <option value="Gold">GOLD</option>
                    </select>
                </div>
                <div class="spacer_height10"></div>
                <div class="formtext">Quantity Desired<em>*</em>:</div>
                <div class="formfield"><input type="text" name="quantity" id="quantity" class="required"/></div>
                <div class="spacer_height10"></div>                
                <div class="formtext">Message: <em>*</em></div>
                <div class="formfield"><textarea name="comments" class="textarea"></textarea></div>
                <div class="spacer_height10"></div>
                <div class="formsubmit">
                    <input type="image"  name="Submit" id="Submit" value="Submit" class="btn" src="images/submit.gif"/><div id="load"></div>  
                </div>
                <div class="spacer_height10"></div>
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
            url: "request-email.php",
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
                    
                    //if(msg === 'OK') {   $('input').val(""); $('textarea').val(""); }    
                    // Message Sent? Show the 'Thank You' message and hide the form
                    result = (msg === 'OK') ? '<div class="success">Your message has been sent. Thank you!</div>' : msg;

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
/* ]]> */
</script>
</body>
</html>