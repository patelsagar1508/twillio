<?
session_start();
ob_start();
include("includes/before_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/analytics.php"); ?>
<title>Wood Grain Colors | ChiavariChairs.com</title>
<meta name="description" content="Confused as to which Chiavari Chair color will work best for your venue or event? Compare some of our most popular colors side by side." />

<?php include("includes/head.php"); ?>
<script type="text/javascript">
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
<div class="page_banner"><img src="images/chiavari-compare-banner.gif" alt="Chiavarichairs Compare Banner"/></div>
<div class="spacer-5px"></div>
<div class="float_l">
    <div class="left_panel"><? include("includes/col-left_new.php"); ?></div>
    <div class="right_panel">
        <div id="compare" class="rightbox">
            <p class="old" style="color: #fff;"><a href="images/chiavari-compare-colorchart-lg.gif" id="circle1"><img src="images/chiavari-compare-colorchart.gif" border="0" /></a></p>
            <h3 class="compareh3">ZOOM IN TO COMPARE CHAIR COLORS</h3>
        </div>
    </div>
</div>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>    