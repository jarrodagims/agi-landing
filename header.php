<?php

/*

 Because the front page requires a different header than the rest of the site, we created two different headers.

 So that we aren't repeating ourselves (yay for DRY code!) we have created a header-common.php file that holds

 all of the common code, ensuring all of the proper hooks are being called.

 If you need to edit something in the header that will be site-wide, edit header-common.php rather than this file,

 which will not be called for the home page.

 */

require_once('header-common.php');

?>

<div id="home-header-top">

    <div class="container">

        <div class="row">

            <div id="toplogo" class="col-lg-5 col-md-7 col-sm-12 col-xs-12 col-xss-12">

                <a href="/"> <img src="http://www.agims.com/wp-content/themes/agi2016/img/agi-marketing-logo.png" alt="AGI Marketing"> </a>

            </div>

            <div id="topnav" class="col-lg-19 col-md-17 col-sm-24">

                <style>

                    @media (min-width: 992px) {

                        .navbar-sherpa {

                            float: right;

                        }

                    }

                </style>

                <?php

                // Call either the responsive_bs_menu() or the non_responsive_bs_menu() here

                // If you are using a menu besides 'primary', use this as the first argument in the function.

                // If you are using a second menu (for the right side), send the theme location of that as the second argument.

                // i.e. responsive_bs_menu($primary_menu_location, $secondary_menu_location);

                // If you don't send a second argument, it will default to no menu on the right side.

                responsive_bs_menu('primary');

                ?>

                <a href="tel:915-209-5381" class="m-phone"><i class="fa fa-mobile" aria-hidden="true"></i></a>

            </div>

        </div>

    </div>

</div>

<div id="home-header-cta" style="margin-bottom:50px;">

    <div class="topoverlaylt"></div>

    <div class="container">

        <div class="row">

            <div id="topsocial" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xxs-12 text-center" style="text-align: left;">

                <a href="https://www.facebook.com/agimarketing" style="border-right: 1px solid #3b3b3b;display: inline-block;border-left: 1px solid #3b3b3b;width: 50px;text-align: center;margin-right: -4px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                <a href="https://twitter.com/agi_marketing" style="width: 50px;display: inline-block;border-right: 1px solid #3b3b3b;text-align: center;margin-right: -4px;"><i class="fa fa-twitter" aria-hidden="true" style="/* border-right: 1px solid #3b3b3b; */"></i></a>

                <a href="https://plus.google.com/+Agims" style="display: inline-block;border-right: 1px solid #3b3b3b;text-align: center;width: 50px;"><i class="fa fa-google-plus" aria-hidden="true" style="/* border-right: 1px solid #3b3b3b; */"></i></a>

            </div>

            <div class="col-lg-18 col-md-18 col-sm-12 col-xs-12 col-xxs-12 text-center" style="text-align: right;">

                <a href="tel:915-209-5381" class="top-phone">

                    <span><i class="fa fa-mobile" aria-hidden="true"></i></span>

                    <h5>(915) 209-5381</h5>

                </a>

            </div>

        </div>

    </div>

</div>

