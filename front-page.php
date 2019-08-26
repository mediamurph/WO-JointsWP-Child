<?php
/**
* front-page.php
* 
* The Front Page template file for the jointswp-child theme
* 
**/

get_header();
get_template_part( 'parts/nav', 'top-bar' ); 
get_template_part( 'parts/header', 'masthead-front-page' ); ?>

<main id="front-page-main-content" class="grid-container full" role="main">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            
            <div id="book" class="book-panel-wrapper cell medium-6 large-4 medium-order-1">
                <?php dynamic_sidebar( 'book-now' ); ?>
                <?php dynamic_sidebar( 'front-page-sidebar' ); ?>
            </div><!-- .cell.book-panel-wrapper -->


            <article id="front-page-widget-area-1" class="cell medium-6 large-4 medium-order-2">
                <?php dynamic_sidebar( 'front-page-widget-area-1' ); /* OPENING HOURS */?>
            </article><!-- .cell -->

            <article id="front-page-widget-area-2" class="cell show-for-large large-4 large-order-3">
                <?php dynamic_sidebar( 'front-page-widget-area-2' ); /* QUOTE */ ?>
            </article>
            
        </div><!-- .grid-x -->
    </div><!-- .grid-container -->
</main><!-- #front-page-main-content -->

<?php get_footer(); ?>