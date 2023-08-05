<div class="full-post">
    <?php if ( has_post_thumbnail() ) :?>
        <div class="post-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <img href="<?php the_permalink() ?>" class="blank-image" src="<?php bloginfo( 'template_directory') ?>/assets/images/transparent-hero.png"/>
        </div>
    <?php endif;?>
    <div class="post-content">
        <?php the_title('<h1 class="post-heading">','</h1>'); ?>
            <p class="post-meta"><?php the_date( get_option( 'D/M/Y' ) ); ?> - <?php the_author(); ?></p>
        <?php the_content(); ?>
    </div> 
</div>