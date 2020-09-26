<?php
/**
 * Plugin Name: Preset exclusions for WordPress Migration & Duplicator
 * Plugin URI: https://github.com/alexmoise/preset-exclusions-for-wordpress-migration-duplicator
 * GitHub Plugin URI: https://github.com/alexmoise/preset-exclusions-for-wordpress-migration-duplicator
 * Description: A quick collection of paths and file types that needs to be excluded from site exports created with WordPress Migration & Duplicator by Webtofee
 * Version: 1.0.1
 * Author: Alex Moise
 * Author URI: https://moise.pro
 */

if ( ! defined( 'ABSPATH' ) ) {	exit(0);}

// Paths to exclude 
add_filter('wt_mgdp_exclude_files', 'wt_mgdp_exclude_files_fn');
function wt_mgdp_exclude_files_fn($arr)
{
$arr[]='updraft'; // add folder/file path relative to wp-content folder
$arr[]='cache';
return $arr;
}

// File types to exclude
add_filter('wt_mgdp_exclude_extensions', 'wt_mgdp_exclude_extensions_fn');
function wt_mgdp_exclude_extensions_fn($arr)
{
$arr[]='zip';
$arr[]='gz';
return $arr;
}

?>
