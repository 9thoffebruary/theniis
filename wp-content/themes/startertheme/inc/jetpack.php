<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package startertheme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function startertheme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'startertheme_jetpack_setup' );
