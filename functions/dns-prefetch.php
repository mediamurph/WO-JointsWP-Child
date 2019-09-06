<?php

// REMOVE DNS-PREFETCH
    add_action( 'init', 'remove_dns_prefetch' ); 
    function  remove_dns_prefetch () {      
        remove_action( 'wp_head', 'wp_resource_hints', 2, 99 ); 
    } 

// Adding DNS Prefetching
function wp_dns_prefetch() {
 echo "\n";
 //echo '<meta http-equiv="x-dns-prefetch-control" content="on">';
 echo '<link rel="dns-prefetch" href="//welwyn-osteopaths.co.uk" />
<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="dns-prefetch" href="//code.jquery.com" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />';
 echo "\n";
 /*
 <link rel="dns-prefetch" href="//fonts.gstatic.com" />
 <link rel="dns-prefetch" href="//apis.google.com" />
 <link rel="dns-prefetch" href="//google-analytics.com" />
 <link rel="dns-prefetch" href="//www.google-analytics.com" />
 <link rel="dns-prefetch" href="//ssl.google-analytics.com" />
 <link rel="dns-prefetch" href="//youtube.com" />
 <link rel="dns-prefetch" href="//api.pinterest.com" />
 <link rel="dns-prefetch" href="//connect.facebook.net" />
 <link rel="dns-prefetch" href="//platform.twitter.com" />
 <link rel="dns-prefetch" href="//syndication.twitter.com" />
 <link rel="dns-prefetch" href="//syndication.twitter.com" />
 <link rel="dns-prefetch" href="//platform.instagram.com" />
 <link rel="dns-prefetch" href="//s.gravatar.com" />
 <link rel="dns-prefetch" href="//s0.wp.com" />
 <link rel="dns-prefetch" href="//stats.wp.com" />';*/
 echo "\n";
}
add_action('wp_head', 'wp_dns_prefetch', 1);

?>