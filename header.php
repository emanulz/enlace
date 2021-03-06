<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body id="pageBody" <?php body_class(); ?>>

			<div class="mainContainer">

				<!-- logo -->
				<div class="topLogo" role="logo">
					<div class="topLogo-container">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/logos/headerLogo1-3.jpg" alt="">
						<!-- <img src="<?php echo get_bloginfo('template_url') ?>/img/logos/headerLogo1-2.png" alt=""> -->
						<img src="<?php echo get_bloginfo('template_url') ?>/img/logos/headerLogo2-2.png" alt="">
					</div>
				</div>
				<!-- /logo -->

				<!-- header -->
				<header class="mainHeader header clear" role="banner">
						<!-- nav -->
						<nav class="nav topMenu" role="navigation">
							<span class="sideMenuToggle icon fa fa-bars"></span>
							<?php enlace_nav(); ?>
							<?php get_template_part('searchformHeader'); ?>
						</nav>
						<!-- /nav -->

						<!-- side menu -->
						<nav id="sideMenu" class="sideMenu">
							<div class="sideMenu-items">
								<?php enlace_sidenav(); ?>
							</div>
						</nav>
						<!-- side menu -->
				</header>
				<!-- /header -->

				<!-- page Content -->

				<div class="pageContent">
