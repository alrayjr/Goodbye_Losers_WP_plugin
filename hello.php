<?php

/*
Plugin Name: Goodbye loser

Description: plugin similar to hello DOLLY but its just insults/demotivates you + you can add more if u want in the general setting tab.
Version: 4.2.0
*/

require 'Settings.php';

require 'Functions.php';





// We need some CSS to position the paragraph.
function loser_css() {
	echo "
	<style type='text/css'>
	#loser {
		float: right;
		border-width: thin;
		border-color: #333333;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 2;
	}
	.rtl #loser {
		float: left;
	}
	.block-editor-page #loser {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#loser,
		.rtl #loser {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'loser_css' );
