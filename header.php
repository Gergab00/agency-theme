<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agency-theme
 *
 * @version 0.9.0
 * @since   0.9.0
 * @author  Gerardo Gonzalez
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_option('_container');
$phone     = get_option('_phone_number');
$text      = get_option('_text_after_number');
$address   = get_option('_address');
$email     = get_option('_email');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action('wp_body_open'); ?>
    <div class="site" id="page">
        <!-- ******************* The Navbar Area ******************* -->
        <header id="wrapper-navbar <?php echo esc_attr($container); ?>">
            <nav id="top-nav"
                class="navbar navbar-expand-lg bg-secondary d-flex flex-column justify-content-center mh-50 h-100">
                <div class="row mw-1370 w-100">
                    <div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
                        <a class="fw-bold text-white fs-16 text-decoration-none"
                            href="tel:<?php echo $phone; ?>"><?php echo formatPhoneNumber($phone); ?>
                            <?php echo $text; ?></a>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <?php
wp_nav_menu(
 array(
  'theme_location'  => 'top_menu',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => '',
  'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
  'fallback_cb'     => '',
  'menu_id'         => 'top-menu',
  'depth'           => 2,
  'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
 )
);
?>
                    </div>
                </div>
            </nav>
            <nav id="main-nav" class="navbar navbar-expand-lg bg-white d-flex flex-column justify-content-center">
                <div class="row mw-1370 w-100">
                    <div
                        class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center py-32">
                        <?php if (!has_custom_logo()) { ?>

                        <?php if (is_front_page() && is_home()): ?>

                        <h1 class="navbar-brand mb-0"><a class="text-info text-decoration-none text-uppercase fw-bolder"
                                rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                itemprop="url"><?php bloginfo('name'); ?></a></h1>

                        <?php else: ?>

                        <a class="navbar-brand text-info" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                            itemprop="url"><?php bloginfo('name'); ?></a>

                        <?php endif; ?>

                        <?php
} else {
 the_custom_logo();
}
?>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas" aria-controls="offcanvas" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-center">
                        <span class=" fs-16 mx-8"><i class="fa-solid text-info fa-location-dot"></i>
                            <?php echo $address; ?></span>
                        <span class=" fs-16 mx-8"><i class="fa-solid text-info fa-envelope"></i>
                            <?php echo $email; ?></span>
                    </div>
                </div>
            </nav>
            <nav id="bottom-nav"
                class="navbar navbar-expand-lg bg-dark d-flex flex-column justify-content-center py-24">
                <div class="row mw-1370 w-100">
                    <div class="col-6">

                        <?php
wp_nav_menu(
 array(
  'theme_location'  => 'bottom_menu',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => '',
  'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
  'fallback_cb'     => '',
  'menu_id'         => 'bottom-menu',
  'depth'           => 2,
  'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
 )
);
?>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                        <?php get_social_icons(); ?>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header pt-60">
                    <h5 class="offcanvas-title text-white" id="offcanvasLabel"><a class="text-info text-decoration-none text-uppercase fw-bolder"
                                rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                itemprop="url"><?php bloginfo('name'); ?></a></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php
wp_nav_menu(
 array(
  'theme_location'  => 'top_menu',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'list-group list-group-flush lh-40',
  'fallback_cb'     => '',
  'menu_id'         => 'top-menu',
  'depth'           => 1,
  'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
 )
);
?>
                    <hr>
                    <?php
wp_nav_menu(
 array(
  'theme_location'  => 'bottom_menu',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'list-group list-group-flush lh-40',
  'fallback_cb'     => '',
  'menu_id'         => 'bottom-menu',
  'depth'           => 1,
  'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
 )
);
?>
                </div>
            </div>
        </header>