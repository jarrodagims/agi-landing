<?php

$includes = array(
    'checks.php', 					// Set up options
    'constants.php',				// Add in Constants
    'styles.php', 					// Enqueue our styles
    'scripts.php', 					// Enqueue our scripts
    'sidebars.php',					// Set up our sidebar
    'sherpa-excerpt.php',			// Special excerpt so that includes a read more button
    'sherpa-theme-options-page.php',// Create our options page - Settings => Theme Options
    'do-shortcode-widget.php',		// Create a widget to do a single shortcode
    'menus.php',					// Set up our menus
    'SocialMedia.php',              //Setup Social Media for Landing page
    'navs.php',						// Include our navs functions
    'paging-nav.php',				// Set up our paging nav
    'theme-features.php',			// Set up our theme features
    'testimonials-cpt.php',			// Set up our Testimonials Custom Post Type
    'wp_bootstrap_navwalker.php',	// Set up our Custom Walker for Bootstrap 3.x for wp_nav_menu()
    'prevent-image-size-attr.php',	// Prevent WP from adding Height and Width to images
    'social-media.php',				// Set up social media function
    'rev-slider-call.php',			// Set up slider (needs Slider Revolution)
    'google-analytics.php',			// Include Google Analytics
    'stat-counter.php',				// Include Stat Counter
    'image-sizes.php',				// Include custom image sizes
    'cf7-filters.php',				// Add Contact Form 7 Filters
    'free-audit-block.php',         // Free Audit Block
    'pull-quote-shortcode.php',     // Pullquote shortcode
);

$prefix = 'inc/';

foreach($includes as $include) {
    require_once($prefix . $include);
}


add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer()
{
    ?>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function (event) {

            getstub = function (event) {
                var redirectURL = '';
                // var formTitle = '';

                switch (event) {
                    case '4211':
                        // formTitle = 'AGI Home Packet';
                        redirectURL = 'thank-you-packet';
                        break;

                    case '4212':
                        // formTitle = 'AGI Home Audit';
                        redirectURL = 'thank-you-audit';
                        break;

                    case '4213':
                        // formTitle = 'AGI Home Get Started';
                        redirectURL = 'thank-you-get-started';
                        break;

                    case '2659':
                        // formTitle = 'AGI Home Contact';
                        redirectURL = 'info-thank-you';
                        break;

                    case '2633':
                        // formTitle = 'AGI Home Display';
                        redirectURL = 'thank-you-home-display';
                        break;

                    case '3387':
                        // formTitle = 'AGI Home No Rank Question';
                        redirectURL = 'thank-you-home-norank';
                        break;


                    case '3386':
                        // formTitle = 'AGI Home No Website Question';
                        redirectURL = 'thank-you-home-nowebsite';
                        break;

                    case '2628':
                        // formTitle = 'AGI Home ORM';
                        redirectURL = 'thank-you-home-orm';
                        break;

                    case '2632':
                        // formTitle = 'AGI Home PPC';
                        redirectURL = 'thank-you-home-ppc';
                        break;

                    case '2634':
                        // formTitle = 'AGI Home Remarketing';
                        redirectURL = 'thank-you-home-remarketing';
                        break;

                    case '2627':
                        // formTitle = 'AGI Home SEO';
                        redirectURL = 'thank-you-home-seo';
                        break;

                    case '2630':
                        // formTitle = 'AGI Home SMM';
                        redirectURL = 'thank-you-home-smm';
                        break;

                    case '2629':
                        // formTitle = 'AGI Home WEB';
                        redirectURL = 'thank-you-home-web';
                        break;

                    case '2631':
                        // formTitle = 'AGI Home YouTube';
                        redirectURL = 'thank-you-home-youtube';
                        break;

                    case '2710':
                        // formTitle = 'AGI Inside Contact';
                        redirectURL = 'thank-you-inside-contact';
                        break;

                    case '4':
                        // formTitle = 'Contact form 1';
                        redirectURL = 'thank-you';
                        break;

                    case '152':
                        // formTitle = 'Free Audit';
                        redirectURL = 'thank-you-free-audit';
                        break;

                    case '1310':
                        // formTitle = 'Job Contact';
                        redirectURL = 'thank-you-job';
                        break;

                    case '1921':
                        // formTitle = 'LP Dental';
                        redirectURL = 'thank-you-dental';
                        break;

                    case '1922':
                        // formTitle = 'LP Healthcare';
                        redirectURL = 'thank-you-healthcare';
                        break;

                    case '1913':
                        // formTitle = 'LP Law Firm';
                        redirectURL = 'thank-you-law-firm';
                        break;

                    case '4697':
                        // formTitle = 'Free Website';
                        redirectURL = 'thank-you-free-website';
                        break;

                    case '4750':
                        // formTitle = 'Contact Landing Page';
                        redirectURL = 'hvac-thank-you';
                        break;

                    case '4778':
                        redirectURL = "free-website-thank-you";
                        break;

                    default:
                        // formTitle = 'Contact Form';
                        redirectURL = 'thank-you';
                        break;
                }

                return redirectURL;
            };

            var myStub = getstub(event.detail.contactFormId);

            window.dataLayer.push({
                "event": "cf7submission",
                "formId": event.detail.contactFormId,
                "response": event.detail.inputs,
                "eventCallback": function () {
                    window.location = 'https://www.agims.com/' + myStub + '/';
                }
            });

        }, false);
    </script>
    <?php
}

function register_landing_style() {
    if ( is_page_template( 'page-landing-2018.php' ) || is_page_template('page-landing-free-website.php')) {
        wp_enqueue_style( 'landing', get_stylesheet_directory_uri() . '/css/landing-style.css' );
        wp_enqueue_style( 'magnific', get_stylesheet_directory_uri() . '/css/magnific-popup.css' );
        wp_enqueue_script( 'magnific-js', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js' );
    }
}
add_action( 'wp_enqueue_scripts', 'register_landing_style' );
