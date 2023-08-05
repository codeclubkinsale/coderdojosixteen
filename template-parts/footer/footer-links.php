<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( has_nav_menu( 'footer-navigation-links' ) ) : ?>
    <div id="footer-menu-one" class="footer-menu">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'footer-navigation-links',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-navigation-links',
                'depth' => 1
            )
        ); ?>
    </div>
<?php endif; ?>