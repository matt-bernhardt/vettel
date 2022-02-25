<?php
/**
 * Class that defines a public-facing widget.
 *
 * @package Vettel
 * @since 0.1.0
 */

namespace Mjbernha\Vettel;

class DisplayWidget extends \WP_Widget {

	/**
	 * Overridden constructor from WP_Widget.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'vettel-display-widget',
			'description' => __( 'widget for Sebastian Vettel', 'vettel' ),
		);
		parent::__construct(
			'vettel',
			__( 'Sebastian Vettel', 'vettel' ),
			$widget_ops
		);
	}

	/**
	 * Registers widget.
	 */
	public static function init() {
		register_widget( 'Mjbernha\Vettel\DisplayWidget' );
	}

	/**
	 * Widget() builds the output
	 *
	 * @param array $args See WP_Widget in Developer documentation.
	 * @param array $instance See WP_Widget in Developer documentation.
	 * @link https://developer.wordpress.org/reference/classes/wp_widget/
	 */
	public function widget( $args, $instance ) {
		// Define expected markup for widget and title containers.
		$allowed = $this->widget_allowed();

		// Render markup.
		echo wp_kses( $args['before_widget'], $allowed );
		if ( $instance['widget_title'] ) {
			echo wp_kses( $args['before_title'], $allowed ) . esc_html( $instance['widget_title'] ) . wp_kses( $args['after_title'], $allowed );
		}
		require( plugin_dir_path( __FILE__ ) . '../templates/display-widget.php' );
		echo wp_kses( $args['after_widget'], $allowed );
	}

	/**
	 * This returns an array of expected tags and attributes for widget
	 * rendering.
	 */
	public function widget_allowed() {
		return array(
			'aside' => array(
				'class' => array(),
				'id' => array(),
				'role' => array(),
			),
			'div' => array(
				'class' => array(),
				'id' => array(),
				'role' => array(),
			),
			'h2' => array(
				'class' => array(),
			),
			'h3' => array(
				'class' => array(),
			),
		);
	}
}