<?php
/*
Template Name: Booking
*/

get_header(); 
get_template_part( 'parts/nav', 'top-bar' ); 
get_template_part( 'parts/header', 'masthead' ); 
?><div class="grid-container full">
<div class="grid-container">
<div class="grid-x grid-margin-x">
<main class="cell auto main" role="main">
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'parts/content', 'page' ); ?>
<?php //comments_template(); ?>
<?php endwhile; ?>
</main>
</div><!-- .grid-x -->
</div><!-- .grid-container -->
</div><!-- .grid-container.full --><?php get_footer(); ?>