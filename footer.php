<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h5 class="text-capitalize text-center">Subscribe to my free newsletter for updates!</h5>
                <?php echo do_shortcode('[contact-form-7 id="115" title="Newsletter Form"]'); ?>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-lg-4">
            <!-- Your site title as branding in the menu -->
                <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                    <?php else : ?>

                        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>

                    <?php
                } else {
                    the_custom_logo();
                }
                ?>
            <!-- end custom logo -->
            </div>
            <!-- categories nav -->
                <?php
                    wp_nav_menu(
                        array(
                            'container_class'   => 'col-lg-4',
                            'menu_class'        => 'd-flex list-unstyled justify-content-between text-decoration-none mb-0',
                            'menu'           => '3',
                        )
                    );
				?>
            <!-- categories nav end -->
            <!-- pages nav -->
                <?php
                    wp_nav_menu(
                        array(
                            'container_class'   => 'col-lg-2 ml-auto',
                            'menu_class'        => 'd-flex list-unstyled justify-content-between text-decoration-none mb-0',
                            'menu'           => '2',
                        )
                    );
				?>
            <!-- pages nav end -->
        </div>
        <div class="row justify-content-center mt-4">
            <ul class="col-lg-4 d-flex justify-content-between list-unstyled">
                <li class="menu-item">
                    <a href="https://www.facebook.com">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.twitter.com">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.instagram.com">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.linkedin.com">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <p>Copyright &copy; <span class="year">2020</span></p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script>
    document.querySelector('.year').textContent = new Date().getFullYear();
</script>
</body>


</html>

