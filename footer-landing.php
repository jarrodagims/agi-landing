<section class="google-partner text-center">

    <ul class="google-colors">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/google-partner.png"
         alt="A Google Partner Agency"/>
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


                <p><span class="title">CONTACT US TODAY</span>
                    <strong>PH.</strong> 915-209-5381<br />
                    1370 Pullman Dr, Ste. G, El Paso, TX 79936</p>

                <a href="">
                    <button class="btn btn-success">Send Me Some Info About Digital Marketing</button>
                </a>
            </div>
            <div class="col-md-8">
                <div class="flex-row">

                    <div class="flex-col"><span class="title">PAGES</span>
                        <ul>
                            <li><a href="https://www.agims.com/">Home</a></li>
                            <li><a href="https://www.agims.com/google-partner/">About AGI</a></li>
                            <li><a href="https://www.agims.com/seo/">Services</a></li>
                            <li><a href="https://www.agims.com/careers/">Careers</a></li>
                            <li><a href="https://www.agims.com/blog/">Blog</a></li>
                            <li><a href="https://www.agims.com/contact-us/">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="flex-col"><span class="title">What We Do</span>
                        <ul>
                            <li><a href="https://www.agims.com/seo/">Search Engine Optimization (SEO)</a></li>
                            <li><a href="https://www.agims.com/social-media-marketing/">Social Media Marketing</a></li>
                            <li><a href="https://www.agims.com/digital-marketing-advertising/">Digital Marketing/Search Engine Marketing</a></li>
                            <li><a href="https://www.agims.com/online-reputation-management/">Online Reputation Management</a></li>
                            <li><a href="https://www.agims.com/web-design-management/">Responsive Web Design</a></li>
                            <li><a href="https://www.agims.com/digital-marketing-advertising/">Display Advertising</a></li>
                        </ul>
                    </div>

                    <div class="flex-col"><span class="title">AWESOME WORK FOR</span>
                        <ul>
                            <li><a href="https://www.agims.com/marketing-dental/">Dental</a></li>
                            <li><a href="https://www.agims.com/marketing-law-firm/">Lawyers</a></li>
                            <li><a href="https://www.agims.com/marketing-healthcare/">Healthcare</a></li>
                            <li>Real Estate</li>
                            <li>Home Services</li>
                            <li>Small Business</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sub-footer">
            <div class="col-md-6 col-xs-12">
                <?php $sm = new SocialMedia(array('facebook', 'twitter', 'googleplus', 'linkedin', 'youtube'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
            <div class="col-md-6 col-xs-12 copyright"><p>Privacy Policy   |   Site Copyright &copy; 2018 <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/landing/logo-footer.png"
                            alt="AGI Marketing" /></p></div>
        </div>
    </div>
</footer>
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
</body>
</html>