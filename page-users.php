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

echo '<main id="main" class="wrapper">'; ?>
	<h1>Manage Dojo Users</h1>
    <div class="is-layout-flex wp-block-buttons">
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/my-dojos/users/pending'); ?>" style="border-radius:4px;color:#73449b">User Requests</a></div>
    </div>
<?php echo'</main>';

get_footer();
