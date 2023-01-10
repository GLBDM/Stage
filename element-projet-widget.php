<?php
/**
 * Plugin Name: Elementor Widget Custom
 * Description: Projet de stage et test.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Guillaume
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-oembed-widget
 *
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_projet_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/projet-widget.php' );

	$widgets_manager->register( new \Elementor_Projet_Widget() );

}

add_action( 'elementor/widgets/register', 'register_projet_widget' );

function register_widget_styles() {
	wp_register_style( 'style', plugins_url( 'assets/style.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'register_widget_styles' );
