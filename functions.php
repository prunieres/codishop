<?php
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



function woo_enqueue_style(){
    wp_enqueue_style('fontawesome',get_stylesheet_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css');
    wp_enqueue_style('bootsrap',get_stylesheet_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('core',get_stylesheet_uri(), false);
}

function woo_enqueue_script(){
    wp_enqueue_script('jquery2',get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js',false);
    wp_enqueue_script('bootstrap2',get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js',false);
}
add_action('wp_enqueue_scripts','woo_enqueue_style');
add_action('wp_enqueue_scripts','woo_enqueue_script');



function result_count_remove_hook(){
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}
add_action( 'woocommerce_before_shop_loop', 'result_count_remove_hook', 1 );


function result_sorting_remove_hook(){
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
add_action( 'woocommerce_before_shop_loop', 'result_sorting_remove_hook', 1 );

?>
