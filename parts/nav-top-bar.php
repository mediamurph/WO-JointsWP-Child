<?php

$fb_link = get_theme_mod( 'wo_facebook_link' );
$tw_link = get_theme_mod( 'wo_twitter_link' );

?><header class="grid-container full page-header show-for-medium murf"><div class="top-bar grid-container" id="top-bar-menu"><div class="top-bar-left"><a href="<?php echo $fb_link; ?>" style="opacity:.73;"><img src="https://www.welwyn-osteopaths.co.uk/iconfinder_Circled_Facebook_svg_5279111.svg" width="30" height="30"></a> &nbsp; <a href="<?php echo $tw_link; ?>" style="opacity:.73;"><img src="https://www.welwyn-osteopaths.co.uk/iconfinder_1_Twitter_white_svg_5296514.svg" width="30" height="30"></a></div><div class="top-bar-right"><?php jointswp_child_top_nav(); ?></div></div></header>