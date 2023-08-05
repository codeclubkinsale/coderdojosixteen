<?php
/**
 * Template part for displaying the team in the team-page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$users = get_users(array(
    'role__in' => array(
        'Editor',
        'Author'
    ),
    'orderby'       => 'user_url',
    'order'         => 'ASC'
)); ?>

<aside>
    <div id="user-profiles" class="alignwide">
        <?php foreach($users as $user) : ?>
            <?php $user_url = esc_attr( get_the_author_meta( 'url', $user->ID )); ?>
            <?php $user_linkedin = esc_attr( get_the_author_meta( 'linkedin', $user->ID )); ?>
            <?php $user_twitter = esc_attr( get_the_author_meta( 'twitter', $user->ID )); ?>
            <button id="<?php echo $user->ID ?>" onClick="user_button_click(this.id)" class="user-profile">
                <img class="user-image" src=" <?php echo get_avatar_url($user->ID, ['size' => '192']) ?>" />
                <div class="user-content">
                    <div><?php echo $user->display_name ?></div>
                    <div><?php echo esc_attr( get_the_author_meta( 'title', $user->ID ) ) ?></div>
                </div>
            </button>
            <div id="modal-<?php echo $user->ID ?>" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="span-<?php echo $user->ID ?>" type="button" class="close" onClick="close_span_click(this.id)" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h2 class="user-title"><?php echo $user->display_name ?></h2>
                    </div>
                    <div class="modal-body">
                        <img class="user-image" src="<?php echo get_avatar_url($user->ID, ['size' => '192']) ?>" />
                        <div><?php echo get_the_author_meta('description', $user->ID) ?></div>
                    </div>
                    <div class="modal-footer">
                        <ul class="user-links social-links">
                            <?php if ($user_url) : ?>
                                <li>
                                    <a href="<?php echo $user_url ?>"><p></p></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($user_linkedin) : ?>
                                <li>
                                    <a href="<?php echo $user_linkedin ?>"><p></p></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($user_twitter) : ?>
                                <li>
                                    <a href="<?php echo $user_twitter ?>"><p></p></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <button id="button-<?php echo $user->ID ?>" type="button" class="btn btn-default" onClick="close_button_click(this.id)" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> 
    </div>
</aside>