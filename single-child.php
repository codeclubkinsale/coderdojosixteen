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
		<div class="background alignfull"></div>
		<div class="content">
			<img class="avatar" src="<?php echo get_avatar_url( 300, array( 'size' => 200 ) );?>" alt="Avatar">
			<div>
				<h2><?php echo ($user_meta['first_name'][0] ?? "") ?></h2>
			</div>
		</div>
		<div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons" style="margin-top: -60px">
			<div class="wp-block-button is-style-outline dropdown menu-item-has-children">
				<a class="wp-block-button__link has-text-color wp-element-button" style="color:#73449b" href="#">
					<span class="dashicons dashicons-admin-generic"></span>
					<span class="dashicons dashicons-arrow-down"></span>
				</a>
				<ul class="sub-menu">
					<li id="menu-item-115" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115"><a href="<?php echo home_url('/dashboard/profile/edit'); ?>"><span class="dashicons dashicons-edit"> Edit Profile</a></li>
					<li id="menu-item-114" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114"><a href="#"><span class="dashicons dashicons-visibility"> Profile</a></li>
				</ul>
			</div>
		</div>
		<div>
			<h3>Recent Badges</h3>
			<p>Youth doesn't have any badges yet. Talk to the organisers of your Dojo to learn how Youth can be rewarded through badges.</p>
		</div>
		<div>
			<h3>Dojos</h3>
			<div class="is-content-justification-right is-layout-flex wp-container-29 wp-block-buttons" style="margin-top: -60px">
				<div class="wp-block-button is-style-outline dropdown menu-item-has-children">
					<a class="wp-block-button__link has-text-color wp-element-button" style="color:#73449b" href="#"><span class="dashicons dashicons-admin-generic"></span>Manage</a>
				</div>
			</div>
			<p>Youth doesn't have any badges yet. Talk to the organisers of your Dojo to learn how Youth can be rewarded through badges.</p>
		</div>
	</article>
<?php echo'</main>';

get_footer();
