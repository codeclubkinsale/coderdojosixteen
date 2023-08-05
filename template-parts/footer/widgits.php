<?php
/**
 * Displays the footer widget area.
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */

if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
  <section id="text-2" class="widget widget_text">
    <div class="textwidget">
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </div>
  </section>
<?php endif; ?>