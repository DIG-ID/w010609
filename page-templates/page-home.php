<?php
/**
 * Template Name: Home Template
 */

get_header( 'home' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/hero' );
		get_template_part( 'template-parts/pages/home/teasers' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
