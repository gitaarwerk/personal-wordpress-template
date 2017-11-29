<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?php wp_title('|', true, 'right'); ?>Personal site</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="x-ua-compatible" content="IE=Edge" />
		<meta name="Description" content="<?php echo get_bloginfo( 'description' ); ?>"/>
		<meta name="msapplication-config" content="none" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="cleartype" content="on" />
		<meta name="referrer" content="origin" />
		<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
		<?php wp_head();?>
		<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
		<link rel="manifest" href="/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#737373">
		<meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#737373">
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Comments Feed" href="<?php bloginfo('comments_rss2_url'); ?>" />
	</head>
	<body>
		<input type="checkbox" class="main-menu-switch" id="mobile-menu">
		<nav class="navigation">
			<a class="logo" href="<?php echo get_bloginfo('wpurl');?>">Personal site</a>
			<?php wp_nav_menu( array(
				'container' => false, 
				'menu_class' => 'main-menu',
				'depth' => 1,
				'theme_location' => 'main-menu'
			));?>
			<label for="mobile-menu" class="mobile-menu" title="Open menu">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
			<label>
		</nav>
