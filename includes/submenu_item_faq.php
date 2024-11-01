<?php

// ----------------------------------------------------------------------------
// --- SUB MENU ---
// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_header.php');

// ----------------------------------------------------------------------------

?>

  <!-- === === -->

  <h1>Frequently Asked Questions</h1>

  <!-- === === -->

  <?php
    $fname = THE_FUTURE_POSTS_DIR.'faq.txt';
    $found = 0;

    foreach(file($fname) as $line) {
      if ($line == "== Frequently Asked Questions ==\n") {
        $found = 1;
        continue;
      }

      if ($found == 1) {
        $pos = strpos($line,"= ");
        if ($pos === false) {
          echo $line."<br>\n";
        } else {
          echo "<hr>\n";
          echo "<h3>".$line."</h3>\n";
        }
      }
    }
  ?>

  <!-- === === -->

<?php

// ----------------------------------------------------------------------------

include(THE_FUTURE_POSTS_DIR.'includes/submenu_footer.php');

// ----------------------------------------------------------------------------

?>
