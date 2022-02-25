<?php
/**
 * Class that defines an administrative dashboard widget.
 *
 * @package Vettel
 * @since 0.1.0
 */

namespace Mjbernha\Vettel;

class AdminWidget {
	const WID = 'vettel';

	const PERMS = 'manage_options';

	public static function init() {
		error_log( 'This is in init' );

		// Define the dashboard widget.
		if ( current_user_can( self::PERMS ) ) {
			error_log( 'We passed the permissions check' );
			\wp_add_dashboard_widget(
				self::WID, // A unique slug/ID.
				'Sebastian Vettel Appreciation', // Visible name for the widget.
				array( 'Mjbernha\Vettel\AdminWidget', 'widget' )  // Callback for the main widget content.
			);
		}
	}

	public static function widget() {

		// Check user capabilities.
		if ( ! current_user_can( self::PERMS ) ) {
			return;
		}

		// Use the template to render widget output.
		require_once( plugin_dir_path( __FILE__ ) . '../templates/admin-widget.php' );
	}
}
