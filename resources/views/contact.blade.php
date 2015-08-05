<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>Sneaker List Contact Page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="css/simpleline-icons/simple-line-icons.css" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="css/et-linefont/etlinefont.css">

    <!-- animations -->
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="css/shortcodes.css" type="text/css" />



    <!-- mega menu -->
    <link href="js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="js/mainmenu/demo.css" rel="stylesheet">
    <link href="js/mainmenu/menu4.css" rel="stylesheet">

    <!-- MasterSlider -->
    <link rel="stylesheet" href="js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="js/masterslider/skins/default/style.css" />

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">

    <!-- owl carousel -->
    <link href="js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="js/carouselowl/owl.carousel.css" rel="stylesheet">

    <!-- accordion -->
    <link rel="stylesheet" type="text/css" href="js/accordion/style.css" />

</head>

<body class="contact">

<div class="site_wrapper">

@include('inc.header')

<div class="clearfix"></div>

<!-- Slider
======================================= -->

<!-- masterslider -->
    <div class="contact-header">


        <h2 class="title25 white">Contact Us<em>Drop us a line, we're always interested in what our customers have to say.</em>
            <span class="line"></span></h2>


        <div class="contact-sneaker-position last animate" data-anim-type="fadeIn" data-anim-delay="300">

            <img src="images/red-jordans-cut-out.png" alt="" />

        </div><!-- end section -->

    </div>


<!-- end of masterslider -->


<div class="clearfix"></div>


<div class="content_fullwidth less2 contact-page">
<div class="container">

    <div class="one_half">


        <h1 class="roboto thin">Contact Us!<span class="line2"></span><span class="line"></span></h1>

        <p>Have a queston? Feel free to message us below with anyhting you have in mind! We are always glad to help out!</p>
        <br />
        <p>Please be patient while waiting for response.  <strong></strong></p>
        <br /><br />

        <div class="cforms">


        <div id="form_status"></div>
        <form type="POST" id="gsr-contact" onSubmit="return valid_datas( this );">
            <label class="label">Name <em>*</em></label>
            <label class="input">
                <input type="text" name="name" id="name">
            </label>

            <div class="clearfix"></div>

            <label class="label">E-mail <em>*</em></label>
            <label class="input">
                <input type="email" name="email" id="email">
            </label>

            <div class="clearfix"></div>


            <label class="label">Phone <em>*</em></label>
            <label class="input">
                <input type="text" name="phone" id="phone">
            </label> -->

            <div class="clearfix"></div>

            <label class="label">Subject <em>*</em></label>
            <label class="input">
                <input type="text" name="subject" id="subject">
            </label>

            <div class="clearfix"></div>

            <label class="label">Message <em>*</em></label>
            <label class="textarea">
                <textarea rows="5" name="message" id="message"></textarea>
            </label>

            <div class="clearfix"></div>
            <input type="hidden" name="token" value="FsWga4&@f6aw" />
            <button type="submit" class="button">Send Message</button>

        </form>





        </div>

      </div>

      <div class="one_half last">

        <div class="address_info">

          <h4><strong>Company Info</strong></h4>
          <ul>
            <li> <strong>The Sneaker List INC</strong><br />
              E-mail: <a href="mailto:mail@companyname.com">Contact@TheSneakerList.com</a><br />
              Website: <a href="index.html">www.TheSneakerList.com</a> </li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <h4>Find the <strong>Address</strong></h4>
        <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.60398683866!2d-80.23108009999999!3d25.782323950000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL!5e0!3m2!1sen!2sus!4v1428709472097"></iframe>
        <br />
        <small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.60398683866!2d-80.23108009999999!3d25.782323950000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL!5e0!3m2!1sen!2sus!4v1428709472097">View Larger Map</a></small> </div>

</div>

<div class="clearfix margin_top12"></div>
</div><!-- end content area -->







<footer class="footer4">
<div class="container">

    <div class="fmlinks"><a href="#">Home</a> <a href="#">About</a> <a href="#">Shoe Request</a> <a href="#">Blog</a> <a href="#">How It Works</a> <a href="#">Gallery</a> <a href="#">Contact</a></div>

    Copyright © 2015 The Good Life Designs. All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>

    <div class="footer_social_links4">
    <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-facebook"></i></a>
    <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="150"><i class="fa fa-twitter"></i></a>
    <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="150"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="animate" data-anim-type="zoomIn" data-anim-delay="100"><i class="fa fa-rss"></i></a>
    </div>


</div><!-- end footer -->
</footer>



<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="js/universal/jquery.js"></script>
<script src="js/style-switcher/styleselector.js"></script>
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="js/mainmenu/bootstrap.min.js"></script>
<script src="js/mainmenu/customeUI.js"></script>
<script src="js/masterslider/jquery.easing.min.js"></script>
<script src="js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
(function($) {
 "use strict";
    var slider = new MasterSlider();
    // adds Arrows navigation control to the slider.

    slider.setup('masterslider' , {
         width:1400,    // slider standard width
         height:500,   // slider standard height
         space:0,
         speed:45,
         layout:'fullwidth',
         loop:true,
         preload:0,
         autoplay:true,
         view:"fade"
    });
})(jQuery);
</script>
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script>
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main3.js"></script>
<script src="js/aninum/jquery.animateNumber.min.js"></script>
<script src="js/carouselowl/owl.carousel.js"></script>
<script type="text/javascript" src="js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="js/accordion/custom.js"></script>
<script type="text/javascript" src="js/universal/custom.js"></script>

</body>
</html>
