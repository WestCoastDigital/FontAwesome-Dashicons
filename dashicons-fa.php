<?php
/**
 * Plugin Name: FontAwesome Dashicons
 * Author: West Coast Digital
 * Author URI: https://westcoastdigital.com.au
 * Description: Adds support to use FontAwesome 4.4 Fonts as icons in the dashboard for CPT etc
 * Version: 1.0.0
 * Copyright: (c) 2016 West Coast Digital
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fa-dashicons
 */

function wcd_dashicons_fa() {
    wp_enqueue_style( 'FontAwesome', plugins_url( 'styles.css',    __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'wcd_dashicons_fa' );

require_once 'fa-dashicons-reference.php';

function wcd_dashicons_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=fontawesome_dashicons">' . __( 'Icon Mapping' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'wcd_dashicons_settings_link' );