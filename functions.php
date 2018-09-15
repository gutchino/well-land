<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// Get the link of the latest post via shortcode: [wl_slideshow]
function wl_slideshow_shortcode() {

    if( is_mobile() ){
        $slideshow = do_shortcode( get_field( 'slideshow_shortcode_for_mobile' ) );
    } else {
        $slideshow = do_shortcode( get_field( 'slideshow_shortcode_for_pc' ) );
    }
    return $slideshow;

}
add_shortcode( 'wl_slideshow', 'wl_slideshow_shortcode' );
