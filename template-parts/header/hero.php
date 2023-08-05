<figure id="site-hero" class="wrapper">
    <?php 
    if ( has_post_thumbnail() ) :?>
        <img class="hero-image" src="<?php bloginfo( 'template_directory') ?>/assets/images/transparent-hero.png" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');" />
    <?php endif;?>
    <div class="hero-footer">
        <div class="rectangle green">
        </div>
        <div class="rectangle purple">
        </div>
        <div class="rectangle blue">
        </div>
        <div class="rectangle orange">
        </div>
    </div>
    <?php if (get_post(get_post_thumbnail_id())->post_excerpt) : // search for if the image has caption added on it ?>
        <figcaption class="featured-image-caption">
            <?php echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); // displays the image caption ?>
        </figcaption>
    <?php endif; ?>
</figure>