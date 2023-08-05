<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Vintage
 * @since CoderDojo Vintage 1.0
 */
get_header(); ?>

<?php if ( is_home() ): ?>
  <h1 id="blog-title" class="wrapper"><?php single_post_title() ?></h1>
  <main id="main" class="wrapper blog-home">
<?php elseif ( is_category() ):
  echo '<h1 id="blog-title" class="wrapper">Category</h1>';
  echo '<main id="main" class="wrapper">';
elseif ( is_search() ):
  echo '<h1 id="blog-title" class="wrapper">';
  printf(
  /* translators: %s: search term. */
    esc_html__( 'Results for "%s"', 'twentytwentyone' ),
    '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
  );
  echo '</h1>';
  echo '<main id="main" class="wrapper">';
else:
  echo '<main id="main" class="wrapper">';
endif; ?>

  <article id="article-single" class="spacer">

    <?php if ( have_posts() ) {

      // Load posts loop.
      while ( have_posts() ) {
        the_post();
        if ( is_single() ) :
          get_template_part( 'template-parts/content/single' );
        else:
          get_template_part( 'template-parts/content/excerpt' );
        endif;
      }

    } else {

      // If no content, include the "No posts found" template.
      get_template_part( 'template-parts/content/content-none' );

    } ?>
    <?php $posts_pagination = get_the_posts_pagination(
      array(
        'mid_size'  => 1,
        'prev_text' => "previous",
        'next_text' => "next",
      )
    );
    echo $posts_pagination; ?>
  </article>
<?php if ( is_home() ): ?>
  <aside id="aside-sidebar">
    <?php if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
      <?php dynamic_sidebar( 'archive-sidebar' ); ?>
    <?php endif; ?>
  </aside>
<?php endif; ?>
  </main>

<?php get_footer();