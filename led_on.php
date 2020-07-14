<?php

require_once('client.php');
require_once('config.php');

/**
 * initialize the UniFi API connection class and log in to the controller to do our thing
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion); // initialize the class instance
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * using the new method/function
 */
$data = $unifi_connection->site_leds(true);

if ($data) {
	/**
	* provide feedback in json format
	*/
	echo json_encode($data, JSON_PRETTY_PRINT);
} else {
	/**
	* method returned false so we display the raw results in json format
	*/
	echo '<pre>';
	print_r($unifi_connection->get_last_results_raw(true));
	echo '</pre>';
}

?>
