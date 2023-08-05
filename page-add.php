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
echo '<main id="main" class="wrapper blog-home">'; ?>

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
        <form method="post" id="adduser" action="<?php the_permalink(); ?>">
            <fieldset>
                <legend>Your Details:</legend>
                <label for="first-name">First Name:</label>
                <input id="first-name" name="first-name" value="<?php echo ($user_meta['first_name'][0] ?? "") ?>"/>
                <label for="last-name">Last Name:</label>
                <input id="last-name" name="last-name" value="<?php echo ($user_meta['last_name'][0] ?? "") ?>"/>
                <label for="alias">Alias:</label>
                <input id="alias" value="" />
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
                <label for="gender">Gender:</label>
                <div>
                    <input type="radio" id="female" name="gender" value="female" />
                    <label for="female">Female</label>
                    <input type="radio" id="male" name="gender" value="male" />
                    <label for="male">Male</label>
                    <input type="radio" id="undisclosed" name="gender" value="undisclosed"/>
                    <label for="undisclosed">Undisclosed</label>
                </div>
                <input name="updateuser" type="submit" id="updateuser" class="submit button" value="<?php _e('Save', 'profile'); ?>" />
	            <?php wp_nonce_field( 'update-user' ) ?>
                <input name="action" type="hidden" id="action" value="update-user" />
            </fieldset>
        </form>
	</article>
<?php echo'</main>';

get_footer();
