<?php


function lyric_display_section_dev_cb()
{
};


function loser_display_setting()
{
	$setting_author = get_option('loser_display_author');

	?>

	<input type ="text" name = "loser_display_author">

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
		'Motivation', 'loser_display_setting',
		'general',
		'loser_display_section_dev'
	);
}
add_action('admin_init','loser_display_settings_init');
