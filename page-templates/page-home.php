<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the home page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

wp_enqueue_script('lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', [], false, true);

get_header();

get_template_part( 'global-templates/hero' );

?>

<main id="home">

    <!-- Qualify Section -->
    <section class="qualify">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="qualify__title text-capitalize">Who should read this book?</h2>
                    <div class="qualify__hgroup d-flex justify-content-center align-items-center">
                        <span class="qualify__lottie"><lottie-player src="https://assets8.lottiefiles.com/datafiles/WLZxDkEn1AQcp9K/data.json"  background="transparent"  speed="1"  style="width: 135px; height: 135px;"  loop autoplay></lottie-player></span>
                        <div class="underline__wrap">
                            <h3 class="qualify__subtitle text-capitalize">All creatives</h3>
                            <div class="underline"></div>
                        </div>
                    </div>
                    <p class="qualify__copy col-md-10 col-lg-8 col-xl-7 mx-auto">
                        Rediscover your imagination and ignite your creativity. <i>Think Outside The Box</i> helps creatives of all types break out of boring templates and start creating designs using their own creative imagination.
                    </p>
                </div>
                <div class="col-12">
                    <div class="qualify__circles-row mt-lg-5 row justify-content-center">
                        <div class="qualify__item mt-4 mt-lg-0 col-sm-6 col-lg-3">
                            <div class="qualify__circle-wrap d-flex justify-content-center align-items-center">
                                <div class="qualify__circle qualify__circle--bg">
                                    <?php
                                        echo wp_get_attachment_image('24', 'medium');
                                    ?>
                                </div>
                                <div class="qualify__circle qualify__circle--border">
                                    <?php echo wp_get_attachment_image('25', 'medium'); ?>
                                </div>
                                <div class="qualify__circle qualify__circle--img">
                                    <?php echo wp_get_attachment_image('28', 'medium'); ?>
                                </div>
                            </div>
                            <h3 class="qualify__item-title text-center mt-3">Designers</h3>
                        </div>
                        <div class="qualify__item mt-4 mt-lg-0 col-sm-6 col-lg-3">
                            <div class="qualify__circle-wrap d-flex justify-content-center align-items-center">
                                <div class="qualify__circle qualify__circle--bg">
                                    <?php
                                        echo wp_get_attachment_image('24', 'medium');
                                    ?>
                                </div>
                                <div class="qualify__circle qualify__circle--border">
                                    <?php echo wp_get_attachment_image('26', 'medium'); ?>
                                </div>
                                <div class="qualify__circle qualify__circle--img">
                                    <?php echo wp_get_attachment_image('29', 'medium'); ?>
                                </div>
                            </div>
                            <h3 class="qualify__item-title text-center mt-3">Developers</h3>
                        </div>
                        <div class="qualify__item mt-4 mt-lg-0 col-sm-6 col-lg-3">
                            <div class="qualify__circle-wrap d-flex justify-content-center align-items-center">
                                <div class="qualify__circle qualify__circle--bg">
                                    <?php
                                        echo wp_get_attachment_image('24', 'medium');
                                    ?>
                                </div>
                                <div class="qualify__circle qualify__circle--border">
                                    <?php echo wp_get_attachment_image('27', 'medium'); ?>
                                </div>
                                <div class="qualify__circle qualify__circle--img">
                                    <?php echo wp_get_attachment_image('30', 'medium'); ?>
                                </div>
                            </div>
                            <h3 class="qualify__item-title text-center mt-3">Artists</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="col-12 text-center">
                <div class="testimonials__lottie d-flex justify-content-center">
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_jQWghG.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop autoplay></lottie-player>
                </div>
                <h3 class="text-capitalize">What readers are saying</h3>
            </div>
            <div class="row justify-content-center flex-md-row flex-sm-column align-items-center mt-md-5">
                <div class="testimonials__item col-11 col-sm-8 col-md-7 col-lg-5 col-xl-4 mt-5">
                    <blockquote class="testimonials__quote text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui convallis blandit id sollicitudin at at."
                    </blockquote>
                    <div class="testimonials__footer d-flex justify-content-between mt-5 align-items-center">
                        <div class="testimonials__footer-icon">
                            <?php echo wp_get_attachment_image('62', array('50','50')); ?>
                        </div>
                        <div class="testimonials__footer-text mr-3">
                            <p class="testimonials__footer-author font-weight-bold mb-0">Alexandra Shears</p>
                            <p class="testimonials__footer-job mb-0">Product Strategist</p>
                        </div>
                        <div class="testimonials__footer-profile-img">
                            <?php echo wp_get_attachment_image('58', array('50','50')); ?>
                        </div>
                    </div>
                </div>
                <div class="testimonials__item col-11 col-sm-8 col-md-7 mt-5 col-lg-5 col-xl-4 offset-lg-1">
                    <blockquote class="testimonials__quote text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui convallis blandit id sollicitudin at at."
                    </blockquote>
                    <div class="testimonials__footer d-flex justify-content-between align-items-center mt-5">
                        <div class="testimonials__footer-icon">
                            <?php echo wp_get_attachment_image('62', array('50','50')); ?>
                        </div>
                        <div class="testimonials__footer-text mr-3">
                            <p class="testimonials__footer-author font-weight-bold mb-0">Timothy Marks</p>
                            <p class="testimonials__footer-job mb-0">JS Developer</p>
                        </div>
                        <div class="testimonials__footer-profile-img">
                            <?php echo wp_get_attachment_image('59', array('50','50')); ?>
                        </div>
                    </div>
                </div>
                <div class="testimonials__item col-11 col-sm-8 col-md-7 col-lg-5 col-xl-4 mt-5">
                    <blockquote class="testimonials__quote text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui convallis blandit id sollicitudin at at."
                    </blockquote>
                    <div class="testimonials__footer d-flex justify-content-between align-items-center mt-5">
                        <div class="testimonials__footer-icon">
                            <?php echo wp_get_attachment_image('62', array('50','50')); ?>
                        </div>
                        <div class="testimonials__footer-text mr-3">
                            <p class="testimonials__footer-author font-weight-bold mb-0">Ben Rockwell</p>
                            <p class="testimonials__footer-job mb-0">Solutions Architect</p>
                        </div>
                        <div class="testimonials__footer-profile-img">
                            <?php echo wp_get_attachment_image('60', array('50','50')); ?>
                        </div>
                    </div>
                </div>
                <div class="testimonials__item col-11 col-sm-8 col-md-7 col-lg-5 col-xl-4 mt-5 offset-lg-1">
                    <blockquote class="testimonials__quote text-center">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui convallis blandit id sollicitudin at at."
                    </blockquote>
                    <div class="testimonials__footer d-flex justify-content-between align-items-center mt-5">
                        <div class="testimonials__footer-icon">
                            <?php echo wp_get_attachment_image('62', array('50','50')); ?>
                        </div>
                        <div class="testimonials__footer-text mr-3">
                            <p class="testimonials__footer-author font-weight-bold mb-0">Michael Peters</p>
                            <p class="testimonials__footer-job mb-0">Photographer</p>
                        </div>
                        <div class="testimonials__footer-profile-img">
                            <?php echo wp_get_attachment_image('61', array('50','50')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta__img-wrap row justify-content-center align-items-center">
                <div class="cta__img col-7 col-md-5">
                    <?php echo wp_get_attachment_image('32', 'medium'); ?>
                </div>
                <div class="cta__img col-4 col-md-3">
                    <?php echo wp_get_attachment_image('33', 'medium'); ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="https://www.amazon.com/" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-11 col-md-5 col-lg-4">
                    <h2 class="about__title text-center text-sm-left h1">Hello!
                        <span class="about__icon">
                            <?php
                                echo wp_get_attachment_image('63', array('50','50'), true);
                            ?>
                        </span>
                    </h2>
                    <h3 class="about__subtitle h2 text-center text-sm-left text-capitalize">I'm amelia pond</h3>
                    <h4 class="about__subtitle-2 text-center text-sm-left text-black-50 text-capitalize">Creativity coach</h4>
                </div>
                <div class="col-6 mt-4 mt-sm-0 col-md-5 col-lg-3">
                    <?php
                        echo wp_get_attachment_image('20', 'medium');
                    ?>
                </div>
            </div>
            <p class="about__copy col-sm-6 col-11 mt-4 mt-md-5 text-center mx-auto mt-lg-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
            </p>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 about__btn-wrap d-flex justify-content-center">
                    <a href="#" class="btn btn-secondary text-capitalize mr-5">About me</a>
                    <a href="#" class="btn btn-secondary text-capitalize">Contact</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog">
        <div class="container">
            <div class="blog__arrow text-center">
                <?php
                    echo wp_get_attachment_image('21', 'medium');
                ?>
            </div>
            <div class="row align-items-stretch">
                <?php
                    $posts = get_posts([
                        'numberposts'       => 6,
                        'orderby'           => 'date',
                        'post_type'         => 'post'
                    ]);

                    foreach( $posts as $post ):
                        setup_postdata($post);

                    $excerpt = get_the_excerpt();
                    $excerpt = substr($excerpt, 0, 150);
                    $excerpt_result = substr($excerpt, 0, strrpos($excerpt, ' '));

                ?>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card h-100">
                            <a href="<?php the_permalink(); ?>" class="card-img-top p-0">
                                <?php the_post_thumbnail(array('640','290')); ?>
                            </a>
                            <div class="card-body d-flex flex-column">
                                <?php
                                    the_title(
                                        sprintf( '<h5 class="entry-title card-title h4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                                        '</a></h5>'
                                    );
                                ?>
                                <p class="card-text"><?php echo $excerpt_result; ?></p>
                                <div class="card-foot d-flex justify-content-between align-items-end mt-4">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read more</a>
                                    <span class="small"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
                    <div class="col-12 text-center">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Posts Archive'))); ?>" class="btn btn-secondary btn-lg mt-5">View All Posts</a>
                    </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
