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
    $thumb_url = '/wp-content/uploads/banner-louise-north-patrick-pearce.jpg';
}

$thumb .= '<style>
.hero:before{background-image:url(' . $thumb_url . ') !important;background-position:42% 0;background-size:cover;content:"";}
</style>'; 



?><!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- HEAD -->
<?php wp_head(); ?>
<!-- / HEAD -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-26672396-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-26672396-2');
</script>

<?php echo $thumb; ?>


</head>


<body <?php body_class( array( 'nojem', 'saf') ); ?>>
<?php
/*<script>
    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
    var jem = document.getElementsByTagName("BODY")[0];
    jem.classList.remove( 'nojem' );
    jem.classList.add( 'jem' );
    if( ! isSafari ) {
        //jem.classList.remove( 'saf' );
        //jem.classList.add( 'nosaf' );
    } 
</script>*/
?>
