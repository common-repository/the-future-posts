<?php

// ----------------------------------------------------------------------------
// --- SUB MENU ---
// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_header.php');

// ----------------------------------------------------------------------------

?>

  <!-- === === -->

  <h1>Overlay Icons</h1>

  The Future Posts is bundled with a font featuring 150 well choosen image overlay related icons with great design. The default overlay icon, a thin plus sign, is part of that font, code '\e851'. The font is fully compatible with all sorts of platforms. As such, it includes EOT, SVG, TTF, WOFF and WOFF2 formats. Take notice that the default setting does not show the overlay icon, unless you switch it on. See 'Shortcode Attributes' for detailed information.

  <br><br>

  There are plenty of other free icon pack fonts available on the internet. There is also some WordPress plugins that installs a bunch of well known icon packs, including Font Awesome. You can use any of those font packs and any font included. If you know how to do it you can even use your own font.

  <!-- === === -->

  <br><br>
  <hr>

  <!-- === === -->

  <h1>Changing the Icon</h1>

  The only way you can change the overlay icon is thru CSS code. Copy and paste the following code into one of these two WordPress places:

  <br><br>

  <div class='the_future_posts_options_indent'>
    Appearance / Editor / Stylesheet
    <br>
    Appearance / Customize / Additional CSS
  </div>

  <br>

  <div class='the_future_posts_options_css_code_container'>

    <!-- === left === -->

    <div>
      <div style="overflow:visible;">
        <div style="float:right;">
          <?php
            $fname = THE_FUTURE_POSTS_URL.'images/plus-the-future-posts.svg';
            echo "<img src='".$fname."' style='width:25pt;'>\n";
          ?>
        </div>
        <h3>The Future Posts</h3>
      </div>

      <div id='the-future-posts-copy-left-code' class='the_future_posts_options_css_code' style='height: 120px; clear:both;'>
.the_future_posts_image_overlay_icon:before {
  font-family: "the-future-posts" !important;
  font-size: 35pt !important;
  content: "\e851" !important;
}
      </div>

      <div class="the_future_posts_options_button">
        <a class="the_future_posts_options_button_btn" href="javascript:void(0);" onClick="the_future_posts_copy_to_clipboard('the-future-posts-copy-left-code');">Copy to Clipboard</a>
      </div>
    </div>

    <!-- === right === -->

    <div>
      <div style="overflow:visible;">
        <div style="float:right;">
          <?php
            $fname = THE_FUTURE_POSTS_URL.'images/plus-font-awesome.svg';
            echo "<img src='".$fname."' style='width:25pt;'>\n";
          ?>
        </div>
        <h3>Font Awesome</h3>
      </div>

      <div id='the-future-posts-copy-right-code' class='the_future_posts_options_css_code' style='height: 120px; clear:both;'>
.the_future_posts_image_overlay_icon:before {
  font-family: "FontAwesome" !important;
  font-size: 35pt !important;
  content: "\f067" !important;
}
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

  <h1>Character Map</h1>

  The Future Posts bundled overlay icons font. Click to copy character code to clipboard. <span class='the_future_posts_options_highlight_red'>Don't forget to add the '\' prefix before the code, otherwise it won't work.</span>

  <br><br><br>

  <div class='the_future_posts_options_char_map_container'>

  <?php
    $fname = THE_FUTURE_POSTS_DIR.'font/the-future-posts.svg';
    $found = 0;

    foreach(file($fname) as $line) {
      // <glyph glyph-name="add" unicode="&#xe800;" d="M791 309h-250v-250h-82v250h-250v82h250v250h82v-250h250v-82z" horiz-adv-x="1000" />
      $pos = strpos($line,"<glyph");

      if ($pos !== false) {
        $pos1 = strpos($line,"unicode=\"");
        $pos2 = strpos($line,"\"",$pos1);

        $char = substr($line,$pos1+9,8);
        $code = substr($line,$pos1+12,4);

        echo "  <div class=\"the_future_posts_options_glyph_container\" onClick=\"the_future_posts_copy_string_to_clipboard('".$code."');\">\n";
        echo "      <div class='the_future_posts_options_glyph'>".$char."</div>\n";
        echo "      <div class='the_future_posts_options_glyph_code'>\\".$code."</div>\n";
        echo "  </div>\n";    
      }
    }
  ?>

  </div>

  <!-- === === -->

<?php

// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_footer.php');

// ----------------------------------------------------------------------------

?>
