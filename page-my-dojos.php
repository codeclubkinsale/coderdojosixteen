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

echo '<main id="main" class="wrapper" style="padding:32px;">'; ?>
    <div class="wrapper" style="background-color: #FFFFFF; display: flex; align-items: center; justify-content: space-between; padding: 0 16px;">
        <h1>My Dojos</h1>
    </div>
    <article id="article-single" class="spacer" style="box-shadow: 0 5px 10px rgba(0,0,0,0.2); ">
        <div class="background alignfull"></div>
        <div class="content" style="padding-left: 5%;">
            <img class="avatar" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-icon.png' ) ); ?>" alt="Avatar">
            <div>
                <h2><?php bloginfo( 'name' ); ?></h2>
            </div>
        </div>
        <div style="display: flex; padding: 0;">
            <div style="flex-basis: 50%;">
                <div id="users" style="padding: 5%;">
                    <header style="display: flex; align-items: center; justify-content: space-between;">
                        <h3>Users</h3>
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#73449b" href="<?php echo home_url('/dashboard/my-dojos/users'); ?>"><span class="dashicons dashicons-groups"></span>Manage Users</a></div>
                    </header>
                </div>
                <div id="resources" style="padding: 5%;">
                    <h3>Resources</h3>
                    <div class="wp-block-button is-style-outline aligncenter"><a class="wp-block-button__link wp-element-button" style="color:#73449b" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>">View Available Resources</a></div>
                </div>
            </div>
            <div style="flex-basis: 50%;">
                <div id="events" style="padding: 5%;">
                    <header style="display: flex; align-items: center; justify-content: space-between;">
                        <h3>Next Event</h3>
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="color:#73449b" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>"><span class="dashicons dashicons-calendar-alt"></span>Manage Events</a></div>
                    </header>
                    <p>Your dojo currently has no events planned.

                        Listing your events on the CoderDojo community platform will help potential mentors and ninjas book into and attend your dojos.</p>
                    <div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>">Create Event</a></div>
                </div>
            </div>
        </div>
        <div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons" style="padding-right: 5%; padding-bottom: 5%;">
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="background-color:#ac2925" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>">Leave Dojo</a></div>
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="color:#73449b" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>"><span class="dashicons dashicons-visibility"></span> View</a></div>
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="color:#73449b" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>"><span class="dashicons dashicons-edit"></span> Edit</a></div>
        </div>


    </article>

<?php echo'</main>';

get_footer();
