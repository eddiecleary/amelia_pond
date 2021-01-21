<?php
/**
 * Template Name: About Page
 *
 * Template for displaying the about page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'global-templates/hero' );

?>

<main id="about">
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <h2 class="text-capitalize">Just a simple person with big dreams</h2>
                    <p class="mt-4">Cronut fingerstache readymade synth, kinfolk copper mug heirloom paleo biodiesel hella mustache. Pitchfork mumblecore roof party twee, bitters fashion axe YOLO photo booth fanny pack cred selfies. Yuccie ennui narwhal swag leggings try-hard. Lumbersexual cred chia etsy neutra normcore. Literally deep v 3 wolf moon, poke polaroid yuccie ennui actually enamel pin cold-pressed.</p>
                    <div class="intro__img mt-lg-4 mt-5 col-md-10 mx-auto">
                        <?php
                            echo wp_get_attachment_image('121', 'large');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="achievements">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <h3 class="text-capitalize">my achievements</h3>
                    <p class="mt-4">
                        Lumbersexual glossier fashion axe af small batch enamel pin listicle. Ennui salvia hot chicken hella raclette pickled pabst humblebrag gluten-free jean shorts swag pour-over listicle. Chartreuse next level crucifix, tilde thundercats 90's letterpress. Man bun fam marfa flexitarian. Street art YOLO brunch poutine. Ennui try-hard portland flexitarian put a bird on it YOLO poke selfies kickstarter.
                    </p>
                    <div class="achievements__img mt-4">
                        <?php
                            echo wp_get_attachment_image('122', 'medium');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="thankyou">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <h4 class="text-capitalize">Thank you!</h4>
                    <p class="mt-4">
                        Leggings pinterest listicle edison bulb +1 photo booth taiyaki next level plaid man bun skateboard church-key occupy succulents mixtape. Meditation unicorn godard flannel photo booth flexitarian kinfolk crucifix irony taxidermy woke hashtag hammock williamsburg man braid. Fam blog lyft vegan, air plant fashion axe XOXO. Kinfolk next level wayfarers cray VHS godard intelligentsia lo-fi mumblecore everyday carry XOXO subway tile echo park forage mlkshk.
                    </p>
                    <div class="thankyou__img mt-4">
                         <?php
                            echo wp_get_attachment_image('84', 'large');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
