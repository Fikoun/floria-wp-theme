<?php
function make_new_shortcode($slug) {
    $make_shortcode = function($atts = []) use ($slug) {
        // Normalize attribute keys to lowercase and merge with defaults
        
        ob_start();
        $atts = array_change_key_case((array)$atts, CASE_LOWER);

        include get_template_directory() . "/patterns/$slug.php";
        return ob_get_clean();
    };

    add_shortcode($slug, $make_shortcode);
    add_shortcode(str_replace("-", "_", $slug), $make_shortcode);
} 


make_new_shortcode('product-hero');
make_new_shortcode('product-list');
make_new_shortcode('four-articles');
make_new_shortcode('search-map');
make_new_shortcode('calendar-articles');
make_new_shortcode('month-carousel');

//make_new_shortcode('single-hero');
