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

<title> Pablo Fernandez :: The Young Entrepreneur :: Professional Resume </title>
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
	
							
<div class="container">

<div id="sidebar" style="width:100%;"><br>
<div id="jcart"><?php $jcart->display_cart();?></center></div></div>
<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="jcart/js/jcart.min.js"></script>

</div>
                        
                        </ul>
    
                    </div><!-- end .span9 -->
                </div><!-- end .row -->	
                
			</div><!-- end #nav -->

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->

    <body>
		
        <div class="container">

<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>





			</div><!--/main-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="http://www.pablofernandez.com/photography/admin-image-processing/gallery/js/jquery.masonry.min.js"></script>
		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>

	</body>
</html>



