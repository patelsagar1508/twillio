<?php
error_reporting(E_ALL ^ E_NOTICE);

ini_set('allow_url_fopen','On');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getFeed($feed_url,$date = true) {

        $ch = curl_init($feed_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $content = curl_exec($ch);
        curl_close($ch);
    $x = new SimpleXMLElement($content);

    echo "<div id='rss'>";
    $a=0;
    foreach($x->channel->item as $entry) {
        $title = str_replace('&','&amp;', $entry->title);
        $link = str_replace('&','&amp;', $entry->link);
		$link_real = explode('?',$link);
        echo "<div class='data_col'><a href='$link_real[0]' title='$title'>" . $title . "</a>
        </div>";

            if($a == 4)
            {
                break;
            }
            $a++;
        }
    echo "</div>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes1/analytics.php"); ?>
<title>Chiavari Chairs | ChiavariChairs.com</title>
<meta name="description" content="We carry the highest quality, stackable chiavari chairs and bar stools. Our chiavari chairs are a dependable chair for your event rental business, wedding venue or even for extra seating in your home!" />
<meta name="generator" content="HTML Tidy for Linux (vers 1 September 2005), see www.w3.org" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="DC.Publisher" content="publisher-name" />
<meta name="robots" content="noodp" />
<meta name="slurp" content="noydir" />
<meta http-equiv="Content-Language" content="en" />
<meta name="ROBOTS" content="Index, Follow">
<meta name="copyright" content="https://www.chiavarichairs.com" />
<meta name="revisit-after" content="7 days" />
<meta name="distribution" content="Global" />
<meta name="reply-to" content="mailto:info@visionfurniture.com" />
<link rel="apple-touch-icon" href="images/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
<meta name="twitter:url" content="https://twitter.com/VFurniture" />
<meta name="twitter:site" content="@VFurniture" />
<meta name="twitter:creator" content="@VFurniture" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

<!-- <link rel="stylesheet" href="css/home.css" type="text/css" /> -->


<link rel="stylesheet" href="css/screen.css" type="text/css" />
<link rel="stylesheet" href="css/header_menu.css" type="text/css" />
<link rel="stylesheet" href="css/slider.css" type="text/css" />
<link rel="stylesheet" href="css/mobile.css" type="text/css" />


<link rel="stylesheet"  href="css/bxslider.css" type="text/css" />
<link rel="stylesheet"  href="css/jquery.fancybox_new.css" type="text/css" />
<link rel="stylesheet"  href="css/stylehome.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">



<link rel="canonical" href="https://www.chiavarichairs.com/" />


<script type="application/ld+json">
{"@context":"http://schema.org","@type":"FurnitureStore","email":"info@visionfurniture.com","telephone":"(215) 695-3300","name":"Chiavari Chairs","description":"ChiavariChairs.com, located in Philadelphia PA, manufactures, sells and rents chiavari chairs and event furniture. Our chairs have been put through rigorous product testing and have been upgrading and improving for years. We have chiavari chairs in our own rental inventory that have been in rotation for 10 years and are still going strong!","image":"https://www.chiavarichairs.com/images/visionfurniture-logo.png","url":"https://www.chiavarichairs.com/"}
</script>


<meta property="og:type" content="product.group">
<meta property="og:title" content="Chiavari Chairs">
<meta property="og:url" content="https://www.chiavarichairs.com">
<meta property="og:image" content="https://www.chiavarichairs.com/images/visionfurniture-logo.png">


</head>
<body>
<div id="wrap">
    <?php include("includes1/header.php"); ?>
    <div class="main_banners"><?php include_once('includes1/slideshow.php');?></div>
    <div class="link-section">
    <ul class="img-links">
        <li>
            <a class="link" href="/contact.php">
                <img src="images/img-01.jpg" alt="Request a Chiavari Chair Quote" class="img-responsive">
            </a>
        </li>
        <li>
            <a class="link text" href="/wholesale-chiavari-chairs.php">
                <img src="images/img-02.jpg" alt="Learn More About Chiavari Chairs" class="img-responsive">
                <div class="txt">
                    <div class="table-col">
                        <div class="table-cell-col">
                            <span>Learn About</span>CHIAVARI<br>Chairs  
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a class="link" href="/chiavari-cushions-wholesale.php">
                <img src="images/img-03.jpg" alt="Stain Resistant Chiavari Chair Cushions" class="img-responsive">
            </a>
        </li>
    </ul>
</div>
<div class="text-section">
    <h2 class="header-title"><a href="/testimonials.php">Customer Reviews</a></h2>
    <p>Excellent Customer Service is very important to us and we have over 100+
    <?php
    $useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){ echo '<br>';}
    ?>
    happy customer reviews from real businesses who use our chairs.</p>
</div>
	<?php include_once('includes1/reviews.php');?>
    <div class="spacer-5px"></div>
    <div class="about-section">
                
                    <div class="item even">
                        <div class="equal-height img-cont">
                            <a class="fancybox-media" href="https://www.youtube.com/watch?v=6idSsLyly7w?autoplay=1"><img src="images/img-09.jpg" alt="Educational Chiavari Chair Videos" class="img-responsive center-block" /></a>
                        </div>
                        <div class="equal-height text-cont">
                            <div class="table-col">
                                <div class="table-cell-col">
                                    <h3>Educational Videos</h3>
                                    <p>Keeping our customers educated on the quality and construction of our products is crucial. Chiavari is a style, not a brand so we've created a whole video library to show you the extra steps we take to ensure you have the best value Chiavari Chair on the market.<a href="
chiavari-chairs-cushions-videos.php"> Visit our Video Library.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="equal-height img-cont">
                            <div class="row">
                                <a href="/blog/chiavari-chair-warranty/">
                                    <img src="images/img-05.jpg" alt="Chiavari Chair Warranty Information" class="img-responsive center-block">
                                </a>
                            </div>
                        </div>
                        <div class="equal-height text-cont">
                            <div class="table-col">
                                <div class="table-cell-col">
                                    <h3>All about our warranty</h3>
                                    <p>When purchasing Chiavari Chairs you want to make sure your investment is backed with a solid warranty from a reputable manufacturer. In this blog post learn why having LABELS on the bottom of the chair from your manufacturer is just as important as having a good warranty: <a href="/blog/chiavari-chair-warranty/">Read More on Warranty.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item even">
                        <div class="equal-height img-cont">
                            <div class="row">
                                <a href="/blog/sample-chiavari-chairs/">
                                    <img src="images/img-04.jpg" alt="Labels on the Bottom of a Chiavari Chair" class="img-responsive center-block">
                                </a>
                            </div>
                        </div>
                        <div class="equal-height text-cont">
                            <div class="table-col">
                                <div class="table-cell-col">
                                    <h3>Get a chair sample before buying</h3>
                                    <p>Your business deserves a quality chair that has long-term value. There is a lot of poor quality event furniture on the market so you must do your research. <a href="/blog/sample-chiavari-chairs/" style="color: #502b7b;">What to Look for When Inspecting a Chair Sample.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="equal-height img-cont">
                            <div class="row">
                                <a href="/wholesale-chiavari-chairs.php">
                                    <img src="images/img-07.jpg" alt="BIFMA Testing Standards for Chiavari Chairs" class="img-responsive center-block">
                                </a>
                            </div>
                        </div>
                        <div class="equal-height text-cont">
                            <div class="table-col">
                                <div class="table-cell-col">
                                    <h3>Why buy our Chiavari Chair?</h3>
                                    <p>Vision Furniture is committed to making high quality commercial Chairs for Weddings and Events at a great value. Making sure that your chairs pass BIFMA is very important. <a href="/blog/stackable-chiavari-chairs-vision-furniture/">Learn about what goes into our Chiavari Chairs.</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item even">
                        <div class="equal-height img-cont">
                            <div class="row">
                                <a href="/vinyl-chiavari-cushions.php">
                                    <img src="images/img-08.jpg" alt="Testing Chiavari Cushion Stain Resistance" class="img-responsive center-block">
                                </a>
                            </div>
                        </div>
                        <div class="equal-height text-cont">
                            <div class="table-col">
                                <div class="table-cell-col">
                                    <h3>Don't Forget About Cushions!</h3>
                                    <p>Investing in Chiavari Chairs is not just about the chair frame. Chiavari Cushions play a vital role in not only looking good, but also keeping your business running smoothly-  as they are usually first to show wear and tear. <a href="/blog/wholesale-chiavari-cushions/">Learn about how our Quality Cushions compare to the competition.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="item">
					<div class="equal-height img-cont">
						<div class="row">
							<a href="/chair-repair-philadelphia.php"> 
								<img src="images/img-08-home-2.jpg" alt="Testing Chiavari Cushion Stain Resistance" class="img-responsive center-block">
							</a>
						</div>
					</div>
					<div class="equal-height text-cont">
						<div class="table-col">
							<div class="table-cell-col">
								<h3>Painting Workshop Est. 2018</h3>
								<p>We are proud to be the only Wholesale Chiavari Chair Manufacture in the United States with a large-scale domestic paint operation. The workshop equipment was made especially for refurbishing special event furniture like Chiavari Chairs and to contribute to the crafting of custom painted furniture and event rental items. This environmentally-friendly paint facility filters approximately 99.84% of paint particulates and makes it possible for VF to refinish up to 500 Chiavari Chairs per day.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
    <div class="spacer-15px"></div>
	
	 <div class="spacer-15px"></div>
    <div class="index_newsandupdate home">
        <div class="index_news_inner">
            <h2>Chiavari Chair + Cushion Blog</h2>
            <div class="txt_area"><?php getFeed("https://www.chiavarichairs.com/blog/feed/"); ?></div>
            <a href="/blog/" class="import_update">Read All...</a>
        </div>
    </div>
</div>

<?php include("includes1/footer.php"); ?>
<script src="js/jquery.matchHeight-min.js"></script>
<!-- <script src="js/custom.js"></script> -->
<script src="js/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: false,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
            {
              breakpoint: 990,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
          });
    });
    $(window).on("load resize",function(){$(".equal-height").matchHeight()});
</script>
</body>
</html>