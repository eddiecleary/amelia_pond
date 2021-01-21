<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying the contact page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'global-templates/hero' );

?>

<main id="contact">
    <section class="form mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Page"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
