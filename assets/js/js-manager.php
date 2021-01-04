<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    wp_register_script('dttl_jquery', $jsUrl . '/jquery-3.5.1.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_jquery');
    wp_register_script('dttl_swiped-events', $jsUrl . '/swiped-events.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('dttl_swiped-events');
    wp_register_script('dttl_main', $jsUrl . '/main.js', array(), '1.0', true);
    wp_enqueue_script('dttl_main');
    wp_register_script('dttl_sticky', $jsUrl . '/sticky.js', array(), '1.0', true);
    wp_enqueue_script('dttl_sticky');
    wp_register_script('dttl_slider', $jsUrl . '/slider.js', array(), '1.0', true);
    wp_enqueue_script('dttl_slider');
}
?>