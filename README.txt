=== NS Shortcodes ===
Contributors: rabmalin
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=ramrojob1%40gmail%2ecom&lc=US&item_name=Nilambar%20Sharma&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: shortcodes, content, themes, URL,
Requires at least: 3.5.1
Tested up to: 4.0
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Several shortcodes you can use in your theme, content and Text widget

== Description ==

This plugin provides you several shortcodes which you can use in your theme, content and Text widget. Simple but very useful shortcodes. You can see **NS Shortcodes** page under **Appearance** to see what shortcodes are available for you.

= Available Shortcodes =


**[ns-site-title]** : *Display Site Title*

**[ns-site-tagline]** : *Display Site Tagline*

**[ns-site-url]** : *Display Site URL*

**[ns-home-url]** : *Display home URL*

**[ns-current-year]** : *Display current year*

**[ns-login-url]** : *Display login URL*

**[ns-login-url redirect="current"]** : *Display login URL with redirection to current page*

**[ns-login-url redirect="home"]** : *Display login URL with redirection to home page*

**[ns-logout-url]** : *Display logout URL*

**[ns-logout-url redirect="current"]** : *Display logout URL with redirection to current page*

**[ns-logout-url redirect="home"]** : *Display logout URL with redirection to home page*

**[ns-registration-url]** : *Display registration URL*

**[ns-lost-password-url]** : *Display lost password URL*

**[ns-lost-password-url redirect="current"]** : *Display lost password URL with redirection to current page*

**[ns-lost-password-url redirect="home"]** : *Display lost password URL with redirection to home page*

**[ns-theme-url]** : *Display theme URL*

**[ns-theme-name]** : *Display theme name*

**[ns-theme-author-url]** : *Display theme author URL*

**[ns-theme-author-name]** : *Display theme author name*

**[ns-theme-version]** : *Display theme version*

= Usage =
* You can use shortcodes in Post content or Page content or any other post type.
* If you want to use shortcodes in Text Widget, please [see this](http://wordpress.org/plugins/ns-shortcodes/faq/)
* To use shortcode in template file, see example given below.

= Examples =
Example code to put in your template file.
`&lt;?php echo do_shortcode('Copyright &amp;copy; [ns-current-year] [ns-site-title] All rights reserved'); ?&gt;`




== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' Plugin Dashboard
1. Select 'ns-shortcodes.zip' from your computer
1. Upload
1. Activate the plugin on the WordPress Plugin Dashboard

= Using FTP =

1. Extract 'ns-shortcodes.zip' to your computer
1. Upload the 'ns-shortcodes' directory to your 'wp-content/plugins' directory
1. Activate the plugin on the WordPress Plugins dashboard


== Frequently Asked Questions ==

= How to enable shortcode support in Text Widget? =
Text Widget does not support shortcode by default. To enable shortcode in Text Widget, add following piece of code in your theme's functions.php file inside PHP tag.
`add_filter('widget_text', 'do_shortcode');`


= There is something cool you could add... =

Nice, make a post on the [Support Forum](http://wordpress.org/support/plugin/ns-shortcodes/ "NS Shortcodes Support") and let us know. We are always looking for ways to improve our plugins.

== Screenshots ==

1. NS Shortcodes Settings

== Changelog ==

= 1.0.2 =
* Bug fixes

= 1.0.1 =
* Bug fixes
* New design in admin page

= 1.0.0 =
* Initial release

== Upgrade Notice ==
NS Shortcodes
