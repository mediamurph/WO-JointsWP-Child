<?php
/**
 * The template for displaying archive pages
 *
 * This is the template that displays all archives by default.
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
                <h1>Archive</h1>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'parts/content', 'page' ); ?>
                <?php //comments_template(); ?>
                <?php endwhile; ?>
            </main>
            <div id="book" class="cell medium-6 large-4 small-order-1 book-panel-wrapper">
                <?php dynamic_sidebar( 'book-now' ); ?>
                <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
                <?php
                if ( get_the_ID() == 22) : ?>
                <iframe style="border: medium none; overflow: hidden;" src="http://www.thebestof.co.uk/widgets/businesses.reviews2?featureId=51516e529da778784d000001&amp;width=268&amp;height=650&amp;showRankAward=1&amp;showWriteReviewButton=1&amp;noReviewsShown=2&amp;reviewTextSize=small&amp;theme=grey&amp;linkTo=feature_page" width="100%" height="650" frameborder="0"></iframe>
                <?php endif; ?>
            </div><!-- #book -->
        </div><!-- .grid-x -->
    </div><!-- .grid-container -->
</div><!-- .grid-container.full -->

<?php get_footer(); ?>