<?php

/**
 * Plugin Name: WP Elements
 * Plugin URI: https://github.com/aduth/wp-elements.git
 * Description: Elements DOM builder support for WordPress
 * Version: 1.0.0
 * Author: Andrew Duthie
 * Author URI: http://andrewduthie.com
 * License: GPL2+
 */

/**
 * Registers elements scripts to be used as dependencies in element implementations.
 */
function wp_elements_register_scripts() {
	wp_register_script( 'virtual-dom', 'https://wzrd.in/standalone/virtual-dom@latest' );
	wp_register_script( 'wp-elements', plugins_url( 'js/wp-elements.js', __FILE__ ), array( 'virtual-dom', 'underscore' ) );
}
add_action( 'init', 'wp_elements_register_scripts' );
