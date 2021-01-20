<?php
/**
 * Template Name: Post Archive page
 *
 * The template for displaying all posts on an archive page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mt-4">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
                <?php
                    $posts = get_posts([
                        'numberposts'       => -1,
                        'orderby'           => 'date',
                        'post_type'         => 'post'
                    ]);

                    if ( $posts ) {
                ?>
                        <header class="page-header">
                            <h1 class="page-title">
                                All Posts
                            </h1>
                        </header><!-- .page-header -->

                        <div class="row justify-content-lg-around">
                            <?php
                            // Start the loop.
                            foreach ( $posts as $post ) :
                                setup_postdata( $post );
                                the_post();

                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content-post-card', get_post_format() );
                            endforeach;
                            wp_reset_postdata();
                    } else {
                        get_template_part( 'loop-templates/content', 'none' );
                    }
                ?>
                </div>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
