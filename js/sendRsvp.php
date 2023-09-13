
<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Template Name: confirmRSVP
 * Description: confirmRSVP
 */

global $woo_options;

	$wpdb->insert("confirmed", array(
	"id_guest" => $_COOKIE['guest_id'],
	"date_name" => $_POST['date-name'],
	"food_restrictions" => $_POST['food-restrictions'],
	"coming" =>$_POST['is-confirmed']
));
	
	echo 'thanks for RSVPing!';
?>
