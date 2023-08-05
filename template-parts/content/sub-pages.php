<?php
/**
 * Template part for displaying sub-pages in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$sub_pages = get_pages(
    array(
      'parent' => $post->ID,
      'sort_column' => 'menu_order'
    )
);
echo 'hello';
if(count($sub_pages) != 0) :
    echo '<aside id="aside">';
    $i = 1;
    foreach($sub_pages as $post) : setup_postdata($post); ?>
        <div class="sub-page-item">
            <div class="sub-page-image sub-page-image-<?php echo $i ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                <a href="<?php the_permalink() ?>"><?php echo str_replace("-"," ",$post->post_name);?></a>
            </div>
        <div class="sub-page-content">
            <?php the_excerpt(); ?>
            <a class="navigation-link" href="<?php the_permalink() ?>"><?php the_title(); ?> >></a>
        </div> 
    </div> <?php
    $i++;
    if ($i == 5){
        $i = 1;
    }
    endforeach; wp_reset_postdata();
    echo '</aside>';
endif;
