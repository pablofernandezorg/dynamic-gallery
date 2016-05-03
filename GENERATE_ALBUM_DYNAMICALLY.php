<?php
include_once('jcart/jcart.php');
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<style>
* {
	padding:0;
	margin:0;
}

#container2 {
	color: #333;
	font: 14px Sans-Serif;
	padding: 50px;
 	//background: #eee;

}

h1 {
	text-align: center;
	padding: 20px 0 12px 0;
	margin: 0;
}
h2 {
	font-size: 16px;
	text-align: center;
	padding: 0 0 12px 0; 
}

#container {
	box-shadow: 0 5px 10px -5px rgba(0,0,0,0.5);
	position: relative;
	background: white; 
}

</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

<title> Photography by Pablo Fernandez :: The Young Entrepreneur :: Professional Resume </title>
<meta name="description" content="Born in Pasadena, CA, Pablo Fernandez is known as a young entrepreneur and web developer because of his passion for designing websites and turning his ideas into startup companies.">
    
    <!-- /// Favicons ////////  -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="hhttps://cdn3.iconfinder.com/data/icons/buttons/512/Icon_13-512.png">
    <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/buttons/512/Icon_13-512.png">

	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/base.css">
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/grid.css">
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/elements.css">
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/layout.css">

	<!-- /// JS Plugins CSS ////////  -->
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/js/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/js/magnificpopup/magnific-popup.css">
    
	<!-- /// Skin CSS ////////  -->
	<!-- <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/skins/default.css">  -->
	
    <!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700">
    
    <!-- /// FontAwesome Icons 4.0.3 ////////  -->
	<link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/iconfontcustom/icon-font-custom.css">
    
    <!-- /// Cross-browser CSS3 animations ////////  -->
    <link rel="stylesheet" href="http://www.pablofernandez.com/_layout/css/animate/animate.min.css">

    <!-- /// Modernizr ////////  -->
    <script src="http://www.pablofernandez.com/_layout/js/modernizr-2.6.2.min.js"></script>
 
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="http://www.pablofernandez.com/photography/admin-image-processing/gallery/css/style.css"/>
		<script src="http://www.pablofernandez.com/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="http://www.pablofernandez.com/photography/admin-image-processing/gallery/css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

	<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Gamma Gallery - A Responsive Image Gallery Experiment</title>
        <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment"/>
        <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
        <meta name="author" content="Codrops"/>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="http://www.pablofernandez.com/photography/admin-image-processing/gallery/css/style.css"/>
		<script src="http://www.pablofernandez.com/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="http://www.pablofernandez.com/photography/admin-image-processing/gallery/css/noJS.css"/></noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
	<div id="wrap">
        
           <div id="header">
                <div id="nav">
        
                <div class="row">
                    <div class="span3">
                        <!-- // Logo // -->
                        <a href="http://pablofernandez.com/photography/" id="logo">
                           Pablo Fernandez <font size="0"><i>Photography</i></font>
                        </a>
                    
                    </div><!-- end .span3 -->
                    <div class="span9">
                    
                        <a href="#" id="mobile-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                        
                        <!-- // Menu // -->
                        <ul class="sf-menu" id="menu">

                             <li>
                                <a href="http://pablofernandez.com">Home</a>
                            </li>   
                            <li>
                                <a href="http://pablofernandez.com/photography/">Galleries</a>
                            </li>   
                              <li>
                                <a href="http://pablofernandez.com/photography/view_cart.php">Licensing</a>
                            </li>                
			      <li>
                                <a href="http://pablofernandez.com">Contact</a>
                            </li>     
<li>
<a href="http://pablofernandez.com/photography/view_cart.php"  style="height: 55px;"><img src="http://22.uniflix.com/download.png" style="width: 40px;" /><a>
</li>

</div>
                        
                        </ul>
    
                    </div><!-- end .span9 -->
                </div><!-- end .row -->	
                
			</div><!-- end #nav -->

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->

    <body>
	<div id="sidebar" style="display:none;">
				<div id="jcart"><?php $jcart->display_cart();?></div>
			</div>
					


        <div class="container">
	            <div class="codrops-top clearfix">

<?php 
function truncateString($str, $chars, $to_space, $replacement="") {
   if($chars > strlen($str)) return $str;

   $str = substr($str, 0, $chars);

   $space_pos = strrpos($str, " ");
   if($to_space && $space_pos >= 0) {
       $str = substr($str, 0, strrpos($str, " "));
   }

   return($str . $replacement);
}
        $directory = "../";
	$local = glob($directory . "*", GLOB_ONLYDIR); 
        $randDirect = $local[array_rand($local)]; 

while(($randDirect=="../admin-image-processing") || ($randDirect=="../cinematography") || ($randDirect=="../jcart") || ($randDirect=="../family-locked") || ($randDirect=="../non-published") || ($randDirect=="../original") || ($randDirect=="../large") || ($randDirect=="../thumbnails") || ($randDirect=="../nasa-internship-locked") || ($randDirect=="../high-school-locked") || ($randDirect=="../non-published"))
   {
        $randDirect = $local[array_rand($local)]; 
   }
$shortenDirect = explode("&",$randDirect); 
$shortenDirect = $shortenDirect['0']; 
$shortenDirect = str_replace("-", " ", $shortenDirect);
$shortenDirect = ucwords(strtolower($shortenDirect));
$shortenDirect = str_replace("../", " ", $shortenDirect);
	 ?>

                <a href="<?php echo $randDirect; ?>">
                    <strong>&laquo; Previous: </strong><?php echo $shortenDirect; ?>
                </a>
                <span class="right">
                	<!--<a href="#">Images by Pablo</a>-->



<?php 

        $directory = "../";
	$local = glob($directory . "*", GLOB_ONLYDIR); 
        $randDirect = $local[array_rand($local)]; 

while(($randDirect=="../admin-image-processing") || ($randDirect=="../cinematography") || ($randDirect=="../jcart") || ($randDirect=="../family-locked") || ($randDirect=="../non-published") || ($randDirect=="../original") || ($randDirect=="../large") || ($randDirect=="../thumbnails") || ($randDirect=="../nasa-internship-locked") || ($randDirect=="../high-school-locked") || ($randDirect=="../non-published"))
    {
        $randDirect = $local[array_rand($local)]; 
   }
$shortenDirect = explode("&",$randDirect); 
$shortenDirect = $shortenDirect['0']; 
$shortenDirect = str_replace("-", " ", $shortenDirect);
$shortenDirect = ucwords(strtolower($shortenDirect));
$shortenDirect = str_replace("../", " ", $shortenDirect);
	 ?>

                <a href="<?php echo $randDirect; ?>">
                    <strong>Next: </strong><?php echo $shortenDirect; ?> &laquo;
                </a>

                </span>
            </div>
			

					


			<div class="main">
				<header class="clearfix">
				
<center><h1>
<?php 
 $PULL_TITLE = str_replace('/home/pablofernandez/public_html/', '', getcwd()); 
 $PULL_TITLE = str_replace('photography/', '',$PULL_TITLE);
 $PULL_DATE = substr($PULL_TITLE, strpos($PULL_TITLE, "date-") + 5);    
 $PULL_DATE = str_replace('Date', '',$PULL_DATE);
 $PULL_TITLE = str_replace('-', ' ',$PULL_TITLE);
 $PULL_DATE = str_replace('-', ' ',$PULL_DATE);
 $PULL_TITLE = str_replace('&', ' - ',$PULL_TITLE);
 $PULL_TITLE = str_replace($PULL_DATE, '',$PULL_TITLE);
 $PULL_TITLE = ucwords($PULL_TITLE);
 $PULL_DATE = ucfirst($PULL_DATE);
 $PULL_TITLE = str_replace('Date', '',$PULL_TITLE);
 $PULL_DATE = ucwords($PULL_DATE);

?>

<?php echo $PULL_TITLE; ?></h1></center>

					<div class="support-note">
						<span class="note-ie">Sorry, only modern browsers.</span>
					</div>
					<br><br><?php echo $PULL_DATE; ?>
</header>
				
				<div class="gamma-container gamma-loading" id="gamma-container">

<ul class="gamma-gallery">
<?php

 $files = glob("thumbnails/*.*");
 shuffle($files);

 $counter = "0";
 for ($i=1; $i<count($files); $i++)
{
if($counter>="200") { } else {
$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
$counter ++;
?>
<li>
<div data-alt="img<?php echo $counter; ?>" data-description="<h3></h3>" data-max-width="1800" data-max-height="1350">				
<div data-src="large/<?php echo $trimmed = trim($image, "thumbnails/"); ?>" data-min-width="1300"></div>
<div data-src="large/<?php echo $trimmed = trim($image, "thumbnails/"); ?>" data-min-width="1000"></div>
<div data-src="large/<?php echo $trimmed = trim($image, "thumbnails/"); ?>" data-min-width="700"></div>
<div data-src="large/<?php echo $trimmed = trim($image, "thumbnails/"); ?>" data-min-width="300"></div>
<div data-src="<?php echo $image; ?>" data-min-width="200"></div>
<div data-src="<?php echo $image; ?>" data-min-width="140"></div>
<div data-src="<?php echo $image; ?>"></div>
<noscript>
<img src="<?php echo $image; ?>" alt="img<?php echo $counter; ?>"/>
</noscript>


</div>
</li>
<?php
} else {
    continue;
 }


     }
// ***************

}


?>
					</ul>
					<div class="gamma-overlay"></div>
<input id="tok" type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
					<div id="loadmore" class="loadmore" onclick="window.location='index.php';">Load more images...</div>

				</div>

			</div><!--/main-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/jquery.masonry.min.js"></script>
		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/jquery.history.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/js-url.min.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/jquerypp.custom.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>	
		<script>
		
				
		$(".gamma-description-wrapper img").ready(function(){
		$(".gamma-options-single a").html('<br><div id="buyb"><strong>License Photograph</strong></div>');
		
$(".gamma-options-single a").attr("href","#");

//$(".gamma-options-single").append('<font color="white"><form method="post" action="" class="jcart"><fieldset><input type="hidden" name="jcartToken" value="'+token+'" /><input type="hidden" name="my-item-id" value="'+ x +'" /><input type="hidden" name="my-item-name" value="'+ cimg +'" /><input type="hidden" name="my-item-price" value="5.00" /><input type="hidden" name="my-item-url" value="" />License Price: $5.00<br><label> <input type="hidden" name="my-item-qty" value="1" size="3" /></label><center><input id="cartbutt" type="submit" name="my-add-button" value="add to cart" class="button" /></center></fieldset></form></font>');
				
});
</script>
		<script>
			$(document).ready(function(){
				//$(".gamma-btn-close").click(function(){
				var test=0;
				//});
				
				$( "#buyb" ).click(function() {
					if(test==0){
					var x = Math.floor((Math.random() * 1000) + 1);
					var cimg = $('.gamma-single-view img').attr('src');
					var token= $('#tok').val();
					if (cimg === undefined){ alert("Page Loading. Please wait...");
					}
					else{
						
				$(".gamma-description-wrapper .gamma-description").append('<font color="white"><form method="post" action="" class="jcart"><fieldset><input type="hidden" name="jcartToken" value="'+token+'" /><input type="hidden" name="my-item-id" value="'+ x +'" /><input type="hidden" name="my-item-name" value="'+ cimg +'" /><input type="hidden" name="my-item-price" value="5.00" /><input type="hidden" name="my-item-url" value="" />License Price: $5.00<label><br> <input type="hidden" name="my-item-qty" value="1" size="3" /></label></li></ul><center><input id="cartbutt" type="submit" name="my-add-button" value=" Add To Cart " class="button" /></center></fieldset></form></font>');
					//test=1;
					}
					
					}
				});
				
			});
		
		</script>
		<script>/*
		$(document).ready(function(){
				$(".gamma-btn-close").click(function(){
					window.location="index.php";
				});
		});*/
		</script>
		
	</body>
</html>
