<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*    (c) 2011-2013 Mohamed Mrassi and contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

/**
* Widget Customization
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 

// --------------------------------------------------------------------

function wsl_component_loginwidget_setup()
{
	// HOOKABLE: 
	do_action( "wsl_component_loginwidget_setup_start" );
?>
<div  id="post-body-content">

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Basic Settings", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside"> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" > 
			  <tr>
				<td width="135" align="right"><strong><?php _wsl_e("Connect with caption", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
				<input type="text" class="inputgnrc" value="<?php echo get_option( 'wsl_settings_connect_with_label' ); ?>" name="wsl_settings_connect_with_label" > 
				</td>
			  </tr>
			  <tr>
				<td align="right"><strong><?php _wsl_e("Social icon set", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_social_icon_set" style="width:400px">
						<option <?php if( get_option( 'wsl_settings_social_icon_set' )   == "wpzoom" ) echo "selected"; ?>   value="wpzoom"><?php _wsl_e("WPZOOM social networking icon set", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_social_icon_set' ) == "icondock" ) echo "selected"; ?> value="icondock"><?php _wsl_e("Icondock vector social media icons", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select> 
				</td>
			  </tr>
			  <tr>
				<td align="right"><strong><?php _wsl_e("Users avatars", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<select name="wsl_settings_users_avatars" style="width:400px">
						<option <?php if( ! get_option( 'wsl_settings_users_avatars' ) ) echo "selected"; ?> value="0"><?php _wsl_e("Display the default users avatars", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if(   get_option( 'wsl_settings_users_avatars' ) ) echo "selected"; ?> value="1"><?php _wsl_e("Display users avatars from social networks when available", PIXELPIN_PLUGIN_CATEGORY) ?></option>
					</select> 
				</td>
			  </tr> 
			</table> 
			<br>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Advanced Settings", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside"> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" >
			  <tr>
				<td width="135" align="right"><strong><?php _wsl_e("Redirect URL", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<input type="text" name="wsl_settings_redirect_url" value="<?php echo get_option( 'wsl_settings_redirect_url' ); ?>" class="inputgnrc"> 
				</td>
			  </tr>
			  <tr>
				<td align="right"><strong><?php _wsl_e("Authentication flow", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<select name="wsl_settings_use_popup" style="width:400px">
						<option <?php if( get_option( 'wsl_settings_use_popup' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Using popup window", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if( get_option( 'wsl_settings_use_popup' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No popup window", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select> 
				</td>
			  </tr>
			  <tr>
				<td align="right"><strong><?php _wsl_e("Widget display", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<select name="wsl_settings_widget_display" style="width:400px">
						<option <?php if( get_option( 'wsl_settings_widget_display' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Display the widget in the comments area, login and register forms", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if( get_option( 'wsl_settings_widget_display' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("Display the widget ONLY in the comments area", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if( get_option( 'wsl_settings_widget_display' ) == 3 ) echo "selected"; ?> value="3"><?php _wsl_e("Display the widget ONLY in the login form", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>  
				</td>
			  </tr>
			  <tr>
				<td align="right"><strong><?php _wsl_e("Notification", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<select name="wsl_settings_users_notification" style="width:400px">
						<option <?php if( ! get_option( 'wsl_settings_users_notification' )      ) echo "selected"; ?> value="0"><?php _wsl_e("No notification", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if(   get_option( 'wsl_settings_users_notification' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Notify ONLY the blog admin of a new user", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select> 
				</td>
			  </tr> 
			</table>
			<br>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Custom CSS", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside"> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" >
			  <tr>
				<td width="135" align="right" valign="top"><strong><?php _wsl_e("Widget CSS", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
				<?php _wsl_e("To customize the default widget styles you can either: edit the css file <strong>/wordpress-social-login/assets/css/style.css</strong>, or change it from this text area", PIXELPIN_PLUGIN_CATEGORY) ?>. 
				<br />
				<textarea style="width:100%;height:120px;margin-top:6px;" name="wsl_settings_authentication_widget_css"><?php echo get_option( 'wsl_settings_authentication_widget_css' );  ?></textarea>
				<br />
				<p><?php _wsl_e("The basic widget markup is the following", PIXELPIN_PLUGIN_CATEGORY) ?>:</p>
<pre style="background-color: #eaffdc;border:1px solid #60cf4e; border-radius: 3px;padding: 10px;margin-top:5px;margin-bottom:0px;">
&lt;span id=&quot;<code>wp-social-login-connect-with</code>&quot;&gt;{connect_with_caption}&lt;/span&gt;

&lt;div id=&quot;<code>wp-social-login-connect-options</code>&quot;&gt;
    &lt;a class=&quot;<code>wsl_connect_with_provider</code>&quot;&gt;
        &lt;img src=&quot;{provider_icon_facebook}&quot; /&gt;
    &lt;/a&gt;

    &lt;a class=&quot;<code>wsl_connect_with_provider</code>&quot;&gt;
        &lt;img src=&quot;{provider_icon_google}&quot; /&gt;
    &lt;/a&gt;

    etc.
&lt;/div&gt;
</pre>
				</td>
			  </tr> 
			</table>
			<br>  
		</div>
	</div>

	<br />

	<div style="margin-left:5px;margin-top:-20px;"> 
		<input type="submit" class="button-primary" value="<?php _wsl_e("Save Settings", PIXELPIN_PLUGIN_CATEGORY) ?>" /> 
	</div>

</div>
<?php
	// HOOKABLE: 
	do_action( "wsl_component_loginwidget_setup_end" );
}

// --------------------------------------------------------------------	
