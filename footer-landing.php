<section class="google-partner text-center">
    <ul class="icons visible-xs visible-sm">
        <li><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/logo-scott.png"
                        alt="Scott's Heating and Cooling"/></li>

        <li><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/mech-tech-hot.png"
                        height="36" alt="EP Mech Tech"/></li>

        <li><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/diaz-hot.png"
                        alt="Diaz Services"/></li>

        <li><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/bg-hot.png"
                        alt="B & G Air Conditioning"/></li>
    </ul>
    <ul class="google-colors">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/google-partner.png"
         alt="A Google Partner Agency" class="hidden-xs" />
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/google-partner-small.png"
         alt="A Google Partner Agency" class="visible-xs" />

</section>

<section id="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13573.787194011304!2d-106.2928029!3d31.7310033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cd8fa03f0ca35!2sAGI+Marketing!5e0!3m2!1sen!2sus!4v1534888936286"
            width="100%" height="100%" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/logo-agi-lg.png"
                        alt="AGI Marketing" class="logo" /></div>
        </div>
        <div class="row">
            <div class="col-md-4">


                <p><span class="title hidden-xs">CONTACT US TODAY</span>
                    <strong>PH.</strong> 915-209-5381<br />
                    1370 Pullman Dr, Ste. G, <span class="br">El Paso, TX 79936</span></p>

                <a href="#contact-pup" class="popup-button">
                    <button class="btn btn-success">Send Me Some Info About Digital Marketing</button>
                </a>
            </div>
            <div class="col-md-8 hidden-xs">
                <div class="flex-row">

                </div>
            </div>
        </div>
        <div class="row sub-footer">
            <div class="col-md-6 col-xs-12">
                <ul class="list-inline social-media sm">
                    <li><a href="https://www.facebook.com/agimarketing" class="facebook-button social-media-button sm square lighten external" target="_blank"><i class="fa fa-facebook fa-fw "><span>Facebook</span></i></a></li>
                    <li><a href="https://twitter.com/agi_marketing" class="twitter-button social-media-button sm square lighten external" target="_blank"><i class="fa fa-twitter fa-fw "><span>Twitter</span></i></a></li>
                    <li><a href="https://plus.google.com/+Agims/posts" class="googleplus-button social-media-button sm square lighten external" target="_blank"><i class="fa fa-google-plus fa-fw "><span>Google Plus</span></i></a></li>
                    <li><a href="https://www.linkedin.com/company/agi-marketing" class="linkedin-button social-media-button sm square lighten external" target="_blank"><i class="fa fa-linkedin fa-fw "><span>LinkedIn</span></i></a></li>
                    <li><a href="http://www.youtube.com/user/AGIElPaso" class="youtube-button social-media-button sm square lighten external" target="_blank"><i class="fa fa-youtube-play fa-fw "><span>YouTube</span></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12 copyright"><p>Privacy Policy   |   Site Copyright &copy; 2018 <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/logo-footer.png"
                            alt="AGI Marketing" class="hidden-xs" /><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/logo-footer-black.png"
                            alt="AGI Marketing" class="visible-xs" /></p></div>
        </div>
    </div>
</footer>

<div id="contact-pup" class="white-popup mfp-hide">
    <h2><span>Online Marketing</span></h2>
    <p>Find out why it’s a great idea for HVAC Companies</p>
    <?php
        echo do_shortcode('[contact-form-7 id="12" title="Contact Landing Page"]');
    ?>
</div>
<?php wp_footer(); ?>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 960835212;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/960835212/?guid=ON&amp;script=0"/>
    </div>
</noscript>
<?php
if (is_page(array( 'thank-you', 'audit-received', 'thank-you-dental', 'thank-you-law', 'thank-you-healthcare' ))){
    echo '
<!-- Google Code for Form Submit Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 960835212;
    w.google_conversion_label = "tY5sCPD-wmUQjN2UygM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != \'undefined\') {
      window.location = url;
    }
  }
  var conv_handler = window[\'google_trackConversion\'];
  if (typeof(conv_handler) == \'function\') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
';
}
?>
<script type="text/javascript" language="javascript">
    var sf14gv = 30891;
    (function() {
        var sf14g = document.createElement('script'); sf14g.type = 'text/javascript'; sf14g.async = true;
        sf14g.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 't.sf14g.com/sf14g.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sf14g, s);
    })();
</script>
<script>
    (function() {
    //Only do slideshow on small screens
    var timeout;
    window.addEventListener('resize', function ( event ) {
        if (timeout) {
            window.cancelAnimationFrame(timeout);
        }
        timeout = window.requestAnimationFrame(function () {
            initializeSlideShow();
        });
    }, false);

    function initializeSlideShow() {
        if ($(window).width() < 768) {
            $('.slideshow').cycle({
                timeout: 2000
            });

            $('#online-marketing-inside').appendTo('#online-marketing-move-to');
        }
        else if ($(window).width() > 768) {
            $('.slideshow').cycle('destroy');
            $('#online-marketing-inside').appendTo('#online-marketing-move');
        }
    }

    initializeSlideShow();

    $('.popup-button').magnificPopup({
        type:'inline',
        midClick: true
    });

    })();
</script>
</body>
</html>