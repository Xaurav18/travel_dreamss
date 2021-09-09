<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Travel_Dreams
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function travel_dreams_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'travel_dreams_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function travel_dreams_jetpack_setup
add_action( 'after_setup_theme', 'travel_dreams_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function travel_dreams_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function travel_dreams_infinite_scroll_render