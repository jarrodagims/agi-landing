<?php
require_once('header-common.php');
?>
<link rel='stylesheet' id='sherpa_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A200%2C500%2C700%7CRoboto%3A300%2C400%2C500%7CMontserrat%3A300%2C400%2C600%2C800&#038;ver=4.9.8' type='text/css' media='all' />
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js" type="text/javascript"></script>


<section class="top-header">
    <div class="container">
        <div class="row flex-row">
            <div class="col-xs-12 flex-col">
                <div class="v-align">
                    <?php if(is_page_template( 'page-landing-2018.php' )) : ?>
                    <a class="navbar-logo"  href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>
/img/logo-hvac.png" alt="AGI Marketing"></a>
                    <?php else : ?>
                        <a class="navbar-logo"  href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>
/img/landing-free-website/agi-logo.svg" alt="AGI Marketing" height="72"></a>
                    <?php endif; ?>

                <ul class="nav navbar-nav navbar-right">
                    <li class="menu-item directions"><a
                                href="<?php echo get_site_url() ?>/contact-us">Directions</a></a></li>
                    <li class="menu-item contact"><a class="show-text" href="tel:9152095381">(915) 209-5381</a></li>
                </ul></div>
            </div>
        </div>
    </div>
</section>


