<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-15 col-sm-12">
				<?php get_template_part('content', 'page'); ?>
				<?php get_template_part('content', 'jobs-index'); ?>
			</div>
			<div class="col-md-9 col-sm-12">
				<aside class="apply">
					<?=do_shortcode('[contact-form-7 id="1310" title="Test form"]')?>
				</aside>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>