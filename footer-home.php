<?php

ob_start();
?>

<section id="home-schedule">
	<div class="container">
		<div class="row">
			<div class="col-xxs-24">
				<h3 class="no-top-margin">Schedule a free internet presence audit</h3>
				<a href="/free-audit/" class="btn btn-tertiary btn-rectangle">Learn More</a>
			</div>
		</div>
	</div>
</section>

<?php
$extra_content = ob_get_clean();

require_once('footer-common.php');