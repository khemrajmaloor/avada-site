<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


// Enqueue styles script Avada theme ..
if (!function_exists('avada_enqueue_styles_scripts')) {
    function avada_enqueue_styles_scripts() {
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css' );
    }
    add_action( 'wp_enqueue_scripts', 'avada_enqueue_styles_scripts' );
}


?>
