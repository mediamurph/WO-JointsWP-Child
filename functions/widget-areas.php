<?php
/**
 * Register widget areas
 *
 * @package ...
 * @since ...
 * TheBestOf, YouTube, Opening hours, Testimonial, Badges, Book Now
 */


if ( ! function_exists( 'jointswp_child_sidebar_widgets' ) ) :
	function jointswp_child_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'front-page-sidebar',
				'name'          => __( 'TheBestOf', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="sidebar-widget fp widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
     
		register_sidebar(
			array(
				'id'            => 'front-page-video',
				'name'          => __( 'YouTube Video', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="video-widget fp widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
     
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Default Sidebar', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="sidebar-widget widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);

		/*register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this footer container', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="footer-widget widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);*/

		register_sidebar(
			array(
				'id'            => 'front-page-widget-area-1',
				'name'          => __( 'Opening Hours', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this footer container', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="front-page-widget-1 widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'front-page-widget-area-2',
				'name'          => __( 'Testimonial', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this footer container', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="front-page-widget-2 widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'front-page-badges',
				'name'          => __( 'Badges', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this footer container', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="badges-widget widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'book-now',
				'name'          => __( 'Book Now', 'jointswp-child' ),
				'description'   => __( 'Drag widgets to this footer container', 'jointswp-child' ),
				'before_widget' => '<section id="%1$s" class="book-now-widget widget %2$s">',
				'after_widget'  => '</section>',
			)
		);
	}

	add_action( 'widgets_init', 'jointswp_child_sidebar_widgets' );
endif;