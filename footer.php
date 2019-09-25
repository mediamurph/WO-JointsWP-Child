<?php
/**
 * The template for displaying the footer
 * 
 * @package jointswp-child
 */
?>

    <h2 class="show-for-small-only">On this site:</h2>
    <div class="grid-container full show-for-small-only">
        <div class="grid-container">
            <div class="grid-y">
                <?php jointswp_child_mobile_nav(); ?>
            </div>
        </div>
    </div>

    <footer id="footer" class="grid-container full">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12 medium-6 help-centre">
                    <h2>Help</h2>

                    <?php wp_nav_menu( array( 'theme_location' => 'help-centre' ) ); ?>
                </div>
                <div class="cell small-12 medium-6 badges">
                    <?php dynamic_sidebar( 'front-page-badges' ); ?>
                </div>
            </div>
            <div class="grid-x copyright">
                <p class="small-12 medium-6">&copy; Copyright Welwyn Osteopaths <?php echo date("Y"); ?></p>
                <p class="small-12 medium-6">Powered by <a href="http://mediamurph.com" title="Media Murph Web Development">MediaMurph</a></p>
            </div>
        </div>
    </footer><?php // get_template_part( 'parts/content', 'div' ); ?>

<?php wp_footer(); ?>

</body>
</html>