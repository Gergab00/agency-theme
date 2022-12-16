<?php
/**
 * 
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 * 
 * @package portafolio-theme
 * 
 * @version 0.9.0
 * @since 0.9.0
 * @author Gerardo Gonzalez
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_option( '_container' );

?>

<main class="<?php echo esc_attr( $container ); ?>" id="front-page">
    <section class="row">
        <?php 
    if ( is_active_sidebar( 'herocanvas' ) ) {

        dynamic_sidebar( 'herocanvas' );
    
    }
    ?>
    </section>

    <?php 
if ( is_active_sidebar( 'front-page-1' ) ) {

    dynamic_sidebar( 'front-page-1' );

}
?>

    <?php 
if ( is_active_sidebar( 'front-page-2' ) ) {

    dynamic_sidebar( 'front-page-2' );

}
?>

<?php 
if ( is_active_sidebar( 'front-page-3' ) ) {

    dynamic_sidebar( 'front-page-3' );

}
?>
    <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>

    <div class="container-fluid d-flex justify-content-center py-48 mb-lg-32">
        <div class="row mw-1370 w-100">
            <h2 class="text-center my-md-112 text-dark fw-bold fs-34">Recently Added</h2>
            <div class="carousel-posts">
            <div class="static-banner text-end mb-16">
                <button type="button" class="btn btn-outline-lasted-post rounded-0 prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button type="button" class="btn btn-outline-lasted-post rounded-0 next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
                <?php
$args = array(
	'numberposts'	=> 9,
);

$posts = get_posts( $args );

if( ! empty( $posts ) ):
	foreach ( $posts as $post ){
        ?>
                <div class="carousel-cell mx-16">
                    <div class="card lasted-post p-4 rounded-0">

                        <?php echo get_the_post_thumbnail( $post->ID, array('408','260'), ['class' => 'img-fluid rounded-0']); ?>

                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none text-info fs-24"
                                    href="<?php get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
                            </h5>
                            <span class="text-dark fs-12"><i
                                    class="fa-solid fa-user pe-2"></i><?php echo get_the_author_meta( 'display_name', $post->post_author); ?></span>
                            <span class="text-dark fs-12"><i
                                    class="fa-solid fa-calendar-days px-2"></i><?php echo date('F d, Y', strtotime($post->post_date)); ?></span>
                            <p class="card-text"><?php echo truncate_words($post->post_content, 38); ?></p>
                        </div>
                    </div>
                </div>
                <?php
	}
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();