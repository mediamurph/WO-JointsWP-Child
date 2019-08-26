<?php

function jointswp_child_start() {
 // launching operation cleanup
 add_action('init', 'jointswp_child_head_cleanup');

 // remove pesky injected css for recent comments widget
 // add_filter( 'wp_head', 'jointswp_child_remove_wp_widget_recent_comments_style', 1 );

 // clean up comment styles in the head
 // add_action('wp_head', 'jointswp_child_remove_recent_comments_style', 1);

 // clean up gallery output in wp
 // add_filter('gallery_style', 'jointswp_child_gallery_style');

 // cleaning up excerpt
 // add_filter('excerpt_more', 'jointswp_child_excerpt_more');
} /* end joints start */
// Fire all our initial functions at the start
add_action('after_setup_theme','jointswp_child_start', 16);



//The default wordpress head is a mess. Let's clean it up by removing all the junk we don't need.
function jointswp_child_head_cleanup() {
	// Remove category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version
	remove_action( 'wp_head', 'wp_generator' );
 // Remove emojis
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
 remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
} /* end Joints head cleanup */



// Remove injected CSS for recent comments widget
// SEE PARENT THEME
/*
function jointswp_child_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}
*/



// Remove injected CSS from recent comments widget
// SEE PARENT THEME
/*
function jointswp_child_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}
*/


// Remove injected CSS from gallery
// SEE PARENT THEME
/*
function jointswp_child_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}
*/


// This removes the annoying […] to a Read More link
// SEE PARENT THEME
/*
function jointswp_child_excerpt_more($more) {
	global $post;
	// edit here if you like
    return '<a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'jointswp') . get_the_title($post->ID).'">'. __('... Read more &raquo;', 'jointswp') .'</a>';
}
*/


//  Stop WordPress from using the sticky class (which conflicts with Foundation), and style WordPress sticky posts using the .wp-sticky class instead
// SEE PARENT THEME
/*
function remove_sticky_class($classes) {
	if(in_array('sticky', $classes)) {
		$classes = array_diff($classes, array("sticky"));
		$classes[] = 'wp-sticky';
	}

	return $classes;
}
add_filter('post_class','remove_sticky_class');
*/


//This is a modified the_author_posts_link() which just returns the link. This is necessary to allow usage of the usual l10n process with printf()
// SEE PARENT THEME
/*
function jointswp_child_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'jointswp' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}
*/


/* _________________________________________________________________________________________________*/

function remove_admin_login_header() {
 remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');



function add_admin_header_fudge() {
 echo '<style type="text/css" media="print">#wpadminbar { display:none; }</style><style type="text/css" media="screen">html{margin-top:32px !important;}* html body{margin-top:32px !important;}@media screen and ( max-width: 782px ){html{margin-top:46px!important;}* html body{margin-top:46px !important;}}</style>'; 
}
add_action( 'wp_head', 'add_admin_header_fudge');



/*
if ( ! function_exists( 'my_login_logo' ) ) :
    function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/welwyn-osteopaths-ident.svg);
            width:121px;
            height:157px;
            background-size: 121px 157px;
            background-repeat: no-repeat;
        	   padding-bottom: 30px;
        }
        .login #login_error, 
        .login .message, 
        .login .success {
            border-left: 4px solid #95bb2f !important;
            padding: 12px;
            margin-left: 0;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .wp-core-ui .button-primary {
            background: #a3cd38 !important;
            border-color: transparent !important;
            box-shadow: 0 1px 0 #a3cd38 !important;
            color: #fff !important;
            font-weight: bold;
            text-decoration: none;
            text-shadow: none !important;
        }
        .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
            background: #a3cd38 !important;
            border-color: #95bb2f !important;
            color: #333;
        }
    </style>
<?php }
    
add_action( 'login_enqueue_scripts', 'my_login_logo' );
endif;
*/
?>