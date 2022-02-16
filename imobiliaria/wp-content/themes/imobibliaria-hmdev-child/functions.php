<?php
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 500,
        'width'                => 500,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
    	
    add_theme_support( 'custom-background' );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function tipoImovel() {
    $tipoImovel = array('Casa','Apartamento','Terreno','Chácara','Sobrado','Pousada','Flat','Salão','Galpão','Barracão');
    forEach($tipoImovel as $tipo){
        register_post_type(iconv('UTF-8', 'ASCII//TRANSLIT',$tipo),
            array(
                'labels'      => array(
                    'name'          => __(iconv('UTF-8', 'ASCII//TRANSLIT', $tipo), 'textdomain'),
                    'singular_name' => __($tipo, 'textdomain'),
                    'menu_name' => __($tipo),
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'taxonomies' 	      => array('category'
                ),
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpts',
                    'custom-fields'
                )
            )
        );
    }
}
add_action('init', 'tipoImovel');