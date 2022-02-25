<?php
/**
 * Plugin Name: Sebastian Vettel Appreciation Widget
 * Description: A quick plugin to appreciate Sebastian Vettel (and learn PSR-4 autoloading)
 * Author: Matt Bernhardt
 * Version: 0.2.0
 *
 * @package Vettel
 * @since 0.1.0
 */

namespace Mjbernha\Vettel;

defined( 'ABSPATH' ) || die();

// Use the Composer autoloader to get all needed classes.
if ( ! class_exists( Mjbernha\Vettel\DisplayWidget::class ) ) {
	require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
}

// Call the class' init method as part of dashboard setup.
add_action( 'wp_dashboard_setup', array( 'Mjbernha\Vettel\AdminWidget', 'init' ) );
add_action( 'widgets_init', array( 'Mjbernha\Vettel\DisplayWidget', 'init' ) );
