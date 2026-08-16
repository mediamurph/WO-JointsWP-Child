<?php
/**
* The Front Page template file for the JointsWP-child theme
* 
* @package JointsWP-child
**/

get_header();
get_template_part( 'parts/nav', 'top-bar' ); 
get_template_part( 'parts/header', 'masthead-front-page' ); ?><main id="front-page-main-content" class="grid-container full" role="main">
<div class="grid-container">
<div class="grid-x grid-margin-x">
<div id="book" class="book-panel-wrapper cell medium-6 large-4 medium-order-1">
<?php dynamic_sidebar( 'book-now' ); ?>
<?php dynamic_sidebar( 'front-page-sidebar' ); ?>
</div><!-- .cell.book-panel-wrapper -->
<article id="front-page-widget-area-1" class="cell medium-6 large-4 medium-order-2">
<?php dynamic_sidebar( 'front-page-widget-area-1' ); /* OPENING HOURS */?>
 
 <!--h1>Coronovirus Update!</h1>
 <p>Unfortunately, we are closed until further notice. We shall be offering video consultations and home-based exercise programs should you need them.</p>
 <p>Please phone Patrick on <a href="tel:07989436025">07989 436025</a> or Louise on <a href="tel:07917834900">07917 834900</a></p -->
 
</article><!-- .cell -->
<article id="front-page-widget-area-2" class="cell show-for-large large-4 large-order-3">
<?php dynamic_sidebar( 'front-page-widget-area-2' ); /* QUOTE */ ?>
<p style="margin-top:1.73rem;text-align:center"><a href="/reviews/" title="A collection of testimonials from our customers">More testimonials &raquo;</a></p>
</article><!-- .cell -->
</div><!-- .grid-x -->
</div><!-- .grid-container -->
</main><!-- #front-page-main-content --><?php get_footer(); ?>