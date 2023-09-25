<?php 

function portfolioTheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');

    //enqueue JS
   wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'portfolioTheme_files' );

?>