<?php
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