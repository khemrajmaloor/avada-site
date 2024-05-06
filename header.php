<?php 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
    <h2>Header section.</h2>
    
        
    