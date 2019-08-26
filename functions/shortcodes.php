<?php



function all_testimonials_function() {
    $a = '<div class="list-testimonials">' . "\n";
    $z = '</div>' . "\n";
    $return_string = '';
    query_posts( 
        array('cat' => 5, 
              'orderby' => 
              'date', 
              'order' => 'DESC' , 
              'showposts' => 50)
    );
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            $return_string .=  '<div class="testimonial-item">';
            $return_string .=  '<h3 class="testimonial-title">' . get_the_title() . '</h3>';
            $return_string .=  '<div class="testimonial-content">' . get_the_content() . '</div>';
            $return_string .=  '</div>' . "\n";
        endwhile;
    endif;
    wp_reset_query();
    
    return ( 
        $return_string == '' ? 'There are no testimonials at present.' : $a . get_testimonial_nav() . $return_string . $z
    );
}
function get_testimonial_nav() {
    $return_string = '';
    /*<ul class="testimonial-searchby-menu">
<li><span class="testimonial-searchby-name"><a href="#">All</a></span><span class="testimonial-searchby-list"></span></li>
</ul>*/
    return $return_string;
}



function all_faqs_function() {
    $faqnav = '';
    $return_string = '';
    
    query_posts( array( 
        'cat' => 3, 
        'orderby' => 
        'title', 
        'order' => 
        'DESC' , 
        'showposts' => 50) 
    );
    
    if (have_posts()) : 
        while (have_posts()) : the_post();
            $id  = trim( preg_replace( '%(.*)/faq/%', '' , get_the_permalink() ), "/" );

            $faqnav         .= '<li><a href="#' . $id . '">' . get_the_title() . '</a></li>'; 

            $return_string  .=  '<div id="' . $id . '" class="faq">';
            $return_string  .=  '<h3>' . get_the_title() . '</h3>';
            $return_string  .=  '<div>' . get_the_content() . '</div>';
            $return_string  .=  '</div>';
            $return_string  .=  '<p class="top"><a href="#main-heading">Back to top</a></p>' . "\n\n";
        endwhile;
    endif;
    wp_reset_query();
    $nav = '<ul id="faq-list">' . $faqnav . '</ul>';
    return $nav . $return_string;
    return ($return_string == '' ? 'There are no FAQs at present.' : $nav . $return_string);
}



function all_locations_function() {
    $_r = '';    
    $args = array('cat' => 58, 'orderby' => 'title', 'order' => 'DESC' , 'showposts' => 50);
    $_l = new WP_Query( $args );
    
    if ( $_l->have_posts() ) {
        while ( $_l->have_posts() ) {
            $_l->the_post();
            $_r .= '<div id="post-' . get_the_id() . '" class="faq">';
            $_r .= '<h3>' . get_the_title() . '</h3>';
            
            //$_r .= '<div>' . the_content() . '</div>';
            
            $_r .= '<hr>\n</div>';
        };
    };
    wp_reset_query();
    return ($_r == '' ? 'There are no locations at present.' : $_r);
}



function mm_tag_function( $atts = array() ) {
 extract( shortcode_atts( array('tag' => '1'), $atts ) );
 $_r = '';
 $_u = '';
 $_a = array( 'tag' => $tag, 'orderby' => 'title', 'order' => 'DESC' );
 $_l = new WP_Query( $_a );
 
 $_u .= '<ul class="tag-list">';
 if ( $_l->have_posts() ) {
 while ( $_l->have_posts() ) {
 $_l->the_post();
 $_r .= '<li id="post-' . get_the_id() . '"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
 };
 };
 $_u .= $_r . '</ul>';
 wp_reset_query();
 return ($_r == '' ? 'There are no tagged items at present.' : $_u);
}



function site_map_function() {
    $a = "\n\t" . '<ul>';
    $articles = get_posts(
        array(
            'cat' => 2,
            'order' => 'ASC',
            'posts_per_page' => 50,
            //'category_name' => 'article',
        )
    );
    
    foreach( $articles as $article) {
        //$a .= get_permalink( $article->ID ) . " <br>";
        $a .= '<li id="pageid-' . $article->ID . '">';
        $a .= '<a href="' . get_permalink( $article->ID ) . '">';
        $a .= esc_html( $article->post_title );
        $a .= '</a>' . "\r\n";
        $a .= '</li>' . "\n";
    }
    
    $p = "\n\t" . '<li><a href="/">Home</a></li>';
    $pages = get_pages(
        array(
            'sort_order' => 'asc',
            'post_status' => 'publish'
        )
    );
    
    foreach( $pages as $page) {
     
        if( $page->ID != 299 ) {
         
         $p .= '<li id="pageid-' . $page->ID . '">';
         $p .= '<a href="' . get_page_link( $page->ID ) . '">';
         $p .= esc_html( $page->post_title );
         $p .= '</a>' . "\r\n";

         if( $page->ID == 157 ) {
             $p .= $a . '</ul>' . "\n\n";
         }

         $p .= '</li>' . "\n\n";

        }
    }
    
    wp_reset_query();    
        
    $page_list = '<ul class="site-map-list">' . "\r\n" . $p . '</ul>' . "\r\n";
    
    return $page_list;
}



function register_shortcodes(){
   add_shortcode('all_testimonials', 'all_testimonials_function');
   add_shortcode('all_locations', 'all_locations_function');
   add_shortcode('all_faqs', 'all_faqs_function');
   add_shortcode('mm_tag', 'mm_tag_function');
   add_shortcode('wo_site_map', 'site_map_function');
}
add_action( 'init', 'register_shortcodes');

?>