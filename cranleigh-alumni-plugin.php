<?php
/*
Plugin Name: Cranleigh Alumni Plugin
Plugin URI: https://www.cranleigh.org
Description: Cranleigh Alumni Plugin
Version: 1.1
Author: fredbradley
Author URI: https://www.cranleigh.org
License: GPL2
*/

namespace FredBradley\CranleighAlumniPlugin;

if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

$plugin = new Plugin();
