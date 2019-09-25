<?php
/**
 * 404.php
 * 
 * The 404 template file for the jointswp-child theme
 * 
 * @package JointsWP-child
 **/

get_header(); 
get_template_part( 'parts/nav', 'top-bar' ); 
get_template_part( 'parts/header', 'masthead' ); ?>

<div class="grid-container full">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <main class="cell medium-6 large-8 small-order-2 main" role="main">
                
                <article class="content-not-found">

                    <header class="article-header">
                        <h1><?php _e( 'Epic Four oh four - Page Not Found', 'jointswp-child' ); ?></h1>
                    </header> <!-- .article-header -->

                    <section class="entry-content">
                        <p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp-child' ); ?></p>
                    </section> <!-- .entry-content -->

                    <section class="search">
                        <p><?php // get_search_form(); ?></p>
                    </section> <!-- .search -->

                </article>
                
            </main>
            
            <div id="book" class="cell medium-6 large-4 small-order-1 book-panel-wrapper">
                <?php dynamic_sidebar( 'book-now' ); ?>
                <?php //dynamic_sidebar( 'sidebar-widgets' ); ?>
            </div><!-- #book -->
        </div><!-- .grid-x -->
    </div><!-- .grid-container -->
</div><!-- .grid-container.full -->

<?php get_footer(); ?>