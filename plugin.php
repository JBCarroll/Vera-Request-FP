<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function vera_custom_js(){
  wp_enqueue_script( 'vera_js', plugin_dir_url( __FILE__ ) . '/assets/js/vera-request-quote.js', array( 'jquery' ) );
  wp_enqueue_script('vera_js');
}
add_action( 'wp_enqueue_scripts', 'vera_custom_js' );

function vera_custom_css(){
    wp_register_style( 'vera_css', plugin_dir_url( __FILE__ ) . '/assets/css/vera-request-quote.css');
    wp_enqueue_style('vera_css');
}
add_action('wp_enqueue_scripts', 'vera_custom_css');


?>