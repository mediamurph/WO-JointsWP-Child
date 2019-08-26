<?php
/**
 * search.php
 * 
 * The search template file for the jointswp-child theme
 * 
 **/

get_header(); 
get_template_part( 'parts/nav', 'top-bar' ); 
get_template_part( 'parts/header', 'masthead' ); ?>

<div class="grid-container full">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <main class="cell medium-6 large-8 small-order-2 main" role="main">
                <?php get_search_form(); ?>
            </main>
            <div id="front-page-book" class="cell medium-6 large-4 small-order-1 book-panel-wrapper">
                <?php dynamic_sidebar( 'book-now' ); /* BOOK */?>
                <?php // dynamic_sidebar( 'sidebar-widgets' ); ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>