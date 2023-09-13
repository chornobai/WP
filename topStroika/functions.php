<?php

function all_scripts_styles () {
    wp_enqueue_style ('wp-style', get_template_directory_uri());
    wp_enqueue_style ('styles', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style ('swipe-style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');

    
    wp_enqueue_script ('main', get_template_directory_uri() . './assets/js/script.min.js', array(), null, true);
    wp_enqueue_script ('swiper', get_template_directory_uri() . './assets/js/vendor.js', array('main'), null, true);
}

add_action ( 'wp_enqueue_scripts', 'all_scripts_styles');
add_action( 'after_setup_theme', 'menu' );
function menu() {
	register_nav_menu( 'top', 'меню в шапке' );
}