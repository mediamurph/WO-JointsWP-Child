<?php

function remove_parent_theme_locations() {
    // @link http://codex.wordpress.org/Function_Reference/unregister_nav_menu
    //unregister_nav_menu( 'main-nav' );
    unregister_nav_menu( 'offcanvas-nav' );
    unregister_nav_menu( 'footer-links' );
}
add_action( 'after_setup_theme', 'remove_parent_theme_locations', 99 );



function jointswp_child_register_theme_menus () {
    register_nav_menus( [
        'help-centre' => _( 'Help Centre' ),
        'mobile-nav' => _( 'Mobile' ),
    ] );
}
add_action( 'init', 'jointswp_child_register_theme_menus' );




// The Top Menu
function jointswp_child_top_nav() {
	wp_nav_menu(array(
		'container'      => false, // Remove nav container
		'menu_id'        => 'main-nav', // Adding custom nav id
		'menu_class'     => 'large-horizontal menu', // Adding custom nav class
		'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">' . "\n" . "\t\t\t\t\t" . '%3$s' . "\t\t\t\t" . '</ul>' . "\n",
		'theme_location' => 'main-nav', // Where it's located in the theme
		'depth'			 => 2, // Limit the depth of the nav
		'fallback_cb'	 => false, // Fallback function (see below & parent theme)
		'walker'		 => new Murph_Menu_Walker()
	));
}

// The Mobile Menu
function jointswp_child_mobile_nav() {
	wp_nav_menu(array(
		'container'      => false, // Remove nav container
		'menu_id'        => 'mobile-nav', // Adding custom nav id
		'menu_class'     => 'large-vertical menu cell auto', // Adding custom nav class
		'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion large-dropdown">' . "\n\t\t\t\t\t" . '%3$s' . "\t\t\t\t" . '</ul>' . "\n",
		'theme_location' => 'mobile-nav', // Where it's located in the theme
		'depth'			 => 1, // Limit the depth of the nav
		'fallback_cb'	 => false, // Fallback function (see below & parent theme)
		'walker'		 => new Murph_Menu_Walker()
	));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Murph_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 2, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n\t\t\t\t\t\t$indent<ul class=\"menu\">\n";
	}
}

// The Top Menu
/*function jointswp_child_top_nav() {
	wp_nav_menu(array(
		'container' => false, // Remove nav container
		'menu_id' => 'main-nav', // Adding custom nav id
		'menu_class' => 'large-horizontal menu', // Adding custom nav class
		'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion large-dropdown">' . "\n" . '%3$s' . "\t" . '</ul>' . "\n",
		'theme_location' => 'main-nav', // Where it's located in the theme
		'depth' => 2, // Limit the depth of the nav
		'fallback_cb' => false, // Fallback function (see below & parent theme)
		'walker' => new Murph_Menu_Walker()
	));
}*/



// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
/*class Murph_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 2, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n\t$indent<ul class=\"menu\">\n";
	}
}



function jointswp_child_register_my_menus() {
 register_nav_menus(
  array(
   'footer-menu' => __( 'Footer Menu' )
  )
 );
}
add_action( 'init', 'jointswp_child_register_my_menus', 999 );*/
?>