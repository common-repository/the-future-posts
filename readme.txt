=== The Future Posts ===
Contributors: jdalmeida
Author: Jos&eacute De Almeida
Author URI: https://www.josedealmeida.com/
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YPL25DBZSWHWY
Tags: post grid, responsive, scheduled, pods, advanced custom fields, woocommerce, elementor, beaver builder, visual composer
Requires at least: 4.6.0
Tested up to: 4.9.6
Requires PHP: 5.6.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
 
Display future (scheduled) or published posts in responsive grids using shortcodes.


 
== Description ==

Display future (scheduled) posts in responsive grids using shortcodes. Works with PODS, Advanced Custom Fields, WooCommerce, and all page builders.

Compatible with Beaver Builder, Divi Builder, Elementor, SiteOrigin, Thrive Architect, WPBakery / Visual Composer, etc. Works with virtually every Theme available for WordPress. Plenty of customization options available either for the power or expert user. Use the default theme or create your own unlimited themes. Includes extensive documentation and a huge array of examples to start with.

The Future Posts is powerfull enough to be used also as a regular post grid system, for it also works with regular published posts in exactly the very same way.

Unlike other post grid plugins of its kind, The Future Posts fully supports custom post types and custom fields, created by PODS, Advanced Custom Fields, Toolset, etc. Each post grid can display whatever fields you want, either standard or custom.

Right out of the box, The Future Posts features pretty permalinks on regular and custom post types (including WooCommerce). Pretty permalinks are supported on all posts status (including future posts). Furthermore, it also allows showing non-published posts, like future posts, even for non-logged anonymous users.

= Supported features =

* Post status (all supported: future, publish, draft, pending, private, trash, auto-draft, inherit)
* Post type (blog, WooCommerce, custom post type)
* Category name (blog)
* Taxonomy (WooCommerce, custom post type)
* Taxonomy terms (WooCommerce category, custom category type)
* Tag (blog, WooCommerce, custom post type)
* Date before
* Date after (compatible with The Future Is Now plugin)
* Date inclusive
* Offset (shift posts)
* Posts per page
* Posts per column
* Order by
* Order
* No posts string
* Overlay background effect
* Overlay icons (includes 150 image overlay related icons with great design)
* Fields (including any custom fields created with PODS, Advanced Custom Fields, Toolset, etc)
* Themes with full CSS customization
* and more...



== Installation ==
 
= From within WordPress dashboard =

1. Go to your admin area and select Plugins -> Add new from the menu.
2. Search for "The Future Posts".
3. Click "Install"
4. Click "Activate"

= Manually via FTP =

1. Upload the folder 'the-future-posts/' into the '/wp-content/plugins/' directory
2. Activate the plugin through the *Plugins* tab in WordPress

= After Installation =

1. Go to your WordPress admin area and select The Future Posts option from the left menu.
2. Read and follow the instructions. All options are fully detailed there.



== Frequently Asked Questions ==

= Which grid system is used? =

Gridlex. A very simple, lightweight, fast, reliable and responsive CSS-only grid system, supported by media queries, to quickly create modern layouts. Based on Flexbox (CSS Flexible Box Layout Module).

Copyright &copy; 2016 by Laurent G. / <a href='http://gridlex.devlint.fr/' target='_blank'>http://gridlex.devlint.fr/</a>

= Can I use it on WordPress text editor? =

Yes. You can use The Future Posts shortcodes on any page or post using the WordPress text editor. Just insert the shortcode where you want the The Future Posts grid to appear. You can insert multiple instances of The Future Posts on the same page or post, each one with its own specific settings.

= Can I use it on Widgets and Sidebars? =

Yes. You can use The Future Posts shortcodes on sidebars and widget areas like footers. On the Appearance / Widgets admin page just use the Text widget or the Custom HTML widget to insert the shortcode(s).

= Can I use it on Page Builders? =

Yes. As being a shortcode, The Future Posts is compatible with virtually any page builder of your choice, like Elementor, Beaver Builder, WPBakery / Visual Composer, etc. Refer to the Options page for details.

= Can I make my own custom Theme? =

Yes. You can create as many Themes as you want, and apply them to any instance of The Future Posts. Use the Custom Theme CSS sample, available on the Options page, to construct you own Themes. I do encourage Third Party Themes. Let me know if you have a great Custom Theme to share, perhaps it can be included on a future release. 

= Can I show today's posts only? =

Yes. For published only posts, use this shortcode:

<code>[the_future_posts post_status="publish" date_before="today" date_after="today"]</code>

And for simultaneous scheduled and published posts, use this shortcode:

<code>[the_future_posts post_status="future,publish" date_before="today" date_after="today"]</code>

= Is it compatible with The Future Is Now plugin? =

Yes. Since this plugin changes the post status of every scheduled post (from 'future' to 'publish'), you cannot use post_status='future' attribute (as there won't be any). So, you must use the post_status='publish' along with the 'date_after' attribute. like this:

<code>[the_future_posts post_status="publish" date_after="now"]</code>

= Does it features pretty permalinks on regular and custom post types (including WooCommerce)? =

Yes. Right out of the box. Uses WordPress' Permalink Settings whatever they may be.

= Does it features pretty permalinks on all posts status (including future posts)? =

Yes. Say goodbye to 'http://the-future-posts.local/?p=123'. Say hello to 'http://the-future-posts.local/my-category/sample-post/'.

= Allows showing non-published posts, like future posts (or whatever), even for non-logged anonymous users? =

Yes. A must have, otherwise WordPress returns a 404 error unless you are a logged Administrator.

= Can I change the default image overlay icon? =

Yes. The Future Posts is bundled with a font featuring 150 well choosen image overlay related icons with great design. The default overlay icon, a thin plus sign, is part of that font. There are plenty of free icon pack fonts available on the internet. There is also some WordPress plugins that installs a bunch of well known icon packs, including Font Awesome. You can use any of those font packs and any font included. If you know how to do it you can even use your own font. 

For more information, please refer to the WordPress' admin area, menu The Future Posts, sub-menu option 'Overlay icons'.



== Screenshots ==
 
1. Shortcode: [the_future_posts]
2. Shortcode: [the_future_posts posts_per_column="3" fields="image=large;link;3:1.9|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]
3. Shortcode: [the_future_posts post_status="publish" fields="image=large;link;3:2|title=text;link|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y"]
4. Shortcode: [the_future_posts post_status="publish" posts_per_column="6" fields="image=large;link|title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y!"]
5. Shortcode: [the_future_posts post_status="publish" posts_per_column="3" fields="float=start;left;50%|image=large;link;4:5|float=end|float=start;right;50%|title=text;link|date=text;nolink;M d, Y|excerpt=text;nolink|button=text;link;More...|float=end"]
6. Shortcode: [the_future_posts post_status="publish" posts_per_column="6" fields="image=large;link;1:1"]
7. Shortcode: [the_future_posts post_status="publish" posts_per_column="3" fields="image=large;link;1:1"]
8. Shortcode: [the_future_posts posts_per_column="1" fields="float=start;left;30%|image=large;link;1:1|float=end|float=start;right;70%|title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y|float=end"]
9. Shortcode: [the_future_posts posts_per_column="1" fields="title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y"]
10. Shortcode: [the_future_posts post_status="publish" posts_per_column="5" theme_custom="tfp_rounded_corners" fields="image=large;link;1:1|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]
11. Shortcode: [the_future_posts post_status="publish" posts_per_column="5" theme_custom="tfp_circles" fields="image=large;link;1:1|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]



== Changelog ==

= Versions =

= 1.40 - 2018-08-07 =
* Fixed the plugin output contents in Beaver Builder. The output code was been placed outside the defined module zone.

= 1.37 - 2018-08-07 =
* The sintax error on main.php line 390 seems to be a PHP problem afterall. Not a code bug. I successfully tested it with PHP v5.4.45, v5.5.38, v5.6.20, v7.0.3, v7.1.4 and v7.2.0. I unsuccessfully tested it with v5.2.4, v5.2.17 and v5.3.29. Furthermore, a customer reported the problem with PHP v5.6.30. Solution: update PHP to a more recent version like v7.0.3 and hopefully the problem should disapear.

= 1.36 - 2018-08-06 =
* Fixed sintax error on main.php line 390

= 1.35 - 2018-07-27 =
* Fixed permalinks not working properly.

= 1.34 - 2018-07-25 =
* Fixed (again) custom posts type categories not showing. Hope this is it!

= 1.33 - 2018-07-24 =
* Fixed custom posts type categories not showing.

= 1.32 - 2018-07-23 =
* Updated description and FAQ.

= 1.31 - 2018-07-23 =
* Fixed pretty permalinks on custom post types.

= 1.30 - 2018-07-22 =
* Added 'categories' to the 'fields' attribute. Format: categories=text;[link|nolink];[separator]. Example: "categories=text;link;, ". Default separator is " | ";
* Added three new CSS tags concerning the 'categories' field to the default and custom theme.

= 1.24 - 2018-07-22 =
* Abandoned previous version's method of using pretty permalinks based on 'Post name'. Bad idea...
* Added a new method of having pretty permalinks in ALL posts (including 'Future' posts), keeping WordPress' Permalink Settings whatever they may be. For instance: http://the-future-posts.local/my-category/sample-post/. Thanks, Joelle!
* Now all posts, incluing Future, Draft, Pending, Private, etc, will be shown to anonymous non-logged users, just like Published posts. By default, WordPress returns a 404 error page when a future post is being accessed (thus preventing a future post to be shown), unless accessed by a logged Administrator. This was happening up until now. Not anymore!

= 1.23 - 2018-07-20 =
* Now using post permalinks based on 'Post name' (http://the-future-posts.local/sample-post/) instead of 'Plain' (http://the-future-posts.local/?p=123).

= 1.22 - 2018-07-05 =
* Removed the default 'font-family' CSS tag from the 'the-future-posts.css' file. This way the default font will be inherited from WordPress theme settings.

= 1.21 - 2018-07-03 =
* Updated the 'Quick Start' menu. Now includes the CSS code for the sidebar Demos #7, #8 and #9.
* Added to the 'About' menu a short curriculum about the author. 

= 1.20 - 2018-06-30 =
* Added built-in theme: 'tfp_circles'. See 'Quick Start' menu.
* Added built-in theme: 'tfp_rounded_corners'. See 'Quick Start' menu.
* Added 'div' option to the 'fields' attribute. Inserts '\<DIV\>' and '\<\/DIV\>' HTML tag wherever needed. Format: div=[start|end];[attributes]. Example: div=start;class='my_div_class'. For the attributes, like class, use the ' apostrophe character, not the " quotation mark character.
* Fixed vertical scroll bars on CSS code frames.

= 1.11 - 2018-06-29 =
* Reorganized plugin menu.
* Added several demos on the 'Quick Start' menu.

= 1.10 - 2018-06-28 =
* Added 'overlay' attribute. You can now switch on/off the image overlay from the shortcode. Ignored when image is not linked. Default is 'true;#000000'. Other properties available on CSS code (look for '.the_future_posts_image_overlay').
* Added 'overlay_icon' attribute. You can now display an icon when mouse pointer is over the images. You can switch on/off the image overlay icon from the shortcode. Ignored when image is not linked. Default is 'false;#ffffff'. Other properties available on CSS code (look for '.the_future_posts_image_overlay_icon').
* Added 'the-future-posts' internal icons font. Features 150 image overlay related icons. Fully compatible with all sorts of platforms: EOT, SVG, TTF, WOFF and WOFF2.
* Added 'Overlay icons' sub menu item, with instructions on how to change the overlay icon.
* New code for image aspect ratios. Less PHP code, no CSS code needed. Any aspect ratio supported.
* New optimized code for image overlay.

= 1.00 - 2018-06-22 =
* Added a 'width' setting in attribute 'fields' float: [start|end];[left|right];[width]. Works on 'start' only. Default=50%.
* Added aspect ratio setting in attribute 'fields' image: [original|1:1|5:4|4:3|3:2|16:9|4:5|3:4|2:3|9:16|custom]. Default: original.
* Replaced plugin screenshots images, with several shortcode examples.
* Fixed realtime date/time clock in the Settings page.

= 0.99 - 2018-06-19 =
* Now with a proper admin menu, with sub menus items: Intro, Settings, Themes, FAQ and Changelog.
* Minor cosmetic updates.

= 0.98 - 2018-06-18 =
* Added 'date_before', 'date_after' and 'date_inclusive' attributes.
* The above 3 new date attributes works with the The Future Is Now plugin. Please read FAQ for further info.

= 0.97 - 2018-06-17 =
* Fixed custom fields get_field() bug.

= 0.96 - 2018-06-16 =
* Enhanced the 'readme.txt' file.
* Enhanced the options page.

= 0.95 - 2018-06-15 =
* Enhanced the 'readme.txt' file.
* Minor updates on the options page.

= 0.94 - 2018-06-14 =
* Enhanced the 'readme.txt' file.
* Updated icon and banner images.

= 0.93 - 2018-06-13 =
* Enhanced the 'readme.txt' file.

= 0.92 - 2018-06-10 =
* Added 'tag' attribute
* Fixed some taxonomy query problems.
* First public beta release.

= 0.91 - 2018-06-09 =
* Fixed some issues concerning WordPress guidelines.

= 0.90 - 2018-06-08 =
* First beta release.



== How to use ==

The Future Posts is very easy to use, yet it features an extensive and rich array of powerfull options. Far too many to display them here.

Go to your WordPress admin area and select The Future Posts option from the left menu. Then read and follow the instructions. All options are fully detailed there.

= Power usage (for scheduled posts, not linked) =

Be aware that unless you have some scheduled posts, the shortcode below, without any attributes, won't show any posts (just a 'Nothing planned yet.' sentence).

<pre>[the_future_posts]</pre>

= Power usage (for published posts, not linked) =

<pre>[the_future_posts post_status="publish"]</pre>

= Expert usage (for scheduled posts, linked) =

Here goes 2 shortcode examples, both for schedules posts only. The latter is configured for WooCommerce. Again, be aware these examples won't work unless you have some schedules posts (former example) or products (latter example).

<pre>[the_future_posts fields="image=large;link|title=text;link|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y"]</pre>

<pre>[the_future_posts post_type="product" posts_per_column="3" fields="float=start;left|image=large;link|float=end|float=start;right|title=text;link|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y|float=end"]</pre>


