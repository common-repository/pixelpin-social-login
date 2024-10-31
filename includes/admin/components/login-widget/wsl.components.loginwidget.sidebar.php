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

function wsl_component_loginwidget_sidebar()
{
	// HOOKABLE: 
	do_action( "wsl_component_loginwidget_sidebar_start" );
?>
<div class="postbox " id="linksubmitdiv"> 
	<div class="inside">
		<div id="submitlink" class="submitbox"> 
			<h3 style="cursor: default;"><?php _wsl_e("What's This?", PIXELPIN_PLUGIN_CATEGORY) ?></h3>
			<div id="minor-publishing">  
				<div id="misc-publishing-actions"> 
					<div style="padding:20px;padding-top:0px;">
						<h4 style="cursor: default;border-bottom:1px solid #ccc;font-size: 13px;"><?php _wsl_e("Widget Customization", PIXELPIN_PLUGIN_CATEGORY) ?></h4>

						<p style="margin:10px;font-size: 13px;" align="justify"> 
							<?php _wsl_e("On this section you can fully customize <b>PixelPin Social Login Widget</b> and define the way you want it to look and behave", PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>

						<p style="margin:10px;font-size: 13px;" align="justify"> 
							<?php _wsl_e("<b>PixelPin Social Login Widget</b> will be generated into the comments, login and register forms enabling your website vistors and customers to login via social networks", PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>

						<p style="margin:10px;"> 
							<?php _wsl_e("If this widget does not show up on your custom theme or you want to add it somewhere else then refer to the next section", PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>

						<h4 style="cursor: default;border-bottom:1px solid #ccc;"><?php _wsl_e("Custom integration", PIXELPIN_PLUGIN_CATEGORY) ?></h4>

						<p style="margin:10px;"> 
							<?php _wsl_e("If you want to add the social login widget to another location in your theme, you can insert the following code in that location", PIXELPIN_PLUGIN_CATEGORY) ?>: 
							<pre style="width: 380px;background-color: #FFFFE0;border:1px solid #E6DB55; border-radius: 3px;padding: 10px;margin-top:15px;margin-left:10px;"> &lt;?php do_action( 'wordpress_social_login' ); ?&gt; </pre> 
							<?php _wsl_e("Or, for posts and pages", PIXELPIN_PLUGIN_CATEGORY) ?>:
							<pre style="width: 380px;background-color: #EDEFF4;border:1px solid #6B84B4; border-radius: 3px;padding: 10px;margin-top:15px;margin-left:10px;">[wordpress_social_login]</pre> 
						</p>

						<p style="margin:10px;"> 
							<?php _wsl_e('<b>[wordpress_social_login]</b> shortcode can be used in combination with <a href="http://wordpress.org/extend/plugins/html-javascript-adder/" target="_blank">HTML Javascript Adder</a> plugin to be add WSL Widget to your website sidebar', PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>

						<p style="margin:10px;"> 
							<?php _wsl_e('Also, if you are a developer or designer then you can customize it to your heart\'s content. For more inofmation refer to <b><a href="http://hybridauth.sourceforge.net/wsl/customize.html" target="_blank">User Guide</a></b>', PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>

						<h4 style="cursor: default;border-bottom:1px solid #ccc;"><?php _wsl_e("Widget preview", PIXELPIN_PLUGIN_CATEGORY) ?></h4>

						<p style="margin:10px;"> 
							<?php _wsl_e("This is a preview of what should be on the comments area", PIXELPIN_PLUGIN_CATEGORY) ?>.
							<strong><?php _wsl_e("Do not test it here", PIXELPIN_PLUGIN_CATEGORY) ?></strong>!
						</p>
 
						<div style="width: 380px;background-color: #FFEBE8;border:1px solid #CC0000; border-radius: 3px;padding: 10px;margin-left:10px;">
							<?php wsl_render_login_form(); ?>
						</div> 
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div> 
<?php
	// HOOKABLE: 
	do_action( "wsl_component_loginwidget_sidebar_end" );
}

// --------------------------------------------------------------------	
