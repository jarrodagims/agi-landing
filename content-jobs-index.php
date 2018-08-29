<?php

$temp_query = clone $wp_query;

query_posts('post_type=job&order=asc&orderby=date');

if(have_posts()) {
	?>
	<h3>Available positions:</h3>
	<ol>
	<?php
	while(have_posts()) {
		the_post();
		the_title('<li>','</li>');
	}
	?>
	</ol>
	<?php
}

$wp_query = clone $temp_query;