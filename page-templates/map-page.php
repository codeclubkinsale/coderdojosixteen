<?php
/**
 * Template Name: Map Template
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage CoderDojo Classic
 * @since CoderDojo Classic 1.0
 */


get_header();

if (has_post_thumbnail()) :
  get_template_part('template-parts/header/hero');
endif;

echo '<main id="main" class="wrapper">';

/* Start the Loop */
while (have_posts()) :
  the_post();
  get_template_part('template-parts/content/page');
endwhile; // End of the loop.

get_template_part( 'template-parts/content/map');
echo '</main>';

get_footer();