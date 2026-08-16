<?php
/**
* The template for displaying the footer
* 
* @package jointswp-child
*/

$fb_link = get_theme_mod( 'wo_facebook_link' );
$tw_link = get_theme_mod( 'wo_twitter_link' );

?><h2 class="show-for-small-only">On this site:</h2>
<div class="grid-container full show-for-small-only">
<div class="grid-container">
<div class="grid-y"><?php jointswp_child_mobile_nav(); ?></div>
</div>
</div>
<footer id="footer" class="grid-container full">
<div class="grid-container">
<div class="grid-x">
    
<div class="cell small-12 medium-4 help-centre">
<h2>Help</h2>
<?php wp_nav_menu( array( 'theme_location' => 'help-centre' ) ); ?>
</div>
    
<div class="cell small-12 medium-4 social-media-sites">
<h2>On Social Media</h2>
<a href="<?php echo $fb_link; ?>" style="opacity:.73;"><img src="https://www.welwyn-osteopaths.co.uk/iconfinder_Circled_Facebook_svg_5279111.svg" width="50" height="50"></a> &nbsp; <a href="<?php echo $tw_link; ?>" style="opacity:.73;"><img src="https://www.welwyn-osteopaths.co.uk/iconfinder_1_Twitter_white_svg_5296514.svg" width="50" height="50"></a>
</div>
    
<div class="cell small-12 medium-4 badges">
<?php dynamic_sidebar( 'front-page-badges' ); ?>
</div>
</div>
<div class="grid-x copyright">
<p class="small-12 medium-6">&copy; Copyright Welwyn Osteopaths <?php echo date("Y"); ?></p>
<p class="small-12 medium-6">Powered by <a href="http://mediamurph.com" title="Media Murph Web Development">MediaMurph</a></p>
</div>
</div>
</footer><?php // get_template_part( 'parts/content', 'div' ); ?><?php wp_footer(); ?><?php if ( is_user_logged_in() ){ ?><!-- Start of mediamurph Zendesk Widget script --><script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=39bbe4d9-f2fc-4581-8d1d-ea1e27534aa2"></script><!-- End of mediamurph Zendesk Widget script --><?php } ?><script id="slick-cdn" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script><script>
var n = 1;
var nn = 1;
var c = $('.wo-slide').length;
$('.wo-slide', "#wo-carousel").css( 'display', "none" );
$('.wo-slide:first-child').fadeIn(1000);
<?php /*
function nexxt() {    
if (n==1) {
$('.wo-slide.uno').fadeOut(1000);
$('.wo-slide.dos').fadeIn(1000);
n = 2;
} else if (n==2) {
$('.wo-slide.dos').fadeOut(1000);
$('.wo-slide.tres').fadeIn(1000);
n = 3;
} else {
$('.wo-slide.tres').fadeOut(1000);
$('.wo-slide.uno').fadeIn(1000);
n = 1;
}
}
*/ ?>
function noop() {
    <?php //console.log ( "NOOPING: c = " + c + " AND nn = " + nn ); ?>
    $('.wo-slide:nth-child(' + nn +')').fadeOut(1000);
    if ( nn < c ) {
        nn++;
    } else {
        nn = 1;
    }
    $('.wo-slide:nth-child(' + nn +')').fadeIn(1000);
}

$(document).ready(function(){
setInterval(function(){ noop(); }, 5000);
});
</script></body></html>