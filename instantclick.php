<?php
/*
Plugin Name: InstantClick
Plugin URI: https://fatpony.me/plugins/instantclick
Description: Dramatically speed up your WordPress site with InstantClick
Version: 1.0.3
Author: Erica Franz
Author URI: https://fatpony.me
Text Domain: InstantClick
License: MIT
*/

// Exit if accessed directly
if ( !defined ( 'ABSPATH' ) )
    exit;

// Maybe InstantClick is already loaded by another plugin
if ( !class_exists( 'WP_InstantClick' ) )
    require plugin_dir_path( __FILE__ ) . 'class-wp-instantclick.php';

// But the other plugin may not have loaded the options class
if ( !class_exists( 'WP_InstantClick_Options' ) )
    require plugin_dir_path( __FILE__ ) . 'class-wp-instantclick-options.php';

WP_InstantClick::enable();
WP_InstantClick_Options::enable();
