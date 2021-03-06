=== Plugin Name ===
Contributors: austinpickett
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2ZQUZXCYXH6C2
Tags: facebook, thumbnail, link
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 0.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

This plugin adds a og:image tag to your head with the input/upload of the image in the settings.

== Installation ==

1. Upload `default-facebook-plugin.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure `<?wp_head()?>` is in your header, before the </head> tag.

== Frequently Asked Questions ==

= Will you have multiple images? =

Yes, that will be released later.

= Will you have images per post/page? = 

Yes, that will be released later.

= What about other og:data tags? =

That seems to go beyond the scope of this simple plugin, but I may come out with something to answer that demand.

== Screenshots ==

1. Enter the URL or upload the image for your thumbnail

== Changelog ==

= 0.5 =
* Sanitized inputs
* code cleanup

= 0.4 =
* header fix.

= 0.3 = 
* Added Screen shot

= 0.2 =
* Initial SVN push.
* Readme.txt fix
* ob and session clears

== Upgrade Notice ==

= 0.5 =
* This is a security fix. Upgrade immediately

= 0.2 =
* This has a header fix, upgrade immediately.