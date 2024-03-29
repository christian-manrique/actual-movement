	<?php defined('ABSPATH') or die("Cheating........Uh!!"); ?>
<div id="fb-root"></div>
	<div class="metabox-holder">
		<form action="options.php" method="post">
		<?php settings_fields('the_champ_login_options'); ?>

		<div class="stuffbox" style="width:98.7%">
			<h3><label><?php _e('Master Control', 'Super-Socializer' );?></label></h3>
			<div class="inside">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
					<tr>
						<th>
						<img id="the_champ_sl_enable_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
						<label for="the_champ_login_enable"><?php _e("Enable Social Login", 'Super-Socializer'); ?></label>
						</th>
						<td>
						<input id="the_champ_login_enable" name="the_champ_login[enable]" type="checkbox" <?php echo isset($theChampLoginOptions['enable']) ? 'checked = "checked"' : '';?> value="1" />
						</td>
					</tr>
					
					<tr class="the_champ_help_content" id="the_champ_sl_enable_help_cont">
						<td colspan="2">
						<div>
						<?php _e('Master control for Social Login. It must be checked to enable Social Login functionality', 'Super-Socializer') ?>
						</div>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="menu_div" id="tabs" <?php echo isset($theChampLoginOptions['enable']) ? '' : 'style="display:none"' ?>>
			<h2 class="nav-tab-wrapper" style="height:34px">
			<ul>
				<li style="margin-left:9px"><a style="margin:0; line-height:auto !important; height:23px" class="nav-tab" href="#tabs-1"><?php _e('Basic Configuration', 'Super-Socializer') ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; line-height:auto !important; height:23px" class="nav-tab" href="#tabs-2"><?php _e('Advanced Configuration', 'Super-Socializer') ?></a></li>
				<?php if($theChampIsBpActive){ ?>
				<li style="margin-left:9px"><a style="margin:0; line-height:auto !important; height:23px" class="nav-tab" href="#tabs-3"><?php _e('XProfile Integration', 'Super-Socializer') ?></a></li>
				<?php } ?>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-4"><?php _e('Shortcode & Widget', 'Super-Socializer') ?></a></li>
				<li style="margin-left:9px"><a style="margin:0; height:23px" class="nav-tab" href="#tabs-5"><?php _e('FAQ', 'Super-Socializer') ?></a></li>
			</ul>
			</h2>
			<div class="menu_containt_div" id="tabs-1">
				<div class="clear"></div>
				<div class="the_champ_left_column">
				<div class="stuffbox">
					<h3 class="hndle"><label><?php _e('Basic Configuration', 'Super-Socializer');?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">

						<tr>
							<th>
							<img id="the_champ_sl_disable_reg_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_disable_reg"><?php _e("Disable user registration via Social Login", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_disable_reg" name="the_champ_login[disable_reg]" onclick="if(this.checked){jQuery('#the_champ_disable_reg_options').css('display', 'table-row-group')}else{ jQuery('#the_champ_disable_reg_options').css('display', 'none') }" type="checkbox" <?php echo isset($theChampLoginOptions['disable_reg']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_disable_reg_help_cont">
							<td colspan="2">
							<div>
							<?php _e('After enabling this option, new users will not be able to login through social login. Only existing users will be able to social login.', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tbody id="the_champ_disable_reg_options" <?php echo !isset($theChampLoginOptions['disable_reg']) ? 'style = "display: none"' : '';?> >
						<tr>
							<th>
							<img id="the_champ_sl_disable_reg_redirect_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_disable_reg_redirect"><?php _e("Redirection url", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_disable_reg_redirect" name="the_champ_login[disable_reg_redirect]" type="text" value="<?php echo isset($theChampLoginOptions['disable_reg_redirect']) ? $theChampLoginOptions['disable_reg_redirect'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_disable_reg_redirect_help_cont">
							<td colspan="2">
							<div>
							<?php _e('User will be redirected to this page after unsuccessful registration attempt via Social Login. You can specify the url of registration form or of a page showing message regarding disabled registration through Social Login.', 'Super-Socializer'); ?>
							</div>
							</td>
						</tr>
						</tbody>

						<tr>
							<th>
							<img id="the_champ_sl_providers_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label><?php _e("Select providers", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_facebook" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('facebook', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="facebook" />
							<label for="the_champ_login_facebook"><?php _e("Facebook", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_twitter" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('twitter', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="twitter" />
							<label for="the_champ_login_twitter"><?php _e("Twitter", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_linkedin" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('linkedin', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="linkedin" />
							<label for="the_champ_login_linkedin"><?php _e("LinkedIn", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_google" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('google', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="google" />
							<label for="the_champ_login_google"><?php _e("Google+", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_vkontakte" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('vkontakte', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="vkontakte" />
							<label for="the_champ_login_vkontakte"><?php _e("Vkontakte", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_instagram" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('instagram', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="instagram" />
							<label for="the_champ_login_instagram"><?php _e("Instagram", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_xing" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('xing', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="xing" />
							<label for="the_champ_login_xing"><?php _e("Xing", 'Super-Socializer'); ?></label>
							</div>
							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_steam" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('steam', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="steam" />
							<label for="the_champ_login_steam"><?php _e("Steam", 'Super-Socializer'); ?></label>
							</div>

							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_twitch" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('twitch', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="twitch" />
							<label for="the_champ_login_twitch"><?php _e("Twitch", 'Super-Socializer'); ?></label>
							</div>

							<div class="theChampHorizontalSharingProviderContainer">
							<input id="the_champ_login_livejournal" name="the_champ_login[providers][]" type="checkbox" <?php echo isset($theChampLoginOptions['providers']) && in_array('liveJournal', $theChampLoginOptions['providers']) ? 'checked = "checked"' : '';?> value="liveJournal" />
							<label for="the_champ_login_livejournal"><?php _e("LiveJournal", 'Super-Socializer'); ?></label>
							</div>
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_providers_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Select Social ID provider to enable in Social Login', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slfb_key_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_fblogin_key"><?php _e("Facebook App ID", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_fblogin_key" name="the_champ_login[fb_key]" type="text" value="<?php echo isset($theChampLoginOptions['fb_key']) ? $theChampLoginOptions['fb_key'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slfb_key_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Facebook Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Facebook App ID', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-facebook-app-id/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Site URL</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sltw_key_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_twlogin_key"><?php _e("Twitter API Key", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_twlogin_key" name="the_champ_login[twitter_key]" type="text" value="<?php echo isset($theChampLoginOptions['twitter_key']) ? $theChampLoginOptions['twitter_key'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sltw_key_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Twitter Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Twitter API Key', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-twitter-api-key-and-secret/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Website</strong> and <strong>Callback URL</strong> options at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sltw_secret_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_twlogin_secret"><?php _e("Twitter API Secret", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_twlogin_secret" name="the_champ_login[twitter_secret]" type="text" value="<?php echo isset($theChampLoginOptions['twitter_secret']) ? $theChampLoginOptions['twitter_secret'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sltw_secret_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Twitter Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Twitter API Secret', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-twitter-api-key-and-secret/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Website</strong> and <strong>Callback URL</strong> options at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slli_key_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_lilogin_key"><?php _e("LinkedIn API Key", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_lilogin_key" name="the_champ_login[li_key]" type="text" value="<?php echo isset($theChampLoginOptions['li_key']) ? $theChampLoginOptions['li_key'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slli_key_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for LinkedIn Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get LinkedIn API Key', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-linkedin-api-key/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Website URL</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slgp_id_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_gplogin_key"><?php _e("Google+ Client ID", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_gplogin_key" name="the_champ_login[google_key]" type="text" value="<?php echo isset($theChampLoginOptions['google_key']) ? $theChampLoginOptions['google_key'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slgp_id_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for GooglePlus Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get GooglePlus Client ID', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-google-plus-client-id/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>AUTHORIZED JAVASCRIPT ORIGINS</strong> and <strong>AUTHORIZED REDIRECT URI</strong> options at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']; ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slvk_id_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_vklogin_key"><?php _e("Vkontakte Application ID", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_vklogin_key" name="the_champ_login[vk_key]" type="text" value="<?php echo isset($theChampLoginOptions['vk_key']) ? $theChampLoginOptions['vk_key'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slvk_id_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Vkontakte Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Vkontakte Application ID', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-vkontakte-application-id/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Site address</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slinsta_id_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_insta_key"><?php _e("Instagram Client ID", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_insta_key" name="the_champ_login[insta_id]" type="text" value="<?php echo isset($theChampLoginOptions['insta_id']) ? $theChampLoginOptions['insta_id'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slinsta_id_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Instagram Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Instagram Client ID', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-instagram-client-id/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Website URL</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()); ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slxing_ck_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_slxing_ck"><?php _e("Xing Consumer Key", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_slxing_ck" name="the_champ_login[xing_ck]" type="text" value="<?php echo isset($theChampLoginOptions['xing_ck']) ? $theChampLoginOptions['xing_ck'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slxing_ck_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Xing Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Xing Consumer Key', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-xing-consumer-key-and-secret/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Callback domain</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']; ?></strong>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_slxing_cs_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_slxing_cs"><?php _e("Xing Consumer Secret", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_slxing_cs" name="the_champ_login[xing_cs]" type="text" value="<?php echo isset($theChampLoginOptions['xing_cs']) ? $theChampLoginOptions['xing_cs'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_slxing_cs_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Xing Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Xing Consumer Secret', 'Super-Socializer'), 'http://support.heateor.com/how-to-get-xing-consumer-key-and-secret/') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Callback domain</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']; ?></strong>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<img id="the_champ_sl_twitch_id_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_twitch_id"><?php _e("Twitch Client ID", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_twitch_id" name="the_champ_login[twitch_client_id]" type="text" value="<?php echo isset($theChampLoginOptions['twitch_client_id']) ? $theChampLoginOptions['twitch_client_id'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_twitch_id_help_cont">
							<td colspan="2">
							<div>
							<?php echo sprintf(__('Required for Twitch Social Login to work. Please follow the documentation at <a href="%s" target="_blank">this link</a> to get Twitch Client ID', 'Super-Socializer'), 'http://support.heateor.com/how-to-enable-twitch-login-at-wordpress-website') ?>
							<br/>
							<span style="color: #14ACDF"><?php _e('Paste following url in <strong>Redirect URI</strong> option at the link mentioned', 'Super-Socializer'); ?></span>
							<br/>
							<strong style="color: #14ACDF"><?php echo esc_url(home_url()) . '/?SuperSocializerAuth=Twitch'; ?></strong>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
				</div>
				<?php include 'help.php'; ?>
			</div>
			
			<div class="menu_containt_div" id="tabs-2">
				<div class="clear"></div>
				<div class="the_champ_left_column">
				<div class="stuffbox">
					<h3 class="hndle"><label><?php _e('Social Login Options', 'Super-Socializer');?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<img id="the_champ_sl_title_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_fblogin_title"><?php _e("Title", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_fblogin_title" name="the_champ_login[title]" type="text" value="<?php echo isset($theChampLoginOptions['title']) ? $theChampLoginOptions['title'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_title_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Text to display above the Social Login interface', 'Super-Socializer') ?>
							</div>
							<img src="<?php echo plugins_url('../images/snaps/title.png', __FILE__); ?>" />
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_loginpage_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_fblogin_enableAtLogin"><?php _e("Enable at login page", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_fblogin_enableAtLogin" name="the_champ_login[enableAtLogin]" type="checkbox" <?php echo isset($theChampLoginOptions['enableAtLogin']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_loginpage_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Social Login interface will get enabled at the login page of your website', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_regpage_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_fblogin_enableAtRegister"><?php _e("Enable at register page", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_fblogin_enableAtRegister" name="the_champ_login[enableAtRegister]" type="checkbox" <?php echo isset($theChampLoginOptions['enableAtRegister']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_regpage_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Social Login interface will get enabled at the registration page of your website', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_cmntform_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_fblogin_enableAtComment"><?php _e("Enable at comment form", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_fblogin_enableAtComment" name="the_champ_login[enableAtComment]" type="checkbox" <?php echo isset($theChampLoginOptions['enableAtComment']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_cmntform_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Social Login interface will get enabled at your Wordpress Comment form', 'Super-Socializer') ?>
							</div>
							<img src="<?php echo plugins_url('../images/snaps/sl_wpcomment.png', __FILE__); ?>" />
							</td>
						</tr>

						<tr>
							<th>
							<img id="the_champ_sl_linking_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_linking"><?php _e("Link social account to already existing account, if email address matches", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_linking" name="the_champ_login[link_account]" type="checkbox" <?php echo isset($theChampLoginOptions['link_account']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_linking_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If email address of the user\'s Social Account matches with an already exisitng account at your website, that social account will be linked to existing account. User would be able to manage this from Social Account Linking interface at their profile page.', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>

						<?php
						/**
						 * Check if WooCommerce is active
						 **/
						if ( the_champ_ss_woocom_is_active() ) {
						    ?>
						    <tr>
								<th>
								<img id="the_champ_sl_wc_before_form_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
								<label for="the_champ_sl_wc_before_form"><?php _e("Enable before WooCommerce Customer Login Form", 'Super-Socializer'); ?></label>
								</th>
								<td>
								<input id="the_champ_sl_wc_before_form" name="the_champ_login[enable_before_wc]" type="checkbox" <?php echo isset($theChampLoginOptions['enable_before_wc']) ? 'checked = "checked"' : '';?> value="1" />
								</td>
							</tr>
							
							<tr class="the_champ_help_content" id="the_champ_sl_wc_before_form_help_cont">
								<td colspan="2">
								<div>
								<?php _e('Social Login Interface will get enabled before the customer login form at WooCommerce My Account page', 'Super-Socializer') ?>
								</div>
								</td>
							</tr>

							<tr>
								<th>
								<img id="the_champ_sl_wc_after_form_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
								<label for="the_champ_sl_wc_after_form"><?php _e("Enable after WooCommerce Customer Login Form", 'Super-Socializer'); ?></label>
								</th>
								<td>
								<input id="the_champ_sl_wc_after_form" name="the_champ_login[enable_after_wc]" type="checkbox" <?php echo isset($theChampLoginOptions['enable_after_wc']) ? 'checked = "checked"' : '';?> value="1" />
								</td>
							</tr>
							
							<tr class="the_champ_help_content" id="the_champ_sl_wc_after_form_help_cont">
								<td colspan="2">
								<div>
								<?php _e('Social Login Interface will get enabled after the customer login form at WooCommerce My Account page', 'Super-Socializer') ?>
								</div>
								</td>
							</tr>

							<tr>
								<th>
								<img id="the_champ_sl_wc_checkout_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
								<label for="the_champ_sl_wc_checkout"><?php _e("Enable at WooCommerce checkout page", 'Super-Socializer'); ?></label>
								</th>
								<td>
								<input id="the_champ_sl_wc_checkout" name="the_champ_login[enable_wc_checkout]" type="checkbox" <?php echo isset($theChampLoginOptions['enable_wc_checkout']) ? 'checked = "checked"' : '';?> value="1" />
								</td>
							</tr>
							
							<tr class="the_champ_help_content" id="the_champ_sl_wc_checkout_help_cont">
								<td colspan="2">
								<div>
								<?php _e('Social Login Interface will get enabled at WooCommerce checkout page', 'Super-Socializer') ?>
								</div>
								</td>
							</tr>
						    <?php
						}
						if(!isset($theChampFacebookOptions['force_fb_comment']) && isset($theChampLoginOptions['enable'])){
							?>
							<tr>
								<th>
								<img id="the_champ_approve_comment_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
								<label for="the_champ_approve_comment"><?php _e("Auto-approve comments made by Social Login users", 'Super-Socializer'); ?></label>
								</th>
								<td>
								<input id="the_champ_approve_comment" name="the_champ_login[autoApproveComment]" type="checkbox" <?php echo isset($theChampLoginOptions['autoApproveComment']) ? 'checked = "checked"' : '';?> value="1" />
								</td>
							</tr>
							
							<tr class="the_champ_help_content" id="the_champ_approve_comment_help_cont">
								<td colspan="2">
								<div>
								<?php _e('If this option is enabled, and WordPress comment is made by Social Login user, comment will get approved immediately without keeping in moderation.', 'Super-Socializer') ?><br/>
								<strong><?php _e('Note: This is not related to Facebook comments', 'Super-Socializer') ?></strong>
								</div>
								</td>
							</tr>
							<?php
						}
						?>
						<tr>
							<th>
							<img id="the_champ_sl_avatar_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_login_avatar"><?php _e("Enable social avatar", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_login_avatar" onclick="if(this.checked){jQuery('#the_champ_avatar_options').css('display', 'table-row-group')}else{ jQuery('#the_champ_avatar_options').css('display', 'none') }" name="the_champ_login[avatar]" type="checkbox" <?php echo isset($theChampLoginOptions['avatar']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_avatar_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Social profile pictures of the logged in user will be displayed as profile avatar', 'Super-Socializer') ?>
							</div>
							<img src="<?php echo plugins_url('../images/snaps/sl_wpavatar.png', __FILE__); ?>" />
							<img src="<?php echo plugins_url('../images/snaps/sl_wpavatar2.png', __FILE__); ?>" />
							</td>
						</tr>
						<tbody id="the_champ_avatar_options" <?php echo !isset($theChampLoginOptions['avatar']) ? 'style = "display: none"' : '';?> >
						<tr>
							<th>
							<img id="the_champ_sl_avatar_quality_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label><?php _e("Avatar quality", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_login_average_avatar" name="the_champ_login[avatar_quality]" type="radio" <?php echo !isset($theChampLoginOptions['avatar_quality']) || $theChampLoginOptions['avatar_quality'] == 'average' ? 'checked = "checked"' : '';?> value="average" /> <label for="the_champ_login_average_avatar"><?php _e("Average", 'Super-Socializer'); ?></label><br/>
							<input id="the_champ_login_better_avatar" name="the_champ_login[avatar_quality]" type="radio" <?php echo isset($theChampLoginOptions['avatar_quality']) && $theChampLoginOptions['avatar_quality'] == 'better' ? 'checked = "checked"' : '';?> value="better" /> <label for="the_champ_login_better_avatar"><?php _e("Best", 'Super-Socializer'); ?></label>
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_avatar_quality_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Choose avatar quality', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>

						<?php if($theChampIsBpActive){ ?>
						<tr>
							<th>
							<img id="the_champ_sl_avatar_options_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_avatar_options"><?php _e("Show option for users to update social avatar at BuddyPress profile page", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_avatar_options" name="the_champ_login[avatar_options]" type="checkbox" <?php echo isset($theChampLoginOptions['avatar_options']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_avatar_options_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If enabled, users would be able to update their social avatar from "Profile photo" section in BuddyPress profile at front-end', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						<?php } ?>

						</tbody>
						
						<tr>
							<th>
							<img id="the_champ_sl_emailreq_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_login_email_required"><?php _e("Email required", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input onclick="theChampEmailPopupOptions(this)" id="the_champ_login_email_required" name="the_champ_login[email_required]" type="checkbox" <?php echo isset($theChampLoginOptions['email_required']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_emailreq_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If enabled and Social ID provider does not provide user\'s email address on login, user will be asked to provide his/her email address. Otherwise, a dummy email will be generated', 'Super-Socializer') ?>
							</div>
							<img src="<?php echo plugins_url('../images/snaps/sl_email_required.png', __FILE__); ?>" />
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_postreg_email_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_password_email"><?php _e("Send post-registration email to user to set account password", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_password_email" name="the_champ_login[password_email]" type="checkbox" <?php echo isset($theChampLoginOptions['password_email']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_postreg_email_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If enabled, an email will be sent to user after registration through Social Login, regarding his/her login credentials (username-password to be able to login via traditional login form)', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>

						<tr>
							<th>
							<img id="the_champ_sl_postreg_admin_email_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_postreg_admin_email"><?php _e("Send new user registration notification email to admin", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_postreg_admin_email" name="the_champ_login[new_user_admin_email]" type="checkbox" <?php echo isset($theChampLoginOptions['new_user_admin_email']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_postreg_admin_email_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If enabled, an email will be sent to admin after new user registers through Social Login, notifying admin about the new user registration', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>

						<?php if($theChampIsBpActive){ ?>
						<tr>
							<th>
							<img id="the_champ_sl_bp_linking_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_sl_bp_linking"><?php _e("Enable social account linking at BuddyPress profile page", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_sl_bp_linking" name="the_champ_login[bp_linking]" type="checkbox" <?php echo isset($theChampLoginOptions['bp_linking']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_bp_linking_help_cont">
							<td colspan="2">
							<div>
							<?php _e('Enable this option to show social account linking interface at BuddyPress profile page', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						<?php } ?>

						<tr>
							<th>
							<img id="the_champ_sl_loginredirect_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label><?php _e("Login redirection", 'Super-Socializer'); ?></label>
							</th>
							<td id="the_champ_login_redirection_column">
							<input id="the_champ_login_redirection_same" name="the_champ_login[login_redirection]" type="radio" <?php echo !isset($theChampLoginOptions['login_redirection']) || $theChampLoginOptions['login_redirection'] == 'same' ? 'checked = "checked"' : '';?> value="same" />
							<label for="the_champ_login_redirection_same"><?php _e('Same page where user logged in', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_login_redirection_home" name="the_champ_login[login_redirection]" type="radio" <?php echo isset($theChampLoginOptions['login_redirection']) && $theChampLoginOptions['login_redirection'] == 'homepage' ? 'checked = "checked"' : '';?> value="homepage" />
							<label for="the_champ_login_redirection_home"><?php _e('Homepage', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_login_redirection_account" name="the_champ_login[login_redirection]" type="radio" <?php echo isset($theChampLoginOptions['login_redirection']) && $theChampLoginOptions['login_redirection'] == 'account' ? 'checked = "checked"' : '';?> value="account" />
							<label for="the_champ_login_redirection_account"><?php _e('Account dashboard', 'Super-Socializer') ?></label><br/>
							<?php if($theChampIsBpActive){ ?>
								<input id="the_champ_login_redirection_bp" name="the_champ_login[login_redirection]" type="radio" <?php echo isset($theChampLoginOptions['login_redirection']) && $theChampLoginOptions['login_redirection'] == 'bp_profile' ? 'checked = "checked"' : '';?> value="bp_profile" />
								<label for="the_champ_login_redirection_bp"><?php _e('BuddyPress profile page', 'Super-Socializer') ?></label><br/>
							<?php } ?>
							<input id="the_champ_login_redirection_custom" name="the_champ_login[login_redirection]" type="radio" <?php echo isset($theChampLoginOptions['login_redirection']) && $theChampLoginOptions['login_redirection'] == 'custom' ? 'checked = "checked"' : '';?> value="custom" />
							<label for="the_champ_login_redirection_custom"><?php _e('Custom Url', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_login_redirection_url" name="the_champ_login[login_redirection_url]" type="text" value="<?php echo isset($theChampLoginOptions['login_redirection_url']) ? $theChampLoginOptions['login_redirection_url'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_loginredirect_help_cont">
							<td colspan="2">
							<div>
							<?php _e('User will be redirected to the selected page after Social Login', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_register_redirect_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label><?php _e("Registration redirection", 'Super-Socializer'); ?></label>
							</th>
							<td id="the_champ_register_redirection_column">
							<input id="the_champ_register_redirection_same" name="the_champ_login[register_redirection]" type="radio" <?php echo !isset($theChampLoginOptions['register_redirection']) || $theChampLoginOptions['register_redirection'] == 'same' ? 'checked = "checked"' : '';?> value="same" />
							<label for="the_champ_register_redirection_same"><?php _e('Same page from where user registered', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_register_redirection_home" name="the_champ_login[register_redirection]" type="radio" <?php echo isset($theChampLoginOptions['register_redirection']) && $theChampLoginOptions['register_redirection'] == 'homepage' ? 'checked = "checked"' : '';?> value="homepage" />
							<label for="the_champ_register_redirection_home"><?php _e('Homepage', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_register_redirection_account" name="the_champ_login[register_redirection]" type="radio" <?php echo isset($theChampLoginOptions['register_redirection']) && $theChampLoginOptions['register_redirection'] == 'account' ? 'checked = "checked"' : '';?> value="account" />
							<label for="the_champ_register_redirection_account"><?php _e('Account dashboard', 'Super-Socializer') ?></label><br/>
							<?php if($theChampIsBpActive){ ?>
								<input id="the_champ_register_redirection_bp" name="the_champ_login[register_redirection]" type="radio" <?php echo isset($theChampLoginOptions['register_redirection']) && $theChampLoginOptions['register_redirection'] == 'bp_profile' ? 'checked = "checked"' : '';?> value="bp_profile" />
								<label for="the_champ_register_redirection_bp"><?php _e('BuddyPress profile page', 'Super-Socializer') ?></label><br/>
							<?php } ?>
							<input id="the_champ_register_redirection_custom" name="the_champ_login[register_redirection]" type="radio" <?php echo isset($theChampLoginOptions['register_redirection']) && $theChampLoginOptions['register_redirection'] == 'custom' ? 'checked = "checked"' : '';?> value="custom" />
							<label for="the_champ_register_redirection_custom"><?php _e('Custom Url', 'Super-Socializer') ?></label><br/>
							<input id="the_champ_register_redirection_url" name="the_champ_login[register_redirection_url]" type="text" value="<?php echo isset($theChampLoginOptions['register_redirection_url']) ? $theChampLoginOptions['register_redirection_url'] : '' ?>" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_register_redirect_help_cont">
							<td colspan="2">
							<div>
							<?php _e('User will be redirected to the selected page after registration (first Social Login) through Social Login', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
					<div class="stuffbox" <?php echo !isset($theChampLoginOptions['email_required']) ? 'style="display: none"' : '' ?> id="the_champ_email_popup_options">
					<h3 class="hndle"><label><?php _e('Email popup options', 'Super-Socializer');?></label></h3>
					<div class="inside">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<tr>
							<th>
							<img id="the_champ_sl_emailreq_text_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_login_email_required_text"><?php _e("Text on 'Email required' popup", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<textarea rows="4" cols="40" id="the_champ_login_email_required_text" name="the_champ_login[email_popup_text]"><?php echo isset($theChampLoginOptions['email_popup_text']) ? $theChampLoginOptions['email_popup_text'] : '' ?></textarea>
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_emailreq_text_help_cont">
							<td colspan="2">
							<div>
							<?php _e('This text will be displayed on email required popup. Leave empty if not required.', 'Super-Socializer') ?>
							</div>
							<img width="550" src="<?php echo plugins_url('../images/snaps/sl_email_popup_message.png', __FILE__); ?>" />
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_emailreq_error_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_login_email_required_error"><?php _e("Error message for 'Email required' popup", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<textarea rows="4" cols="40" id="the_champ_login_email_required_error" name="the_champ_login[email_error_message]"><?php echo isset($theChampLoginOptions['email_error_message']) ? $theChampLoginOptions['email_error_message'] : '' ?></textarea>
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_emailreq_error_help_cont">
							<td colspan="2">
							<div>
							<?php _e('This message will be displayed to user if it provides invalid or already registered email', 'Super-Socializer') ?>
							</div>
							<img width="550" src="<?php echo plugins_url('../images/snaps/sl_emailreq_message.png', __FILE__); ?>" />
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_email_popup_height_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_email_popup_height"><?php _e("Email popup height", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input style="width: 100px" id="the_champ_email_popup_height" name="the_champ_login[popup_height]" type="text" value="<?php echo isset($theChampLoginOptions['popup_height']) ? $theChampLoginOptions['popup_height'] : '' ?>" />px
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_email_popup_height_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If you are seeing vertical scrollbar in the "Email required" popup, you can increase the height of popup by specifying in this option. Leave empty for default.', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
						
						<tr>
							<th>
							<img id="the_champ_sl_emailver_help" class="the_champ_help_bubble" src="<?php echo plugins_url('../images/info.png', __FILE__) ?>" />
							<label for="the_champ_password_email_verification"><?php _e("Enable email verification", 'Super-Socializer'); ?></label>
							</th>
							<td>
							<input id="the_champ_password_email_verification" name="the_champ_login[email_verification]" type="checkbox" <?php echo isset($theChampLoginOptions['email_verification']) ? 'checked = "checked"' : '';?> value="1" />
							</td>
						</tr>
						
						<tr class="the_champ_help_content" id="the_champ_sl_emailver_help_cont">
							<td colspan="2">
							<div>
							<?php _e('If enabled, email provided by the user will be verified by sending a confirmation link to that email. User would not be able to login without verifying his/her email', 'Super-Socializer') ?>
							</div>
							</td>
						</tr>
					</table>
					</div>
					</div>
				</div>
				<?php include 'help.php'; ?>
			</div>
			
			<?php if($theChampIsBpActive){
				$profileFields = array(
					'Social ID' => 'id',
					'Social Network' => 'provider',
					'Email' => 'email',
					'Name' => 'name',
					'Username' => 'user_name',
					'First Name' => 'first_name',
					'Last Name' => 'last_name',
					'Bio' => 'bio',
					'Social Profile Url' => 'link',
					'Social Avatar Url' => 'avatar',
					'Large Social Avatar Url' => 'large_avatar'
				);
			?>
			<div class="menu_containt_div" id="tabs-3">
				<div class="clear"></div>
				<div class="the_champ_left_column">
				<div class="stuffbox">
					<h3><label><?php _e('XProfile Integration', 'Super-Socializer');?></label></h3>
					<div class="inside">
					<?php
					global $wpdb;
					$xprofileFields = $wpdb -> get_results("SELECT * FROM " . $wpdb -> prefix . "bp_xprofile_fields");
					if($xprofileFields){
						?>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table editcomment menu_content_table">
						<?php
						foreach($xprofileFields as $field){
							if($field -> id == 1){
								continue;
							}	
							?>
							<tr>
								<td>
									<label><?php _e($field -> name, 'Super-Socializer'); ?></label>
								</td>
								<td>
									<select name="the_champ_login[xprofile_mapping][<?php echo $field -> name ?>]">
										<option value="">--<?php _e('Select', 'Super-Socializer') ?>--</option>
										<?php
										foreach($profileFields as $key => $val){
											?>
											<option <?php echo isset($theChampLoginOptions['xprofile_mapping'][$field -> name]) && $theChampLoginOptions['xprofile_mapping'][$field -> name] == $val ? 'selected' : '' ?> value="<?php echo $val ?>"><?php echo ucfirst($key) ?></option>
											<?php
										}
										?>
									</select>
								</td>
							</tr>
							<?php
						}
						?>
						</table>
						<?php
					}
					?>
					</div>
				</div>
				</div>
				<?php include 'help.php'; ?>
			</div>
			<?php } ?>
			
			<div class="menu_containt_div" id="tabs-4">
				<div class="clear"></div>
				<div class="the_champ_left_column">
				<div class="stuffbox">
					<h3><label><?php _e('Shortcode & Widget', 'Super-Socializer');?></label></h3>
					<div class="inside">
						<p><a style="text-decoration:none" href="http://support.heateor.com/social-login-shortcode-and-widget/" target="_blank"><?php _e('Social Login Shortcode & Widget', 'Super-Socializer') ?></a></p>
						<p><a style="text-decoration:none" href="http://support.heateor.com/social-linking-shortcode" target="_blank"><?php _e('Social Linking Shortcode', 'Super-Socializer') ?></a></p>
					</div>
				</div>
				</div>
				<?php include 'help.php'; ?>
			</div>

			<div class="menu_containt_div" id="tabs-5">
				<div class="clear"></div>
				<div class="the_champ_left_column">
				<div class="stuffbox">
					<h3><label><?php _e('FAQ', 'Super-Socializer');?></label></h3>
					<div class="inside faq">
						<p><a href="http://support.heateor.com/browser-blocking-social-features/" target="_blank"><?php _e('Why Facebook share counts are not appearing?', 'Super-Socializer' ) ?></a></p>
						<p><a href="http://support.heateor.com/facebook-login-not-working/" target="_blank"><?php _e('Why is Facebook login not working?', 'Super-Socializer' ) ?></a></p>
						<p><a href="http://support.heateor.com/browser-blocking-social-features/" target="_blank"><?php _e('Why is my browser blocking some features of the plugin?', 'Super-Socializer' ) ?></a></p>
					</div>
				</div>
				</div>
				<?php include 'help.php'; ?>
			</div>
			
		</div>

		<div class="the_champ_clear"></div>
		<p class="submit">
			<input style="margin-left:8px" type="submit" name="save" class="button button-primary" value="<?php _e("Save Changes", 'Super-Socializer'); ?>" />
		</p>
		</form>
		
	</div>