<html>
<head>
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Ubuntu:400,500,700,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://d3lp1msu2r81bx.cloudfront.net/kjs/js/lib/kinetic-v5.0.0.min.js"></script>
	<script tyep="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container col-wrap">
			<div class="column third">
				<div class="logo-wrap">
					<a href="<?php echo get_site_url(); ?>">
						<h1 class="logo">Coronado Living</h1>
					</a>
				</div>
			</div>
			<div class="column two-thirds">
				<nav>
					<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
				</nav>
			</div>
			<div>
			</header>