<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div class="header-logo">
			<img src="https://example.com/wp-content/uploads/logo.png" alt="">
		</div>
		<div class="header-navigation">
				<nav>
						<?php wp_nav_menu(array(
								'theme_location' => 'menu_header',
								'menu_class' => 'menu menu_top',
						)); ?>
				</nav>
		</div>
		<div class="clearfix"></div>
	</header>
	<main>
