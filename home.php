<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTHCOL?>">
				<?php get_template_part('content', 'home'); ?>
			        <div class="blog-navigation"><p><?php posts_nav_link(); ?></p></div>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>