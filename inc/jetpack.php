<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package teapartyanimal
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function teapartyanimal_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'teapartyanimal_infinite_scroll_setup' );
