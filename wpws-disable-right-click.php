<?php
/**
 * Plugin Name: WpWebSol Disable Right Click
 * Plugin Uri: https://wpwebsol.com/plugins/disable-right-click/
 * Author: WpWebSol
 * Author Uri: https://wpwebsol.com/
 * Version: 1.0.1
 * Description: WpWebSol Disable Right Click a very simple and light weight plugin that is specially designed to prevent users from copy text, view source and inspect elements by right clicking.
 * Tags: protect content, copyright protection, disable right click, prevent right click, stop right click, stop image saving with right click, no copy paste, disable view source, disable inspect element
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

// Add Action To Include Javascritp to prevent user 
add_action('wp_enqueue_scripts','wpws_diable_right_click_activate' );

function wpws_diable_right_click_activate() {
    wp_enqueue_script('wpws_diable_right_click_script', plugin_dir_url( __FILE__ ). 'script/wpws-disable-right-click.js', array(), '1.0.0', true);
}


