<?php

/**
 * Register and Enqueue Styles.
 */
function coderdojo_register_styles() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style( 'coderdojo-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'wordpress-style', get_template_directory_uri() . '/assets/css/style-editor.css', array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'coderdojo_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function coderdojo_register_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_script( 'coderdojo-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
  wp_script_add_data( 'coderdojo-js', 'async', true );
}

add_action( 'wp_enqueue_scripts', 'coderdojo_register_scripts' );

/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support( 'post-thumbnails' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

add_theme_support( 'title-tag' );

add_theme_support( 'editor-styles' );
$editor_stylesheet_path = './assets/css/editor-style.css';
add_editor_style( $editor_stylesheet_path );

/**
 * POST SUPPORT
 * Set up for page excerpts
 */
function coderdojo_post_support() {

  // Add default posts and comments RSS feed links to head.
  add_post_type_support( 'page', 'excerpt' );

}

add_action( 'after_setup_theme', 'coderdojo_post_support' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function coderdojo_menus() {

  register_nav_menus(
    array(
      'desktop-navigation-menu' => __( 'Desktop Navigation Menu' ),
      'mobile-navigation-menu'  => __( 'Mobile Navigation Menu' ),
      'footer-navigation-links' => __( 'Footer Navigation Links' ),
      'footer-social-links' => __( 'Footer Social Links' )
    )
  );
}

add_action( 'init', 'coderdojo_menus' );

/**
 * Register widget area.
 *
 * @since 1.0.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function coderdojo_widgets_init() {

  register_sidebar(
      array(
          'name'          => esc_html__( 'Blog Archive Sidebar', 'coderdojo' ),
          'id'            => 'archive-sidebar',
          'description'   => esc_html__( 'Add the search and categories widgets here to appear in your blog archive.', 'coderdojo' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget'  => '</section>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
      )
  );

  register_sidebar(
      array(
          'name'          => esc_html__( 'Footer Address', 'coderdojo' ),
          'id'            => 'footer-sidebar',
          'description'   => esc_html__( 'Add the text widgit here to show your address in the footer', 'coderdojo' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget'  => '</section>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
      )
  );
}
add_action( 'widgets_init', 'coderdojo_widgets_init' );