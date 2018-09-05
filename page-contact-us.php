<?php get_header(); ?>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-sm-12 text-center">
                    <?php the_content(); ?>
                </div>
                <div class="col-xs-24 col-sm-12 text-center">
                    <h1 class="special">Want more sales?<br /> We're here to help.</h1>
                    <h2
                            class="special">Contact us today and see how we can skyrocket your business.</h2>
                    <!-- Contact Form 7 Here --> <?= do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
                    <!-- END Contact Form 7 -->            </div>
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.446297448749!2d-106.2950130491036!3d31.73101698120871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7436466f74de9%3A0x89cd8fa03f0ca35!2sAGI+Marketing!5e0!3m2!1sen!2sus!4v1474055424868"
            width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php get_footer(); ?>