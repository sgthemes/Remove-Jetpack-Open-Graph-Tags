<?php
/*
Plugin Name: Remove Jetpack Open Graph Tags
Plugin URI: http://sgthemes.com/remove-jetpack-opengraph-tags
Description: Jetpack plugin for WordPress auto generate OpenGraph tags by default with no setting to remove it. Title tags were duplicated with Google+ and with Facebook. This plugin help you remove Jetpack Open Graph Tags
Version: 1.0
Author: SGThemes Team
Author URI: http://sgthemes.com
*/
add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );
?>