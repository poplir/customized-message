<?php

// Displays plugin settings
function cmsg_options_page()	{
	
	global $cmsg_options;			

	ob_start(); ?>	
			
	<div class='wrap'>
		<h2>Customized Message</h2>
		
		<form method='post' action='options.php'>

		<?php settings_fields('cmsg_settings_group'); ?>

		<h3><?php _e('Write Message Below', 'cmsg_domain') ?></h3>		

		<p>
			<label class="description" for="cmsg_settings[notification]"></label>

			<input id="cmsg_settings[notification]" name="cmsg_settings[notification]" size="85"
			type="text" value="<?php echo $cmsg_options['notification']; ?>" />	
		</p>					
			
		<h4><?php _e('Choose Color', 'cmsg_domain') ?></h4>

		<p>
			<?php $styles = array('blue', 'green', 'orange', 'red', 'grey'); ?>			

			<select name='cmsg_settings[color]' id='cmsg_settings[color]'>

				<?php foreach($styles as $style)  { ?>
					<?php if($cmsg_options['color'] == $style)	{
						$selected = 'selected="selected"';
					}	
					else {
						$selected = '';
					} ?>

					<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
				<?php } ?>	
				
			</select>
		</p>		

		<p class="submit">
			<input type="submit" class="button-primary" value="<?php 
			_e('Save Options', 'cmsg_domain'); ?>" />
		</p>	    		    	
    	
		</form>		
	</div>
	<?php
	echo ob_get_clean();
}

// Add this option inside settings menu
function cmsg_add_options()	{
	add_options_page('Customized Message', 'Customized Message', 'manage_options', 'color-options', 'cmsg_options_page');
}

add_action('admin_menu', 'cmsg_add_options');

// Register settings
function cmsg_register_settings()	{	
	register_setting('cmsg_settings_group', 'cmsg_settings');
}

add_action('admin_init', 'cmsg_register_settings');
?>