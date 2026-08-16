<?php 
/**
 * The template part for displaying the banner carousel
 * 
 */

/*$carousel = array(

    'id' => array(
    
        get_theme_mod( 'wo_carousel_variable_one' ),
        get_theme_mod( 'wo_carousel_variable_two' ),
        get_theme_mod( 'wo_carousel_variable_three' )
    
    ),
    
    'src' => array(
    
        wp_get_attachment_url( $carousel[ 'id', 0 ] ),
        wp_get_attachment_url( $carousel[ 'id', 1 ] ),
        wp_get_attachment_url( $carousel[ 'id', 2 ] )
    
    ),
    
    'alt' => array(
    
        get_post_meta( $carousel[ 'id', 0 ], '_wp_attachment_image_alt', true ),
        get_post_meta( $carousel[ 'id', 1 ], '_wp_attachment_image_alt', true ),
        get_post_meta( $carousel[ 'id', 2 ], '_wp_attachment_image_alt', true )
    
    )
    
);
*/

$ID_banner_image_1 = get_theme_mod( 'wo_carousel_variable_one' );
$ID_banner_image_2 = get_theme_mod( 'wo_carousel_variable_two' );
$ID_banner_image_3 = get_theme_mod( 'wo_carousel_variable_three' );
$ID_banner_image_4 = get_theme_mod( 'wo_carousel_variable_four' );
$ID_banner_image_5 = get_theme_mod( 'wo_carousel_variable_five' );

$SRC_banner_image_1 = wp_get_attachment_url( $ID_banner_image_1 );
$SRC_banner_image_2 = wp_get_attachment_url( $ID_banner_image_2 );
$SRC_banner_image_3 = wp_get_attachment_url( $ID_banner_image_3 );
$SRC_banner_image_4 = wp_get_attachment_url( $ID_banner_image_4 );
$SRC_banner_image_5 = wp_get_attachment_url( $ID_banner_image_5 );
    
$ALT_banner_image_1 = get_post_meta( $ID_banner_image_1, '_wp_attachment_image_alt', true );
$ALT_banner_image_2 = get_post_meta( $ID_banner_image_2, '_wp_attachment_image_alt', true );
$ALT_banner_image_3 = get_post_meta( $ID_banner_image_3, '_wp_attachment_image_alt', true );
$ALT_banner_image_4 = get_post_meta( $ID_banner_image_4, '_wp_attachment_image_alt', true );
$ALT_banner_image_5 = get_post_meta( $ID_banner_image_5, '_wp_attachment_image_alt', true );

/*
<div id="wo-carousel" class="cell grid-x medium-7 show-for-medium-up pandybear">                  
<div class="wo-slide uno">
<img id="carousel-image-1-<?php echo $carousel[ 'id', 0 ];  ?>" src="<?php echo $carousel[ 'src', 0 ]; ?>" alt="<?php echo $carousel[ 'alt', 0 ]; ?>" />
</div>
<div class="wo-slide dos">
<img id="carousel-image-2-<?php echo $carousel[ 'id', 1 ];  ?>" src="<?php echo $carousel[ 'src', 1 ]; ?>" alt="<?php echo $carousel[ 'alt', 1 ]; ?>" />
</div>
<div class="wo-slide tres">
<img id="carousel-image-3-<?php echo $carousel[ 'id', 2 ];  ?>" src="<?php echo $carousel[ 'src', 2 ]; ?>" alt="<?php echo $carousel[ 'alt', 2 ]; ?>" />
</div>
</div><!-- #wo-carousel -->
*/

?>

<div id="wo-carousel" class="cell grid-x medium-7 show-for-medium-up tracy">
<?php
if ( $SRC_banner_image_1 ) {
?>
<div class="wo-slide uno friday fudge foook heck">
<img id="carousel-image-1-<?php echo $ID_banner_image_1;  ?>" src="<?php echo $SRC_banner_image_1; ?>" alt="<?php echo $ALT_banner_image_1; ?>" />
</div>
<?php 
}else{echo'<!-- slide 1 -->';};

if ( $SRC_banner_image_2 ) {
?>
<div class="wo-slide dos">
<img id="carousel-image-2-<?php echo $ID_banner_image_2;  ?>" src="<?php echo $SRC_banner_image_2; ?>" alt="<?php echo $ALT_banner_image_2; ?>" />
</div>
<?php 
}else{echo'<!-- slide 2 -->';};

if ( $SRC_banner_image_3 ) {
?>
<div class="wo-slide tres">
<img id="carousel-image-3-<?php echo $ID_banner_image_3;  ?>" src="<?php echo $SRC_banner_image_3; ?>" alt="<?php echo $ALT_banner_image_3; ?>" />
</div>
<?php
}else{echo'<!-- slide 3 -->';};

if ( $SRC_banner_image_4 ) {
?>
<div class="wo-slide quatro">
<img id="carousel-image-4-<?php echo $ID_banner_image_4;  ?>" src="<?php echo $SRC_banner_image_4; ?>" alt="<?php echo $ALT_banner_image_4; ?>" />
</div>
<?php
}else{echo "<!-- slide 4 -->"};

if ( $SRC_banner_image_5 ) {
?>
<div class="wo-slide cinco">
<img id="carousel-image-5-<?php echo $ID_banner_image_5;  ?>" src="<?php echo $SRC_banner_image_5; ?>" alt="<?php echo $ALT_banner_image_5; ?>" />
</div>
<?php
}else{echo'<!-- slide 5 -->';};
?>
</div><!-- #wo-carousel -->
