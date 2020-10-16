<?php

if(!defined('ABSPATH'))  {
	die;
}

/********************************
* script control
********************************/

function cmsg_load_scripts()	{

	if(is_single())	{
		wp_enqueue_style("cmsg-styles", plugin_dir_url(__FILE__) . "css/plugin_styles.css");
	}		
}

add_action("wp_enqueue_scripts", "cmsg_load_scripts");

?>