<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTHCOL?>">
				<?php get_template_part('content', 'single'); ?>
<!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="line-height: 32px;border-top: 2px solid rgba(230, 230, 230, 0.47);padding: 25px 0 15px;">
		    <h2 style="display: inline;float: left;margin-right: 10px;font-weight: 800;margin-top: 2px;text-shadow: none;">Share this blog here:</h4>                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
               <!-- AddToAny END -->
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>