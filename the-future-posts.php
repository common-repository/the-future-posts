<?php
/** * Plugin Name: The Future Posts * Description: Display future (scheduled) or published post grids using shortcodes. Works with PODS, ACF, WooCommerce and all page builders. Plenty of customization options. * Author: Jos&eacute; De Almeida * Author URI: http://www.josedealmeida.com/
 * Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YPL25DBZSWHWY
 * Tags: post grid, responsive, scheduled, pods, advanced custom fields, woocommerce, elementor, beaver builder, visual composer
 * Text Domain: future-posts
 * Requires at least: 4.6.0
 * Tested up to: 4.9.8
 * Requires PHP: 5.4.45
 * Version: 1.40
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt  */


// --- exit if accessed directly ---
if (! defined('ABSPATH')) {  exit;}


// --- let's define ---

define('THE_FUTURE_POSTS_DIR', plugin_dir_path( __FILE__ )); 
define('THE_FUTURE_POSTS_URL', plugin_dir_url( __FILE__ ));



// --- includes ---

include(THE_FUTURE_POSTS_DIR.'includes/main.php');



// --- add shortcode ---

add_shortcode("the_future_posts","the_future_posts_main"); 



// --- enable shortcode execution inside text widgets ---

add_filter("widget_text","do_shortcode");



// --- add menu to admin panel ---

function the_future_posts_admin_menu_set() {
  global $submenu;

  // $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position 
  add_menu_page('The Future Posts','The Future Posts','manage_options','the-future-posts-admin-menu',THE_FUTURE_POSTS_DIR.'includes/submenu_item_quick_start.php','dashicons-grid-view',59);

  // $parent_slug, $page_title, $menu_title, $capability, $function
  add_submenu_page('the-future-posts-admin-menu','Quick Start','Quick Start','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_quick_start.php');
  add_submenu_page('the-future-posts-admin-menu','Shortcode Attributes','Shortcode Attributes','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_shortcode_attributes.php');
  add_submenu_page('the-future-posts-admin-menu','Overlay Icons','Overlay Icons','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_overlay_icons.php');
  add_submenu_page('the-future-posts-admin-menu','Themes','Themes','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_themes.php');
  add_submenu_page('the-future-posts-admin-menu','About','About','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_about.php');
  add_submenu_page('the-future-posts-admin-menu','Frequently Asked Questions','FAQ','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_faq.php');
  add_submenu_page('the-future-posts-admin-menu','What\'s New?','What\'s New?','manage_options',THE_FUTURE_POSTS_DIR.'includes/submenu_item_whats_new.php');

  unset($submenu['the-future-posts-admin-menu'][0] );
}

add_action('admin_menu','the_future_posts_admin_menu_set');



// --- add to plugins page ---

 function the_future_posts_action_links($links) {
  $links[] = "<a href='/wp-admin/admin.php?page=the-future-posts/includes/submenu_item_quick_start.php'>Settings</a>";
  $links[] = "<a href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YPL25DBZSWHWY' target='_blank' style='color:#46b450; font-weight:900;'>Donate</a>";
  return $links;
 }

add_filter("plugin_action_links_".plugin_basename(__FILE__),"the_future_posts_action_links");



// --- register style sheets ---

function the_future_posts_register_plugin_styles() {
  wp_register_style("the-future-posts-gridlex",THE_FUTURE_POSTS_URL."css/gridlex.css");
  wp_enqueue_style("the-future-posts-gridlex");

  wp_register_style("the-future-posts-icons",THE_FUTURE_POSTS_URL."css/the-future-posts-icons.css");
  wp_enqueue_style("the-future-posts-icons");

  wp_register_style("the-future-posts",THE_FUTURE_POSTS_URL."css/the-future-posts.css");
  wp_enqueue_style("the-future-posts");

  wp_enqueue_script('the-future-posts-script',THE_FUTURE_POSTS_URL.'includes/main.js', array ( 'jquery' ), 1.1, false);
  wp_enqueue_script('the-future-posts-script');
}

add_action("wp_enqueue_scripts","the_future_posts_register_plugin_styles");



// --- show future posts with pretty permalinks ---

function the_future_posts_pretty_permalinks($permalink,$post,$leavename,$sample = false) {
  // filter recursion - infinite loop
  static $recursing = false;

  if (empty($post->ID)) {
    return $permalink;
  }

  if (!$recursing) {
    if (isset($post->post_status)) {
      if (in_array($post->post_status, array('future','draft','pending','private','trash','auto-draft','inherit'))) {
        // set post status to publish, then get the permalink
        $post->post_status = 'publish';
        $recursing = true;
        return get_permalink($post,$leavename);
      }
    }
  }

  $recursing = false;
  return $permalink;
}

add_filter('post_link','the_future_posts_pretty_permalinks',10,3);
add_filter('post_type_link','the_future_posts_pretty_permalinks',10,4);



// --- show single future posts even for anonymous users ---

function the_future_posts_show_single($posts){
  global $wp_query, $wpdb;

  if (is_single() && $wp_query->post_count == 0){
    $posts = $wpdb->get_results($wp_query->request);
  }
  return $posts;
};

add_filter('the_posts','the_future_posts_show_single');



// ----------------------------------------------------------------------------
