<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.themezaa.com/html/h-code/onepage-architecture.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2019 07:46:44 GMT -->
<head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'website_assets/'; ?>images/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo base_url().'website_assets/'; ?>images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url().'website_assets/'; ?>images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url().'website_assets/'; ?>images/apple-touch-icon-114x114.png">
        <!-- animation --> 
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/animate.css" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/bootstrap.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/font-awesome.min.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/extralayers.css" />
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/settings.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/magnific-popup.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/owl.transitions.css" />
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/full-slider.css" />
        <!-- text animation -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/text-effect.css" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/menu-hamburger.css" />
        <!-- common -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/style.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="<?php echo base_url().'website_assets/'; ?>css/responsive.css" />
        <!--[if IE]> -->
    <link rel="stylesheet" href="<?php echo base_url().'website_assets/';?>css/style-ie.css" />
        <!-- [endif]-->
        <!--[if IE]>-->
            <script src="<?php echo base_url().'website_assets/'; ?>js/html5shiv.js"></script>
        <!--[endif]-->
    </head>

    <body>
        <!-- navigation-->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom bg-white no-transition" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6"><a class="logo-light" href="index.html"><img alt="" src="<?php echo base_url().'website_assets/'; ?>images/logo-light.png" class="logo" /></a><a class="logo-dark" href="index.html"><img alt="" src="<?php echo base_url().'website_assets/'; ?>images/logo-light.png" class="logo" /></a></div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="col-md-9 text-right">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#slider" class="inner-link">Home</a> </li>
                                <li><a href="#animated-tab" class="inner-link">Company</a> </li>
                                <li><a href="#projects" class="inner-link">Projects</a> </li>
                                <li><a href="#our-service" class="inner-link">Service</a></li>
                                <!--<li><a href="#people" class="inner-link">People</a></li>-->
                                <!--<li><a href="#blog" class="inner-link">Blog</a> </li>-->
                                <li><a href="#contact-us" class="inner-link">Contact</a> </li>
                                <!--<li><a href="index.html" class="inner-link">Demos</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation-->
        <!-- slider -->
        <section id="slider" class="full-screen no-padding architecture-slider"> 
            <div id="owl-demo" class="owl-carousel owl-theme">
                <!-- slider item -->
                <?php
                    foreach($slider as $d){
                ?>
                <div class="item owl-bg-img" style="background-image:url(<?php echo base_url().'slider/'.$d['main_slider']?>);"><div class="bg-slider"></div>
                    <div class="slider-headline">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <h1 class="yellow-text"><?php echo $d['title']; ?></h1>
<!--                                <h2>Tell Us About Our Project</h2>-->
                            </div>
                        </div>
                    </div>
                    <div class="full-screen architecture-full-screen position-relative">
                        <div class="slider-typography">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <div class="separator-line bg-yellow margin-three sm-margin-bottom-five"></div>
                                    <span class="owl-title black-text col-xs-12 lg-margin-bottom-five"><?php echo $d['title']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- end slider item -->
                <!-- slider item -->
            </div>
        </section>
        <!-- end slider -->
        <!-- our company section -->
        <section id="animated-tab" class="architecture-company xs-onepage-section">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services">Our Company</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 text-center"> 
                            <!-- tab navigation -->
                            <ul class="nav nav-tabs no-margin-bottom">
                                <li class="nav active"><a href="#testimonials1" data-toggle="tab"><span><i class="icon-tools"></i></span></a><br><span class="counter-title">Design</span></li>
                                <li class="nav"><a href="#testimonials2" data-toggle="tab"><span><i class="icon-clipboard"></i></span></a><br><span class="counter-title">Planning</span></li>
                                <li class="nav"><a href="#testimonials3" data-toggle="tab"><span><i class="icon-lightbulb"></i></span></a><br><span class="counter-title">Consulting</span></li>
                            </ul>
                            <!-- end tab navigation -->
                            <div class="separator-line bg-yellow"></div>
                            <div class="tab-content">
                                <!-- tab item -->
                                <div id="testimonials1" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in active"> 
                                    <div class="tab-pane fade in">
                                        <div class="row margin-four-bottom"> 
                                            <div class="col-md-12 col-sm-12 text-center gray-text">
                                                <p class="text-large margin-five">We Believe In The Power Of Design, The Strength Of Strategy, And Tha Ability Of Technology To Transform Businesses And Lives.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                        <div class="row border-top padding-four no-padding-bottom">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">12</span> <span class="counter-title">years' experience</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">606</span> <span class="counter-title">finishing projects</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-no-margin-bottom"><span class="counter-number">18</span> <span class="counter-title">winning awards</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab item -->
                                <!-- tab item -->
                                <div id="testimonials2" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in">
                                        <div class="row margin-four-bottom"> 
                                            <div class="col-md-12 col-sm-12 text-center gray-text">
                                                <p class="text-large margin-five">We Believe In The Power Of Design, The Strength Of Strategy, And Tha Ability Of Technology To Transform Businesses And Lives.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                        <div class="row border-top padding-four no-padding-bottom">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">45</span> <span class="counter-title">years' experience</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">16</span> <span class="counter-title">finishing projects</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">34</span> <span class="counter-title">winning awards</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab item -->
                                <!-- tab item -->
                                <div id="testimonials3" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in">
                                        <div class="row margin-four-bottom"> 
                                            <div class="col-md-12 col-sm-12 text-center gray-text">
                                                <p class="text-large margin-five">We Believe In The Power Of Design, The Strength Of Strategy, And Tha Ability Of Technology To Transform Businesses And Lives.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                        <div class="row border-top padding-four no-padding-bottom">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">18</span> <span class="counter-title">years' experience</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">302</span> <span class="counter-title">finishing projects</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">180</span> <span class="counter-title">winning awards</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our company section -->
        <!-- featured projects section -->
        <!--<section id="approach" class="approach parallax1 parallax-fix  parallax-section-main">-->
            <!--<img class="parallax-background-img" src="images/architecture-featured-projects.jpg" alt="" /> -->
            <!--<div class="carousel slide carousel-slide" id="myCarousel3"> -->
                <!--<div class="container">-->
                    <!--<div class="row">-->
                        <!--&lt;!&ndash; section title &ndash;&gt;-->
                        <!--<div class="col-md-12 text-center">-->
                            <!--<h3 class="section-title section-title-services white-text no-padding-bottom">Featured Projects</h3>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end section title &ndash;&gt;-->
                    <!--</div>-->
                    <!--<div class="carousel-inner margin-seven no-margin-bottom">-->
                        <!--<div class="item active"> -->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured01.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Fringila Auctor</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured02.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Vitae nidh mauris</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured03.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">In fringilla auctor</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="images/architecture-featured04.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Aliquam gravida molis</h5></div>-->
                        <!--</div>-->
                        <!--<div class="item"> -->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured05.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Fringila Auctor</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured01.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Vitae nidh mauris</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/architecture-featured06.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">In fringilla auctor</h5></div>-->
                            <!--<div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="images/architecture-featured04.jpg"></a><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Aliquam gravida molis</h5></div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; slider controls &ndash;&gt; -->
                <!--<a data-slide="prev" href="#myCarousel3" class="left carousel-control"> <img alt="" src="images/arrow-pre-white-bg.png"> </a> <a data-slide="next" href="#myCarousel3" class="right carousel-control"> <img alt="" src="images/arrow-next-white-bg.png"> </a>-->
            <!--</div>-->
        <!--</section>-->
        <!-- end featured projects section -->
        <!-- porfilio section -->
        <section id="projects" class="grid-wrap work-4col margin-top-section no-margin-top border-top no-padding-bottom xs-onepage-section">
            <div class="container-fluid">
                <div class="row no-padding">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services no-padding-bottom">Projects</h3>
                    </div>
                    <!-- end section title -->
                    <div class="col-lg-3 col-md-8 col-sm-11 margin-three center-col text-center">
                        <h4 class="gray-text">Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy </h4>
                    </div>
                    <div class="col-md-12 text-center" >
                        <div class="text-center">
                            <ul class="portfolio-filter nav nav-tabs">
                                <li class="nav active"><a href="#" data-filter="*">All</a></li>
                                <li class="nav"><a href="#" data-filter=".commercial">Commercial</a></li>
                                <li class="nav"><a href="#" data-filter=".residential">Residential</a></li>
                                <li class="nav"><a href="#" data-filter=".kitchen">Kitchen</a></li>
                                <li class="nav"><a href="#" data-filter=".remodeling">Remodeling</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <ul class="masonry-items grid lightbox-gallery">
                                <!-- porfilio item -->
                                <li class="kitchen commercial">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page1.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects01.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Herbal Beauty Salon</h3>
                                            <p>Ajax popup - Style #1</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class="remodeling">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page2.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects02.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Tailoring Interior</h3>
                                            <p>Ajax popup - Style #2</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class="commercial   residential kitchen">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page3.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects03.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Pixflow Studio</h3>
                                            <p>Ajax popup - Style #3</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class="remodeling kitchen  commercial residential">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page4.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects04.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Kaya Skin Care</h3>
                                            <p>Ajax popup - Style #4</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class=" kitchen  residential">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page1.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects05.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Third Eye Glasses</h3>
                                            <p>Ajax popup - Style #1</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class="remodeling commercial ">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page2.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects06.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Rubber Studio</h3>
                                            <p>Ajax popup - Style #2</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                                <!-- porfilio item -->
                                <li class="remodeling  residential">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page3.html" class="simple-ajax-popup-align-top" title=""><img src="images/architecture-projects07.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Pixflow Studio</h3>
                                            <p>Ajax popup - Style #3</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end porfilio item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end porfilio section -->
        <!-- our service section -->
        <section id="our-service" class="xs-onepage-section">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services">Our Service</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="300ms">
                        <i class="icon-tools small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Construction</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>600+</span>
                            Construction
                        </figure>
                    </div>
                    <!-- end service box -->
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="600ms">
                        <i class="icon-strategy small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Roofing</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>475+</span>
                            Roofing
                        </figure>
                    </div>
                    <!-- end service box -->
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="900ms">
                        <i class="icon-picture small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Remodeling</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>780+</span>
                            Remodeling
                        </figure>
                    </div>
                    <!-- end service box -->
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="300ms">
                        <i class="icon-mobile small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Solar Installation</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>320+</span>
                            Solar Installation
                        </figure>
                    </div>
                    <!-- end service box -->
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="600ms">
                        <i class="icon-megaphone small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Plumbing</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>120+</span>
                            Plumbing
                        </figure>
                    </div>
                    <!-- end service box -->
                    <!-- service box -->
                    <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="900ms">
                        <i class="icon-hotairballoon small-icon gray-text"></i>
                        <h6 class="black-text margin-five font-weight-600 letter-spacing-2">Electrical</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <figure class="text-uppercase white-text">
                            <span>320+</span>
                            Electrical
                        </figure>
                    </div>
                    <!-- end service box -->
                </div>
            </div>
        </section>
        <!-- end our service section -->
        <!-- case study section -->
        <!--<section id="case-study" class="no-padding">-->
            <!--<div class="container-fluid">-->
                <!--<div class="row">-->
                    <!--<div id="myCarousel2" class="carousel slide carousel-slide"> -->
                        <!--&lt;!&ndash; slider indicators &ndash;&gt;-->
                        <!--<ol class="carousel-indicators">-->
                            <!--<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>-->
                            <!--<li data-target="#myCarousel2" data-slide-to="1"></li>-->
                            <!--<li data-target="#myCarousel2" data-slide-to="2"></li>-->
                        <!--</ol>-->
                        <!--&lt;!&ndash; end slider indicators &ndash;&gt;-->
                        <!--<div class="carousel-inner">-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item active"> -->
                                <!--&lt;!&ndash; Set the first background image using inline CSS below. &ndash;&gt;-->
                                <!--<div class="fill sm-background-image-right" style="background-image:url('images/architecture-case-study.jpg');"></div>                   -->
                                <!--<div class="case-study-slider clearfix">-->
                                    <!--<div class="col-md-6 col-sm-10 col-sm-offset-1 pull-right sm-pull-none">-->
                                        <!--<div class="col-md-3 col-sm-12 col-xs-12 xs-no-padding">-->
                                            <!--<span class="case-study-number yellow-text font-weight-400 letter-spacing-2 sm-pull-left sm-no-border-right sm-no-padding-left">01</span>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-7 col-sm-12 col-xs-12 case-study-text position-relative sm-no-margin-left xs-no-padding">-->
                                            <!--<p class="title-small text-uppercase letter-spacing-3 white-text no-margin-bottom"><a class="white-text" href="single-project-page1.html">Lake View Residence</a></p>-->
                                            <!--<span class="case-study-work light-gray-text letter-spacing-2">Interior Design  |  Residential</span>-->
                                            <!--<p class="text-med light-gray-text">Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
                                            <!--<a class="btn btn-small-white-background margin-four no-margin-bottom" href="single-project-page1.html">View Project</a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item"> -->
                                <!--&lt;!&ndash; Set the first background image using inline CSS below. &ndash;&gt;-->
                                <!--<div class="fill sm-background-image-right" style="background-image:url('images/architecture-case-study02.jpg');"></div>                   -->
                                <!--<div class="case-study-slider clearfix">-->
                                    <!--<div class="col-md-6 col-sm-10 col-sm-offset-1 pull-right sm-pull-none">-->
                                        <!--<div class="col-md-3 col-sm-12 col-xs-12 xs-no-padding">-->
                                            <!--<span class="case-study-number yellow-text font-weight-400 letter-spacing-2 sm-pull-left sm-no-border-right sm-no-padding-left">02</span>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-7 col-sm-12 col-xs-12 case-study-text position-relative sm-no-margin-left xs-no-padding">-->
                                            <!--<p class="title-small text-uppercase letter-spacing-3 white-text no-margin-bottom"><a class="white-text" href="single-project-page1.html">Maggies Caring Center</a></p>-->
                                            <!--<span class="case-study-work light-gray-text letter-spacing-2">Residential  |  Interior Design</span>-->
                                            <!--<p class="text-med light-gray-text">Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
                                            <!--<a class="btn btn-small-white-background margin-four no-margin-bottom" href="single-project-page1.html">View Project</a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item"> -->
                                <!--&lt;!&ndash; Set the first background image using inline CSS below. &ndash;&gt;-->
                                <!--<div class="fill sm-background-image-right" style="background-image:url('images/architecture-case-study03.jpg');"></div>                   -->
                                <!--<div class="case-study-slider clearfix">-->
                                    <!--<div class="col-md-6 col-sm-10 col-sm-offset-1 pull-right sm-pull-none">-->
                                        <!--<div class="col-md-3 col-sm-12 col-xs-12 xs-no-padding">-->
                                            <!--<span class="case-study-number yellow-text font-weight-400 letter-spacing-2 sm-pull-left sm-no-border-right sm-no-padding-left">03</span>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-7 col-sm-12 col-xs-12 case-study-text position-relative sm-no-margin-left xs-no-padding">-->
                                            <!--<p class="title-small text-uppercase letter-spacing-3 white-text no-margin-bottom"><a class="white-text" href="single-project-page1.html">Birdnest Stadium</a></p>-->
                                            <!--<span class="case-study-work light-gray-text letter-spacing-2">Interior Design  |  Residential</span>-->
                                            <!--<p class="text-med light-gray-text">Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
                                            <!--<a class="btn btn-small-white-background margin-four no-margin-bottom" href="single-project-page1.html">View Project</a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                        <!--</div>-->
                        <!--&lt;!&ndash; slider controls &ndash;&gt; -->
                        <!--<a class="left carousel-control" href="#myCarousel2" data-slide="prev"> <img src="images/arrow-pre-white-bg.png" alt=""/> </a> <a class="right carousel-control" href="#myCarousel2" data-slide="next"> <img src="images/arrow-next-white-bg.png" alt=""/> </a>-->
                        <!--&lt;!&ndash; end slider controls &ndash;&gt; -->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</section>-->
        <!-- end case study section -->
        <!-- people section -->
        <!--<section id="people" class="xs-onepage-section">-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; section title &ndash;&gt;-->
                    <!--<div class="col-md-12 text-center">-->
                        <!--<h3 class="section-title section-title-services no-padding-bottom">People</h3>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end section title &ndash;&gt;-->
                    <!--&lt;!&ndash; section text &ndash;&gt;-->
                    <!--<div class="col-md-5 center-col text-center margin-six">-->
                        <!--<h4 class="gray-text">We are a multi-discipline design studio with an extensive network of the finest talent, allowing us to build the perfect team to respond to your brief. </h4>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end section text &ndash;&gt;-->
                <!--</div>-->
                <!--<div class="row margin-ten no-margin-bottom">-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="300ms">-->
                        <!--<img src="images/team-member8.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Alexander Harvard</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">Co Founder / CEO</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Punctual</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">-->
                        <!--<img src="images/team-member9.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Herman Miller</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">Co-Founder / Design</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Creative</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="900ms">-->
                        <!--<img src="images/team-member10.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Bryan Jonhson</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">Art Director</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Hungry</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="300ms">-->
                        <!--<img src="images/team-member11.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Jeremy Dupont</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">Creative Director</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Creative</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">-->
                        <!--<img src="images/team-member12.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Steve Anders</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">Head Developer</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Leader</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                    <!--&lt;!&ndash; team member &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="900ms">-->
                        <!--<img src="images/team-member13.jpg" alt=""/>-->
                        <!--<figure class="position-relative bg-white">-->
                            <!--<span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Bryan Johnson</span>-->
                            <!--<span class="team-post text-uppercase letter-spacing-2 display-block">HR Manager</span>-->
                            <!--<div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>-->
                        <!--</figure>-->
                        <!--<div class="team-details">-->
                            <!--<h5 class="team-headline white-text text-uppercase font-weight-600">I am Creative</h5>-->
                            <!--<p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>-->
                            <!--<div class="separator-line-thick bg-white"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end team member &ndash;&gt;-->
                <!--</div>-->
            <!--</div>-->
        <!--</section> -->
        <!-- end people section -->
        <!-- new project section -->
        <!--<section class="parallax10 parallax-fix no-padding parallax-gray-bg wow fadeIn">-->
            <!--<img class="parallax-background-img" src="images/parallax-img48.jpg" alt="" />-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--<div class="col-md-7 col-sm-8 bg-yellow padding-seven center-col">-->
                        <!--<h1 class="white-text width-80">We Can Help Build Your New Project!</h1>-->
                        <!--<p class="text-med margin-five black-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                        <!--<p class="text-med margin-five black-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                        <!--<a href="#our-service" class="inner-link highlight-button btn btn-small button margin-five no-margin-bottom">Our Services</a>-->
                        <!--<a href="#contact-us" class="inner-link highlight-button btn btn-small button margin-five no-margin-bottom">Let's Talk About New Project</a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</section> -->
        <!-- end new project section -->
        <!-- blog section -->
        <!--<section id="blog" class="xs-onepage-section">-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; section title &ndash;&gt;-->
                    <!--<div class="col-md-12 text-center">-->
                        <!--<h3 class="section-title section-title-services">Blog</h3>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; section title &ndash;&gt;-->
                <!--</div>-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; blog item &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-4">-->
                        <!--<div class="blog-post">-->
                            <!--<div class="blog-post-images"><a href="blog-grid-3columns.html"><img src="images/architecture-blog01.jpg" alt=""/></a></div>-->
                            <!--<div class="post-details">-->
                                <!--<a class="post-title" href="blog-grid-3columns.html">Some Thoughts On Civilization</a>-->
                                <!--<span class="post-author">Posted by Michael Freemon | 10 January 2015</span>-->
                                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end blog item &ndash;&gt;-->
                    <!--&lt;!&ndash; blog item &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-4">-->
                        <!--<div class="blog-post">-->
                            <!--<div class="blog-post-images"><a href="blog-masonry-3columns.html"><img src="images/architecture-blog02.jpg" alt=""/></a></div>-->
                            <!--<div class="post-details">-->
                                <!--<a class="post-title" href="blog-masonry-3columns.html">Beijing's Extraordinary Projects</a>-->
                                <!--<span class="post-author">Posted by Colin Powell | 02 January 2015</span>-->
                                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end blog item &ndash;&gt;-->
                    <!--&lt;!&ndash; blog item &ndash;&gt;-->
                    <!--<div class="col-md-4 col-sm-4">-->
                        <!--<div class="blog-post">-->
                            <!--<div class="blog-post-images"><a href="blog-right-sidebar.html"><img src="images/architecture-blog03.jpg" alt="" /></a></div>-->
                            <!--<div class="post-details">-->
                                <!--<a class="post-title" href="blog-right-sidebar.html">San Francisco Museum of Modern Art</a>-->
                                <!--<span class="post-author">Posted by Vince Lombardi | 02 January 2015</span>-->
                                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end blog item &ndash;&gt;-->
                <!--</div>-->
                <!--<div class="row">-->
                    <!--<div class="col-md-12 text-center">-->
                        <!--<a class="btn btn-black btn-small margin-four no-margin-bottom" href="blog-grid-full-width.html">View All Blog</a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</section>-->
        <!-- end blog section -->
        <!-- testimonial section -->
        <!--<section id="testimonial" class="bg-black dark-section">-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; section title &ndash;&gt;-->
                    <!--<div class="col-md-12 text-center">-->
                        <!--<h3 class="section-title section-title-services white-text no-padding-bottom">Testimonials</h3>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end section title &ndash;&gt;-->
                <!--</div>-->
                <!--<div class="col-md-6 text-center center-col">-->
                    <!--<div class="carousel slide jumbotron testimonial" id="slider-content">-->
                        <!--<ol class="carousel-indicators">-->
                            <!--<li data-slide-to="0" data-target="#slider-content" class="active"></li>-->
                            <!--<li data-slide-to="1" data-target="#slider-content" class=""></li>-->
                            <!--<li data-slide-to="2" data-target="#slider-content" class=""></li>-->
                            <!--<li data-slide-to="3" data-target="#slider-content" class=""></li>-->
                        <!--</ol>-->
                        <!--<div class="carousel-inner">-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item active">-->
                                <!--<p>Focused, hard work is the real key to success. Keep your eyes on the goal, and just keep taking the next step towards completing it. If you aren't sure which way to do something, do it both ways and see which works better.</p>-->
                                <!--<span class="name">John Carmack - Google Inc</span>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item">-->
                                <!--<p>All life demands struggle. Those who have everything given to them become lazy, selfish, and insensitive to the real values of life. The very striving and hard work that we so constantly try to avoid is the major building.</p>-->
                                <!--<span class="name">Calvin Coolidge - ThemeForest</span>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item">-->
                                <!--<p>What is success? I think it is a mixture of having a flair for the thing that you are doing; knowing that it is not enough, that you have got to have hard work and a certain sense of purpose.</p>-->
                                <!--<span class="name">Margaret Thatcher - Marketplaces</span>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                            <!--&lt;!&ndash; slider item &ndash;&gt;-->
                            <!--<div class="item">-->
                                <!--<p>All life demands struggle. Those who have everything given to them become lazy, selfish, and insensitive to the real values of life. The very striving and hard work that we so constantly try to avoid is the major.</p>-->
                                <!--<span class="name">Pope Paul - AppStorm</span>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; end slider item &ndash;&gt;-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</section>-->
        <!-- end testimonial section -->
        <!-- counter section -->
        <!--<section id="counter" class="wow fadeIn border-bottom">-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; counter &ndash;&gt;-->
                    <!--<div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">-->
                        <!--<i class="icon-heart medium-icon"></i>-->
                        <!--<span class="timer counter-number" data-to="312" data-speed="7000"></span>-->
                        <!--<span class="counter-title">Pizzas Ordered</span>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end counter &ndash;&gt;-->
                    <!--&lt;!&ndash; counter &ndash;&gt;-->
                    <!--<div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">-->
                        <!--<i class="icon-happy medium-icon"></i>-->
                        <!--<span class="timer counter-number" data-to="430" data-speed="7000"></span>-->
                        <!--<span class="counter-title">Happy Clients</span>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end counter &ndash;&gt;-->
                    <!--&lt;!&ndash; counter &ndash;&gt;-->
                    <!--<div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">-->
                        <!--<i class="icon-anchor medium-icon"></i>-->
                        <!--<span class="timer counter-number" data-to="690" data-speed="7000"></span>-->
                        <!--<span class="counter-title">Projects Completed</span>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end counter &ndash;&gt;-->
                    <!--&lt;!&ndash; counter &ndash;&gt;-->
                    <!--<div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp" data-wow-duration="1200ms">-->
                        <!--<i class="icon-chat medium-icon"></i>-->
                        <!--<span class="timer counter-number" data-to="826" data-speed="7000"></span>-->
                        <!--<span class="counter-title">Comments Reserved</span>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; end counter &ndash;&gt;-->
                <!--</div>-->
            <!--</div>-->
        <!--</section>-->
        <!-- end counter section -->
        <!-- contact us section -->
        <section id="contact-us" class="xs-onepage-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center no-padding">
                        <h3 class="section-title section-title-services">Contact Us</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 text-center center-col">
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">123-456-7890</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Victoria, United States</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><a class="black-text" href="mailto:no-reply@domain.com">no-reply@domain.com</a></h6></div>
                    </div>
                </div>
                <div class="row">
                    <!-- form -->
                    <form id="contactusform" action="javascript:void(0)" method="post">
                        <div class="col-md-10 col-sm-12 center-col">
                            <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-ten"></div></div>
                                <div class="col-md-12 col-sm-12"><div id="success"></div></div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="name" type="text" placeholder="Your Name" />
                                <input name="email" type="text" placeholder="Your Email"  />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <textarea name="comment" placeholder="Your Message" ></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-6 col-sm-6 no-padding-left"><span class="required">*Please complete all fields correctly</span></div>
                                <div class="col-md-3 col-sm-6 f-right no-padding-right"><input id="contact-us-button" name="send message" type="button" value="send message" class="btn btn-black no-margin-top f-right no-margin-lr"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </section> 
        <!-- end contact us section -->
        <!-- piechart section -->
        <!--<section class="bg-dark-gray" id="piechart">-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--<div class="col-md-10 text-center center-col">-->
                        <!--&lt;!&ndash; piechart item &ndash;&gt;-->
                        <!--<div class="col-md-3 col-sm-3 xs-margin-bottom-ten">-->
                            <!--<div class="chart-percent"><span data-percent="75" class="chart white-text"><span class="percent">75</span> <canvas height="120" width="120"></canvas></span></div>-->
                            <!--<div class="chart-text">-->
                                <!--<h5 class="white-text">Consulting</h5>-->
                                <!--<p>Expert, 7 years</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end piechart item &ndash;&gt;-->
                        <!--&lt;!&ndash; piechart item &ndash;&gt;-->
                        <!--<div class="col-md-3 col-sm-3 xs-margin-bottom-ten">-->
                            <!--<div class="chart-percent"><span data-percent="88" class="chart white-text"><span class="percent">88</span><canvas height="120" width="120"></canvas></span></div>-->
                            <!--<div class="chart-text">-->
                                <!--<h5 class="white-text">Planning</h5>-->
                                <!--<p>Expert, 9 years</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end piechart item &ndash;&gt;-->
                        <!--&lt;!&ndash; piechart item &ndash;&gt;-->
                        <!--<div class="col-md-3 col-sm-3 xs-margin-bottom-ten">-->
                            <!--<div class="chart-percent"><span data-percent="90" class="chart white-text"><span class="percent">90</span> <canvas height="120" width="120"></canvas></span></div>-->
                            <!--<div class="chart-text">-->
                                <!--<h5 class="white-text">Design</h5>-->
                                <!--<p>Expert, 5 years</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end piechart item &ndash;&gt;-->
                        <!--&lt;!&ndash; piechart item &ndash;&gt;-->
                        <!--<div class="col-md-3 col-sm-3">-->
                            <!--<div class="chart-percent"><span data-percent="96" class="chart white-text"><span class="percent">96</span> <canvas height="120" width="120"></canvas></span></div>-->
                            <!--<div class="chart-text">-->
                                <!--<h5 class="white-text">Building</h5>-->
                                <!--<p>Expert, 4 years</p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; end piechart item &ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</section> -->
        <!-- end piechart section -->
        <!-- footer -->
        <footer>
            <!--<div class=" bg-white footer-top">-->
                <!--<div class="container">-->
                    <!--<div class="row margin-four">-->
                        <!--&lt;!&ndash; phone &ndash;&gt;-->
                        <!--<div class="col-md-4 col-sm-4 text-center"><i class="icon-phone small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">123-456-7890</h6></div>-->
                        <!--&lt;!&ndash; end phone &ndash;&gt;-->
                        <!--&lt;!&ndash; address &ndash;&gt;-->
                        <!--<div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Victoria, United States</h6></div>-->
                        <!--&lt;!&ndash; end address &ndash;&gt;-->
                        <!--&lt;!&ndash; email &ndash;&gt;-->
                        <!--<div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:no-reply@domain.com" class="black-text">no-reply@domain.com</a></h6></div>-->
                        <!--&lt;!&ndash; end email &ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <div class="container onepage-footer-middle">
                <div class="row">
                    <div class="col-md-12 col-sm-12 footer-social text-right text-center">
                        <!-- social media link -->
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                        <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        <!-- end social media link -->
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark-gray footer-bottom">
                <div class="container">
                    <div class="row margin-three">
                        <!-- copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                            &copy; 2019 Urban Interior Works.
                        </div>
                        <!-- end copyright -->
                        <!-- logo -->
                        <!--<div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">-->
                            <!--<a href="index.html"><img src="images/logo-light-gray.png" alt=""/></a>-->
                        <!--</div>-->
                        <!-- end logo -->
                    </div>
                </div>      
            </div>
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->

        <!-- javascript libraries / javascript files set #2 --> 
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/smooth-scroll.js"></script>
        <!-- jquery appear -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.appear.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/page-scroll.js"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.easypiechart.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.parallax-1.1.3.js"></script>
        <!--portfolio with shorting tab --> 
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.isotope.min.js"></script>
        <!-- owl slider  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/owl.carousel.min.js"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/popup-gallery.js"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/text-effect.js"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.revolution.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/counter.js"></script>
        <!-- countTo -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.countTo.js"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/jquery.fitvids.js"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/imagesloaded.pkgd.min.js"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/classie.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/hamburger-menu.js"></script>
        <!-- one page navigation --> 
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/one-page-main.js"></script>
        <!-- setting --> 
        <script type="text/javascript" src="<?php echo base_url().'website_assets/'; ?>js/main.js"></script>
    </body>

<!-- Mirrored from www.themezaa.com/html/h-code/onepage-architecture.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2019 07:47:32 GMT -->
</html>