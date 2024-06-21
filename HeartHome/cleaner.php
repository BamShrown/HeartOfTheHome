
<?php

/*
Template Name: Contract Cleaner Page
*/

get_header();


$image_id1 = get_field('main_image');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>


    



    <article class="content">


    <div class="parallaxpagesclean" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ContractClean.png');">
        <section class="paracontent parallaxtext">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-12 col-md-6 mainherotext text-center text-md-left p-4 mt-5 fadeup">
                        <h1><?php echo get_the_title(); ?></h1>
                        <p>Need a one-time deep clean? Our contract cleaners are at your service, fully equipped with all the necessary tools and supplies. Perfect for moving in, moving out, or just a thorough refresh, we ensure every corner of your home is spotless with our comprehensive cleaning services.</p>
                        <!-- <a class="btn btn-primary w-25 mt-4 mx-auto mx-md-0" href="contact-us/">Get In Touch</a> -->
                    </div>
                </div>
            </div>
        </section></div>

    <!-- First Block -->


    <div class="container my-5">
        <div class="row pageblock">
            <div class="col-12 col-md-6 fadeup textblock p-4">
                <h2 class="text-start fadeup">What do we offer?</h2>
                <div class="text-start fadeup py-2">
                    <p>Our contract cleaning service is designed to provide a comprehensive, one-time deep clean that leaves your home immaculate. Perfect for special occasions, moving in or out, or when your home needs a thorough refresh, our professional cleaners bring all the necessary tools and equipment to get the job done right.</p>
                    <div class="d-flex flex-row fadeup infotags justify-content-start align-items-center mt-3">
                        <i class="fa-solid fa-fw fa-tag"></i>
                        <p class="m-0 ml-2">£25 per hour</p>
                    </div>
                    <!-- <div class="d-flex flex-row fadeup infotags justify-content-start align-items-center mt-3">
                        <i class="fa-solid fa-fw fa-file-signature"></i>
                        <p class="m-0 ml-2">Pre Book</p>
                    </div> -->
                    <div class="d-flex flex-row fadeup infotags justify-content-start align-items-center mt-3">
                        <i class="fa-solid fa-fw fa-calendar-days"></i>
                        <p class="m-0 ml-2">Book your slot</p>
                    </div>            
                    <div class="d-flex flex-row fadeup infotags justify-content-start align-items-center mt-3">
                        <i class="fa-solid fa-fw fa-broom"></i>
                        <p class="m-0 ml-2">Deep Cleaning</p>
                    </div>
                    <div class="d-flex flex-row fadeup infotags justify-content-start align-items-center mt-3">
                        <i class="fa-solid fa-fw fa-pump-soap"></i>
                        <p class="m-0 ml-2">All equipment supplied</p>
                    </div>                            
                </div>
                <a class="btn btn-primary w-25 mt-5 mx-auto mx-md-0 fadeup" href="contact-us/">Get In Touch</a>

            </div>
            <div class="col-12 col-md-6 fadeup px-0">
                <img class="w-100 object-fit-cover" src="<?php echo esc_url($image_url1); ?>" alt="">
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