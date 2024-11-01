<?php

// ----------------------------------------------------------------------------
// --- SUB MENU ---
// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_header.php');

// ----------------------------------------------------------------------------

?>

  <!-- === === -->

  <h1>Quick Start</h1>

  Use the following shortcode, without any attributes, to display all future (scheduled) non-custom post types.

  <br><br>

  It shows five posts per column, ordered by descending date. All posts shown in a single page. It shows featured image, title, excerpt, author and date. No posts will be linked. A perfect out of the box solution, usign The Future Posts' default Theme design.

  <br><br>

  <div class='the_future_posts_options_highlight_red'>Be aware that unless you have some scheduled posts, or you properly overwrite the default settings (see 'Shortcode Attributes' sub menu), The Future Posts won't show any posts (just the 'Nothing planned yet.' sentence).</div>

  <br><br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id='the-future-posts-copy-left-code' class='the_future_posts_options_css_code' style='height: 20px;'>[the_future_posts]</div>

      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-left-code');">Copy to Clipboard</a>
      </div>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>CSS (Cascading Style Sheets)</h3>
    
      Paste the code into one of these two WordPress places:
    
      <br><br>
    
      <div class='the_future_posts_options_indent'>
        Appearance / Editor / Stylesheet
        <br>
        Appearance / Customize / Additional CSS
      </div>
    </div>

  </div>

  <!-- === === -->

  <br><br>
  <hr>

  <!-- === === -->

  <h1>Demo #1</h1>

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

  <h1>Demo #2</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-2.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #2'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-2" class="the_future_posts_options_demo_code">[the_future_posts posts_per_column="3" fields="image=large;link;3:1.9|title=text;link|excerpt=text;nolink|date=text;nolink;M d, Y"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-2');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #3</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-3.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #3'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-3" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" fields="image=large;link;3:2|title=text;link|excerpt=text;nolink|button=text;link;More...|author=text;nolink|date=text;nolink;M d, Y"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-3');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #4</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-4.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #4'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-4" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="6" fields="image=large;link|title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y!"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-4');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #5</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-5.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #5'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-5" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="3" fields="float=start;left;50%|image=large;link;4:5|float=end|float=start;right;50%|title=text;link|date=text;nolink;M d, Y|excerpt=text;nolink|button=text;link;More...|float=end"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-5');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #6</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-6.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #6'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-6" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="6" fields="image=large;link;1:1"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-6');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #7</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-7.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #7'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-7" class="the_future_posts_options_demo_code">[the_future_posts post_status="publish" posts_per_column="3" fields="image=large;link;1:1"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-7');">Copy to Clipboard</a>
      </div>

      <br>

      <h3 class='the_future_posts_options_h3_css'>CSS</h3>
      <div id="the-future-posts-copy-css-screenshot-7" class="the_future_posts_options_css_code" style="height: 120px;">.tfp_gl-col {
  padding: 0 0 0 0;
}

.tfp {
  padding: 0 0 0 0;
}

.tfp_main {
  border: none;
}
      </div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-css-screenshot-7');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #8</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-8.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #8'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-8" class="the_future_posts_options_demo_code">[the_future_posts posts_per_column="1" fields="float=start;left;30%|image=large;link;1:1|float=end|float=start;right;70%|title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y|float=end"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-8');">Copy to Clipboard</a>
      </div>

      <br>

      <h3 class='the_future_posts_options_h3_css'>CSS</h3>
      <div id="the-future-posts-copy-css-screenshot-8" class="the_future_posts_options_css_code" style="height: 120px;">.tfp_gl-col {
  padding: 0 0 20px 0;
}

.tfp {
  padding: 0 0 0 0;
}

.tfp_main {
   border: none;
}

.tfp_title {
  font-size: 12pt !important;
  line-height: 13pt !important;
  margin: 0px 0px 10px 15px;
}

.tfp_excerpt {
  font-size: 12pt;
  line-height: 13pt;
  margin: 0px 0px 10px 15px;
}

.tfp_author {
  font-size: 10pt;
  line-height: 11pt;
  margin: 0px 0px 0px 15px;
}

.tfp_date {
  font-size: 10pt;
  line-height: 11pt;
  margin: 0px 0px 10px 15px;
}
      </div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-css-screenshot-8');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #9</h1>

  <br>

  <div class='the_future_posts_options_demo_container'>

    <div>
      <?php
        $fname = THE_FUTURE_POSTS_URL.'images/screenshot-9.png';
        echo "<a href='".$fname."' data-fancybox='gallery' data-caption='Demo #9'>";
        echo "<img src='".$fname."' width='100%'>\n";
        echo "</a>\n";
      ?>
    </div>

    <div>
      <h3 class='the_future_posts_options_h3_shortcode'>Shortcode</h3>
      <div id="the-future-posts-copy-shortcode-screenshot-9" class="the_future_posts_options_demo_code">[the_future_posts posts_per_column="1" fields="title=text;link|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y"]</div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-shortcode-screenshot-9');">Copy to Clipboard</a>
      </div>

      <br>

      <h3 class='the_future_posts_options_h3_css'>CSS</h3>
      <div id="the-future-posts-copy-css-screenshot-9" class="the_future_posts_options_css_code" style="height: 120px;">.tfp_gl-col {
  padding: 0 1rem 1rem 1rem;
}

.tfp_title {
  font-size: 14pt !important;
  line-height: 15pt !important;
  margin: 15px 0px 10px 15px;
}

.tfp_excerpt {
  font-size: 12pt;
  line-height: 13pt;
  margin: 0px 0px 10px 15px;
}

.tfp_author {
  font-size: 10pt;
  line-height: 11pt;
  margin: 0px 0px 0px 15px;
}

.tfp_date {
  font-size: 10pt;
  line-height: 11pt;
  margin: 0px 0px 15px 15px;
}
      </div>
      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-css-screenshot-9');">Copy to Clipboard</a>
      </div>
    </div>

  </div>

  <!-- === === -->

  <br>
  <hr>

  <!-- === === -->

  <h1>Demo #10 (built-in theme: tfp_rounded_corners)</h1>

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

  <h1>Demo #11 (built-in theme: tfp_circles)</h1>

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
