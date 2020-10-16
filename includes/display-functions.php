<?php

// Adds the message to the blog post in which the shortcode is specified
function cmsg_add_message($content)	{
	global $wpdb;
	global $cmsg_options;	

	$results = $wpdb->get_results('select id, post_content from wp_posts where ping_status = "open" and post_status = "publish"');

	foreach($results as $res)  {
		for($i=0; $i<=count($results); $i++)  {			
			if($res->id == $cmsg_options['postId'][$i])  {
				
				$post_id = $cmsg_options['postId'][$i];
				
			}
		}
	}
	
	if(is_single())  {		

		$extra_content = '<p class="color-me '.$cmsg_options['color'].'">'.$cmsg_options['notification'].'</p>';
				
		$content .= $extra_content;		

		// Update the content
		$up_cont = $wpdb->update('wp_posts', 
			array('post_content' => $content), 
			array('id' => $post_id));			
	
	}		
	
	return $content;		
}	

add_shortcode('cmsg', 'cmsg_add_message');

?>