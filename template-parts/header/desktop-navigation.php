<?php if ( has_nav_menu( 'desktop-navigation-menu' ) ) {
    wp_nav_menu (
        array(
            'theme_location' => 'desktop-navigation-menu',
            'menu_class' => 'navigation-menu',
            'menu_id' => 'desktop-menu',
            'container' => 'nav',
            'container_id' => 'desktop-navigation',
            'container_class' => 'wrapper',
            'link_after' => '<span class="menu-icon dashicons dashicons-arrow-down"></span>',
            'depth' => 2
            )
        );
} ?>
