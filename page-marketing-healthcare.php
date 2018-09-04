<?php get_header(); ?>

<style>



   input.wpcf7-form-control.wpcf7-submit.btn.btn-tertiary.btn-block{

    background: #F0BA19;

    padding: 0.7em;

    font-size: 18px;

    margin-top: 25px;

    color: #000;

    border-color: #d0a219;

	}

	

	input.wpcf7-form-control.wpcf7-submit.btn.btn-tertiary.btn-block:hover{

	background-color: #f1f1f1 !important;

    border-color: #c3c3c3;

    color: #F0BA19;

    transition: 300ms linear all;

	}

	h1 img{

		max-width: 60px;

		float: left;

		margin: 10px 15px 0 0;

	}

	@media screen and (max-width:1200px){

		.em-box img{bottom:151px !important;width:80px !important;}

		}

	

	@media screen and (max-width:999px){

		.em-box img{display:none;}

		}

	@media screen and (max-width:767px){

		h1 img{max-width:100px;display:block;text-align:center;float:none;    margin: 0 auto 25px;}

		h1{text-align:center;}

	}

</style>

<section id="main">

	<div class="container">

		<div class="row">

			<div class="col-md-15 col-sm-14">

				<h1 class="special">

					<img src="http://www.agims.com/wp-content/uploads/2016/11/healthcareicon.png" alt="Healthcare Icon">Boost Your Healthcare Website Presence

				</h1>

				<p class="em-box">

					Consult with you over the phone to discuss your marketing goals, ideal customer and current efforts.

				</p>

				<p class="em-box">

					Perform a full analysis of your business’ digital presence to identify the strengths &amp; weaknesses of your current digital marketing efforts.

				</p>

				<p class="em-box">

					Perform an analysis of your current Search Engine Optimization efforts and provide you with a plan to increase your search rankings.

				<img src="http://www.agims.com/wp-content/uploads/2016/11/agimsarrow.png" alt="" style="position: absolute;right: -28px;bottom: 0px;z-index: 500;">

                </p>

				<div class="text-center">

					<img src="<?=THEMEURL?>/img/seo-image-3x.png" alt="SEO" style="width: 300px;" />

				</div>

			</div>

			<div class="col-md-9 col-sm-10">

				<aside class="dark">

					<h2>Get Your <span>Free</span> Online Presence Audit</h2>

					<!-- CF7 Here -->

						<?=do_shortcode('[contact-form-7 id="1922" title="LP Healthcare"]')?>

					<!-- End CF7 Here -->

					<p class="text-center"><i class="fa fa-lock"></i> We NEVER share your email with anyone</p>

				</aside>

			</div>

		</div>

		<div class="row">

			<div class="col-xs-24">

				<h2 class="special">

					Our digital marketing specialists will work hard to come up with a strategy to help you increase your ROI &amp; Healthcare online presence.

				</h2>

			</div>

		</div>

		<div class="row">

			<div class="col-md-15 col-sm-14">

				<p style="line-height: 2;font-size: 16px;">At AGI Marketing, we believe any successful campaign has to have a strong market strategy behind it. We will work with you one on one to develop a strategy that works for you and ensures your success. We will research your market and demographics, industry, and competitors to give you realistic expectations and goals.</p>

			</div>

			<div class="col-md-9 col-sm-10">

				<p style="line-height: 2;font-size: 16px;">Our FREE digital marketing analysis will provide you with all of the information you need to make educated, informed business decisions.</p>

			</div>

		</div>

	</div>

</section>

	

<?php get_footer(); ?>