<?php

// ----------------------------------------------------------------------------
// --- SUB MENU ---
// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_header.php');

// ----------------------------------------------------------------------------

?>

  <!-- === === -->

  <div class='the_future_posts_options_css_code_container'">

    <div>
      <h1>Default Theme ('theme_default' prefix)</h1>

      This is The Future Posts' Default Theme CSS properties. You should leave it as is, unless you know what you're doing... Anyway, if you decide to adventure yourself and make some changes (and then you can only blame yourself), then go ahead and paste it into one of these two WordPress places:

      <br><br>

      <div class='the_future_posts_options_indent'>
        Appearance / Editor / Stylesheet
        <br>
        Appearance / Customize / Additional CSS
      </div>

      <br>

      You better use the '!important' rule everywhere in order to override the default properties. Like this:

      <br><br>

      <div class='the_future_posts_options_indent'>
        padding: 0 2rem 4rem 2rem !important;
        <br>
        font-weight: bold !important;
      </div>
    </div>

    <div>
      <h1>Custom Theme ('theme_custom' prefix)</h1>

      With The Future Posts you can define as many Custom Themes as you want. You can have a different Theme for every instance of The Future Posts you decide to show on your website. No limits. To accomplish this, you should give each one a unique prefix name. Default is 'tfp'. Paste each and every Custom Theme into one of these two WordPress places:

      <br><br>

      <div class='the_future_posts_options_indent'>
        Appearance / Editor / Stylesheet
        <br>
        Appearance / Customize / Additional CSS
      </div>

      <br>

      and you're good to go!

      <br><br>

      I do encourage Third Party Themes. Let me know if you have a great Custom Theme to share, perhaps it can be included on a future release.

    </div>

  </div>

  <!-- === === -->

  <br>

  <!-- === === -->

  <div class='the_future_posts_options_css_code_container'>

    <div>
      <div id='the-future-posts-copy-left-code' class='the_future_posts_options_css_code'>
        <?php
          $fcontents = file_get_contents(THE_FUTURE_POSTS_DIR.'css/the-future-posts.css');
          echo "<code>".$fcontents."</code>\n";
        ?>
      </div>

      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-left-code');">Copy to Clipboard</a>
      </div>

    </div>

    <div>
      <div id="the-future-posts-copy-right-code" class='the_future_posts_options_css_code'>
        <?php
          $fcontents = file_get_contents(THE_FUTURE_POSTS_DIR.'css/the-future-posts-tfp.css');
          echo "<pre>".$fcontents."</pre>\n";
        ?>
      </div>

      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-right-code');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br><br>
  <hr>

  <!-- === === -->

  <h1>Demo (default theme: the_future_posts)</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-1.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #1'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-1" class="the_future_posts_options_demo_code">[the_future_posts]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-1');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo (built-in theme: tfp_rounded_corners)</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-10.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #10'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-10" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="5" theme_custom="tfp_rounded_corners" fields="image=large;link;1:1|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-10');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo (built-in theme: tfp_circles)</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-11.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #11'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-11" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="5" theme_custom="tfp_circles" fields="image=large;link;1:1|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-11');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

<?php

// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_footer.php');

// ----------------------------------------------------------------------------

?>
