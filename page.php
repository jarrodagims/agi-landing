<?php

/*
	Template Name: Internal Page
*/

get_header(); 

if(have_posts()) {
	while(have_posts()) {
		the_post();
		
		$permalink = get_permalink();
		
		if(current_user_can('edit_pages')) {
			$edit_url = get_edit_post_link();
			$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">Edit Page</a></small>";
		} else {
			$edit_link = "";
		}

        $image_info = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'page-top');
		$image = $image_info[0];
		
		if(empty($image))
		    $image = 'http://placehold.it/1920x400/FFFFFF/efba1d?text=AGI';

        ob_start();
            the_title("<h1>", "$edit_link </h1>");
        $title = ob_get_clean();
		
		ob_start();
    		echo "<article>";
    		the_content();
    		echo "</article>";
        $content = ob_get_clean();
	}
	
}


?>

<style>
    #page-top {
        background: url('<?=$image?>') center center no-repeat;
        background-size: cover;
        margin-top: -50px;
    }
    h1 {
        background-color: rgba(239, 186, 29, 1);
        color: #000;
        font-weight: 700;
        margin: 211px 0 15px;
        padding: 15px 20px;
        text-transform: uppercase;
    }
    #page-breadcrumb {
        background-color: #EEE;
        border-bottom: 1px solid #BBB;
        border-top: 1px solid #BBB;
        padding: 10px 0;
    }
    p#breadcrumbs {
        margin-bottom: 0;
    }
    p#breadcrumbs a {
        color: #333;
    }
</style>


<!-- !Page Top -->
<section id="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?=$title?>
            </div>
        </div>
    </div>
</section>


<!-- !Page Breadcrumb -->
<section id="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('
                <p id="breadcrumbs">','</p>
                ');
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- !Main -->
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTHCOL?>">
                <?=$content?>
			</div>
		</div>
	</div>
</section>

	
<?php get_footer(); ?>