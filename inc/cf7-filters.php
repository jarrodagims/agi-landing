<?php

function cf7_get_jobs_dropdown($choices, $args=array()) {
	
	global $wpdb;
	
	$results = $wpdb->get_results("SELECT post_title from `wp_posts` WHERE post_type = 'job' AND post_status = 'publish'", ARRAY_A);
	
	foreach($results as $result) {
		$choice = $result['post_title'];
		$choices[$choice] = $choice;
	}
	
	return $choices;
}

add_filter('wpcf7_get_jobs_dropdown', 'cf7_get_jobs_dropdown', 10, 2);