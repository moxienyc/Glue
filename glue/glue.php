<?php namespace glue;
/**
 *	Plugin Name: Glue
 *	Plugin URI: https://github.com/mitogh/glue
 *	Description: Provides glue
 *	Version: 1.0
 *	Author: Crisoforo Gaspar Hernandez
 *	Author URI: https://github.com/mitogh
 */

if ( ! defined( 'WPINC') ) {
	die;
}

$plugin_dir = plugin_dir_path( __FILE__ );

require_once  $plugin_dir . 'class-file-handle.php';
require_once  $plugin_dir . 'class-view.php';
