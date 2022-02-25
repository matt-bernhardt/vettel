<?php
/**
 * Class that defines an administrative dashboard widget.
 *
 * @package Vettel
 * @since 0.1.0
 */

namespace Mjbernha\Vettel;

/**
 * Implements an administrative widget.
 */
class AdminWidget {
	const WID = 'vettel';

	const PERMS = 'manage_options';

	/**
	 * Initializes the widget, provided permissions check out.
	 */
	public static function init() {

		// Define the dashboard widget.
		if ( current_user_can( self::PERMS ) ) {
			wp_add_dashboard_widget(
				self::WID, // A unique slug/ID.
				'Sebastian Vettel Appreciation', // Visible name for the widget.
				array( 'Mjbernha\Vettel\AdminWidget', 'widget' )  // Callback for the main widget content.
			);
		}
	}

	/**
	 * Calls the widget template, provided permissions check out.
	 */
	public static function widget() {

		// Check user capabilities.
		if ( ! current_user_can( self::PERMS ) ) {
			return;
		}

		// Use the template to render widget output.
		require_once( plugin_dir_path( __FILE__ ) . '../templates/admin-widget.php' );
	}
}
