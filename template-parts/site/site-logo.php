<?php if (has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
<?php elseif (has_site_icon()) : ?>
    <a class="site-logo" href="<?php echo home_url(); ?>">
        <img class="site-icon" src="<?php site_icon_url() ?>" alt="Site Icon" />
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
    </a>
<?php else : ?>
    <a class="site-logo" href="<?php echo home_url(); ?>">
        <img class="site-icon" src="<?php bloginfo( 'template_directory') ?>/assets/images/site-icon.png" alt="Site Icon" />
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
    </a>
<?php endif; ?> 