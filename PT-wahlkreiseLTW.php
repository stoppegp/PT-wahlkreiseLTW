<?php
/*
Plugin Name: Piraten-Tools / WahlkreiseLTW
Plugin URI: https://github.com/PiratenGP/PT-openantrag
Description: -
Version: 0.0.1
Author: @stoppegp
Author URI: http://stoppe-gp.de
License: CC-BY-SA 3.0
*/

global $PT_infos;
$PT_infos[] = array(
	'name'		=>		'WahlkreiseLTW',
	'desc'		=>		'Infos tbd',
);

require('mainmenu.php');

if (!function_exists("piratentools_main_menu")) {
	add_action( 'admin_menu', 'piratentools_main_menu');
	function piratentools_main_menu() {
		add_menu_page( "Piraten-Tools", "Piraten-Tools", 0, "piratentools" , "PT_main_menu");
	}
}



require('wahlkreiseLTW/wahlkreiseLTW.php');
?>
