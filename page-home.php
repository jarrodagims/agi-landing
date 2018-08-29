<?php
	/*
		Template Name: Home	
	*/
get_header(home); ?>

<section id="home-top">
<div class="overlaylt"></div>
	<div id="iceburg-wrapper">
		<img src="<?=THEMEURL?>/img/iceberg.svg" id="iceburg" />
	</div>
	<div id="iceburg-title">
		<div class="container">
			<div id="home-header-top" class="row">
				<div class="col-lg-7 col-md-8 col-sm-8 text-center">
					<a href="/">
						<img src="<?=THEMEURL?>/img/agi-reversed-logo.png" alt="AGI Marketing" />
					</a>
				</div>
				<div id="home-careers" class="col-lg-5 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-4">
					<a href="/careers/" class="btn btn-block btn-lg btn-tertiary btn-rectangle" id="home-careers-btn">Careers</a>
				</div>

				<div id="home-schedule-button" class="col-lg-9 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12">
					<a href="/free-audit/" id="home-header-schedule" class="btn btn-block btn-lg btn-tertiary btn-rectangle">Schedule a free internet presence audit</a>
				</div>
			</div>
			<div class="row">
				<div id="iceberg-titles" class="col-xxs-24 text-center">
					<h5 class="iceberg-title-h5">In today's Google era, having a great website is only the...</h5>
					<h2 class="iceberg-title-h2">Tip of the Iceberg</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="iceburg-info">
		<div id="iceburg-services">
			<div class="container">
				<div class="row">
					<div class="col-xxs-24">
						<div class="flexbox-container" id="home-services-flexbox-container">
							<div class="flexbox-item">
								<div class="services-image-wrap">
									<img src="<?=THEMEURL?>/img/lightbulb-square.png" class="img-circle" alt="Search Engine Optimization" />
								</div>
								<div class="services-text">
									<h3>Search Engine Optimization</h3>
									<p>Google Keyword Rankings, Directories, &amp; Maps</p>
								</div>
							</div>
							<div class="flexbox-item">
								<div class="services-image-wrap">
									<img src="<?=THEMEURL?>/img/web-metrics-square.png" class="img-circle" alt="Online Reputation Management" />
								</div>
								<div class="services-text">
									<h3>Online Reputation Management</h3>
									<p>Internet Presence &amp; Image</p>
								</div>
							</div>
							<div class="flexbox-item">
								<div class="services-image-wrap">
									<img src="<?=THEMEURL?>/img/target-square.png" class="img-circle" alt="Digital Marketing" />
								</div>
								<div class="services-text">
									<h3>Digital Marketing</h3>
									<p>YouTube, Google Search Ads, Digital Ad Network</p>
								</div>
							</div>
							<div class="flexbox-item">
								<div class="services-image-wrap">
									<img src="<?=THEMEURL?>/img/money-in-hands-square.png" class="img-circle" alt="Social Media Marketing" />
								</div>
								<div class="services-text">
									<h3>Social Media Marketing</h3>
									<p>Your Message Across All Social Media Platforms</p>
								</div>
							</div>
							<div class="flexbox-item">
								<div class="services-image-wrap">
									<img src="<?=THEMEURL?>/img/magnifying-glass-square.png" class="img-circle" alt="Website Management" />
								</div>
								<div class="services-text">
									<h3>Website Management</h3>
									<p>Domain Registration &amp; Hosting</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="iceburg-question">
			<div class="container">
				<div class="row">
					<div class="col-xxs-24 text-center">
						<h3>Your Customers Have Gone Digital.</h3>
						<h3>Have You?</h3>
					</div>
				</div>
			</div>
		</div>
		<div id="iceburg-companies">
			<div class="container">
				<div class="row">
					<div class="col-lg-20 col-lg-offset-2">
						<div class="flexbox-container companies-flexbox-container">
							<?php
								$companies = array(
									'Google'
										=> 'Google_2015_logo.svg.png',
									'YouTube'
										=> 'YouTube_watermark_white.png',
									'Bing'
										=> 'better-bing-logo_4015.png',
									'Yahoo'
										=> 'Yahoo_Logo.png',
									'Facebook'
										=> 'facebook-logo.png',
									'Yellow Pages'
										=> 'yellow_pages.png',
									'Yelp'
										=> 'yelp_logo.png',
									'Manta'
										=> 'MantaLogo.png',
									'Superpages'
										=> 'superpages-logo.png',
									'Twitter'
										=> 'Twitter_Logo.png',
									'Pinterest'
										=> 'Pinterest_logo.png',
								);
								
								foreach($companies as $c_name => $img_url)
								{
									?>
							
							<div class="img-wrap">
								<img src="<?=THEMEURL?>/img/<?=$img_url?>" alt="<?=$c_name?>" />
							</div>
							
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="home-street-smarts">
	<div class="container">
		<div class="row">
			<div class="col-xs-24 home-smarts-title text-center">
				<h2 class="section-title">
					Work with the best
				</h2>
				<h4 class="subtitle">
					Google Partners are online marketing companies, trusted by Google.
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-4 col-sm-12 home-smarts">
				<h3 class="no-top-margin">Street Smarts</h3>
				<p>Not only did AGI earn its Google Partner Status before any other firm in El Paso, we are also the highest volume agency in the region.</p>
				<p><a href="https://www.google.com/partners/#a_profile;idtf=1345221349;qury=AGI%20Marketing" class="external">Learn more about Google Partners</a></p>
			</div>
			<div class="col-md-7 col-sm-12 partner-badge">
				<!--<a href="https://www.google.com/partners/#a_profile;idtf=1345221349;qury=AGI%20Marketing" class="external"><img src="<?=THEMEURL?>/img/PartnerBadge.png" /></a>-->
				<script src="https://apis.google.com/js/platform.js"></script>
                <div class="g-partnersbadge" data-agency-id="1345221349"></div>
			</div>
		</div>
	</div>
</section>


<section id="home-we-do">
	<video autoplay loop poster="<?=THEMEURL?>/img/google-search13.jpg">
		<source src="http://cdn.agims.com/wp-content/themes/agi2016/video/google-search-1920x960-24fps.mp4" type="video/mp4"  />
	</video>
	<div class="container">
		<div class="row">
			<div class="col-sm-13">
				<h2>Let Us Handle Your Online Presence</h2>
			</div>
			<div class="col-sm-11 white-transparent-bg">
				<ul class="list-unstyled">
					<?php
						# Set up as name => url
						$wedo = array(
							"Search Engine Optimization" => "#",
							"Pay Per Click Advertising" => "#",
							"Display Advertising" => "#",
							"Social Media Marketing" => "#",
							"Reputation Management" => "#",
							"YouTube Marketing" => "#",
						);
						
						foreach($wedo as $linktitle => $url)
						{
							?>
					<li><?=$linktitle?></li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>


<section id="home-cta">
	<div class="container">
		<div class="row">
			<div class="col-xxs-24">
				<h3 class="no-top-margin">Schedule a free internet presence audit</h3>
				<a href="/free-audit/" class="btn btn-tertiary btn-rectangle">Learn More</a>
			</div>
		</div>
	</div>
</section>


<section id="home-reputation">
	<div class="container">
		<div class="row">
			<div class="col-xs-24 text-center">
				<h2 class="section-title">Reputation Management is Important</h2>
				<h2>Here's Why</h2>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xxs-24">
				<div class="flexbox-container">

					<div id="reputation-box-1" class="reputation-box">
						<div class="reputation-number">
							<div class="img-circle">
								<span class="grow" data-grow="86">86</span>%
							</div>
						</div>
						<div class="reputation-reason">
							Customers read online reviews before making purchasing decisions
						</div>
					</div>
					
					<div id="reputation-box-2" class="reputation-box">
						<div class="reputation-number">
							<div class="img-circle">
								<span class="grow" data-grow="90">90</span>%
							</div>
						</div>
						<div class="reputation-reason">
							Will not purchase from a company with multiple bad reviews
						</div>
					</div>
					
					<div id="reputation-box-3" class="reputation-box">
						<div class="reputation-number">
							<div class="img-circle">
								<span class="grow" data-grow="93">93</span>%
							</div>
						</div>
						<div class="reputation-reason">
							Will start their online experience with a search engine (73% Google)
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.446297448749!2d-106.2950130491036!3d31.73101698120871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7436466f74de9%3A0x89cd8fa03f0ca35!2sAGI+Marketing!5e0!3m2!1sen!2sus!4v1474055424868" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

<section id="home-book-smarts">
	<div class="container">
		<div class="row">
			<div class="col-xs-24 home-smarts-title text-center">
				<h2 class="section-title">
					Certified Google Partner
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-4 col-sm-12 home-smarts">
				<h3 class="no-top-margin">Book Smarts</h3>
				<p>Partners stay up to date on the latest Google tools and products by passing Google-administered certification exams every 12 months.</p>
				<p><a href="https://www.google.com/partners/#a_profile;idtf=1345221349;qury=AGI%20Marketing" class="external">Learn more about Google Partners</a></p>
			</div>
			<div class="col-md-7 col-sm-12 partner-badge">
				<!--<a href="https://www.google.com/partners/#a_profile;idtf=1345221349;qury=AGI%20Marketing" class="external"><img src="<?=THEMEURL?>/img/PartnerBadge.png" /></a>-->
                <div class="g-partnersbadge" data-agency-id="1345221349"></div>
			</div>
		</div>
	</div>
</section>


<section id="home-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-xs-24 text-center">
				<h2 class="section-title">
					Testimonials
				</h2>
			</div>
			<div class="col-xs-24">
				<ul class="testimonials-slider">
					<? # This is where we will do a loop with testimonials ?>
					<?php
						
						$temp_query = clone $wp_query;
						
						query_posts('post_type=testimonial&posts_per_page=5');
						
						if(have_posts()) {
							while(have_posts()) {
								the_post();
								
								$image_info = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'testimonial');
								$image = $image_info[0];
								
								if(empty($image))
									$image = THEMEURL . '/img/no-profile-pic.png';
								
								$writer = types_render_field('testimonial-writer',array());
								$writer_title = types_render_field('testimonial-writer-title',array());
								$writer_company = types_render_field('testimonial-writer-company',array());
								$writer_company_info = types_render_field('testimonial-writer-company-info',array());
								$writer_company_url = types_render_field('testimonial-writer-company-url',array());
								
								?>
								
					<li>
						<div class="testimonial">
							<div class="row testimonial-row">
								<div class="col-sm-6 testimonial-pic text-center">
									<img src="<?=$image?>" class="testimonial-profile-img img-circle" alt="<?=$writer_company?>" title="<?=$writer_company?>" />
								</div>
								<div class="col-sm-18 testimonial-text-wrapper">
									<div class="testimonial-text">
										<p class="testimonial-excerpt">
											<?=get_the_excerpt()?>
										</p>
										<p class="testimonial-writer">
											<?=$writer?><br />
											<?=(!empty($writer_title) ? $writer_title . '<br />' : '')?>
											<?=$writer_company?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
								
								<?php
							}
						}
						
						$wp_query = clone $temp_query;
						
							
					?>
				</ul>
			</div>
		</div>
	</div>
</section>


<section id="home-case-studies">
	<div class="container">
		<div class="row">
			<div class="col-xs-24 text-center">
				<h2 class="section-title">
					Case Studies
				</h2>
			</div>
			<div class="col-xs-24">
				<ul id="case-study-slider">
					<?php
					
					$temp_query = clone $wp_query;
					
					query_posts('post_type=case-study');
					
					if(have_posts()) {
						while(have_posts()) {
							the_post();
							
							?>
					<li class="text-center">
						<div class="case-study">
							<h3><?php the_title(); ?></h3>
							<?php
								$image_info = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full');
							
								$image = $image_info[0];
							?>
							
							<img src="<?=$image?>" alt="<?=get_the_content()?>" title="<?=get_the_content()?>" />
							<div class="case-study-description">
								<ul class="list-inline">
									<?php
									$terms = wp_get_post_terms(get_the_id(), 'service-used');
									
									foreach($terms as $term) {
										?>
											<li><?=$term->name?></li>
										<?php
									}
									
									?>
								</ul>
							</div>
						</div>
					</li>
							<?php
						}
					}
					
					$wp_query = clone $temp_query;
						
					?>

				</ul>
			</div>
		</div>
	 </div>
</section>

<?php

get_footer(home);