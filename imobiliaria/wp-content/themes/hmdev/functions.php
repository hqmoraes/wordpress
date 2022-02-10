<?php

function load_scripts(){
    wp_enqueue_style('tema-style', get_template_directory_uri() . '/recursos/css/template.css', array(),'1.0','all');
    wp_enqueue_style('child-style',get_stylesheet_directory_uri() . '/recursos/css/template.css', array(),'1.0','all');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/recursos/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js',array('jquery'),'5.1',true);
    wp_enqueue_script('fontawesome','https://kit.fontawesome.com/ed287b9062.js',array(),'6',false);
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js',array(),'3.6.0',true);        
    wp_enqueue_style('bootstrap-css',get_template_directory_uri() . '/recursos/bootstrap-5.1.3-dist/css/bootstrap.min.css','5.1','all');
    wp_enqueue_Style('slick-css', get_template_directory_uri() . '/recursos/slick-1.8.1/slick/slick.css',array(),1,'all');
    wp_enqueue_Style('slick-theme-css',    get_template_directory_uri() . '/recursos/slick-1.8.1/slick/slick-theme.css',array(),1,'all');
    wp_enqueue_script('slick-js',  get_template_directory_uri() . '/recursos/slick-1.8.1/slick/slick.min.js',array(),1,true);
    wp_enqueue_script('tema-ferramentas-js',get_template_directory_uri() . '/recursos/js/ferramentas.js' ,array('jquery'),'1',true);
    wp_enqueue_script('child-ferramentas-js',get_stylesheet_directory_uri() . '/recursos/js/ferramentas.js' ,array('jquery'),'1',true);                    
}
add_action('wp_enqueue_scripts','load_scripts');

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );