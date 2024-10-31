<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*    (c) 2011-2013 Mohamed Mrassi and contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 

// --------------------------------------------------------------------

function wsl_component_networks_whyhello()
{
	// HOOKABLE: 
	do_action( "wsl_component_networks_whyhello_start" );
?>
<div class="postbox " id="linksubmitdiv"> 
	<div class="inside">
		<div id="submitlink" class="submitbox"> <h3 style="cursor: default;"><?php _wsl_e("Why, hello there", PIXELPIN_PLUGIN_CATEGORY) ?></h3>
			<div id="minor-publishing"> 

				<div style="display:none;"><input type="submit" value="Save" class="button" id="save" name="save"></div>

				<div id="misc-publishing-actions">
					<div class="misc-pub-section"> 
						<p style="line-height: 19px;font-size: 13px;" align="justify">
							<?php _wsl_e('If you are still new to things, we recommend that you read the <b><a href="http://hybridauth.sourceforge.net/wsl/index.html" target="_blank">Plugin User Guide</a></b> and to make sure your server settings meet this <b><a href="options-general.php?page=pixelpin-social-login&amp;wslp=diagnostics">Plugin Requirements</a></b>', PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p>
						<p style="line-height: 19px;" align="justify">
							<?php _wsl_e('If you run into any issue then refer to <b><a href="options-general.php?page=pixelpin-social-login&wslp=help">Help & Support</a></b> to konw how to reach me', PIXELPIN_PLUGIN_CATEGORY) ?>.
						</p> 
					</div>
				</div> 
			</div>

			<div id="major-publishing-actions"> 
				<div id="publishing-action">
					<input type="submit" value="<?php _wsl_e('Save Settings', PIXELPIN_PLUGIN_CATEGORY) ?>" class="button-large button-primary" name="save" >
				</div>
				<div class="clear"></div>
			</div> 
		</div>
	</div>
</div>
<?php
	// HOOKABLE: 
	do_action( "wsl_component_networks_whyhello_end" );	
} 

// --------------------------------------------------------------------	
