<?php

function lyric_display_section_dev_cb()
{
};

function loser_print_motivation()
{
	$setting_moto = get_option('loser_display_moto');
	echo '<p id=motivate>';
	echo$setting_moto;
	echo '</p>';
};


function loser_display_setting()
{
	?>

	<input type ="text" name = "loser_display_moto">

	<?php
}


function loser_display_settings_init()
{
	//Setup new setting
	register_setting('general', 'loser_display_moto');



	//New Section
	add_settings_section(
		'loser_display_section_dev',
		__('Goodbye Loser','loser_display'), '',
		'general'
	);
	//New Field
	add_settings_field(
		'loser_display_settings_motivation',
		'Fight Back Against the Voices', 'loser_display_setting',
		'general',
		'loser_display_section_dev'
	);
	
}

add_action('admin_init','loser_display_settings_init');
add_action('admin_notices','loser_print_motivation');
