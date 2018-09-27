<?php

/*

    Template Name: Landing Free Website

*/

get_header(landing); ?>

    <div class="flex-order">
        <section class="bg-hero">
            <div class="container">
                <div class="hero-text">
                    <?php the_field('hero_text', false, false); ?>
                </div>
            </div>
        </section>
    </div>
    <div class="flex-order">
        <section class="landing-form">
            <div class="container text-center">
                <?php the_field('lander_body', false); ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing-free-website/bg-hero.jpg" class="visible-xs" alt="">
                </div>
            </div>
        </section>
    </div>
<?php
get_footer(landing);