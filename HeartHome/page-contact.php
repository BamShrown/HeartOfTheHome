<?php
/*
Template Name: Contact Page
*/
?>

<?php

get_header();

$image_id1 = get_field('main_image');
$image_url1 = wp_get_attachment_image_url( $image_id1, 'full' ); // You can change 'full' to other image sizes like 'medium', 'thumbnail', etc.


?>

    <article class="content px-3 py-5 p-md-5">
    
    <?php

    // if(have_posts()) {

    //     while(have_posts()) {

    //         the_post();
    //         // First parameter is file path, second parameter is the type
    //         get_template_part('template-parts/content', 'page');
    //         // For example, if in template-parts I had a file called content-gallery.php, then the last parameter would be 'gallery' instead of article


    //     }

    // }

    ?>

    <div class="container mt-5 pt-5 fadeup">
        <div class="row contactusicons">


            <div class="col-12 col-md-6 fadeup px-0 order-2 order-md-1">
                <img class="w-100 h-100 object-fit-cover" src="<?php echo esc_url($image_url1); ?>" alt="">
            </div>

            <div class="col-12 col-md-6 mt-5 mt-md-0 flex-column contactformdiv fadeup p-4 px-5 order-1 order-md-2">
                    <h1 class="mb-4 text-center text-md-left">Get In Touch</h1>
                    <p>Please complete the contact form and a member of staff will be in touch, or feel free to give us a call or email using the details below</p>
                <div class="py-2">
                    <a href=""><i class="fa-solid fa-phone mr-1"></i> 07777777777</a><br>
                </div>
                <div class="py-2">
                    <a href=""><i class="fa-solid fa-envelope mr-1"></i> info@heartofthehome.co.uk</a>
                </div>
                
                
                <div class="wpcf7 js mt-4" id="wpcf7-f42-p31-o1" lang="en-GB" dir="ltr">
                <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                    <form action="/wordpress/contact-us/#wpcf7-f42-p31-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="42">
                            <input type="hidden" name="_wpcf7_version" value="5.9.5">
                            <input type="hidden" name="_wpcf7_locale" value="en_GB">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f42-p31-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="31">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <p><label class="w-100"> Name *<br>
                        <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Your Name" value="" type="text" name="your-name" spellcheck="false" data-ms-editor="true"></span> </label>
                        </p>
                        <p><label class="w-100"> Email *<br>
                        <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter Your Email" value="" type="email" name="your-email"></span> </label>
                        </p>
                        <p><label class="w-100"> Subject<br>
                        <span class="wpcf7-form-control-wrap" data-name="your-subject"><input size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Type Your Subject" value="" type="text" name="your-subject" spellcheck="false" data-ms-editor="true"></span> </label>
                        </p>
                        <p><label class="w-100"> Message<br>
                        <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Type Your Message Here..." name="your-message" spellcheck="false" data-ms-editor="true"></textarea></span> </label>
                        </p>
                        <p class="m-0 p-0 d-flex flex-column justify-content-center align-items-center"><input class="wpcf7-form-control wpcf7-submit has-spinner mb-1" type="submit" value="Submit">
                        </p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    </article>

    <?php

    get_footer();

    ?>