<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$excerpt = get_the_excerpt();
$excerpt = substr($excerpt, 0, 150);
$excerpt_result = substr($excerpt, 0, strrpos($excerpt, ' '));
?>

<article <?php post_class('card col-md-12 col-lg-6 col-xl-5 p-0 mt-5'); ?> id="post-<?php the_ID(); ?>">
	<?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'card-img-top') ); ?>
    <div class="card-body d-flex flex-column">
        <?php
            the_title(
                sprintf( '<h2 class="entry-title card-title h3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                '</a></h2>'
            );
        ?>
        <div class="card-text"><?php echo $excerpt_result ?></div>
        <div class="card-foot d-flex justify-content-between align-items-end mt-4">
            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read more</a>
            <span><?php echo get_the_date(); ?></span>
        </div>
    </div>

</article><!-- #post-## -->
