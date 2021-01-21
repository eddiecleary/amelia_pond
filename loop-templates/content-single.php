<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

        <div class="w-100">
	        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        </div>


		<?php the_title( '<h1 class="entry-title mt-3">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<div class="entry-content mt-4">

        <?php if (in_category('Food')) { ?>
            <style>
                blockquote {
                    border-color: #D76B5C !important;
                }
            </style>
        <?php } elseif (in_category('Lifestyle')) { ?>
            <style>
                blockquote {
                    border-color: #5F9A51 !important;
                }
            </style>
        <?php } else { ?>
            <style>
                blockquote {
                    border-color: #3F82B1 !important;
                }
            </style>
        <?php } ?>

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer mt-4">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
