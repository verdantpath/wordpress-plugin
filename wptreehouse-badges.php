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

}

?>
