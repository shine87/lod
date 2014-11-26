<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description' );
		if( $site_description && is_home() || is_front_page() )
		{
			echo ' | ' . $site_description;
		}
		if( $paged >= 2 || $page >=2 ) {
			echo ' | ' . sprintf( 'Page %s', max( $paged, $page ) );
		}
	?></title>
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="all">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width">
	

	<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
	?>
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