<?php
/**
 * Check and setup theme's default settings
 *
 * @package UnderstrapChild
 * @author Gerardo Gonzalez
 * @version 2022.09.26
 * @since 2022.09.26
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('after_setup_theme', 'setup_image_sizes');
function setup_image_sizes()
{
    add_image_size('logo-size', 214, 66); // 300 pixels wide (and unlimited height)
}

add_action( 'after_setup_theme', 'agencytest_register_nav_menu', 0 );
function agencytest_register_nav_menu(){
    register_nav_menus( array(
        'top_menu' => __( 'Top Menu', 'text_domain' ),
        'bottom_menu'  => __( 'Bottom Menu', 'text_domain' ),
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );
}
