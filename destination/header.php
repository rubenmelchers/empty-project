<?php
/**
 * The Header for our theme
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="wrap">
			<div class="row center-lg">
				<nav class="col-lg-12 header__wrapper">
					<?php wp_nav_menu(array('menu' => 'navigation', 'container' => '', 'menu_class' => 'header__menu')); ?>
					<span class="header__close"></span>
				</nav>

				<div class="header__trigger">
					<div class="header__bar"></div>
				</div>
				<span class="header__exit"></span>
			</div>
		</div>
	</header>
