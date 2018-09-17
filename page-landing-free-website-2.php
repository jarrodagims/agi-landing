<?php

/*

    Template Name: Landing Free Website 2

*/

get_header(landing); ?>

    <div class="flex-order">
        <section class="bg-hero">
            <div class="container">
                <div class="hero-text">
                    <h1>Can We Give You A <span class="brand">FREE</span> <br />Modern, Fully Optimized, Mobile <br />Responsive Website for Your <br />
                        Local Company?
                    </h1>
                </div>
            </div>
        </section>
    </div>
    <div class="flex-order">
        <section class="landing-form">
            <div class="container text-center">
                <p class="blurb"><strong>Watch the short demo video below</strong> and then <span class="br">fill out the form to claim your free site!</span></p>
                <div class="video-container">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/RLpAMSMbHX8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <button class="btn btn-primary btn-long">Click Here To Submit Your Information To Claim Your Brand New Free Website!</button>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing-free-website/bg-hero-sm.jpg" class="visible-xs" alt="">
                </div>
            </div>
        </section>
    </div>
<?php
get_footer(landing);