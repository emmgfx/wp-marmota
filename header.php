<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500" rel="stylesheet">
    <title>Hello, world!</title>
    <?php wp_head(); ?>
</head>
<body>

    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container">
            
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg viewBox="0 0 24 24">
                    <path fill="#FFFFFF" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                </svg>
            </button>

            <?php
            wp_nav_menu(array(
                'theme_location'	=> 'primary',
                'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
                'container'			=> 'div',
                'container_class'	=> 'collapse navbar-collapse',
                'container_id'		=> 'navigation',
                'menu_class'		=> 'navbar-nav ml-auto',
                'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                'walker'			=> new WP_Bootstrap_Navwalker()
            ));
            ?>
            
        </di>
    </nav>
