<?php

if ( ! function_exists( 'jointswp_child_scripts' ) ) :
 function jointswp_child_scripts() { 
  
  // 01 - jointswp-child-css
  wp_enqueue_style( 'jointswp-child', get_stylesheet_directory_uri() . '/css/app.css', array(), '1.0.1', 'all' );

  // 02 - Enqueue the OpenSans GoogleFonts Stylesheet.
  wp_enqueue_style( 'opensans-stylesheet', "//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700", array(), '2.10.4', 'all' );

  // 03 -Deregister the jquery version bundled with WordPress.
  wp_deregister_script( 'jquery' );

  // 04 -CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header. --- CURRENTLY RESIDES IN THE FOOTER I.E. 'TRUE' AS DOES MIGRATE
  // wp_enqueue_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", array(), '3.2.1', /* FALSE */ true );
  wp_enqueue_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", array(), '3.2.1', /* FALSE */ true );

  // 05 - Deregister the jquery-migrate version bundled with WordPress.
  wp_deregister_script( 'jquery-migrate' );

  // 06 - CDN hosted jQuery migrate for compatibility with jQuery 3.x
  wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true );

  // 07 - Enqueue jQuery migrate. Uncomment the line below to enable.
  wp_enqueue_script( 'jquery-migrate' );

  add_filter( 'feed_links_show_comments_feed', '__return_false' );
 }

 add_action( 'wp_enqueue_scripts', 'jointswp_child_scripts', 1);
endif;



if ( ! function_exists( 'jointswp_child_clearout_scripts' ) ) :
    function jointswp_child_clearout_scripts() { 
        wp_dequeue_style( 'site-css' );
        wp_deregister_style( 'site-css' ); 
    }
    add_action( 'wp_enqueue_scripts', 'jointswp_child_clearout_scripts', 1111);
endif;

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}