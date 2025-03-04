<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*    (c) 2011-2013 Mohamed Mrassi and contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

/**
* Components Manager 
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 

// --------------------------------------------------------------------

function wsl_component_components_gallery()
{
	// not for today
	return;

	// HOOKABLE: 
	do_action( "wsl_component_components_gallery_start" ); 

	add_thickbox();
?> 
<br />

<h2><?php _wsl_e( "Other Components available", PIXELPIN_PLUGIN_CATEGORY ) ?></h2>

<style>
.wsl_addon_div{
	width: 350px; 
	height: 125px; 
	padding: 10px; 
	border: 1px solid #ddd; 
	background-color: #fff;
	float:left;
	margin-bottom: 20px;
	margin-right: 20px;
	
	position: relative;
}
.wsl_addon_div .button-secondary {
    bottom: 8px;
    left: 8px;
    position: absolute; 
}
.wsl_addon_div .button-primary {
    bottom: 8px;
    right: 8px;
    position: absolute;  
}
</style>

<div class="wsl_addon_div">
	<h3 style="margin:0px;"><?php _wsl_e( "PixelPin Social Login for BuddyPress", PIXELPIN_PLUGIN_CATEGORY ) ?></h3>
	<hr />
	<p><?php _wsl_e( "Make PixelPin Social Login compatible with BuddyPress", PIXELPIN_PLUGIN_CATEGORY ) ?>.</p> 
	<p><?php _wsl_e( "Widget integration, xProfiles mapping and more", PIXELPIN_PLUGIN_CATEGORY ) ?>.</p> 
	<div>
		<a class="button button-primary thickbox" href="plugin-install.php?tab=plugin-information&plugin=wsl-buddypress&TB_iframe=true"><?php _wsl_e( "Install Now", PIXELPIN_PLUGIN_CATEGORY ) ?></a>
		<a class="button button-secondary" href="http://wordpress.org/extend/plugins/wsl-buddypress/" target="_blank"><?php _wsl_e( "Visit plugin site", PIXELPIN_PLUGIN_CATEGORY ) ?></a> 
	</div>
</div>

<div class="wsl_addon_div">
	<h3 style="margin:0px;"><?php _wsl_e( "Build yours", PIXELPIN_PLUGIN_CATEGORY ) ?></h3>
	<hr />
	<p><?php _wsl_e( "Looking to build your own custom <b>PixelPin Social Login</b> extenstion or component? Well, it's pretty easy. Just RTFM :)", PIXELPIN_PLUGIN_CATEGORY ) ?></p>
 
	<div>
		<a class="button button-primary"   href="http://hybridauth.sourceforge.net/wsl/developer.html" target="_blank"><?php _wsl_e( "WSL Developer API", PIXELPIN_PLUGIN_CATEGORY ) ?></a> 
		<a class="button button-secondary" href="https://github.com/hybridauth/WordPress-Social-Login" target="_blank"><?php _wsl_e( "WSL on Github", PIXELPIN_PLUGIN_CATEGORY ) ?></a> 
	</div>
</div>
<?php
	// HOOKABLE: 
	do_action( "wsl_component_components_gallery_end" );
}

// --------------------------------------------------------------------	
