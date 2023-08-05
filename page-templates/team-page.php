<?php
/*
* Template Name: Volunteers Template
* Template Post Type: page
*
* @package WordPress
* @subpackage CoderDojo Classic
* @since CoderDojo Classic 1.0
*/

get_header();

if ( has_post_thumbnail()  ) :
	get_template_part('template-parts/header/hero.php');
endif;

echo '<main id="main" class="wrapper">';

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part('template-parts/content/page.php');
endwhile; // End of the loop.

get_template_part('template-parts/content/team.php');

echo'</main>';

get_footer(); 