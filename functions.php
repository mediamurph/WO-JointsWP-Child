<?php
/**
 * Author: Daniel Pearce
 * URL: http://mediamurph.com
 *
 * JointsWP-child functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package JointsWP-child
 */
 
require_once( 'functions/dns-prefetch.php' );
require_once( 'functions/enque-scripts.php' );
require_once( 'functions/menu.php' );
require_once( 'functions/widget-areas.php' );
require_once( 'functions/widgets.php' );
require_once( 'functions/shortcodes.php' );
require_once( 'functions/search.php' );
// require_once( 'functions/login.php' );

// Remove All Yoast HTML Comments
// https://gist.github.com/paulcollett/4c81c4f6eb85334ba076
/*add_action('wp_head',function() { 
    ob_start(function($o) {
        return preg_replace('/^\n?<!--.*?[Y]oast.*?-->\n?$/mi','',$o);
    });
},~PHP_INT_MAX);*/

// Change PRIORITY of YOAST plugin
    /*$wpseo = WPSEO_Frontend::get_instance();
    remove_action( 'wpseo_head', array( $wpseo, 'canonical' ), 20 );
    add_action( 'wpseo_head', array( $wpseo, 'canonical' ), 1  );*/

// EMOJI
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
    remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

//OTHER HEAD STUFF
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'index_rel_link' ); // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
    remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version


?>