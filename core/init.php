<?php

//register_activation_hook(WPSCAFF_PLUGIN_FILE, 'WPSCAFF_Activation_Hook');
function WPSCAFF_Activation_Hook(){
	$default_values = array(
	    'cpt_prefix'	=> ''
	);
	add_option('wpscaff_options', $default_values);
}