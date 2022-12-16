<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package agency-theme
 *
 * @version 0.9.0
 * @since 0.9.0
 * @author Gerardo Gonzalez
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container  = get_option('_container');
$phone      = get_option( '_phone_number' );
$email      = get_option( '_email' );
$text       = get_option( '_other_text', '' );

?>

<footer class="wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr($container); ?> bg-info d-flex flex-column justify-content-center align-items-center"  id="footer-widget-area">
        <div class="row mw-1370 w-100">
        <?php if (is_active_sidebar('footer-widget-1')): ?>
            <?php dynamic_sidebar('footer-widget-1');?>
        <?php endif;?>
        </div>
        <hr>
        <div class="row mw-1370 w-100 pt-md-60">
            <div class="col-md-4">
                <div class="row justify-content-md-start justify-content-center">
                    <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                    <h1 class="navbar-brand mb-0"><a class="text-info text-decoration-none text-uppercase fw-bolder" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                    <?php else : ?>

                    <a class="navbar-brand text-info" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>

                    <?php
                    } else {
                    the_custom_logo();
                    }
                    ?>
                </div>
                <div class="row mt-md-52 mt-4">
                    <div class="col-md-6">
                        <p class="text-secondary text-uppercase">Phone</p>
                        <a class="text-white fs-24 text-decoration-none" href="tel:<?php echo $phone; ?>"><?php echo formatPhoneNumber($phone); ?></a>
                        <p class="text-white" style="max-width: 200px; padding-top: 1rem;"><?php echo $text; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-secondary text-uppercase">Email</p>
                        <a class="text-white fs-24 text-decoration-none" href="mailto:<?php echo $email;?>"><?php echo $email; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-md-center">
                <div class="">
                    <span class="text-secondary text-uppercase">
                        <?php echo wp_get_nav_menu_name( 'footer_menu' ); ?>
                    </span>    
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'footer_menu',
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
            <div class="col-md-5">
                <?php if (is_active_sidebar('footer-widget-2')): ?>
                    <?php dynamic_sidebar('footer-widget-2');?>
                <?php endif;?>
            </div>
        </div>
    </div>

    <div class="<?php echo esc_attr($container); ?> bg-dark d-flex flex-column justify-content-center align-items-center" id="footer-copyright">
        <div class="row mw-1370 w-100 py-32">
            <div class="col-6  fs-16 text-white">
                <?php echo "Copyright " . get_bloginfo('name') . " " . date('Y'); ?>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <?php get_social_icons(); ?>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
