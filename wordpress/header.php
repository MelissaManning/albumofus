<!DOCTYPE html>
<html lang="en"<?php if (is_single() && !is_page()) { ?> class="article"<?php } ?>>
<head>
	<meta charset="utf-8" />
	<title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
	<meta name="HandheldFriendly" content="True" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<link href="http://fonts.googleapis.com/css?family=Averia+Libre:400,700,300,300italic,700italic,400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed for Posts from my site (the main feed)" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3 - <?php bloginfo('name'); ?> " href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="Comments Feed - for all the comments on this site" href="<?php bloginfo('comments_rss2_url'); ?>" />
	<?php wp_head(); ?>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!--[if IE]><![endif]-->
	<!--[if lte IE 8]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 7]><script src="//cdnjs.cloudflare.com/ajax/libs/json2/20121008/json2.js"></script><![endif]-->
	<script src="<?php bloginfo('template_url'); ?>/script.js"></script>
</head>
<body>
	<div>
		<div class="banner">
			<!--<div class="bannertext">
				About
				Contact
				Links
			</div>-->
		</div>
	</div>