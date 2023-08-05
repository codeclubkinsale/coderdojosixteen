<?php
/**
 * The header.
 *
 * This is the template that displays all the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Vintage
 * @since 1.0.0
 */

?>

  <!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header id="header" class="wrapper">
    <?php get_template_part( 'template-parts/site/site-logo' ); ?>
    <?php get_template_part( 'template-parts/header/profile' ); ?>
    <button id="mobile-menu-toggle" class="toggle-button" onclick="toggleMobileMenu()">&#9776;</button>
  </header>
<?php get_template_part( 'template-parts/header/desktop-navigation' ); ?>
<?php get_template_part( 'template-parts/header/mobile-navigation' ); ?>

