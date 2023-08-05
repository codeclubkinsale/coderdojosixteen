<?php
/*
* Template Name: Profile Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/
$tickets = get_posts(
	array(
		'post_parent' => $post->ID,
		'post_type' => 'ticket',
		'order' => 'ASC',
		'orderby' => 'menu_order',
		'numberposts' => -1
	)
);
get_header();?>



<main id="main" class="wrapper">
    <div class="blog-home">
        <p>Total event capacity: </p>
        <p>Total attending: </p>
        <p>Total awaiting approval: </p>
        <div class="wp-block-button"><?php edit_post_link( __( 'Edit Event', 'textdomain' ), '<a>', '</a>', null, 'wp-block-button__link wp-element-button' );?></div>
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/dashboard'); ?>"><span class="dashicons dashicons-arrow-down"></span>Export to CSV</a></div>
    </div>
    <div class="dropdown wrapper">
        <p>Dojo</p>
        <div class="event-content">
            <div class="blog-home">
                <p>Total event capacity: </p>
                <p>Total attending: </p>
                <p>Total awaiting approval: </p>
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/dashboard/children'); ?>">New Applicant</a></div>
            </div>
            <table class="wrapper">
                <tr>
                    <th>Attendee Name</th>
                    <th>Ticket Name</th>
                    <th>Ticket Type</th>
                    <th>Application Date</th>
                    <th>Age</th>
                    <th>Parents/guardians</th>
                    <th>Notes</th>
                    <th>Approve</th>
                    <th>Check In</th>
                    <th>Delete</th>
                </tr>
		        <?php foreach ($tickets as $ticket) :
			        setup_postdata( $ticket );?>
                    <tr>
                        <td><a href="<?php the_permalink(); ?>"><?php the_author_meta( 'display_name', $ticket->post_author ) ?></a></td>
                        <td><?php echo $ticket->post_title?></td>
                        <td>Mentor</td>
                        <td><?php echo $ticket->post_date?></td>
                        <td>34</td>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox" id="approve" name="approve" value="approved" /></td>
                        <td><input type="checkbox" id="check-in" name="check-in" value="checked-in" /></td>
                        <td><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="background-color:#ac2925" href="<?php echo home_url('/dashboard/children'); ?>">Delete</a></div></td>
                    </tr>
		        <?php endforeach;
		        wp_reset_postdata();?>
            </table>
            <div class="is-layout-flex wp-block-buttons">
                <?php global $wp_query;
                echo paginate_links(array(
		'current'=>max(1,get_query_var('paged')),
		'total'=>$wp_query->max_num_pages,
		'type'=>'list', //default it will return anchor
	));?>


            </div>
            <div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons">
                <div class="wp-block-button">
                    <a class="wp-block-button__link wp-element-button" style="background-color:#ac2925" href="<?php echo home_url('/dashboard/children'); ?>">Cancel Event</a>
                </div>
            </div>
        </div>
    </div>


</main>

<?php get_footer();
