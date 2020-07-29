<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_filter( 'body_class', 'understrap_body_classes' );

if ( ! function_exists( 'understrap_body_classes' ) ) {
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function understrap_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter( 'body_class', 'understrap_adjust_body_class' );

if ( ! function_exists( 'understrap_adjust_body_class' ) ) {
	/**
	 * Setup body classes.
	 *
	 * @param string $classes CSS classes.
	 *
	 * @return mixed
	 */
	function understrap_adjust_body_class( $classes ) {

		foreach ( $classes as $key => $value ) {
			if ( 'tag' == $value ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;

	}
}

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'understrap_change_logo_class' );

if ( ! function_exists( 'understrap_change_logo_class' ) ) {
	/**
	 * Replaces logo CSS class.
	 *
	 * @param string $html Markup.
	 *
	 * @return mixed
	 */
	function understrap_change_logo_class( $html ) {

		$html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
		$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
		$html = str_replace( 'alt=""', 'title="Home" alt="logo"', $html );

		return $html;
	}
}

/**
 * Display navigation to next/previous post when applicable.
 */

if ( ! function_exists( 'understrap_post_nav' ) ) {
	function understrap_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<nav class="container navigation post-navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'understrap' ); ?></h2>
			<div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'understrap' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap' ) );
				}
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}
}

if ( ! function_exists( 'understrap_pingback' ) ) {
	/**
	 * Add a pingback url auto-discovery header for single posts of any post type.
	 */
	function understrap_pingback() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="' . esc_url( get_bloginfo( 'pingback_url' ) ) . '">' . "\n";
		}
	}
}
add_action( 'wp_head', 'understrap_pingback' );

if ( ! function_exists( 'understrap_mobile_web_app_meta' ) ) {
	/**
	 * Add mobile-web-app meta.
	 */
	function understrap_mobile_web_app_meta() {
		echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
		echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'understrap_mobile_web_app_meta' );

if ( ! function_exists( 'understrap_default_body_attributes' ) ) {
	/**
	 * Adds schema markup to the body element.
	 *
	 * @param array $atts An associative array of attributes.
	 * @return array
	 */
	function understrap_default_body_attributes( $atts ) {
		$atts['itemscope'] = '';
		$atts['itemtype']  = 'http://schema.org/WebSite';
		return $atts;
	}
}
add_filter( 'understrap_body_attributes', 'understrap_default_body_attributes' );


// ACF link selector
function select_link_type($link_type, $internal, $external, $file, $label = ''){

  $state = '';
  $url = '';
  $link = '';
  $link_text = '';

  if($link_type == 'internal'){
    $state = '';
    $url = $internal;
    $link_text = $label;
  }

  if($link_type == 'external'){
    $state = 'target="_blank" rel="noopener norefferer"';
    $url = $external;
    $link_text = $label;
  }

  if($link_type == 'file'){
    $state = 'target="_blank" rel="noopener norefferer"';
    $url = $file;
    $link_text = $label;
  }

  if($link_type !== 'none' ) {
    $link = '<a href="'. $url .'" class="theme-btn-default" '. $state .'>'. $label .'</a>';
  }

  echo $link;

}

// ACF padding toggle function

function flex_content_padding($padding){

	$topPadding = '';
	$bottomPadding = '';

	if(in_array('topPadding', $padding)) {

		$topPadding = ' flex-padding-top';

	}

	if(in_array('bottomPadding', $padding)) {

		$bottomPadding = ' flex-padding-bottom';

	}

	echo $topPadding . ' ' . $bottomPadding;
}

// ACF content alignment function

function flex_content_alignment($align){

  $alignment = '';

	if($align == 'left') {
		$alignment = 'left';
	}

	if($align == 'center') {
		$alignment = 'center';
	}

	if($align == 'right') {
		$alignment = 'right';
	}

	echo $alignment;
}

//ACF set background image

function set_background_image($bg_type, $bg_image){
	$image = '';

	if($bg_type == 'background-image'){
		$image = $bg_image;
		echo 'linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(' . $image . ') no-repeat';
	}

}

//ACF set banner image

function set_banner_image($bg_type, $bg_image){
	$image = '';

	if($bg_type == 'background-image'){
		$image = $bg_image;
		echo 'linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(' . $image . ') no-repeat';
	}

}


//ACF set theme colors

function set_theme_colors($bg_type, $bg_color){
	if($bg_type == 'color'){
		$theme = '';

		if($bg_color == 'default'){
			$theme = ' theme-default';
		}

		if($bg_color == 'primary'){
			$theme = ' theme-primary';
		}

		if($bg_color == 'secondary'){
			$theme = ' theme-secondary';
		}

		echo $theme;
	}
}

// Add Options Page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Global Options',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Post Options',
		'menu_title'	=> 'Post Options',
		'parent_slug'	=> 'edit.php',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Trial Options',
		'menu_title'	=> 'Trial Options',
		'parent_slug'	=> 'edit.php?post_type=trials',
	));
}
