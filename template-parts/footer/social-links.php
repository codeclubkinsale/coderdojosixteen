<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( has_nav_menu( 'footer-social-links' ) ) : ?>
    <div id="footer-social" class="social-icon">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'footer-social-links',
                'menu_class' => 'social-links',
                'menu_id' => 'footer-social-menu',
                'link_before' => '<p>',
                'link_after' => '</p>',
                'depth' => 1
            )
        ); ?>
    </div>
<?php endif; ?>


<!-- <div id="footer-social" class="social-icon">
    <div class="menu-footer-social-links-container">
        <ul id="footer-social-menu" class="social-menu">
            <li id="menu-item-241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-241">
                <div class="before">
                    <a href="https://twitter.com/coderdojo">
                        <div class="link-before">Twitter</div>
                    </a>
                </div>
            </li>
        </ul>
    </div>    
</div>


'before' => '<div class="before">',
                'after' => '</div>',
                'link_before' => '<div class="link-before">',
                'link_after' => '</div>', -->