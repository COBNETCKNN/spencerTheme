<?php 

function portfolioTheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('fontAwesomeCSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

    //enqueue JS
   wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
   wp_enqueue_script('fontAwesome', 'https://kit.fontawesome.com/24bc428ad4.js');
}
add_action( 'wp_enqueue_scripts', 'portfolioTheme_files' );

// Exclude node_modules from exporting All In One Migration Plugin
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'spencerTheme/node_modules'; // insert your theme name
  return $exclude_filters;
} );

?>