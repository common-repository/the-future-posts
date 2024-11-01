<?php

// ----------------------------------------------------------------------------
// --- MAIN ---
// ----------------------------------------------------------------------------


function the_slug(){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  do_action('after_slug', $slug);
  return $slug;
}



function the_future_posts_main($params) { 
  // --- get the shortcode parameters ---
  extract(shortcode_atts(array(
    "post_status"      => "future",
    "post_type"        => "post",
    "category_name"    => "",
    "taxonomy"         => "",
    "taxonomy_terms"   => "",
    "date_before"      => "",
    "date_after"       => "",
    "date_inclusive"   => "true",
    "offset"           => "0",
    "posts_per_page"   => "-1",
    "posts_per_column" => "5",
    "order_by"         => "date",
    "order"            => "DESC",
    "no_posts"         => "Nothing planned yet.",
    "overlay"          => "true;#000000",
    "overlay_icon"     => "false;#ffffff",
    "fields"           => "image=large;nolink;original|title=text;nolink|excerpt=text;nolink|author=text;nolink|date=text;nolink;M d, Y",
    "theme_default"    => "the_future_posts",
    "theme_custom"     => "tfp"
    ), $params));	


  // --- plugin output contents ---
  $tfp_content = "";

  // --- validate params ---
  // not implemented

  // --- date and time, query before and after ---

  $date_today = date('Y-m-d');
  $date_now = date('Y-m-d h:m');

  if ($date_before == "today") {
    $date_before = $date_today;
  } elseif ($date_before == "now") {
    $date_before = $date_now;
  }

  if ($date_after == "today") {
    $date_after = $date_today;
  } elseif ($date_after == "now") {
    $date_after = $date_now;
  }

  if ($date_inclusive == "true") {
    $date_inclusive = true;
  } else {
   $date_inclusive = false;
  }

  // --- the args to fetch future posts ---

  $the_args = array(
    "post_status"      => $post_status,
    "post_type"        => $post_type,
    "category_name"    => $category_name,
    $taxonomy          => $taxonomy_terms,
    "date_query"       => array(
                          'before'    => $date_before,
                          'after'     => $date_after,
                          'inclusive' => $date_inclusive),
    "offset"           => $offset,
    "posts_per_page"   => $posts_per_page,
    "orderby"          => $order_by,
    "order"            => $order
  );

  // --- get the fields ---

  $fields_array = explode('|',$fields);

  // --- fetch ---

  $the_query = new WP_Query($the_args);

  // --- wrapper start ---

  $tfp_content .= "\n";
  $tfp_content .= "<!-- === the future posts: start === theme default: ".$theme_default." === theme custom: ".$theme_custom." === -->\n";
  $tfp_content .= "\n";

  // --- overlay + overlay icon ---

  $tfp_content .= "<script type='text/javascript'>\n";

    list($overlay_active,$overlay_color) = explode(";",$overlay);
    if ($overlay_active == "true" && $overlay_color != "") {
      $tfp_content .= "  the_future_posts_overlay('".$overlay_color."');\n";
    }

    list($overlay_icon_active,$overlay_icon_color) = explode(";",$overlay_icon);
    if ($overlay_icon_active == "true" && $overlay_icon_color != "") {
      $tfp_content .= "  the_future_posts_overlay_icon('".$overlay_icon_color."');\n";
    }

  $tfp_content .= "</script>\n";
  $tfp_content .= "\n";

  // --- main container ---

  $tfp_content .= "<div class='".$theme_default." ".$theme_custom."'>\n\n";

  // --- found posts? ---

  if (! $the_query -> have_posts() ) {
    $tfp_content .= "<div class='".$theme_default."_no_posts ".$theme_custom."_no_posts'>".$no_posts."</div>\n";
    $tfp_content .= "</div>\n";
    wp_reset_postdata();
    return;
  }

  // --- row start with gridlex ---

  $tfp_content .= "  <div class='".the_future_posts_row_div($posts_per_column)."'>\n\n";

  while ($the_query -> have_posts() ) {
    $the_query -> the_post();

    // --- column start ---

    $tfp_content .= "    <div class='gl-col ".$theme_custom."_gl-col'>\n";
    $tfp_content .= "      <div class='".$theme_default."_main ".$theme_custom."_main'>\n";

    // ---

    foreach ($fields_array as $value) {
      // float=start;left;width
      // image=large;link;large
      // title=text;link
      // excerpt=text;nolink
      // button=text;link;More...
      // author=text;nolink
      // date=text;nolink;M d, Y
      // div=start;class='my_class'
      list($field,$types) = explode("=",$value,2);

      list($types_type,$types_link,$types_else_01,$types_else_02) = explode(";",$types);

      // --- permalink ---

      $link_post = get_permalink();

      // --- author link ---

      $link_author = get_author_posts_url(get_the_author_meta("ID"),get_the_author_meta("user_nicename"));

      // ---

      $div_content = "";

      // --- float div ---

      if ($field == "float") {
        if ($types_type == "start") {
          if ($types_else_01 != "") {
            $types_else_01 = " style='width:".$types_else_01.";'";
          }
          if ($types_link == "left") {
            $div_content .= "        <div class='".$theme_default."_column_left ".$theme_custom."_column_left'".$types_else_01.">\n";
          } else {
            $div_content .= "        <div class='".$theme_default."_column_right ".$theme_custom."_column_right'".$types_else_01.">\n";
          }
        } else {
          $div_content .= "        </div>\n";
        }

        $tfp_content .= $div_content;
        continue;
      }

      // --- div ---

      if ($field == "div") {
        if ($types_type == "start") {
          $div_content .= "        <div ".$types_link.">\n";
        } else {
          $div_content .= "        </div>\n";
        }

        $tfp_content .= $div_content;
        continue;
      }

      // --- type image ---

      $div_content .= "          <div class='";

      if ($field == "image") {
        // thumbnail    = thumbnail (default 150px x 150px max)
        // medium       = medium resolution (default 300px x 300px max)
        // medium_large = medium large resolution (default 768px x 0px max)
        // large        = large resolution (default 1024px x 1024px max)
        // full         = original image resolution (unmodified)
        $image = get_the_post_thumbnail_url($page->ID,$types_type);

        if ($types_link == "link") {
          $div_content .= $theme_default."_image ".$theme_default."_image_effect ".$theme_custom."_".$field." ".$theme_custom."_".$field."_effect";
        } else {
          $div_content .= $theme_default."_image ".$theme_custom."_".$field;
        }
      } else {
        $div_content .= $theme_default."_".$field." ".$theme_custom."_".$field;
      }

      $div_content .= "'>";

      // --- types ---

      if ($field == "image") {
        // aspect ratio

        if ($types_else_01 == "" || $types_else_01 == "original") {
          // do nothing
        } else {
          // calc percentage

          list($w,$h) = explode(":",$types_else_01);
          $p = $h * 100 / $w;
          $p = number_format($p,2);
          $aspect_ratio_default = $p;

          $div_content .= "<div class='".
                           $theme_default."_image_aspect_ratio_box ".
                           $theme_custom. "_image_aspect_ratio_box' ".
                           "style='padding-top:".$p."%;'>";

          $div_content .= "<div class='".
                           $theme_default."_image_aspect_ratio_box_inside ".
                           $theme_custom ."_image_aspect_ratio_box_inside'>";
        }

        // linked or not

        if ($types_link == "link") {
          $div_content .= "<a href='".$link_post."'>";
        }
        $div_content .= "<img class='the_future_posts_image_fill ".$theme_default."_image_fix ".$theme_custom."_image_fix' src='".$image."' style='width:100%; height:100%;'>";
        if ($types_link == "link") {
          $div_content .= "</a>";
        }

        // overlay + overlay icon
        if ($types_link == "link") {
          if ($overlay_active == "true") {
            $div_content .= "<div class='".$theme_default."_image_overlay ".$theme_custom."_image_overlay' onclick=\"location.href='".$link_post."';\"></div>";
          }
          if ($overlay_icon_active == "true") {
            $div_content .= "<span class='".$theme_default."_image_overlay_icon ".$theme_custom."_image_overlay_icon' onclick=\"location.href='".$link_post."';\"></span>";
          }
        }

        if ($types_else_01 != "" && $types_else_01 != "original") {
          $div_content .= "  </div>";
          $div_content .= "</div>";
        }

      } elseif ($field == "title") {
        if ($types_link == "link") {
          $div_content .= "<a href='".$link_post."'>".get_the_title()."</a>";
        } else {
          $div_content .= get_the_title();
        }
      } elseif ($field == "excerpt") {
        if ($types_link == "link") {
          $div_content .= "<a href='".$link_post."'>".get_the_excerpt()."</a>";
        } else {
          $div_content .= get_the_excerpt();
        }
      } elseif ($field == "author") {
        if ($types_link == "link") {
          $div_content .= "<a href='".$link_author."'>".get_the_author()."</a>";
        } else {
          $div_content .= get_the_author();
        }
      } elseif ($field == "date") {
        if ($types_link == "link") {
          $div_content .= "<a href='".$link_post."'>".get_the_time($types_else_01)."</a>";
        } else {
          $div_content .= get_the_time($types_else_01);
        }
      } elseif ($field == "categories") {
        if ($types_else_01 == "") {
          $separator = " | ";
        } else {
          $separator = $types_else_01;
        }
        $div_content .= the_future_posts_get_categories($separator);
      } elseif ($field == "button") {
        if ($types_link == "link") {
          $div_content .= "<a class='the_future_posts_button_btn' href='".$link_post."'>".$types_else_01."</a>";
        } else {
          $div_content .= "<a class='the_future_posts_button_btn' href='#'>".$types_else_01."</a>";
        }
      } else {
        $field_content = get_field($field);
        if ($types_link == "link") {
          $div_content .= "<a href='".$link_post."'>".$field_content."</a>";
        } else {
          $div_content .= $field_content;
        }
      }

      $div_content .= "</div>\n";

      // ---

      $tfp_content .= $div_content;
    }

    // --- column end ---

    $tfp_content .= "      </div>\n";
    $tfp_content .= "    </div>\n\n";

  }

  // --- row end ---

  $tfp_content .= "  </div>\n\n";

  // --- wrapper end ---

  $tfp_content .= "</div>\n";

  $tfp_content .= "\n";
  $tfp_content .= "<!-- === future posts: end === -->\n";
  $tfp_content .= "\n";
	
  // --- reset post data ---

  wp_reset_postdata();

  // --- return plugin output contents ---

  return $tfp_content;
}

// ----------------------------------------------------------------------------

function the_future_posts_row_div($params) { 
  // --- gridlex settings ---

  if ($params == "1" ) {
    $div = "gl-grid-1 gl-grid-1_lg-1 gl-grid-1_md-1 gl-grid-1_sm-1 gl-grid-1_xs-1";
  } elseif ($params == "2") {
    $div = "gl-grid-2 gl-grid-2_lg-2 gl-grid-2_md-2 gl-grid-2_sm-2 gl-grid-2_xs-1";
  } elseif ($params == "3") {
    $div = "gl-grid-3 gl-grid-3_lg-3 gl-grid-3_md-2 gl-grid-3_sm-2 gl-grid-3_xs-1";
  } elseif ($params == "4") {
    $div = "gl-grid-4 gl-grid-4_lg-3 gl-grid-4_md-3 gl-grid-4_sm-2 gl-grid-4_xs-1";
  } elseif ($params == "5") {
    $div = "gl-grid-5 gl-grid-5_lg-5 gl-grid-5_md-3 gl-grid-5_sm-2 gl-grid-5_xs-1";
  } elseif ($params == "6") {
    $div = "gl-grid-6 gl-grid-6_lg-6 gl-grid-6_md-4 gl-grid-6_sm-2 gl-grid-6_xs-1";
  } elseif ($params == "7") {
    $div = "gl-grid-7 gl-grid-7_lg-7 gl-grid-5_md-5 gl-grid-7_sm-3 gl-grid-8_xs-1";
  } elseif ($params == "8") {
    $div = "gl-grid-8 gl-grid-8_lg-8 gl-grid-8_md-5 gl-grid-8_sm-3 gl-grid-8_xs-1";
  } elseif ($params == "9") {
    $div = "gl-grid-9 gl-grid-9_lg-9 gl-grid-9_md-5 gl-grid-9_sm-3 gl-grid-9_xs-1";
  } elseif ($params == "10") {
    $div = "gl-grid-10 gl-grid-10_lg-8 gl-grid-10_md-5 gl-grid-10_sm-3 gl-grid-10_xs-1";
  } elseif ($params == "11") {
    $div = "gl-grid-11 gl-grid-11_lg-8 gl-grid-11_md-5 gl-grid-11_sm-3 gl-grid-11_xs-1";
  } else {
    $div = "gl-grid-12 gl-grid-12_lg-8 gl-grid-12_md-5 gl-grid-12_sm-3 gl-grid-12_xs-1";
  }

  return $div;
}

// ----------------------------------------------------------------------------

function the_future_posts_get_categories($sep) {
  global $post;

  $defaults = [
    'before'            => '', 
    'sep'               => $sep, 
    'after'             => '',
    'display_tax_name'  => false,
    'taxonomy_sep'      => $sep,
    'multi_tax_sep'     => '</br>',
    'hierarchical'      => true
  ];
  $args = wp_parse_args($args,$defaults);

  $this_post_type = $post->post_type;
  $taxonomies = get_object_taxonomies($this_post_type,'objects');

  $returned_list = [];

  foreach ($taxonomies as $taxonomy_slug => $taxonomy){
    if ($args['hierarchical'] == $taxonomy->hierarchical && has_term('',$taxonomy_slug) && 'post_format' != $taxonomy_slug) {
      $term_list = get_the_term_list($post->ID,$taxonomy_slug,$args['before'],$args['sep'],$args['after']);

      if(true == $args['display_tax_name']){
        $returned_list[] = strtoupper($taxonomy_slug).$args['taxonomy_sep'].$term_list;
      }else{
        $returned_list[] = $term_list;
      }
    }
  }

  if ($returned_list) {  
    $count = count($returned_list); 
    if (1 === $count) {
      return implode('',$returned_list);
    } else {
      $multi_list = [];
      foreach ($returned_list as $key=>$value) {
        if (array_key_exists($key + 1,$returned_list)) {
          $multi_list[] = $value.$args['multi_tax_sep'];
        } else {
          $multi_list[] = $value;
        }
      }
      return implode('',$multi_list);
    }
  }
}

// ----------------------------------------------------------------------------
