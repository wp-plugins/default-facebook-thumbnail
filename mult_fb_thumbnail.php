<?php
/*
Plugin Name: Default Facebook Thumbnails
Plugin URI: http://wordpress.org/extend/plugins/default-facebook-thumbnail/
Description: This plugin allows you to create a Default thumbnails on Facebook when posting your link.
Version: 0.5
Author: Austin K. Pickett
Author URI: http://www.austinkpickett.com
License: GPL2
*/
class mult_fb_thumbnail {
	public function __construct() {	
		if(is_admin()){
			add_action('admin_menu', array(&$this, 'fb_thumbnail_admin_actions'));
			add_action('admin_init', array(&$this, 'register_mysettings'));
			if (isset($_GET['page']) && $_GET['page'] == 'fb_thumbs') {
				add_action('admin_print_scripts', array(&$this, 'my_admin_scripts'));
				add_action('admin_print_styles', array(&$this, 'my_admin_styles'));
			}
		}
		add_action('wp_head', array(&$this, 'print_url'));	
	}
	public function my_admin_scripts() {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('my-upload', plugins_url('js/script.js', __FILE__), array('jquery','media-upload','thickbox'));
		wp_enqueue_script('my-upload');
	}
	public static function my_admin_styles() {
		wp_enqueue_style('thickbox');
	}
	public function fb_thumbnail_admin_actions() {  
		add_menu_page( 'Default FB Thumbnails', 
			'Default FB Thumbnails', 'edit_themes', 'fb_thumbs', 
			array(&$this, 'fb_thumbnail_admin'), plugins_url( "img/facebook.png", __FILE__ ), 1001); 
	}
	public static function fb_thumbnail_admin() {
		include_once("fb_thumbnail_admin.php");
	}
	public static function register_mysettings() {
		register_setting('fb_thumb_opt', 'upload_image');
	}		
	public static function print_url() {
		echo '<meta property="og:image" content="'.strip_tags(get_option('upload_image')).'" />';		
	}
}
session_start();
ob_start();
$fb_thumbnails = new mult_fb_thumbnail();
ob_clean();
?>