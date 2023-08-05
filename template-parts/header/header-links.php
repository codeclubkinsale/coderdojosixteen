<?php if ( has_nav_menu( 'header-navigation-links' ) ) {
    wp_nav_menu (
        array(
            'theme_location' => 'header-navigation-links',
            'menu_class' => 'primary-menu',
            'menu_id' => 'primary-menu',
            'container' => 'nav',
            'container_id' => 'header-navigation',
            'container_class' => 'navigation-menu',
            'depth' => 1
            )
        );
} ?>