<?php

/*
 *	Plugin Name: Official Treehouse Badges Plugin
 *	Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin/
 *	Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website.  The official Treehouse badges plugin.
 *	Version: 1.0
 *	Author: Matt Dittmann
 *	Author URI: http://verdantpath.io
 *	License: GPL2
 *
*/

/*
* Assign global variables
*
*/

$plugin_url = WP_PLUGIN_URL . '/wptreehouse-badges';

/*
* Add a link to our pluain in the admin menu
* under 'Settings > Treehouse Badges'
*
*/

function wptreehouse_badges_menu() {
  /*
   * Use the add_options_page function
   * add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function )
   *
  */

  add_options_page(
    'Official Treehouse Badges Plugin',
    'Treehouse Badges',
    'manage_options',
    'wptreehouse-badges',
    'wptreehouse_badges_options_page'
  );


}
add_action( 'admin_menu', 'wptreehouse_badges_menu' );

function wptreehouse_badges_options_page() {
  if( !current_user_can( 'manage_options' ) ) {
    wp_die( 'You do not have sufficient permission to access this page' );
  }

  global $plugin_url;

  if( isset( $_POST['wptreehouse_form_submitted'] ) ) {
    $hidden_field = esc_html( $_POST['wptreehouse_form_submitted'] );
    if( $hidden_field == 'Y' ) {
      $wptreehouse_username = esc_html( $_POST['wptreehouse_username'] );

    }
  }

  require( 'inc/options-page-wrapper.php' );
}

function wptreehouse_badges_styles() {
  wp_enqueue_style( 'wptreehouse_badges_styles', plugins_url( 'wptreehouse-badges/wptreehouse-badges.css' ) );
}
add_action( 'admin_head', 'wptreehouse_badges_styles' );

?>
