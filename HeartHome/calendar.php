

<?php

/*
Template Name: Calendar Page
*/

get_header();


$image_id1 = get_field('main_image');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>


    



    <article class="content">


    <div class="parallaxpagescal" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Calendar.png');">
        <section class="paracontent parallaxtext">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-12 col-md-6 mainherotext text-center text-md-left p-4 mt-5 fadeup">
                        <h1><?php echo get_the_title(); ?></h1>
                        <p>Need a break from cleaning? Our professional temporary housekeepers are here to help! Whether it's for a special occasion or just a much-needed break, you can hire our skilled housekeepers for general house cleaning tasks. Enjoy a spotless home without lifting a finger.</p>
                        <!-- <a class="btn btn-primary w-25 mt-4 mx-auto mx-md-0" href="contact-us/">Get In Touch</a> -->
                    </div>
                </div>
            </div>
        </section></div>

    <!-- First Block -->


    <div class="container my-5">
        <div class="row pageblock">
            <div class="col-12 fadeup textblock p-4">
                <h2 class="text-start fadeup">Book using our online form</h2>
                <div class="text-start fadeup py-2">
                    <p>Our temporary housekeepers are dedicated to providing top-notch cleaning services that leave your home sparkling and refreshed. Trained to the highest standards, our housekeepers approach each task with precision and care. They start with a thorough assessment of your home to identify areas that need special attention.</p>
                    <?php
                        if(have_posts()) {
                            while(have_posts()) {
                                the_post();
                                // First parameter is file path, second parameter is the type
                                get_template_part('template-parts/content', 'page');
                                // For example, if in template-parts I had a file called content-gallery.php, then the last parameter would be 'gallery' instead of article
                            }
                        }
                    ?>                            
                </div>
            </div>
        </div>
    </div>

 <!-- Carousel Section -->

 <div id="carouselExampleIndicators" class="carousel slide w-100 mt-0 mb-0 fadeup" data-ride="carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/CarouselBanner.png'); background-size: cover;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <div class="w-100 h-100  d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left">
                                <h4><?php the_field('review1'); ?></h4>
                                <p><?php the_field('reviewer1'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="w-100 h-100   d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left">
                                <h4><?php the_field('review2'); ?></h4>
                                <p><?php the_field('reviewer2'); ?></p>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="carousel-item h-100">
                    <div class="w-100 h-100   d-flex justify-content-center align-items-center flex-column">
                        <div class="carouselinnerdiv p-3 p-md-5">
                            <h5 class="bigtext">“</h5>
                            <div class="carouselpara text-center text-md-left">
                                <h4><?php the_field('review3'); ?></h4>
                                <p><?php the_field('reviewer3'); ?></p>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <a class="carousel-control-prev d-none" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon mr-3" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon ml-3" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>





    </article>

    <?php

    get_footer();

    ?>