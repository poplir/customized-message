<?php
/**
* Plugin Name: Customized Message
* Plugin URI: 
* Description: Write a customized message and add it to any or all of your blog posts using this plugin
* Version: 1.0
* Author: Rajat Popli
* Author URI: https://easyboxplugins.tech
* Text Domain: cmsg
*/

// If this file is called directly, abort
if(!defined('ABSPATH'))  {
	exit;
}

/********************************
* Global variables
********************************/
// Retrieve plugin settings from the options table
$cmsg_options = get_option('cmsg_settings');

/********************************
* Includes
********************************/
include ('includes/scripts.php');	// This controls all JS/CSS
include ('includes/admin-page.php');

include ("includes/display-functions.php");	// Display content functions

?>