<?php 

function remove_unwanted_image_sizes() {
}
add_action('init', 'remove_unwanted_image_sizes');
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
function mytheme_add_woocommerce_support(){
    add_theme_support( 'wc-product-gallery-zoom' );
        // add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

    // add_theme_support( 'wc-product-gallery-lightbox' );
    // add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 500,
        'gallery_thumbnail_image_width' => 140,
        'single_image_width' => 900,
        'large_image_width' => 1100
        ));

    //        // Remove default image sizes not required
    // remove_image_size('thumbnail');
    // remove_image_size('medium');
    // remove_image_size('large');
    // remove_image_size('medium_large');
    // remove_image_size('768x768');
    // remove_image_size('1536x1536');
    // remove_image_size('2048x2048');
    // remove_image_size('150x150');
    // remove_image_size('300x200');
    // remove_image_size('900x600');
}

// function remove_unwanted_image_sizes() {
//     remove_image_size('thumbnail'); // Remove Thumbnail (150 x 150 hard cropped)
//     remove_image_size('medium');    // Remove Medium resolution (300 x 300 max height and width)
//     remove_image_size('medium_large'); // Remove Medium Large resolution (768 x 0 infinite height)
// }

// add_action('init', 'remove_unwanted_image_sizes');


// function remove_default_image_sizes( $sizes ) {
    // unset( $sizes['medium_large']); // Disable 768px size
    // unset( $sizes['1536x1536']); // Disable 2x medium_large
    // unset( $sizes['2048x2048']); // Disable 2x large
    // unset( $sizes['1200x800']); // Disable 2x large
    // unset( $sizes['150x150']); // Disable 2x large
    // unset( $sizes['1024x683']); // Disable 2x large
    // unset( $sizes['300x200']); // Disable 2x large
    // unset( $sizes['900x600']); // Disable 2x large
    // return $sizes;
// }
// add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');