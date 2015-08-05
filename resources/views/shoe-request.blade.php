<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>Sneaker List Shoe Request Page</title>

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

    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="css/simpleline-icons/simple-line-icons.css" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="/css/et-linefont/etlinefont.css">

    <!-- animations -->
    <link href="/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="/css/responsive-leyouts.css" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="/css/shortcodes.css" type="text/css" />



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

    <!-- tabs 2 -->
    <link href="js/tabs2/tabacc.css" rel="stylesheet" />
    <link href="js/tabs2/detached2.css" rel="stylesheet" />

    <!-- accordion -->
    <link rel="stylesheet" type="text/css" href="js/accordion/style.css" />

    <!-- timeline -->
    <link rel="stylesheet" href="js/timeline/timeline.css">

</head>

<body class="request-body">

<div class="site_wrapper">

    @include('inc.header')



    <!-- Slider
    ======================================= -->

    <!-- masterslider -->
    <div class="shoe-request-header">


        <h2 class="title25">Shoe Request<em>Any pair of sneakers, just one request away.</em>
            <span class="line"></span></h2>


        <div class="about-sneaker-position last animate" data-anim-type="fadeIn" data-anim-delay="300">

            <img src="images/shoe-cut-out-flip.png" alt="" />

        </div><!-- end section -->

    </div>





</div>
<!-- end of masterslider -->

<div class="clearfix margin_top10"></div>
<div class="featured_section73">
    <div class="container">

        <div class="one_full stcode_title9">

            <h2>How We Can Help You!
                <span class="line"></span></h2>
            <p>​Its Simple! Any pair of sneakers you have in mind, no matter how rare.<br/> Submit a <strong>Shoe Request</strong> below, and
                we will find and ship them straight to your door!</p>


        </div>

            <form method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="shoe-request-wrapper">
                <div id="topRedBar"><span id="topBarInner"></span></div>
                <div id="nextBackButtons">

                    <div id="backButton"></div>

                    <div id="nextButton"></div>
                </div>
                <h2 class="title25">Shoe Request
                    <span class="line"></span>
                </h2>
                <div id="requestFormWraper">
                    <div class="steps-form" id="shoeRequestForm">
                        <div class="quiz-question active" id="step-1">
                            <h5><em>Choose a <strong>Brand</strong> to get started!</em></h5>
                            <div class="shoe-request-info" >
                                <label class="brand-logos one-fourth" id="brandLogo1">
                                <input class="shoe-brand" type="radio" name="brand" id="brand1" value="reebok">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo2">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand2" value="nike">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo3">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand3" value="jordan">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo4">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand4" value="adidas">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo5">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand5" value="louis">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo6">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand6" value="gucci">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo7">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand7" value="buscemi">
                                </label>
                                <label class="brand-logos one-fourth" id="brandLogo8">
                                    <input class="shoe-brand" type="radio" name="brand" id="brand8" value="other">
                                </label>
                            </div>
                            <div class="clear-fix"></div>
                        </div>

                        <div class="quiz-question unactive" id="step-2">
                            <h5><em>What is the <strong>Model</strong> name?</em></h5>
                            <label class="shoe-request-info">
                                <input id="modelNameInput" type="input" name="shoe_model" >
                                <div id="imgTitle">Do you have a picture of the shoes you would like us to find?<br/><em>Insert link below.</em>
                                    <br/>
                                    <input id="modelLinkInput" type="input" name="shoe_model_link" >
                                </div><br/>
                                
                                    <button class="next-model gallery-image-submit">
                                        <div class="" id="ModelNext" >Next</div>
                                    </button>

                            </label>
                        </div>

                        <div class="quiz-question unactive" id="step-3">
                            <h5><em>What <strong>Size</strong> shoe are you?</em><br/><span>(Ex: "Mens 11" "Womans 6" ect..)</span></h5>
                            <div class="shoe-request-info" id="shoeSizeWrapper" >
            

                                <div class="one-half">
                                    <input id="shoeSizeInput" type="input" name="shoe_size" ><br/>
                                    <button class="next-model shoe-size-submit">
                                        <div class="" id="ModelNext" >Next</div>
                                    </button>
                                </div>
                                    
                                

                                
                            </div>

                            
                        </div>



                    </div>
                </div>

                <div class="steps-indicator-wrapper">
                    <div id="stepsIndicator">
                        <div class="steps-indicator active" id="stepsIndicator-1"></div>
                        <div class="steps-indicator" id="stepsIndicator-2"></div>
                        <div class="steps-indicator" id="stepsIndicator-3"></div>
                        <div class="steps-indicator" id="stepsIndicator-4"></div>
                    </div>
                </div>
            </div>


        <div class="confirm-order">
            <div id="shoeBoxWrapper" class="unactive" >
                <div id="shoeBoxBody">
                <form>
                    <div id="shoeBoxLid">
                        <div id="topHole"></div>
                        <div id="brandLogo"></div>
                        <h5><em>Confirm your<strong> Shoe Request</strong> below and we'll start looking!</em></h5>
                    </div>

                    <div class="confirm-order">
                        <table>
                            <tr id="confirmLabels">
                                <th>Brand Name</th>
                                <th>Model Name</th>
                                <th>Shoe Size</th>
                                <th>Shoe Request Fee</th>
                            </tr>
                            <tr class="order-info">
                                <td id="brandName"></td>
                                <td id="modelName"></td>
                                <td id="shoeSize">8.5</td>
                                <td id="requestPrice">$14.99</td>
                            </tr>
                        </table>
                    </div>

                    <button type="submit" class="submit-request-btn">Lets Get Looking!</button>

                    <div id="shoeInfoBox">
                        <div id="barCode"></div>
                        <div id="shoeInfo">

                            <div class="info-label-wrapper">
                                <div id="brandName">Nike <span id="modelName"> Lucky 7 SB</span></div>
                            </div>
                            <div class="info-label-wrapper">
                                <div id="requestPrice">
                                   
                                </div>
                            </div>
                            <div id="miniBrandLogo"></div>
                        </div>
                    </div>

                    <div id="siteName">www.TheSneakerList.com</div>
                </form>
                </div>
            </div>
        </div>
        </form>
    </div>
</div><!-- end featured section 73 -->

<div class="clearfix"></div>


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




<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="js/universal/jquery.js"></script>
<script src="js/style-switcher/styleselector.js"></script>
<script src="js/shoe-request-form-cleanup.js"></script>
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
<script src="js/tabs2/index.js"></script>
<script>
    $('.accordion, .tabs').TabsAccordion({
        hashWatch: true,
        pauseMedia: true,
        responsiveSwitch: 'tablist',
        saveState: sessionStorage,
    });
</script>
<script src="js/aninum/jquery.animateNumber.min.js"></script>
<script src="js/carouselowl/owl.carousel.js"></script>
<script src="js/handlebars-v3.0.3.js"></script>
<script type="text/javascript" src="js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="js/accordion/custom.js"></script>
<script src="js/timeline/modernizr.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery(document).ready(function($){
            var $timeline_block = $('.cd-timeline-block');

            //hide timeline blocks which are outside the viewport
            $timeline_block.each(function(){
                if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                }
            });

            //on scolling, show/animate timeline blocks when enter the viewport
            $(window).on('scroll', function(){
                $timeline_block.each(function(){
                    if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                    }
                });
            });
        });

    })(jQuery);
</script>
<script type="text/javascript" src="js/universal/custom.js"></script>

</body>
</html>
