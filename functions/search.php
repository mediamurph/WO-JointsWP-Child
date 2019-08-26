<?php

function filter_get_search_form( $form ) {
    
    return '<form role="search" method="get" id="searchform" class="searchform" action="/search.php">
    <div class="grid-container">
    <div class="grid-x medium-padding-collapse">
    <div class="cell medium-10">
    <label class="screen-reader-text" for="s">
    <input type="text" value="" name="s" id="s" />
    </label>    
    </div>
    <div class="cell medium-2">
    <input type="submit" id="searchsubmit" value="Search" class="button" />    
    </div>
    </div>
    </div>
    </form>';
    
}
add_filter( 'get_search_form', 'filter_get_search_form', 10, 1 );

?>