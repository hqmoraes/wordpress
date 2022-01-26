<?php
    function load_scripts(){
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(),'1.0','all');
        wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array('jquery'),'5.1',true);
        wp_enqueue_script('fontawesome','https://kit.fontawesome.com/ed287b9062.js',array(),'6',false);
        wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js',array(),'3.6.0',true);        
        wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css','5.1','all');
        wp_enqueue_Style('slick-css',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',array(),1,'all');
        wp_enqueue_Style('slick-theme-css',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',array(),1,'all');
        wp_enqueue_script('slick-js','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',array(),1,true);
        wp_enqueue_script('ferramentas-js',get_template_directory_uri() . '/js/ferramentas.js' ,array('jquery'),'1',true);                
    }
    add_action('wp_enqueue_scripts','load_scripts');

    function modelo_config(){
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'footer_menu' => 'footer_menu'
            )
        );

        $defaults = array(
            'width'                  => 192,
            'height'                 => 225,
        );

        add_theme_support( 'custom-header', $defaults );
        add_theme_support('post-thumbnails');


        $defaults = array(
            'height'               => 150,
            'width'                => 150,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );


        add_theme_support( 'custom-logo',$defaults);
        add_theme_support('title_tag');
    }

    add_action('after_setup_theme','modelo_config',0);

