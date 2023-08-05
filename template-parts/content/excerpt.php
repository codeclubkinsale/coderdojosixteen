<?php 
/**
 * Display the excerpt for blog posts.
 *
 * @link https://developer.wordpress.org/reference/functions/add_role/
 * @link https://developer.wordpress.org/reference/functions/remove_role/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */
?>
<div class="post">
    <?php if ( has_post_thumbnail() ) :?>
        <div class="post-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <a class="post-heading" href="<?php the_permalink() ?>">
                <img href="<?php the_permalink() ?>" class="blank-image" src="<?php bloginfo( 'template_directory') ?>/assets/images/transparent-hero.png"/>
            </a>
        </div>
    <?php endif;?>
    <div class="post-excerpt">
        <a class="post-title" href="<?php the_permalink() ?>"><?php the_title('<h3>','</h3>'); ?></a>
        <p><?php the_date( get_option( 'D/M/Y' ) ); ?> - <?php the_author(); ?></p>
        <?php the_excerpt(); ?>
    </div> 
</div>