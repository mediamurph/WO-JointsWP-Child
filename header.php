<?php
/**
* The template for displaying the header
* 
* @package JointsWP-child
*/

$thumb = '';

if( has_post_thumbnail() ) {
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
} else {
$thumb_url = '/wp-content/uploads/welwyn-osteopaths-banner-default.jpg';
}

$thumb_url = '/wp-content/uploads/welwyn-osteopaths-banner-default.jpg';

$thumb .= '<style>
.hero:before{background-image:url(' . $thumb_url . ') !important;background-position:42% 0;background-size:cover;content:"";}
</style>'; 

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSW97VV');</script>
<!-- End Google Tag Manager -->
 <?php wp_head(); ?>
<link id="slick-css" rel="stylesheet" type="text/css" href="//welwyn-osteopaths.co.uk/wp-content/themes/JointsWP-Child/css/slick-theme.css?ver=1.0.1"/>

<link rel="apple-touch-icon" sizes="57x57" href="/favicon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
<link rel="icon" type="image/png" href="/favicon-32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-192.png" sizes="192x192">

<?php /*!-- Global site tag (gtag.js) - Google Analytics --
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-26672396-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-26672396-2');
</script -->
<_php echo $thumb;*/ ?>
<style>#wo-carousel {width:450px;height:300px;margin-top:-300px;margin-left:50%;}#wo-carousel .wo-slide{position:absolute;z-index:1;display:none;width:450px;height:300px;}#wo-carousel .wo-slide:first-child{display:block;}#wo-carousel img {display:inline;width:auto;height:300px;}@media only screen and (max-width:900px){#wo-carousel{display:none;}.nb-plain-text-wrap a{margin-top: 0.1rem;}.social-media-sites a{display:block;width:100%;text-align:center;}}.nb-plain-text-wrap a{display:inline-block !important;padding: 0 4px;background-color:#fff !important;color:#8B1618 !important;border-radius:2px;}.nb-plain-text-wrap strong{font-size:1.48rem;}.nb-action.nb-close-action{}</style>
</head>
<body <?php body_class( array( 'nojem', 'saf') ); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSW97VV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><?php
/*<script>
var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
var jem = document.getElementsByTagName("BODY")[0];
jem.classList.remove( 'nojem' );
jem.classList.add( 'jem' );
if( ! isSafari ) {
//jem.classList.remove( 'saf' );
//jem.classList.add( 'nosaf' );
} 
</script>*/ ?>