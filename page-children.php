<?php
/*
* Template Name: Dashboard Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();?>
    <div class="wrapper" style="background-color: #FFFFFF; display: flex; align-items: center; justify-content: space-between; padding: 0 16px; border-bottom: 1px solid #99999F;">
        <h2>My Children</h2>
        <p>Please complete all of the required* fields</p>
    </div>
<?php
echo '<main id="main" class="wrapper blog-home" style="min-height: 50vh;">'; ?>

    <aside id="aside-sidebar" style="border-right: 1px solid #99999F; padding: 0;">
        <ul style="list-style: none; padding-inline-start: 0; margin: 0">
            <li>
                <a href="<?php echo home_url('/dashboard/children/add'); ?>" style="display: flex;  gap: 16px; align-items: center; padding: 16px;">
                    <img class="avatar" style="height: 90px; width: 90px; border-radius: 50%;" src="<?php echo get_avatar_url( 300, array( 'size' => 90 ) );?>" alt="Avatar">
                    <p>Add Child</p>
                </a>

            </li>
        </ul>
    </aside>
<article id="article-single" class="spacer">
    <img style="position: relative; margin-top: 100px; margin-bottom: 100px" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/female-1.png' ) ); ?>" alt="Avatar">
    <img style="position: absolute; right: 100px; top: 350px" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/male-1-hand.png' ) ); ?>" alt="Avatar">
    <img style="position: absolute; right: 250px; top: 500px;" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/youth-female-1-laptop.png' ) ); ?>" alt="Avatar">
    <img style="position: absolute; right: 150px; top: 500px;" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/youth-male-1.png' ) ); ?>" alt="Avatar">
</article>
<?php echo'</main>';

get_footer();
