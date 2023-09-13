<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Jennie &amp; Toba</title>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory') ?>/fonts/fonts.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="<?php echo bloginfo('template_directory') ?>/js/rsvp.js"></script>
<script src="<?php echo bloginfo('template_directory') ?>/js/contact.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<a href="<?php echo home_url(); ?>">
			<img src="<?php echo bloginfo('template_directory') ?>/img/logo.png"/>
			</a>
		</div>
		<nav id="menu">
			<?php wp_nav_menu( array( 'menu' => 'jennie-toba-menu', 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
		</nav>
	</div>