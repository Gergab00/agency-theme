<?php
/**
 * Declaring widgets
 *
 * @package agency-theme
 * 
 * @version 0.9.0
 * @since 0.9.0
 * @author Gerardo Gonzalez
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'widgets_init', 'register_footer_widgets' );

function register_footer_widgets() {
    register_sidebar( array(
      'name'          => 'Footer Widget 1',
      'id'            => 'footer-widget-1',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="footer-widget-title">',
      'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
      'name'          => 'Footer Widget 2',
      'id'            => 'footer-widget-2',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="footer-widget-title">',
      'after_title'   => '</h2>',
    ) );
  }

  add_action( 'widgets_init', 'register_frontpage_widgets' );

  function register_frontpage_widgets() {
    register_sidebar( array(
      'name'          => 'Front-page 1',
      'id'            => 'front-page-1',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h2 class="frontpage-widget-title">',
      'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
      'name'          => 'Front-page 2',
      'id'            => 'front-page-2',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h2 class="frontpage-widget-title">',
      'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
      'name'          => 'Front-page 3',
      'id'            => 'front-page-3',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h2 class="frontpage-widget-title">',
      'after_title'   => '</h2>',
    ) );
  }