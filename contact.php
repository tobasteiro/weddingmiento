<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Template Name: CONTACT
 * Description: Contact page
 */

	get_header();
	global $woo_options;
?>

<?php
	$guest_name = $wpdb->get_var( "SELECT name FROM guests WHERE id = " . $_COOKIE['guest_id'] );
?>

<div id="contact-content">
	<div class="us-title"><p>contact us</p></div>
	
	<input type="hidden" id="guest_name" value="<?php echo $guest_name;?>">
	
	<p class="us-paragraph">Email us any questions!</p>
	
	<div class="float-elements">
		<div class="cont-name-div">
			<label>your name</label><br>
			<input type="text" id="cont-name">
		</div>
		<div class="cont-email-div">
			<label>email</label><br>
			<input type="text" id="cont-email" onblur="validateEmail()">
		</div>
		
	</div>
	<div id="cont-message-div">
		<label>message</label><br>
		<textarea id="cont-message" maxlength="500" cols="5"></textarea>
	</div>
	
	<div class="cont-button-div">
		<input id="cont-send-button" class="send-button" type="button" value="Send!" onclick="sendContact()">
	</div>
</div>
<?php get_footer(); ?>