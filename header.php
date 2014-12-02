<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="big-wrapper">

	<header id="main-header">
		<div id="top-header">
			<div id="left-head">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div id="right-head"></div>
		</div>
		<nav id="main-menu">
			<?php wp_nav_menu( 'theme_location=primary&container_class=menu&menu_class=ul-menu&fallback_cb=main_menu' ); ?>
		</nav>
	</header><!-- #main-header -->
	<div class="clear"></div>