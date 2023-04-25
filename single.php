<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'content', 'single' );

	endwhile;
endif;

wp_reset_postdata(); //  loop.


/**
 * Add function to count views
 * @author https://stackoverflow.com/questions/12934161/show-view-count-of-a-post-on-wordpress
 */
customSetPostViews(get_the_ID());


get_footer();
