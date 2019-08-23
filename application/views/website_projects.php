<!doctype html>
<html class="no-js" lang="en">
     
<!-- Mirrored from www.themezaa.com/html/h-code/onepage-single-project-page1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2019 08:18:21 GMT -->
<head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div class="bg-white">
        <!-- Header Slider -->
        <section id="project-img" class="no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center half-project-img" style="">
                        <div class="slider-overlay bg-slider"></div>
                        <div class="container">
                            <div class="project-header-text animated">
                                <span class="project-title white-text"><?php echo $details[0]['title'] ?></span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <section id="project-img-small" class="project-img-small animate slow-mo even fadeIn" data-anim-type="fadeIn" data-anim-delay="200">
            <div class="container">
                <div>
                    <div class="row">
                        <?php
                        foreach($details as $d){
                        ?>
                        <div class="col-md-12 col-sm-12"><img src="<?php echo base_url() . 'Project_Image/resize/' . $d['image']; ?>" alt="" class="project-img-gallery no-padding-top"></div>
                        <?php } ?>
                    </div>
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-sm-6"><img src="images/big-portfolio-img2.jpg" alt="" class="project-img-gallery"></div>-->
<!--                        <div class="col-md-6 col-sm-6"><img src="images/big-portfolio-img3.jpg" alt="" class="project-img-gallery"></div>-->
<!--                    </div>-->

                </div>
            </div>
        </section>

        </div>
    </body>

<!-- Mirrored from www.themezaa.com/html/h-code/onepage-single-project-page1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2019 08:18:25 GMT -->
</html>