<?php
/*
* Template Name: Dashboard Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();

$args = array(
	'numberposts' => 3,
	'post_type '  => 'sushi-deck',
);
global $current_user, $wp_roles;?>
<section class="wrapper" style="height: 171px; width=100%; background-color: #73449b;">
		<?php $user_meta = get_user_meta($current_user->ID); ?>
        <h1>Hey <?php echo $current_user->first_name;?>, here's what's most important...</h1>
    </section>
<?php echo '<main id="main" class="wrapper blog-home">';?>
    <article id="article-single" class="spacer">
    <section id="sushi-decks">
	    <?php $latest_sushi_decks = get_posts(
		    array(
			    'post_type' => 'sushi-deck',
			    'order' => 'ASC',
			    'orderby' => 'menu_order',
			    'numberposts' => 3
		    )
	    );

	    if(!empty($latest_sushi_decks)) :

		    echo '<h2 class="section-heading">Before your next event, here are some projects you can try</h2>';
		    echo '<ul class="wp-block-latest-posts__list is-grid columns-3 wp-block-latest-posts">';

		    foreach ($latest_sushi_decks as $sushi_deck):
                    var_dump($sushi_deck);
				    setup_postdata( $sushi_deck ); ?>
                <li>
                    <div class="wp-block-latest-posts__featured-image aligncenter">
                        <a href="<?php the_permalink($sushi_deck->ID) ?>" aria-label="Post title">
                            <img width="1024" height="349" src="<?php the_post_thumbnail_url($sushi_deck->ID) ?>" class="attachment-large size-large wp-post-image" alt="" decoding="async" loading="lazy" style="" >
                        </a>
                    </div>
                    <a class="wp-block-latest-posts__post-title" href="<?php the_permalink($sushi_deck->ID) ?>"><?php echo $sushi_deck->post_title ?></a>
                </li>

		    <?php endforeach;
		    wp_reset_postdata();
		    echo '</ul>';
	    endif;
	    ?>
        <div class="is-layout-flex wp-block-buttons">
            <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/kata'); ?>" style="border-radius:4px;color:#73449b">View more projects</a></div>
        </div>
    </section>
    <section id="news">
        <?php $latest_posts = get_posts( array(
                    'numberposts' => 3,
                    'post_type '  => 'post',
                ) );

        if(!empty($latest_posts)) :

            echo '<h2 class="section-heading">News</h2>';
            echo '<ul class="wp-block-latest-posts__list is-grid columns-3 wp-block-latest-posts">';

                foreach ($latest_posts as $post):?>
                    <li>
                        <div class="wp-block-latest-posts__featured-image aligncenter">
                            <a href="<?php the_permalink() ?>" aria-label="Post title">
                                <img width="1024" height="349" src="http://localhost:8888/wp-content/uploads/2022/12/volunteer-5-1024x349.jpg" class="attachment-large size-large wp-post-image" alt="" decoding="async" loading="lazy" style="" srcset="http://localhost:8888/wp-content/uploads/2022/12/volunteer-5-1024x349.jpg 1024w, http://localhost:8888/wp-content/uploads/2022/12/volunteer-5-300x102.jpg 300w, http://localhost:8888/wp-content/uploads/2022/12/volunteer-5-768x262.jpg 768w, http://localhost:8888/wp-content/uploads/2022/12/volunteer-5.jpg 1383w" sizes="(max-width: 1024px) 100vw, 1024px">
                            </a>
                        </div>
                        <a class="wp-block-latest-posts__post-title" href="<?php the_permalink() ?>"><?php echo $post->post_title ?></a>
                    </li>

                <?php endforeach;

                echo '</ul>';
        endif;
        ?>
        <div class="is-layout-flex wp-block-buttons">
            <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/news'); ?>" style="border-radius:4px;color:#73449b">View more news</a></div>
        </div>
    </section>
    </article>
    <aside id="aside-sidebar" style="background-color: #f4f5f6;">
		<?php if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'archive-sidebar' ); ?>
		<?php endif; ?>
    </aside>
<?php echo'</main>';

get_footer();