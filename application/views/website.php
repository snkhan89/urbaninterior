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
<!--                                <h1 class="yellow-text">--><?php //echo $d['title']; ?><!--</h1>-->
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
                                <?php
                                $i=0;
                                foreach($about_us as $a) {

                                    ?>
                                    <li class="nav <?php if($i==0) echo 'active'; ?>"><a href="#<?php echo $a['title'] ?>" data-toggle="tab"><span><i
                                                        class="icon-tools"></i></span></a><br><span
                                                class="counter-title"><?php echo $a['title']?></span></li>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </ul>
                            <!-- end tab navigation -->
                            <div class="separator-line bg-yellow"></div>
                            <div class="tab-content">
                                <!-- tab item -->
                                <?php
                                $i=0;
                                foreach($about_us as $a){
                                ?>
                                    <div id="<?php echo $a['title'] ?>" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in <?php if($i==0) echo 'active'; ?>">
                                        <div class="tab-pane fade in">
                                            <div class="row margin-four-bottom">
                                                <div class="col-md-12 col-sm-12 text-center gray-text"><p class="text-large margin-five"><?php echo $a['description']; ?></p>
                                                </div>
                                            </div>
<!--                                            <div class="row border-top padding-four no-padding-bottom">-->
<!--                                                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">12</span> <span class="counter-title">years' experience</span> </div>-->
<!--                                                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-margin-bottom-ten"><span class="counter-number">606</span> <span class="counter-title">finishing projects</span> </div>-->
<!--                                                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section xs-no-margin-bottom"><span class="counter-number">18</span> <span class="counter-title">winning awards</span> </div>-->
<!--                                            </div>-->
                                        </div>
                                    </div>
                                <?php
                                    $i++;
                                }
                                ?>

                                <!-- end tab item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our company section -->
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
<!--                        <h4 class="gray-text">Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been the industry's standard dummy </h4>-->
                    </div>
                    <div class="col-md-12 text-center" >
                        <div class="text-center">
                            <ul class="portfolio-filter nav nav-tabs">
                                <li class="nav active"><a href="#" data-filter="*">All</a></li>
                                <?php
                                foreach($categories as $c){
                                    ?>
                                    <li class="nav"><a href="#" data-filter=".<?php echo $c['category_name']; ?>"><?php echo $c['category_name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <ul class="masonry-items grid lightbox-gallery">
                                <!-- porfilio item -->
                                <?php
                                foreach($projects as $p){
                                    ?>
                                    <li class="<?php echo $p['category_name'] ?>">
                                        <figure>
                                            <div class="gallery-img"><a href="<?php echo base_url().'Website/projectDetail/'.$p['id']; ?>" class="simple-ajax-popup-align-top" title=""><img src="<?php echo base_url().'Project_Image/'.$p['thumb_image']; ?>" alt=""></a></div>
                                            <figcaption>
                                                <h3><?php echo $p['title']; ?></h3>
                                            </figcaption>
                                        </figure>
                                    </li>
                                <?php
                                }
                                ?>

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
                    <?php
                    foreach($services as $s){
                        ?>
                        <div class="col-md-4 col-sm-6 text-center services-box wow fadeInUp" data-wow-duration="300ms">
                            <i class="icon-tools small-icon gray-text"></i>
                            <h6 class="black-text margin-five font-weight-600 letter-spacing-2"><?php echo $s['title'] ?></h6>
                            <p><?php echo $s['description'] ?></p>
                            <figure class="text-uppercase white-text">
                                <span>100+</span>
                                <?php echo $s['title'] ?>
                            </figure>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- end service box -->
                </div>
            </div>
        </section>
        <!-- end our service section -->
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
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">9920109577</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Mumbai, India</h6></div>
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
        <!-- footer -->
        <footer>
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