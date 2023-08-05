<?php
/*
* Template Name: Profile Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();



echo '<main id="main" class="wrapper">';?>
    <h1>Events for Dojo</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Capacity</th>
        <th>Applicants</th>
        <th>Attending</th>
        <th>Status</th>
        <th></th>
        <th></th>
      </tr>
<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();?>
        <tr>
            <td><a class="post-heading" href="<?php the_permalink() ?>"><?php the_title(); ?></a></td>
            <td>December 15th 2022</td>
            <td>38</td>
            <td>10</td>
            <td>10</td>
            <td><?php echo get_post_status() ?></td>
            <?php edit_post_link( __( 'Edit', 'textdomain' ), '<td>', '</td>', null, 'btn btn-primary btn-edit-post-link' );?>
            <td><a class="post-heading" href="<?php the_permalink() ?>">Manage</a></td>
        </tr>
	<?php endwhile;
else:
	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
echo '<table/>';
the_posts_pagination( array( 'mid_size' => 2 ) );?>
    <div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons">
        <div class="wp-block-button">
            <a class="wp-block-button__link wp-element-button" style="background-color:#f0ad4e" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>">Notify all members</a>
        </div>
        <div class="wp-block-button">
            <a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/dashboard/children'); ?>">Create Event</a>
        </div>
    </div>
        <?php
echo'</main>';

get_footer();