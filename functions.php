<?php

require_once 'includes/menus.php';

add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
    add_theme_support('title-tag');
}

wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
