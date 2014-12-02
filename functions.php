<?php

//Theme title support
function site_wp_title( $title, $sep ) {
	global $paged, $page;

	if( is_feed() ) {
		return $title;
	}

	$title .=get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( 'Page %s', max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'site_wp_title', 10, 2 );

//Theme scripts
function site_scripts() {
	wp_enqueue_style( 'main_style', get_stylesheet_uri() );
	wp_enqueue_script( 'google-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );


//Adding thumbnail support to the theme.
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'boxthumb', 220, 160, true );
//add_image_size( 'posthumb', 246, 0, true );
add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list',
) );

//Registering navigation menu.
register_nav_menu( 'primary', 'Main Menu' );
function main_menu() {
	wp_page_menu( 'show_home=1' );
}

//Registering sidebars.
function sidebar_gadgets() {
	register_sidebar( array(
		'name'			=>	'Right Sidebar 1',
		'id'			=>	'right-sidebar-gadget-1',
		'description'	=>	'Right Sidebar Gadgets',
		'before_widget'	=>	'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>	'</aside>',
		'before_title'	=>	'<h3 class="widget-title">',
		'after_title'	=>	'</h3>'
	) );
}
add_action( 'widgets_init', 'sidebar_gadgets' );

function tandc() {
	echo '<div id="tandd">';
	echo '<strong> Terms and Conditions:</strong>
	<ul id="tandc">
	<li>Offer subject to availability.</li>
	<li>Purchase limits may apply on selected products.</li>
	<li>Promotion may be withdrawn any time without notice.</li>
	<li>Terms & conditions of sale might change without prior notice.</li>
	<li>Promotion validity is subject to change, if specific date is not mentioned and hence it is advisable to call the store before you start.</li>
	<li>We are not responsible for any promotion related matters and the website is only for reference and information.</li>
	</ul>';
	echo '<strong>Disclaimer:</strong> *Please note: All promo dates and specifications are subject to change. Contact promoter for more information.';
	echo '</div>';
}