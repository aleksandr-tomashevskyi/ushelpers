<?php

function theme_styles(){
   wp_enqueue_style('site_main_style', get_theme_file_uri('/assets/css/styles.min.css'));
}

add_action('wp_enqueue_scripts', 'theme_styles', 99 );

function lateStyles(){
   wp_enqueue_style('late-styles', get_theme_file_uri('/assets/css/late-styles.min.css'));
}
add_action( 'get_footer', 'lateStyles', 99 );

// function qmn_register_my_templates() {
// 	global $mlwQuizMasterNext;
// 	$mlwQuizMasterNext->pluginHelper->register_quiz_template( 'USHelpRes styles', get_theme_file_uri('/assets/css/late-styles.min.css'));
// }
// add_action( 'init', 'qmn_register_my_templates' );


function theme_scripts(){
   wp_enqueue_script('jquery');
   wp_register_script('site_libs_js', get_theme_file_uri('/assets/js/libs.min.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('site_libs_js');
   wp_register_script('site_main_js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);
   wp_enqueue_script('site_main_js');
}

add_action('wp_enqueue_scripts', 'theme_scripts');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );


function is_parent()
{
    global $post;
    $pages = get_pages("child_of=".$post->ID);
    if ($pages) return true;
}

function is_child()
{
    global $post;
    if(is_page()&&($post->post_parent)) 
               return true;  
    else 
               return false; 
}

function add_img_short(){
   return get_field('add_image');
 }
 add_shortcode( 'imageinsert', 'add_img_short' );

?>