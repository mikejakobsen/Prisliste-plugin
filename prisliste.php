<?php
/*
Plugin Name: Prisliste
Plugin URI: http://www.hoeks.dk
Description: ACF Prisliste
Version: 1.0.0
Author: Mike Jakobsen
Author URI: http://www.mikejakobsen.com
*/

function include_field_types_table( $version ) {

	include_once('acf-table.php');

}

add_action('acf/include_field_types', 'include_field_types_table');	

?>
