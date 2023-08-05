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




$user_meta = get_user_meta( $current_user->ID );
echo '<main id="main" class="wrapper">';
echo '<div class="background alignfull"></div>';
echo '<article id="article" style="padding-top: 0">';?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php if ( !is_user_logged_in() ) : ?>
                <p class="warning">
					<?php _e('You must be logged in to edit your profile.', 'profile'); ?>
                </p><!-- .warning -->
			<?php else : ?>
                <div class="content">
                    <img class="avatar" src="<?php echo get_avatar_url( $current_user->ID, array( 'size' => 200 ) );?>" alt="Avatar">
                    <div>
                        <h2><?php echo ($user_meta['first_name'][0] ?? "") ?></h2>
                    </div>
                </div>
                <div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons" style="margin-top: -40px">
                    <div class="wp-block-button is-style-outline dropdown menu-item-has-children">
                        <a class="wp-block-button__link has-text-color wp-element-button" style="color:#73449b" href="#">
                            <span class="dashicons dashicons-admin-generic"></span>
                            <span class="dashicons dashicons-arrow-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li id="menu-item-115" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115"><a href="#"><span class="dashicons dashicons-edit"> Edit Profile</a></li>
                            <li id="menu-item-114" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114"><a href="<?php echo home_url('/dashboard/profile'); ?>"><span class="dashicons dashicons-visibility"> Profile</a></li>
                        </ul>
                    </div>
                </div>
				<form method="post" id="adduser" action="<?php the_permalink(); ?>">
				<fieldset>
					<legend>Your Details:</legend>
						<label for="first-name">First Name:</label>
						<input id="first-name" name="first-name" value="<?php echo ($user_meta['first_name'][0] ?? "") ?>"/>
						<label for="last-name">Last Name:</label>
						<input id="last-name" name="last-name" value="<?php echo ($user_meta['last_name'][0] ?? "") ?>"/>
						<label for="email">Email:</label>
						<input value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>"/>
						<label for="country">Country:</label>
						<input value="<?php echo ($user_meta['locale'][0] ?? "") ?>" />
					</fieldset>
					<fieldset>
					<legend>Contact:</legend>
						<label for="phone">Phone:</label>
						<input name="phone" value="<?php echo ($user_meta['phone'][0] ?? "") ?>"/>
						<label for="linkedin">LinkedIn:</label>
						<input name="linkedin" value="<?php echo ($user_meta['linkedin'][0] ?? "") ?>"/>
						<label for="twitter">Twitter:</label>
						<input name="twitter" value="<?php echo ($user_meta['twitter'][0] ?? "") ?>"/>
					</fieldset>
					<fieldset>
					<legend>About You:</legend>
					<label for="bio">Bio:</label>
						<textarea name="bio" rows="10" cols="30">
							<?php echo ($user_meta['description'][0] ?? "") ?>
						</textarea>
						<label for="projects">Projects:</label>
						<textarea name="projects" rows="5" cols="30">
							<?php echo ($user_meta['projects'][0] ?? "") ?>
						</textarea>
						<label for="programming">Programming Languages:</label>
						<input type="text" id="programming" name="programming" value="<?php echo ($user_meta['programming'][0] ?? "")  ?>"/>
						<label for="languages">Languages Spoken:</label>
						<input type="text" id="languages" name="languages" value="<?php echo ($user_meta['languages'][0] ?? "") ?>"/>
						<label for="gender">Gender:</label>
						<div>
						<input type="radio" id="female" name="gender" value="female" <?php if('female'== $user_meta['gender'][0]) echo 'checked="checked"'; ?>/>
						<label for="female">Female</label>
						<input type="radio" id="male" name="gender" value="male" <?php if('male'== $user_meta['gender'][0]) echo 'checked="checked"'; ?>/>
						<label for="male">Male</label>
						<input type="radio" id="undisclosed" name="gender" value="undisclosed" <?php if($user_meta['gender'][0] == "undisclosed" ) echo 'checked="checked"'; ?>/>
						<label for="undisclosed">Undisclosed</label>
						</div>
						<label for="private">Private Profile:</label>
						<div>
						<input type="radio" id="yes" name="private" value="yes" <?php if($user_meta['private'][0] =='yes' ){ echo "checked"; } ?>/>
						<label for="yes">Yes</label>
						<input type="radio" id="no" name="private" value="no" <?php if($user_meta['private'][0] != 'yes' ){ echo "checked"; } ?>/>
						<label for="no">No</label>
						</div>
						<label for="subscribe">Subscribe to newsletter</label>
						<input type="checkbox" id="subscribe" name="subscribe" value="yes" <?php if($user_meta['subscribe'][0] =='yes' ){ echo "checked"; } ?>/>
						<label for="terms">I have read and accept the Terms and Conditions here</label>
						<input type="checkbox" id="terms" name="terms" value="yes" <?php if($user_meta['terms'][0] =='yes' ){ echo "checked"; } ?>/>
						<label for="notes">Hide Notes</label>
						<input type="checkbox" id="notes" name="notes" value="yes" <?php if($user_meta['notes'][0] =='yes' ){ echo "checked"; } ?>/>
						<label for="project">Hide Projects</label>
						<input type="checkbox" id="project" name="project" value="yes" <?php if($user_meta['project'][0] =='yes' ){ echo "checked"; } ?>/>
						<input name="updateuser" type="submit" id="updateuser" class="submit button" value="<?php _e('Save', 'profile'); ?>" />
						<?php wp_nonce_field( 'update-user' ) ?>
						<input name="action" type="hidden" id="action" value="update-user" />
					</fieldset>
				
					
					<?php 
                        //action hook for plugin and extra fields
                        do_action('edit_user_profile',$current_user); 
						var_dump($user_meta);
                    ?>
				</form>           
 
            <?php endif; ?>
    <?php endwhile;
else: ?>
    <p class="no-data">
        <?php _e('Sorry, no page matched your criteria.', 'profile'); ?>
    </p><!-- .no-data -->
<?php endif; 
get_template_part( 'template-parts/content/team' );
echo'</article>';
echo'</main>';

get_footer(); 

/* Get user info. */
global $current_user, $wp_roles;
//get_currentuserinfo(); //deprecated since 3.1

/* Load the registration file. */
//require_once( ABSPATH . WPINC . '/registration.php' ); //deprecated since 3.1
$error = array();    
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

    /* Update user password. */
    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
        if ( $_POST['pass1'] == $_POST['pass2'] )
            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
        else
            $error[] = __('The passwords you entered do not match.  Your password was not updated.', 'profile');
    }

    /* Update user information. */
    if ( !empty( $_POST['url'] ) )
        wp_update_user( array( 'ID' => $current_user->ID, 'user_url' => esc_url( $_POST['url'] ) ) );
    if ( !empty( $_POST['email'] ) ){
        if (!is_email(esc_attr( $_POST['email'] )))
            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->ID )
            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
        else{
            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
        }
    }
        
	if ( !empty( $_POST['first-name'] ) )
	update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
	if ( !empty( $_POST['last-name'] ) )
		update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
	if ( !empty( $_POST['country'] ) )
		update_user_meta( $current_user->ID, 'locale', esc_attr( $_POST['country'] ) );
	if ( !empty( $_POST['phone'] ) )
		update_user_meta($current_user->ID, 'phone', esc_attr( $_POST['phone'] ) );
	if ( !empty( $_POST['linkedin'] ) )
		update_user_meta( $current_user->ID, 'linkedin', esc_attr( $_POST['linkedin'] ) );
	if ( !empty( $_POST['twitter'] ) )
		update_user_meta( $current_user->ID, 'twitter', esc_attr( $_POST['twitter'] ) );
	if ( !empty( $_POST['bio'] ) )
		update_user_meta( $current_user->ID, 'description', esc_attr( $_POST['bio'] ) );
	if ( !empty( $_POST['projects'] ) )
		update_user_meta( $current_user->ID, 'projects', esc_attr( $_POST['projects'] ) );
	if ( !empty( $_POST['programming'] ) )
		update_user_meta( $current_user->ID, 'programming', esc_attr( $_POST['programming'] ) );
	if ( !empty( $_POST['languages'] ) )
		update_user_meta( $current_user->ID, 'languages', esc_attr( $_POST['languages'] ) );
	if ( !empty( $_POST['male'] ) )
		update_user_meta( $current_user->ID, 'gender', esc_attr( $_POST['male'] ) );
	if ( !empty( $_POST['female'] ) )
		update_user_meta( $current_user->ID, 'gender', esc_attr( $_POST['female'] ) );
	if ( !empty( $_POST['undisclosed'] ) )
		update_user_meta( $current_user->ID, 'gender', esc_attr( $_POST['undisclosed'] ) );
	if ( !empty( $_POST['private'] ) )
		update_user_meta( $current_user->ID, 'private', esc_attr( $_POST['private'] ) );
	if ( !empty( $_POST['subscribe'] ) )
		update_user_meta( $current_user->ID, 'subscribe', esc_attr( $_POST['subscribe'] ) );
	if ( !empty( $_POST['terms'] ) )
		update_user_meta( $current_user->ID, 'terms', esc_attr( $_POST['terms'] ) );
	if ( !empty( $_POST['notes'] ) )
		update_user_meta( $current_user->ID, 'notes', esc_attr( $_POST['notes'] ) );
	if ( !empty( $_POST['project'] ) )
		update_user_meta( $current_user->ID, 'project', esc_attr( $_POST['project'] ) );

    /* Redirect so the page will show updated info.*/
  /*I am not Author of this Code- I don't know why but it worked for me after changing below line to if ( count($error) == 0 ){ */

	wp_redirect( get_permalink() );
}
?>
