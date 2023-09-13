<?php global $wp_query;
if (isset($wp_query->query_vars['guestId']))
{
	if (!isset($_COOKIE['guest_id'])) {
		setcookie('guest_id', $wp_query->query_vars['guestId'], strtotime('+1 day'));
	} else if ($wp_query->query_vars['guestId'] != $_COOKIE['guest_id']) {
		setcookie('guest_id', $wp_query->query_vars['guestId'], strtotime('+1 day'));
	}
} else {
	header("Location: " . home_url() . "/default/");
}
?>
<?php get_header(); ?>
<div id="main">
<div id="content">
	<img class="home-banner" src="<?php echo bloginfo('template_directory') ?>/img/home-banner.png"/>
	<p class="home-date">SATURDAY, NOVEMBER 14<sup>TH</sup></p>
	<p class="home-detail">Wedding ceremony, dinner &amp; fiesta | BUENOS AIRES</p>
	ssss
</div>
<div class="footer-banner">

<p class="footer-banner-1">We're so excited to share such a happy event with everyone,
that we're celebrating in both Argentina &amp; the US.</p>
<p class="footer-banner-2">See more details about both celebrations and</p>
<a href="<?php echo home_url();?>/rsvp/">
<img src="<?php echo bloginfo('template_directory') ?>/img/home-RSVP.png"
	onmouseover="this.src='<?php echo bloginfo('template_directory') ?>/img/home-RSVP-hover.png'"
	onmouseout="this.src='<?php echo bloginfo('template_directory') ?>/img/home-RSVP.png'" />
</a>
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>