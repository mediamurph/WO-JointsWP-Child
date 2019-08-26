<?php

// Adding DNS Prefetching
function wp_dns_prefetch() {
 //echo '<meta http-equiv="x-dns-prefetch-control" content="on">';
 echo '<link rel="dns-prefetch" href="//welwyn-osteopaths.co.uk" />';
 /*
 <link rel="dns-prefetch" href="//fonts.googleapis.com" />
 <link rel="dns-prefetch" href="//fonts.gstatic.com" />
 <link rel="dns-prefetch" href="//ajax.googleapis.com" />
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
}
add_action('wp_head', 'wp_dns_prefetch', 1);

?>