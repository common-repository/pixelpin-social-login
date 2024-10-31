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

function wsl_component_bouncer_setup()
{
	// HOOKABLE:
	do_action( "wsl_component_bouncer_setup_start" );
?>
<div  id="post-body-content"> 
 
	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("WSL Widget", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside"> 
			<p> 
				<?php _wsl_e("Here you can tell Bouncer if you are accepting new users registration and authentication into your website or not any more. Note that Bouncer only works for WSL and will not interfere with users authenticating through the regulars wordpress Login and Register pages with their usernames and passwords (to to achieve that kind of restrictions, you may need to use another plugin(s) in combination with WSL).", PIXELPIN_PLUGIN_CATEGORY) ?>
			</p> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Accept new registration", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_registration_enabled">
						<option <?php if( get_option( 'wsl_settings_bouncer_registration_enabled' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_registration_enabled' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr> 
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Allow authentication", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_authentication_enabled">
						<option <?php if( get_option( 'wsl_settings_bouncer_authentication_enabled' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_authentication_enabled' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr> 
			</table>
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Profile Completion", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside"> 
			<p>
				<?php _wsl_e("Select required fields. If a social network doesn't return them, Bouncer will then ask your visitors to fill additional form to provide them when registering.", PIXELPIN_PLUGIN_CATEGORY) ?> 
			</p>
			<p class="description">
				<?php _wsl_e("You may activate <b>Profile Completion</b> for both <b>E-mail</b> and <b>Username</b>, but keep in mind, the idea behind <b>social login</b> is to avoid forms and remove all the hassle of registration", PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p>
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Require E-mail", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_profile_completion_require_email">
						<option <?php if( get_option( 'wsl_settings_bouncer_profile_completion_require_email' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_profile_completion_require_email' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Allow Username change", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td>
					<select name="wsl_settings_bouncer_profile_completion_change_username">
						<option <?php if( get_option( 'wsl_settings_bouncer_profile_completion_change_username' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_profile_completion_change_username' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>
			</table>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("User Moderation", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside"> 
			<p> 
				<?php _wsl_e("<b>User Moderation</b> will define how <b>Bouncer</b> should behave with new regsitred users:", PIXELPIN_PLUGIN_CATEGORY) ?>
			</p>
			<ul style="margin-left:30px">
				<li><?php _wsl_e("<b>None</b>: No moderation required.", PIXELPIN_PLUGIN_CATEGORY) ?></li>
				<li><?php _wsl_e('<b>E-mail Confirmation</b>: New users will need to be confirm their e-mail address before they may log in', PIXELPIN_PLUGIN_CATEGORY) ?>.</li>
				<li><?php _wsl_e('<b>Admin Approval</b>: New users will need to be approved by an administrator before they may log in', PIXELPIN_PLUGIN_CATEGORY) ?>.</li>
			</ul> 
			<p class="description">
				<?php _wsl_e('Both <b>Admin Approval</b> and <b>E-mail Confirmation</b> requires <a href="http://wordpress.org/extend/plugins/theme-my-login/" target="_blank">Theme My Login</a> plugin to be installed. As there is no point for <b>PixelPin Social Login</b> to reinvent the wheel', PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p> 
			<p class="description">
				<?php _wsl_e('<b>User Moderation</b> was purposely made compatible with the <a href="http://wordpress.org/extend/plugins/theme-my-login/" target="_blank">Theme My Login</a> for a number reasons: That plugin is good at what he does, a hell of a lot of people are using it and many have asked for it', PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("User Moderation", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_new_users_moderation_level">
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_moderation_level' ) == 1 )   echo "selected"; ?> value="1"><?php _wsl_e("None", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_moderation_level' ) == 101 ) echo "selected"; ?> value="101"><?php _wsl_e("E-mail Confirmation &mdash; Yield to Theme My Login plugin", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_moderation_level' ) == 102 ) echo "selected"; ?> value="102"><?php _wsl_e("Admin Approval &mdash; Yield to Theme My Login plugin", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>
			</table>
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Membership level", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside"> 
			<p>
				<?php _wsl_e('Here you can define the default role for new users authenticating through WSL. The <code>Administrator</code> and <code>Editor</code> roles are not available for safety reasons', PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p> 
			<p>
				<?php _wsl_e('For more information about wordpress users roles and capabilities refer to <a href="http://codex.wordpress.org/Roles_and_Capabilities#Capability_vs._Role_Table" target="_blank">http://codex.wordpress.org/Roles_and_Capabilities</a>', PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p> 
			<p>
				<?php _wsl_e('If <b>User Moderation</b> is set to <code>Admin Approval</code> then <b>Membership level</b> will be ignored', PIXELPIN_PLUGIN_CATEGORY) ?>.
			</p> 
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("New User Default Role", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_new_users_membership_default_role">
						<optgroup label="<?php _wsl_e("Safe", PIXELPIN_PLUGIN_CATEGORY) ?>:">
							<option value="default"     <?php if( get_option( 'wsl_settings_bouncer_new_users_membership_default_role' ) == "default" ) echo "selected"; ?> ><?php _wsl_e("&mdash; Wordpress User Default Role &mdash;", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
							<option value="wslnorole"   <?php if( get_option( 'wsl_settings_bouncer_new_users_membership_default_role' ) == "wslnorole" ) echo "selected"; ?> ><?php _wsl_e("&mdash; No role for this site  &mdash;", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
							<option value="subscriber"  <?php if( get_option( 'wsl_settings_bouncer_new_users_membership_default_role' ) == "subscriber" ) echo "selected"; ?> ><?php _wsl_e("Subscriber", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						</optgroup>

						<optgroup label="<?php _wsl_e("Be careful with these", PIXELPIN_PLUGIN_CATEGORY) ?>:">  
							<option value="author"      <?php if( get_option( 'wsl_settings_bouncer_new_users_membership_default_role' ) == "author" ) echo "selected"; ?> ><?php _wsl_e("Author", PIXELPIN_PLUGIN_CATEGORY) ?></option>
							<option value="contributor" <?php if( get_option( 'wsl_settings_bouncer_new_users_membership_default_role' ) == "contributor" ) echo "selected"; ?> ><?php _wsl_e("Contributor", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
						</optgroup>
					</select>  
				</td>
			  </tr>  
			</table>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Filters by emails domains name", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside">
			<p>
				<?php _wsl_e("Restrict registration to a limited number of domains name.", PIXELPIN_PLUGIN_CATEGORY) ?>
				<?php _wsl_e("Insert one email address per line and try to keep this list short. On <code>Bounce text</code> insert the text you want to display for rejected users. ex: <code>gmail.com</code>, without '@'.", PIXELPIN_PLUGIN_CATEGORY) ?>
			</p>
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Enabled", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_new_users_restrict_domain_enabled">
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_domain_enabled' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_domain_enabled' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>   
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("Domains list", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td>
					<textarea style="width:100%;height:60px;margin-top:6px;" name="wsl_settings_bouncer_new_users_restrict_domain_list"><?php echo get_option( 'wsl_settings_bouncer_new_users_restrict_domain_list' ); ?></textarea> 
				</td>
			  </tr>  
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("Bounce text", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td> 
					<?php 
						wsl_render_wp_editor( "wsl_settings_bouncer_new_users_restrict_domain_text_bounce", get_option( 'wsl_settings_bouncer_new_users_restrict_domain_text_bounce' ) ); 
					?>
				</td>
			  </tr>
			</table>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Filters by e-mails addresses", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside"> 
			<p>
				<?php _wsl_e("Restrict registration to a limited number of emails addresses.", PIXELPIN_PLUGIN_CATEGORY) ?> 
				<?php _wsl_e("Insert one email address per line and try to keep this list short. On <code>Bounce text</code> insert the text you want to display for rejected users. ex: <code>hybridauth@gmail.com</code>", PIXELPIN_PLUGIN_CATEGORY) ?> 
			</p>
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Enabled", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_new_users_restrict_email_enabled">
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_email_enabled' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_email_enabled' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>   
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("E-mails list", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td> 
					<textarea style="width:100%;height:60px;margin-top:6px;" name="wsl_settings_bouncer_new_users_restrict_email_list"><?php echo get_option( 'wsl_settings_bouncer_new_users_restrict_email_list' ); ?></textarea>  
				</td>
			  </tr>  
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("Bounce text", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td> 
					<?php 
						wsl_render_wp_editor( "wsl_settings_bouncer_new_users_restrict_email_text_bounce", get_option( 'wsl_settings_bouncer_new_users_restrict_email_text_bounce' ) ); 
					?>
				</td>
			  </tr>  
			</table>  
		</div>
	</div>

	<div id="namediv" class="stuffbox">
		<h3>
			<label for="name"><?php _wsl_e("Filters by profile urls", PIXELPIN_PLUGIN_CATEGORY) ?></label>
		</h3>
		<div class="inside hideinside"> 
			<p>
				<?php _wsl_e("Restrict registration to a limited number of profile urls.", PIXELPIN_PLUGIN_CATEGORY) ?>
				<?php _wsl_e("<b>Note</b>: If a social network provide the user email, then use 'Filters by e-mails addresses' instead. Providers like Facebook provide multiples profiles URLs per user and WSL won't be able to reconize them.", PIXELPIN_PLUGIN_CATEGORY) ?>
				<?php _wsl_e("Insert one email address per line and try to keep this list short. On <code>Bounce text</code> insert the text you want to display for rejected users. ex: <code>http://twitter.com/HybridAuth</code>, <code>https://plus.google.com/u/0/108839241301472312344</code>", PIXELPIN_PLUGIN_CATEGORY) ?>
			</p>
			<table width="100%" border="0" cellpadding="5" cellspacing="2" style="border-top:1px solid #ccc;">  
			  <tr>
				<td width="200" align="right"><strong><?php _wsl_e("Enabled", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></td>
				<td> 
					<select name="wsl_settings_bouncer_new_users_restrict_profile_enabled">
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_profile_enabled' ) == 1 ) echo "selected"; ?> value="1"><?php _wsl_e("Yes", PIXELPIN_PLUGIN_CATEGORY) ?></option>
						<option <?php if( get_option( 'wsl_settings_bouncer_new_users_restrict_profile_enabled' ) == 2 ) echo "selected"; ?> value="2"><?php _wsl_e("No", PIXELPIN_PLUGIN_CATEGORY) ?></option> 
					</select>
				</td>
			  </tr>   
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("Profile urls", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td>
					<textarea style="width:100%;height:60px;margin-top:6px;" name="wsl_settings_bouncer_new_users_restrict_profile_list"><?php echo get_option( 'wsl_settings_bouncer_new_users_restrict_profile_list' ); ?></textarea>  
				</td>
			  </tr>  
			  <tr>
				<td width="200" align="right" valign="top"><p><strong><?php _wsl_e("Bounce text", PIXELPIN_PLUGIN_CATEGORY) ?> :</strong></p></td>
				<td> 
					<?php 
						wsl_render_wp_editor( "wsl_settings_bouncer_new_users_restrict_profile_text_bounce", get_option( 'wsl_settings_bouncer_new_users_restrict_profile_text_bounce' ) ); 
					?>
				</td>
			  </tr>  
			</table>  
		</div>
	</div>

	<br />

	<div style="margin-left:5px;margin-top:-20px;"> 
		<input type="submit" class="button-primary" value="<?php _wsl_e("Save Settings", PIXELPIN_PLUGIN_CATEGORY) ?>" /> 
	</div>
</div>
<?php
	// HOOKABLE: 
	do_action( "wsl_component_bouncer_setup_end" );
}

// --------------------------------------------------------------------	
