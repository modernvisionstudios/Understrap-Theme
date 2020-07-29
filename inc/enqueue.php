<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		wp_enqueue_style( 'fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array());
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
    wp_enqueue_style( 'lightgallery-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css');
		wp_enqueue_script( 'jquery' );


		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'gsap3', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js', array(), NULL, true );
		wp_enqueue_script( 'gsap3-draggable', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.0/Draggable.min.js', array(), NULL, true );
		wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), NULL, true );
		wp_enqueue_script( 'scrollmagicPlugins', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array(), NULL, true );
		wp_enqueue_script( 'scrollmagicGsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array(), NULL, true );
		wp_enqueue_script( 'swup', get_template_directory_uri() . '/js/swup.min.js', array(), NULL, true );
    wp_enqueue_script( 'swupPlugin', get_template_directory_uri() . '/js/@swup/js-plugin/dist/SwupJsPlugin.min.js', array(), NULL, true );
    wp_enqueue_script( 'lightgallery','https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js', array(), NULL, true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
