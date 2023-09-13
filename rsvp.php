<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Template Name: RSVP
 * Description: RSVP page
 */

	get_header();
	global $woo_options;
?>

<?php
	$guest_name = $wpdb->get_var( "SELECT name FROM guests WHERE id = " . $_COOKIE['guest_id'] );
	
	$is_confirmed = false;
	if ($wpdb->get_var( "SELECT id_guest FROM confirmed WHERE id_guest = " . $_COOKIE['guest_id'] ) != null) {
		$is_confirmed = true;
	}
	
?>
<div id="rsvp-content">
	<div id="rsvp-banner">
	 	<div id="rsvp-letter">
			<div id="rsvp-guests"><h1 id="guest-name"><?php echo $guest_name?></h1></div>
			<p class="rsvp-description">You're invited to join us for a short ceremony followed by drinks, dinner and dancing.</p>
			<p class="rsvp-date">november 14th    |    Saturday at 6pm</p>
			<p class="rsvp-place">el Delta de Tigre, Buenos Aires, Argentina</p>
			<div id="rsvp-confirmation">
				<div id="rsvp-confirm">
					<p>RSVP - Will you join us?</p>
				</div>
				<div class="float-elements">
					<div id="rsvp-yes-section">
						<input id="rsvp-yes-confirmation" type="radio" name="confirmInvitation" onclick="showConfirmed()" />
						<label>Yes, of course!</label>
					</div>
					<div id="rsvp-no-section">
						<input type="radio" name="confirmInvitation"  onclick="hideConfirmed()"/>
						<label>Sorry, I can't make it to Argentina.<br>
							<span>*Check out our plans in the US</span>
						</label>
					</div>
				</div>
				<div id="rsvp-confirmed" style="display: none;">
					<div class="float-elements">
					<div class="rsvp-fantastic">
						<p>Fantastic</p>
					</div>
					<p class="rsvp-questions">Just a few more questions then:</p>
					</div>
					<div id="rsvp-bring-date" class="float-elements">
						<div class="rsvp-confirm-date">
							<span>Bringing a date</span><br>
							<input type="radio" name="confirmDate" onclick="enableDateName()"/><span>YES</span>
							<input id="noDate" type="radio" name="confirmDate" checked="checked" onclick="disableDateName()"/><span>NO</span>
						</div>
						<div class="rsvp-date-name">
							<span>Your date's name</span><br>
							<input id="date-name-input" type="text" disabled="disabled"/>
						</div>
					</div>
					<p class="rsvp-food-restrictions">List any dietary restrictions (vegetarian, etc.), health restrictions, or 
						anything else that we should know:</p>
					<textarea id="food-restrictions-text" maxlength="200"></textarea>
					
				</div>
				<div id="rsvp-submit-section" class="float-elements" style="display: none;">
					<p class="rsvp-confirm-label">please, rsvp by <span>august 15, 2015</span></p>
					<input class="send-button" type="button" value="Send!" onclick="confirmRsvp(<?php echo $is_confirmed?>)">
				</div>
				<div id="rsvp-confirmation-footer">
					<p>please, rsvp by <span>august 15, 2015</span></p>
				</div>
			</div>
	 	</div>
	</div>
	<div id="rsvp-details">
 		<p class="rsvp-details-title">DETAILS TO GET YOU EXCITED</p>
 	</div>
 	<div id="rsvp-images">
 	<ul>
	 	<li>
	 		<div>
	 			<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/rsvp-img1.png"></a>
	 			<p>WHERE<br><span>is this?</span></p>
	 		</div>
	 	</li>
	 	<li>
	 		<div>
	 			<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/rsvp-img2.png"></a>
	 			<p>WHAT<br><span>is the location in Tigre like?</span></p>
	 		</div>
	 	</li>
	 	<li>
	 		<div>
	 			<a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/rsvp-img3.png"></a>
	 			<p>WHAT<br><span>can I expect in Argentina?</span></p>
	 		</div>
	 	</li>
 	</ul>
 	</div>
</div>
<?php get_footer(); ?>