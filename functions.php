<?php
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



function woo_enqueue_style(){
    wp_enqueue_style('fontawesome',get_stylesheet_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css');
    wp_enqueue_style('core',get_stylesheet_uri(), false);
}
add_action('wp_enqueue_scripts','woo_enqueue_style');

?>
