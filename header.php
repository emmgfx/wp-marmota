<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-<?php echo get_theme_mod("navbar-expand", "md"); ?> sticky-top">
            <div class="container">
                
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg viewBox="0 0 24 24">
                        <path fill="#FFFFFF" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                    </svg>
                </button>

                <div id="navigation" class="collapse navbar-collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'	=> 'primary',
                        'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
                        'container'			=> '',
                        'container_class'	=> '',
                        'container_id'		=> 'navigation',
                        'menu_class'		=> 'navbar-nav ml-auto',
                        'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                        'walker'			=> new WP_Bootstrap_Navwalker()
                    ));
                    ?>
                    <button class="search-toggler d-none d-<?php echo get_theme_mod("navbar-expand", "md"); ?>-block">
                        <svg viewBox="0 0 24 24">
                            <path fill="#FFFFFF" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                        </svg>
                    </button>
                    <form class="search form-inline my-3 my-<?php echo get_theme_mod("navbar-expand", "md"); ?>-0 d-<?php echo get_theme_mod("navbar-expand", "md"); ?>-none" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                        <div class="d-flex w-100">
                            <input class="form-control mr-2 flex-grow-1" type="search" placeholder="<?php echo __("Buscar", "marmota"); ?>" value="<?php echo get_search_query() ?>" name="s" aria-label="<?php echo __("Buscar", "marmota"); ?>">
                            <button class="btn btn-primary btn-sm" type="submit"><?php echo __("Buscar", "marmota"); ?></button>
                        </div>
                    </form>
                </div>
                
            </di>
        </nav>
        
        <section class="desktop-search">
            <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input type="search" placeholder="<?php echo __("Buscar", "marmota"); ?>" value="<?php echo get_search_query() ?>" name="s" aria-label="<?php echo __("Buscar", "marmota"); ?>">
                <button class="close-search" type="button">
                    ESC
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#FFFFFF" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                    </svg>
                </button>
            </form>
        </section>
        
    </header>
    
    <div class="bg-rectangle bg-rectangle-1"></div>

    <main id="content">
