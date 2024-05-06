<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}



// Avada enqueue styles script..
function avada_enqueue_styles_script() {
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'avada_enqueue_styles_script' );


?>
