<?php
/**
 * footer.php
 * 
 * The footer template for the jointswp-child theme
 * 
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
            <p class="small-12 medium-6">Powered by MediaMurph</p>
        </div>
    </div>
</footer><?php // get_template_part( 'parts/content', 'div' ); ?>

<?php wp_footer(); ?>

<script>
var ii = 0;
var cover = document.getElementById( 'video-player-cover' );
var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var tv,
		playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
var vid = [
			{'videoId': 'XZ9qpwHcCgM', 'startSeconds': 11, 'endSeconds': 224, 'suggestedQuality': '360'}/*,
			{'videoId': '9ge5PzHSS0Y', 'startSeconds': 465, 'endSeconds': 657, 'suggestedQuality': 'hd720'},
			{'videoId': 'OWsCt7B-KWs', 'startSeconds': 0, 'endSeconds': 240, 'suggestedQuality': 'hd720'},
			{'videoId': 'qMR-mPlyduE', 'startSeconds': 19, 'endSeconds': 241, 'suggestedQuality': 'hd720'}*/
		],
		randomVid = Math.floor(Math.random() * vid.length),
    currVid = 0; // randomVid;

$('.hi em:last-of-type').html(vid.length);

var rollLoader = setInterval( function() {
    console.log( ii );
    var h='';
    switch( ii ){
        case 0: h='.'; break; 
        case 1: h='..'; break; 
        case 2: h='...'; break; 
    }
    $( '.loader span' ).text( h );
    ii++;
    if( ii > 2 ) ii = 0;
}, 300 );
    
function onYouTubePlayerAPIReady(){
    tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
  tv.loadVideoById(vid[0]); // currVid
  tv.mute();
  cover.classList.add( 'playing' );
  $('.hi').delay( 1000 ).fadeOut( 1000 );
  $('.loader').fadeOut( 1000, function(){clearInterval( rollLoader );} );
}

function onPlayerStateChange(e) {
// https://developers.google.com/youtube/iframe_api_reference#onStateChange
  if (e.data === 1){
    $('#tv').addClass('active');
    $('.hi em:nth-of-type(2)').html(currVid + 1);
  } else if (e.data === 2){
    //
  } else if (e.data === 0) {
    tv.loadVideoById(vid[0]);
  }
}

function vidRescale(){

  var w = $(window).width()+200,
    h = $(window).height()+200;

  if (w/h > 16/9){
    tv.setSize(w, w/16*9);
    $('.tv .screen').css({'left': '0px'});
  } else {
    tv.setSize(h/9*16, h);
    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
  }
}

$(window).on('load resize', function(){
  vidRescale();
});

/*$('.hi span:first-of-type').on('click', function(){
  $('#tv').toggleClass('mute');
  $('.hi em:first-of-type').toggleClass('hidden');
  if($('#tv').hasClass('mute')){
    tv.mute();
  } else {
    tv.unMute();
  }
});

$('.hi span:last-of-type').on('click', function(){
  $('.hi em:nth-of-type(2)').html('~');
  tv.pauseVideo();
});*/

</script>

</body>
</html>