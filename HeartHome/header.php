<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Template Site">
    <meta http-equiv="Cache-control" content="no-cache">    
    <link rel="shortcut icon" href="/wp-content/themes/templatesite/assets/images/logo.png"> 
     
      <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php 
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	    
	   
            <!-- Pulling site name -->
        <!-- <?php echo get_bloginfo('name'); ?> -->
       
        
	    <nav class="navbar navbar-expand-lg navbar-light container" >
            <div class="mobLogo w-25 d-lg-none">
                <?php
                if(function_exists('the_custom_logo')) {
                    
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ?>
                <a class="mx-auto logo w-100" href="<?php echo home_url(); ?>"><img class="mx-auto logo w-100" src="<?php echo $logo[0] ?>" alt="logo" ></a>
            </div>
			<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<div id="hamburger" class="hamburglar is-closed">

                <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-bun-top"></span>
                    <span class="burger-filling"></span>
                    <span class="burger-bun-bot"></span>
                </div>
                </div>
                
                <!-- svg ring containter -->
                <div class="burger-ring">
                <svg class="svg-ring">
                    <path class="path" fill="none" stroke="white;" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                </svg>
                </div>
                <!-- the masked path that animates the fill to the ring -->
                
                <svg width="0" height="0">
                <mask id="mask">
                <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                </mask>
                </svg>
                <div class="path-burger">
                <div class="animate-path">
                    <div class="path-rotation"></div>
                </div>
                </div>
                
            </div>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-row py-1">
                <!-- Pulling site logo -->
                <?php
                if(function_exists('the_custom_logo')) {
                    
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ?>
                <a href="<?php echo home_url(); ?>" class="col-3 d-none d-lg-block">
                    <img class="mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >	
                </a>
						
				
                <!-- Pulling main menu 'primary' -->
                <?php

                    wp_nav_menu(
                        array(  
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav flex-column flex-lg-row text-sm-center d-flex justify-content-end text-md-left col-12 col-lg-9 align-items-start align-items-lg-center m-auto w-100 w-md-100" >%3$s</ul>'

                        )
                    );


                ?>

				
				<!-- <ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul> -->

			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <header>
            <!-- Pulling in page title -->
			<!-- <h1 class="heading"><?php the_title(); ?>test</h1> -->
		</header>