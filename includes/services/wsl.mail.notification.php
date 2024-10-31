<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*    (c) 2011-2013 Mohamed Mrassi and contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

/** 
* Email notifications to send. so far only the admin one is implemented
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// --------------------------------------------------------------------

/**
* send a notification to blog administrator when a new user register using WSL
* again borrowed from http://wordpress.org/extend/plugins/oa-social-login/
*/
function wsl_admin_notification( $user_id, $provider )
{
    //Get the user details
	$user = new WP_User($user_id);
	$user_login = stripslashes($user->user_login);

	// The blogname option is escaped with esc_html on the way into the database
	// in sanitize_option we want to reverse this for the plain text arena of emails.
	$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

	$message  = sprintf(__('New user registration on your site: %s', PIXELPIN_PLUGIN_CATEGORY), $blogname        ) . "\r\n\r\n";
	$message .= sprintf(__('Username: %s'                          , PIXELPIN_PLUGIN_CATEGORY), $user_login      ) . "\r\n";
	$message .= sprintf(__('Provider: %s'                          , PIXELPIN_PLUGIN_CATEGORY), $provider        ) . "\r\n";
	$message .= sprintf(__('Profile: %s'                           , PIXELPIN_PLUGIN_CATEGORY), $user->user_url  ) . "\r\n";
	$message .= sprintf(__('Email: %s'                             , PIXELPIN_PLUGIN_CATEGORY), $user->user_email) . "\r\n";
	$message .= "\r\n--\r\n";
	$message .= "PixelPin Social Login\r\n";
	$message .= "http://wordpress.org/extend/plugins/pixelpin-social-login/\r\n";

	@wp_mail(get_option('admin_email'), '[PixelPin Social Login] '.sprintf(__('[%s] New User Registration', PIXELPIN_PLUGIN_CATEGORY), $blogname), $message);
}

// --------------------------------------------------------------------
