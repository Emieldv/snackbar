<?php

add_theme_support('post-thumbnails');

function user_registered($user) {
	$user->set_role('customer');
}
add_action('wp_rest_user_user_register', 'user_registered');