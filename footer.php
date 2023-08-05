<?php
/**
 * The footer.
 *
 * This is the template that displays all the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Vintage
 * @since 1.0.0
 */
wp_footer(); ?>

<footer id="site-footer" class="wrapper">
  <?php get_template_part( 'template-parts/site/site-logo' ); ?>
  <?php get_template_part( 'template-parts/footer/widgits' ); ?>
  <div id="footer-menus">
    <?php get_template_part( 'template-parts/footer/footer-links' ); ?>
    <?php get_template_part( 'template-parts/footer/social-links' ); ?>
  </div>
</footer>
</body>
</html>