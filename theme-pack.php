<?php
/**
 * Plugin Name: Thrive The Events Calendar Pro Theme Pack
 * Description: A third party plugin for Thrive theme that will add style to the ‘The Events Calendar Pro’ plugin.
 * Version: 1.0
 * Author: Dunhakdis
 * Author URI: http://dunhakdis.me
 * Text Domain: thrivethemepack
 * License: GPL2
 *
 * @since     1.0
 * @package Thrive The Events Calendar Pro Theme Pack
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit();
 }

 /**
  * Enqueue scripts and styles.
  */
 function thrive_theme_pack_scripts() {

    wp_register_style( 'thrive-theme-pack-stylesheet', plugins_url( '/assets/css/themepack.css', __FILE__ ), array( 'thrive-style' ), '1.0' );
    wp_enqueue_style( 'thrive-theme-pack-stylesheet' );

	return;
}

add_action( 'wp_enqueue_scripts', 'thrive_theme_pack_scripts', 50 );
