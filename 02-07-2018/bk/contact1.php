<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>RFQ | ChiavariChairs.com</title>
<link rel="stylesheet"  href="css/form.css" type="text/css" />
<?php include("includes/head.php"); ?>
</head>
<body>
<div id="wrap">
    <? include("includes/header.php"); ?>
    <div class="page_banner"><img src="images/chiavari-contact-banner.gif" alt="Contact Chiavari Chairs and Vision Furniture" /></div>
    <div class="spacer-5px"></div>
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <h1 class="page_head">CONTACT US</h1>
        <div class="spacer_height10"></div>
        <div class="breadcrumbs"><a href="index.php">Home</a><span class="breadcrumbs-arrow"></span>Contact us</div>
        <div id="contactform">
            <div class="float_l">
                <a href="http://chiavarichairs.com/blog/helpful-info/pricing-philosophy/" target="_blank">Read about Vision Furniture's Fair Pricing Philosophy</a>
            </div>
            <div class="spacer-5px"></div>
            <div class="textHead">
                <p>For more information regarding our products, please contact Sales 
                Managers: Anthony or Sonya either by phone, email or our contact forms.</p>
                <br>
                <p>Use our contact form below for a quick response.</p>
                <br>
                <p><i>Se Habla Español/Falamos Portugues</i></p>
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
            <form name="contactform"  method="post" class="contactform" id="ajax-contact-form">
            <div class="float_l">
                <div id="note"></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Full Name <em>*</em><span>(Nombre)</span></div>
                <div class="formfield"><input type="text" name="first" id="first" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Country <em>*</em><span>(Pais)</span></div>
                <div class="formfield"><input type="text" name="country" id="country" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">City <em>*</em><span>(Ciudad)</span></div>
                <div class="formfield"><input type="text" name="city" id="city" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Email <em>*</em><span>(Correo Electronico)</span></div>
                <div class="formfield"><input type="text" name="email" id="email" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Phone <em>*</em><span>(Telefono)</span></div>
                <div class="formfield"><input type="text" name="phone1" id="phone1" class="required"/></div>
                <div class="spacer_height10"></div>
                <div class="formtext">Inquiry <em>*</em><span>(Preguntas)</span></div>
                <div class="formfield"><textarea name="comments" class="textarea"></textarea></div>
                <div class="spacer_height10"></div>
                <div class="formsubmit">
                    <input type="image" name="submit" id="Submit" value="Submit" class="btn" src="images/submit.gif"/><div id="load"></div>
                </div>
                <div class="spacer_height10"></div>
            </div>
            </form>
        </div>
    </div>
</div>
<? include('includes/footer.php');?>
<script type="text/javascript">  
$(document).ready(function() {
    var close_note = $("#note");
    close_note.click(function () {
        jQuery("#note").slideUp(1000, function () {
            jQuery(this).hide();
        });
    });
    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="images/ajax-loader.gif" alt="Currently Loading" id="loading"  width="16" height="16" /></center>');
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
</script>
</body>
</html>