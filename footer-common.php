<style>
    #footer img {
        max-width: 100%;
    }
    #footer-sm {
        margin-bottom: 20px;
    }
    .embed-responsive-25by12 {
        padding-bottom: 48%;
    }
    @media (min-width: 1200px) {
        #footer-sm {
            margin-top -50px;
        }
        .embed-responsive-25by12 {
            padding-bottom: 38%;
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        #footer-sm {
            margin-top: -95px;
        }
    }
    @media (max-width: 767px) {
        #footer-logos img {
            margin-bottom: 15px;
            width: 145px;
        }
    }
</style>
<section id="footer">
    <?=$extra_content?>
    <section id="footer-menus">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-xs-center text-md-left text-sm-center">
                    <img src="/wp-content/themes/agi2016/img/agi-logo-reversed-3x.png" alt="agi marketing" style="max-width:300px;width:100%;">
                    <div class="row">
                        <div class="col-sm-24">
                            <div class="footer-contact-info">
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-phone"></i> 915-209-5381</li>
                                    <li> <i class="fa-li fa fa-map-marker"></i> 1370 Pullman Dr,<br class="visible-md"> Ste. G<br> El Paso, TX 79936</li>
                                    <li><i class="fa-li fa fa-envelope"></i> <a href="/contact-us/">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-xs-center text-md-left text-sm-center">
                    <div class="col-sm-24" id="footer-logos">
                        <div class="row">
                            <h3>Partners</h3>
                            <div class="pimg">
                                <img src="https://www.agims.com/wp-content/themes/agi2016/img/google-partner.png?x91680" alt="Google Partner">
                            </div>
                            <div class="pimg">
                                <a href="http://www.serchmarketing.com" class="external" onclick="javascript:void(0);" target="_blank"><img src="https://www.agims.com/wp-content/themes/agi2016/img/serch-marketing.png?x91680" alt="Serch Marketing"></a>
                            </div>
                            <div class="pimg">
                                <a href="https://upcity.com/local-marketing-agencies/profiles/agi-marketing" class="external" target="_blank"><img src="https://www.agims.com/wp-content/uploads/2017/09/upcity.png" alt="Top 15 Web Developers in El Paso"></a>
                            </div>
                            <div class="pimg">
                                <img align="center" alt="" src="https://ci5.googleusercontent.com/proxy/n5ktsduVvaQ6z75QCdaf-CUV10hwmuubDEoAtLyJ_KQZyCJqVqvFjpdbrii_w1O_bBpjFBAbn2dIdHOXF8XxClBwHYyPsI5qSGRZb7MB7KgfbDVcnmQXKMFbD9_PQEI__BiieZSNLYhezsCK0zkUfe_lU3el9IGqChxELk0=s0-d-e1-ft#https://gallery.mailchimp.com/05f3e2499106aa8fa9f9026de/images/d3a71d8e-e84d-477d-a5ae-46ef7dfaf449.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 text-xs-center text-md-left text-sm-center">
                    <h3>What We Do</h3>
                    <ul id="footer-links">
                        <li><a href="/seo/">SEO</a></li>
                        <li><a href="/ppc/">PPC Advertising</a></li>
                        <li><a href="/digital-marketing-advertising/">Display Advertising</a></li>
                        <li><a href="/social-media-marketing/">Social Media Marketing</a></li>
                        <li><a href="/online-reputation-management/">Reputation Management</a></li>
                        <li><a href="/youtube-advertising/">YouTube Marketing</a></li>
                        <li><a href="/web-design-management/">Web Design</a></li>
                        <li><a href="/web-design-management/">Website Development</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-xs-center text-md-left text-sm-center">
                    <h3>Follow Us</h3>
                    <ul class="list-inline">
                        <li><a href="<?=FACEBOOK?>"><img src="<?=THEMEURL?>/img/facebook-circle.png" alt="Facebook" /></a></li>
                        <li><a href="<?=TWITTER?>"><img src="<?=THEMEURL?>/img/twitter-circle.png" alt="Twitter" /></a></li>
                        <li><a href="<?=GOOGLEPLUS?>"><img src="<?=THEMEURL?>/img/google-plus-circle.png" alt="Google Plus" /></a></li>
                    </ul>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfkOZWPCx7DoB0FgYwWGUrstcKGgWoeBYX66TiM0UfbiyF0XA/viewform" target="_blank" class="btn btn-tertiary btn-rectangle" style="margin-left: 20px;">SP Requests</a>
                </div>
            </div>
        </div>
    </section>
</section>
<div class="col-xs-24" id="copyright">
    <a href="http://s.agims.com/privacy-policy.php" class="external">Privacy Policy</a> | Site Copyright &copy; <?=date('Y')?> <a href="https://www.agims.com/"><img style="max-width:35px;" src="https://www.agims.com/wp-content/uploads/2018/05/agi-cool.png" alt=""></a>
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
<?php
if(is_page('contact-us')){
    echo '<script type="text/javascript">llfrmid=30891</script> 
<script type="text/javascript" src="https://formalyzer.com/formalyze_init.js"></script> 
<script type="text/javascript" src="https://formalyzer.com/formalyze_call_secure.js"></script> ';
}
?>
<?php
if(is_page('free-audit')){
    echo '<script type="text/javascript">llfrmid=30891</script> 
<script type="text/javascript" src="https://formalyzer.com/formalyze_init.js"></script> 
<script type="text/javascript" src="https://formalyzer.com/formalyze_call_secure.js"></script> ';
}
?>
<script>
    if (screen.width <= 640) {
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".sone").hover(function(){
                //On Hover - Works on ios
                $(".sione").hide();
                $(".shone").hide();
                $(".spone").hide();
                $(".ssone").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sione").show();
                $(".shone").show();
                $(".spone").show();
                $(".ssone").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".stwo").hover(function(){
                //On Hover - Works on ios
                $(".sitwo").hide();
                $(".shtwo").hide();
                $(".sptwo").hide();
                $(".sstwo").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sitwo").show();
                $(".shtwo").show();
                $(".sptwo").show();
                $(".sstwo").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".sthree").hover(function(){
                //On Hover - Works on ios
                $(".sithree").hide();
                $(".shthree").hide();
                $(".spthree").hide();
                $(".ssthree").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sithree").show();
                $(".shthree").show();
                $(".spthree").show();
                $(".ssthree").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".sfour").hover(function(){
                //On Hover - Works on ios
                $(".sifour").hide();
                $(".shfour").hide();
                $(".spfour").hide();
                $(".ssfour").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sifour").show();
                $(".shfour").show();
                $(".spfour").show();
                $(".ssfour").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".sfive").hover(function(){
                //On Hover - Works on ios
                $(".sifive").hide();
                $(".shfive").hide();
                $(".spfive").hide();
                $(".ssfive").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sifive").show();
                $(".shfive").show();
                $(".spfive").show();
                $(".ssfive").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".ssix").hover(function(){
                //On Hover - Works on ios
                $(".sisix").hide();
                $(".shsix").hide();
                $(".spsix").hide();
                $(".sssix").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sisix").show();
                $(".shsix").show();
                $(".spsix").show();
                $(".sssix").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".sseven").hover(function(){
                //On Hover - Works on ios
                $(".siseven").hide();
                $(".shseven").hide();
                $(".spseven").hide();
                $(".ssseven").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".siseven").show();
                $(".shseven").show();
                $(".spseven").show();
                $(".ssseven").hide();
            })
        });
        $(document).ready(function(){
            // Sorry about bad spacing. Also...this is jquery if you didn't notice allready.
            $(".seight").hover(function(){
                //On Hover - Works on ios
                $(".sieight").hide();
                $(".sheight").hide();
                $(".speight").hide();
                $(".sseight").show();
            }, function(){
                //Hover Off - Hover off doesn't seem to work on iOS
                $(".sieight").show();
                $(".sheight").show();
                $(".speight").show();
                $(".sseight").hide();
            })
        });
    }
</script>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="/wp-content/themes/agi2016/css/magnific-popup.css">
<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<!-- Magnific Popup core JS file -->
<script src="/wp-content/themes/agi2016/js/jquery.magnific-popup.min.js"></script>
<script>
    $('.open-one').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-two').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-three').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-four').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-five').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-six').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-seven').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-eight').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-nine').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-ten').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-eleven').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
</script>
<script>
    $('#servicesbtn').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
</script>
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#everyone-is-searching').typeIt({
            strings: ["People are searching...", "Can they find your business?"],
            speed: 200,
            breakLines: false,
            autoStart: false,
            loop: true
        });
    });
</script>

<script>
var LC_API = LC_API || {};
    LC_API.on_chat_started = function()
    {
        // track this chat in Google AdWords
        var google_conversion_id, google_conversion_label, img;
        google_conversion_id    = '960835212';
        google_conversion_label = '7FuvCNb3qIgBEIzdlMoD';
        img = new Image(1, 1);
        img.src = 'https://www.googleadservices.com/pagead/conversion/'+google_conversion_id+'/?label='+google_conversion_label+'&script=0';
    };
</script>

</body>
</html>