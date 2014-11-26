<?php

// Adding HTML 5 support to IE.
function add_ie_html5_shim () {
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
}
add_action('wp_head', 'add_ie_html5_shim');

//Adding thumbnail support to the theme.
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'boxthumb', 220, 160, true );
add_image_size( 'posthumb', 246, 0, true );

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
	register_sidebar( array(
		'name'			=>	'Right Sidebar 2',
		'id'			=>	'right-sidebar-gadget-2',
		'description'	=>	'Right Sidebar Gadgets',
		'before_widget'	=>	'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>	'</aside>',
		'before_title'	=>	'<h3 class="widget-title">',
		'after_title'	=>	'</h3>'
	) );
	register_sidebar( array(
		'name'			=>	'Right Sidebar 3',
		'id'			=>	'right-sidebar-gadget-3',
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