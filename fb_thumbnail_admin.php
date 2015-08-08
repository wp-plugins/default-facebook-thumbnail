<?php
	if($_POST['fb_thumb_hidden'] == 'Y') {	
		$fb_thumb_url = $_POST['upload_image'];  
		update_option('upload_image', $fb_thumb_url); 
?>
	<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?
	} else {

	}
?>

<div class="wrap">
	<?php echo "<h2>Default Facebook Thumbnails</h2>"; ?>
	<form name="fb_thumb_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<?php
			settings_fields('fb_thumb_opt');
			do_settings_sections('fb_thumb_opt');
		
			$url = get_option('upload_image');
		?>
		<input type="hidden" name="fb_thumb_hidden" value="Y">
		<?php    echo "<h4>Settings</h4>"; ?>
		<div id="uploads">
		<div class="uploader">
		<p style="display: block;"><?php _e("Upload Image or URL: " ); ?>
			<input id="upload_image" type="text" size="36" name="upload_image" value="<?=get_option('upload_image') ?>"  />
			<input id="upload_image_button" type="button" value="Upload Image" /><br />
		</p>
		</div>
		</div>
		
		<hr />
		<?php submit_button();?>
	</form>
</div>