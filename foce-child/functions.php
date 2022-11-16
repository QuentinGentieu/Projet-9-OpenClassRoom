<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function enqueue_my_custom_script() {
     
    wp_enqueue_script( 'bezierplugjs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js', ["jquery"], false, true );
    wp_enqueue_script( 'cssplugjs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'timelinelitejs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineLite.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'tweenlitejs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'swiperjs', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'parallaxjs', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'scrolljs', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js',  ["jquery"], false, true );
    wp_enqueue_script( 'parallaxplugjs', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js' ,  ["jquery"], false, true );
    wp_enqueue_script( 'parallaxpluganimjs', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js',  ["jquery"], false, true );
	wp_enqueue_script( 'jqueryjs', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',  ["jquery"], false, true );


    wp_enqueue_script( 'mainjs', get_stylesheet_directory_uri() . '/main.js',  ["jquery"], false, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_my_custom_script' );