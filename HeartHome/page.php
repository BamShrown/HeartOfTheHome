
<?php

get_header();


$image_id1 = get_field('main_image');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>


    



    <article class="content">



    <!-- First Block -->


    <div class="container my-5 pt-5">
        <div class="row mt-5 pageblock">
            <div class="col-12 col-md-6 fadeup textblock p-4">
                <h1 class="text-start fadeup"><?php echo get_the_title(); ?></h1>
                <div class="text-start fadeup pt-2">
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
            <div class="col-12 col-md-6 fadeup px-0">
                <img class="w-100 object-fit-cover" src="<?php echo esc_url($image_url1); ?>" alt="">
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    

    <div class="w-100  unsurebanner"  >
        <div class="container fadeup">
            <div class="row py-2">
                <div class="col-12 d-flex py-5 flex-column justify-content-center align-items-center text-center">
                    <h3>Unsure what you're after?</h3>
                    <p>Get in touch with one of our professionals now</p>
                    <a class="btn btn-primary d-flex justify-content-center w-75 w-md-25 align-items-center mt-2 mx-auto borderround" href="contact/">Get In Touch <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Block -->


    <div class="w-100 d-flex fadeup flex-column flex-md-row">
        <div class="w-100 w-md-50 order-2 order-md-1">
            <img class="w-100 h-100 object-fit-cover fadeup br-blue" src="<?php echo esc_url($image_url3); ?>" alt="">
        </div>
        <div class="d-flex justify-content-start align-items-center w-100 w-md-50 order-1 order-md-2">
            <div class="container-panel py-5 mt-2 pl-md-4 text-center fadeup text-md-left">
                <h3 class="w-100">Why choose us?</h3>
                <p>At BioHazard, we specialize in decontamination cleaning, biohazard cleaning, mould removal, commercial cleaning, and construction site cleanups. Our certified team uses state-of-the-art equipment to deliver safe, efficient, and thorough services.<br><br>We prioritize safety, customer satisfaction, and environmental responsibility. Available 24/7 for emergencies, we ensure peace of mind with our reliable and professional solutions. Choose us for expert care and quality results. Contact us today!</p>
            </div>
        </div>
    </div>



    </article>

    <?php

    get_footer();

    ?>