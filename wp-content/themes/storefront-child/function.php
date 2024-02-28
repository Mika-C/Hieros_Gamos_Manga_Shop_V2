<?php
add_action('wp_enqueue_scripts', 'get_child_stylesheet');
    function get_child_stylesheet(){
        wp_enqueue_style('style-added-in-child',get_stylesheet_directory_uri().'/style.css');
    }
?>