=== Show articles by keyword ===
Contributors: flomei
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WPRAN9VU6TMFS
Tags: Posts, Related, Articles, News, Keyword, Tag, Linking
Requires at least: 3.0
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin adds a shortcode so you can show related articles based on a keyword with no effort.

== Description ==

Sometimes you want to point your visitors/readers on other posts covering a specific topic.

You can either have this coded the hard way in your theme or use a plugin which will always show related articles, but what if you only want this to happen sometimes?

This plugin gives you a shortcode to insert in posts where you want to display a number of related posts. They will be shown with headline and date (optional) and can be styled via CSS.

== Installation ==

1. Upload `show_articles_by_keyword.php` to the `/wp-content/plugins/` directory or install the plugin from the 'Plugins' menu in the WordPress backend
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can now use the shortcode [show_articles keyword=X num=Y] where X is the keyword to look for (no quotes needed) and Y is the number of articles to fetch (standard: 5).
4. Additional parameters: `showdate` can be set to `yes` (default) or `no` to show the post date inline with the headline. `order` can be set to `date` (default) or `rand` to order posts either by the post date or randomly.
5. Note beside: You can also use the shortcode while developing a theme and fill it with dynamically fetched keywords. Have a look at do_shortcode for that (http://codex.wordpress.org/Function_Reference/do_shortcode).

== Frequently asked questions ==

= How can I style the output? =

Every entry is wrapped in a section-element with the class `abk`. The headline (with or without date) is wrapped in a span-element with the class `abk_h`. This way you can easily style the related articles output.


== Screenshots ==

Text-based plugins do not seem to be that interesting, so no screenshot... ;-D

== Changelog ==

1.0 (2014-03-18) First relase - Seems to work as supposed, could not find any bugs so far.

== Upgrade notice ==

= 1.0 =
(2014-03-18) First relase - Seems to work as supposed, could not find any bugs so far.

== Donations ==
If you find this plugin to be very useful it would be really kind if you donate a few bucks via PayPal (zahlungen@flomei.de).

Otherwise I really appreciate if you simply spread the word about this plugin or link back to www.flomei.de. :-)