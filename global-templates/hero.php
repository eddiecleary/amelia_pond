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
        <div class="row">
            <h1><?php the_field('title') ?></h1>
            <h2><?php the_field('subtitle') ?></h2>
        </div>
    </div>
</section>

