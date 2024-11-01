<?php

// ----------------------------------------------------------------------------
// --- SUB MENU ---
// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_header.php');

// ----------------------------------------------------------------------------

?>

  <script>
    window.onload = the_future_posts_realtime_date;
  </script>

  <!-- === === -->

  <h1>Shortcode Attributes</h1>

  Custom configuration require special settings, like quering custom post types, taxonomies and fields. No problem. The Future Posts handle them all nice 'n' easy. Let us take a look on the attributes and options you can set along with the shortcode.

  <br><br>

  The Future Posts performs WordPress' standard WP_Query loop calls, so many other interactions should be available besides the ones listed just below.

  <br><br><br>

  <table class='the_future_posts_options_table'>

  <tr>
    <th>Attribute</th>
    <th colspan="2">Options</th>
    <th>Default</th>
    <th>Use on or when...</th>
    <th>Examples (ignore the &#8226; char)</th>
  </tr>

  <tr>
    <td>post_status</td>
    <td colspan="2">future|publish|draft|pending|private|trash|auto-draft|inherit</td>
    <td>future</td>
    <td></td>
    <td>&#8226;[the_future_posts post_status="future"]<br>
&#8226;[the_future_posts post_status="future,publish"] (OR)</td>
  </tr>

  <tr>
    <td>post_type</td>
    <td colspan="2">post|product|[custom type slug]</td>
    <td>post</td>
    <td>blog posts<br>
WooCommerce posts<br>
custom type posts</td>
    <td>&#8226;[the_future_posts post_type="post"] (blog)<br>
&#8226;[the_future_posts post_type="product"] (WooCommerce)<br>
&#8226;[the_future_posts post_type="travel"] (custom type example)</td>
  </tr>

  <tr>
    <td>category_name</td>
    <td colspan="2">[slug]</td>
    <td></td>
    <td>blog posts category</td>
    <td>&#8226;[the_future_posts post_type="post" category_name="europe"]<br>
&#8226;[the_future_posts post_type="post" category_name="europe,america"] (OR)<br>
&#8226;[the_future_posts post_type="post" category_name="car+bike"] (AND)
</td>
  </tr>

  <tr>
    <td>taxonomy_terms</td>
    <td colspan="2">[slug]</td>
    <td></td>
    <td>WooCommerce category<br>
custom category type</td>
    <td>&#8226;[the_future_posts post_type="product" taxonomy_terms="books"] (WooCommerce example)<br>
&#8226;[the_future_posts post_type="travel" taxonomy_terms="europe,america"] (OR) (custom type example)<br>
&#8226;[the_future_posts post_type="travel" taxonomy_terms="car+bike"] (AND) (custom type example)</td>
  </tr>

  <tr>
    <td>tag</td>
    <td colspan="2">[slug]</td>
    <td>post</td>
    <td>blog posts tag
WooCommerce posts tag
custom post type tag</td>
    <td>&#8226;[the_future_posts post_type="post" tag="journal"] (blog)<br>
&#8226;[the_future_posts post_type="product" tag="paperback,harcover"] (OR) (WooCommerce example)<br>
&#8226;[the_future_posts post_type="travel" tag="van,bycicle"] (AND) (custom type example)</td>
  </tr>

  <tr>
    <td>date_before</td>
    <td colspan="2">[today|now|yyyy-mm-dd [hh:mm]]</td>
    <td></td>
    <td>in realtime:<br>today = <span id="the_future_posts_realtime_date_today"></span><br>now   = <span id="the_future_posts_realtime_date_now"></span></td>
    <td>&#8226;[the_future_posts date_before="2000-01-01"] (show posts dated before year 2000)<br>
&#8226;[the_future_posts date_before="today"] (show posts dated before today)<br>
&#8226;[the_future_posts post_status="future,publish" date_before="today" date_after="today"] (show today's posts, whether scheduled or published)</td>
  </tr>

  <tr>
    <td>date_after</td>
    <td colspan="2">[today|now|yyyy-mm-dd [hh:mm]]</td>
    <td></td>
    <td>(idem)</td>
    <td>&#8226;[the_future_posts date_after="3000-01-01 12:34"] (show posts dated after year 3000 at 12:34)<br>
&#8226;[the_future_posts date_after="now"] (show posts dated after current date and time)</td>
  </tr>

  <tr>
    <td>date_inclusive</td>
    <td colspan="2">[true|false]</td>
    <td>true</td>
    <td>whether:<br>'date_before' and 'date_after' exact value(s) should be matched or not</td>
    <td>&#8226;[the_future_posts date_after="today" date_inclusive="false"] (show posts dated after today, but not inclusive)</td>
  </tr>

  <tr>
    <td>offset</td>
    <td colspan="2">[number of posts to pass over]</td>
    <td>0</td>
    <td></td>
    <td>&#8226;[the_future_posts offset="3"]</td>
  </tr>

  <tr>
    <td>posts_per_page</td>
    <td colspan="2">[number of posts per page]</td>
    <td>-1 (show all posts)</td>
    <td></td>
    <td>&#8226;[the_future_posts posts_per_page="15"]</td>
  </tr>

  <tr>
    <td>posts_per_column</td>
    <td colspan="2">[number of posts per column]</td>
    <td>5</td>
    <td></td>
    <td>&#8226;[the_future_posts posts_per_column="3"]</td>
  </tr>

  <tr>
    <td>order_by</td>
    <td colspan="2">none|ID|author|title|name|date|modified|rand|comment_count|relevance</td>
    <td>date</td>
    <td></td>
    <td>&#8226;[the_future_posts order_by="date"]</td>
  </tr>

  <tr>
    <td>order</td>
    <td colspan="2">ASC|DESC</td>
    <td>DESC</td>
    <td></td>
    <td>&#8226;[the_future_posts order="DESC"]</td>
  </tr>

  <tr>
    <td>no_posts</td>
    <td colspan="2">[string]</td>
    <td>Nothing planned yet.</td>
    <td></td>
    <td>&#8226;[the_future_posts no_posts="No future plans so far."]</td>
  </tr>

  <tr>
    <td>overlay</td>
    <td colspan="2">[true|false];[background color]</td>
    <td>true;#000000</td>
    <td>Ignored when image is not linked</td>
    <td>&#8226;[the_future_posts post_status="publish" overlay="true;#ffd700"]</td>
  </tr>

  <tr>
    <td>overlay_icon</td>
    <td colspan="2">[true|false];[color]</td>
    <td>false;#ffffff</td>
    <td>Ignored when image is not linked</td>
    <td>&#8226;[the_future_posts post_status="publish" overlay="true;#ffd700" overlay_icon="true;#000000"]</td>
  </tr>

  <tr>
    <td>fields</td>
    <td>image<br><br>
title<br>
excerpt<br>
button<br>
author<br>
date<br>
categories<br>
float<br>
div
</td>
    <td>
[thumbnail|medium|medium_large|large|full];[link|nolink];[original|aspect:ratio]<br>
text;[link|nolink]<br>
text;[link|nolink]<br>
text;[link|nolink];[string]<br>
text;[link|nolink]<br>
text;[link|nolink];[<a href='https://codex.wordpress.org/Formatting_Date_and_Time' target='_blank'>date format</a>]<br>
text;[link|nolink];[separator]<br>
[start|end];[left|right];[width]<br>
[start|end];[attributes]
</td>
    <td>image=large;nolink;original|title=text;nolink|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y
</td>
    <td>whether: 'original' means the original aspect ratio of the image(s), and 'aspect:ratio' means any aspect ratio possible, like: 1:1, 5:4, 4:3, 3:2, 16:9, etc.</td>
    <td>&#8226;[the_future_posts fields="image=large;nolink|title=text;nolink|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y"]<br>
&#8226;[the_future_posts post_type="travel" posts_per_column="3" fields="float=start;left;40%|image=large;link;1:1|float=end|float=start;right;60%|title=text;link|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y|float=end"]
</td>
  </tr>

  <tr>
    <td>theme_default</td>
    <td colspan="2">[prefix string]</td>
    <td>the_future_posts</td>
    <td>Appearance / Editor / Stylesheet
Appearance / Customize / Additional CSS

(You should leave it as is,
unless you know what you're doing...)
</td>
    <td>&#8226;[the_future_posts theme_default="my_site_future_posts"]</td>
  </tr>

  <tr>
    <td>theme_custom</td>
    <td colspan="2">[prefix string]</td>
    <td>tfp</td>
    <td>Appearance / Editor / Stylesheet
Appearance / Customize / Additional CSS

(Use this option to customize
the posts grid; see below)
</td>
    <td>&#8226;[the_future_posts theme_custom="tfp_sidebar"]</td>
  </tr>

  </table>

  <!-- === === -->

<?php

// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_footer.php');

// ----------------------------------------------------------------------------

?>
