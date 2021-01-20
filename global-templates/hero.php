<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="hero__wrapper--left col-lg-6">
                <div class="hero__img">
                    <?php
                        $image = get_field('image');
                        $size = 'large';
                        if($image){
                            echo wp_get_attachment_image($image, $size);
                        }
                    ?>
                </div>
            </div>
            <div class="hero__wrapper--right col-lg-6 text-center">
                <div class="hero__icon mx-auto">
                    <?php
                        $icon = get_field('icon');
                        $size = 'thumbnail';
                        $is_icon = true;
                        if($icon){
                            echo wp_get_attachment_image($icon, $size, $is_icon);
                        }
                    ?>
                </div>
                <h1 class="hero__title"><?php the_field('title')?></h1>
                <h2 class="hero__subtitle"><?php the_field('subtitle')?></h2>
                <p class="hero__p"><?php the_field('copy') ?></p>
                <div>
                    <?php $link = get_field('button');
                        if ($link) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }
                    ?>
                    <a class="hero__btn btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

