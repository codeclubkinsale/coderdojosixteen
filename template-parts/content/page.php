<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="article" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
        <?php the_title('<h1 class="page-heading">', '</h1>'); ?>
	<?php endif; ?>

	<?php the_content();?>

</article>