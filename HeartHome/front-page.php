
    <?php

    get_header();

    $image_id1 = get_field('serviceimg1');
    $image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
    $image_id2 = get_field('serviceimg2');
    $image_url2 = wp_get_attachment_image_url( $image_id2, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.
    $image_id3 = get_field('serviceimg3');
    $image_url3 = wp_get_attachment_image_url( $image_id3, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.





    ?>
   

		<article class="content py-0 pt-lg-3 pb-0 px-0">


        <div class="parallax" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/HeroBanner.png');">
        <section class="paracontent parallaxtext">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-12 col-md-6 mainherotext text-center text-md-left p-4 mt-5 fadeup">
                        <h1>Heart of the Home</h1>
                        <p>Welcome to Heart of the Home, where we transform your living space into a pristine sanctuary. Specializing in bespoke cleaning services, our team of professionals brings a touch of elegance and sophistication to every home.</p>
                        <a class="btn btn-primary w-25 mt-4 mx-auto mx-md-0" href="contact-us/">Get In Touch</a>
                    </div>
                </div>
            </div>
        </section></div>

        <!-- Content Section 1 -->
        <div class="introtext">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-5 text-center text-md-left fadeup">
                        <h2>Elegance in every corner, excellence in every clean.</h2>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-left fadeup pt-2">
                        <p class="">Experience the luxury of a meticulously cleaned home, tailored to your unique needs and preferences. Let us elevate your living environment with our unparalleled attention to detail and commitment to excellence.</p>
                        <a class="btn btn-secondary mx-auto mx-md-0 mt-4" href="contact-us/">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section 1 -->
        <div class="container my-3 my-md-5 pb-3 servicesection">
            <div class="row">
                <div class="col-12 my-4 fadeup">
                    <div class="d-flex justify-content-between flex-column flex-md-row text-center text-md-left">
                        <h3>Our Services</h3>
                        <a class="btn btn-primary w-25 w-md-auto mx-auto mx-md-0 my-2 my-md-0" href="contact-us/">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-4 fadeup">
                    <div class="serviceboxes my-md-0 d-flex flex-column h-100">
                        <div>
                            <img class="w-100" src="<?php echo esc_url($image_url1); ?>" alt="">
                        </div>
                        <div class="p-3 d-flex flex-column justify-content-between h-100">
                            <div class="text-center text-md-left">
                                <h4 class="mt-2 mb-2">
                                    <?php the_field('serviceheading1'); ?>
                                </h4>
                                <p>
                                    <?php the_field('servicetext1'); ?>
                                </p>
                            </div>
                            <div>
                                <a class="btn btn-secondary mt-4 mb-2 mx-auto mx-md-0" href="calendar-book/">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-4 fadeup">
                    <div class="serviceboxes my-md-0 d-flex flex-column h-100">
                        <div>
                            <img class="w-100" src="<?php echo esc_url($image_url2); ?>" alt="">
                        </div>
                        <div class="p-3 d-flex flex-column justify-content-between h-100">
                            <div class="text-center text-md-left">
                                <h4 class="mt-2 mb-2">
                                    <?php the_field('serviceheading2'); ?>
                                </h4>
                                <p>
                                    <?php the_field('servicetext2'); ?>
                                </p>
                            </div>
                            <div>
                                <a class="btn btn-secondary mt-4 mb-2 mx-auto mx-md-0" href="temporary-housekeeper/">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-4 fadeup">
                    <div class="serviceboxes my-md-0 d-flex flex-column h-100">
                        <div>
                            <img class="w-100" src="<?php echo esc_url($image_url3); ?>" alt="">
                        </div>
                        <div class="p-3 d-flex flex-column justify-content-between h-100">
                            <div class="text-center text-md-left">
                                <h4 class="mt-2 mb-2">
                                    <?php the_field('serviceheading3'); ?>
                                </h4>
                                <p>
                                    <?php the_field('servicetext3'); ?>
                                </p>
                            </div>
                            <div>
                                <a class="btn btn-secondary mt-4 mb-2 mx-auto mx-md-0" href="contract-cleaner/">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Section -->

        <div id="carouselExampleIndicators" class="carousel slide w-100 mt-5 mb-0 fadeup" data-ride="carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/CarouselBanner.png'); background-size: cover;">
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


                    
        <!-- Trustpoint Section -->

        <div class="trustpointsection py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 trustpoints text-center text-md-left d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-start my-3 my-md-0">
                        <i class="fas fa-fw my-2 my-md-0 fa-calendar-alt"></i>
                        <div>
                            <h4 class="w-100 mt-2">Online Booking</h4>
                            <p>Enjoy the convenience of instant booking by selecting your preferred time and date through our live availability calendar. Our user-friendly system allows you to schedule your cleaning service at a moment's notice.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 trustpoints text-center text-md-left d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-start my-3 my-md-0">
                        <i class="fas fa-fw my-2 my-md-0 fa-credit-card"></i>
                        <div>
                            <h4 class="w-100 mt-2">Online Payment</h4>
                            <p>Take advantage of our secure and convenient online payment system for your cleaning services. Easily pay for your bookings from the comfort of your home, ensuring a seamless and hassle-free transaction.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 trustpoints text-center text-md-left d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-start my-3 my-md-0">
                        <i class="fas fa-fw my-2 my-md-0 fa-tag"></i>
                        <div>
                            <h4 class="w-100 mt-2">Fixed Pricing</h4>
                            <p>Benefit from the simplicity and transparency of our fixed pricing for cleaning services. With no hidden fees or unexpected costs, you can confidently budget and plan for your cleaning needs.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 trustpoints text-center text-md-left d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-start my-3 my-md-0">
                        <i class="fas fa-fw my-2 my-md-0 fa-file-alt"></i>
                        <div>
                            <h4 class="w-100 mt-2">Booking Form</h4>
                            <p>Experience seamless communication with our easy-to-use booking communication form. Quickly and efficiently provide us with your cleaning needs and preferences, ensuring we deliver a tailored service for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




    </article>

    <?php

    get_footer();

    ?>