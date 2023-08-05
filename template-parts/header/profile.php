<?php global $current_user; wp_get_current_user(); ?>
<nav id="header-navigation" class="navigation-menu">
	<ul id="primary-menu" class="primary-menu">
		<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61">
				<a href="https://help.coderdojo.com">Help</a>
		</li>
<?php if ( is_user_logged_in() ) { ?>
		<li class="dropdown menu-item-has-children">
			<div class="dropbtn">
				<img src=<?php echo get_avatar_url( $current_user->ID, array( 'size' => 48 ) );?> alt="Site Icon">
				<?php echo $current_user->first_name;?>
			</div>
			<ul class="sub-menu">
				<li id="menu-item-115" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-115"><a href="<?php echo home_url('dashboard/profile/edit'); ?>">My Profile</a></li>
				<li id="menu-item-114" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-114"><a href="<?php echo home_url('dashboard/my-dojos'); ?>">My Dojos</a></li>
				<li id="menu-item-111" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111"><a href="<?php echo home_url('dashboard/tickets'); ?>">My Events</a></li>
				<li id="menu-item-112" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112"><a href="<?php echo home_url('dashboard/children'); ?>">My Children</a></li>
				<li id="menu-item-113" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-113"><a href="<?php echo home_url('dashboard/profile/lms'); ?>">E-Learning</a></li>
				<li id="menu-item-113" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-113"><a href="<?php echo home_url(); ?>/wp-login.php?action=logout">Logout</a></li>
			</ul>
		</li>
	<?php
} 
else { ?>
	<li id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97">
			<a href="<?php echo home_url(); ?>/wp-login.php?action=register">Register</a>
		</li>
		<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62">
			<a href="<?php echo home_url(); ?>/wp-login.php">Login</a>
		</li> <?php
} ?>
</ul>

