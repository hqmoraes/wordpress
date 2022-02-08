<?php /*Filtrar por: País, Estado, Cidade, Quartos, Banheiros, Preço (maior e menor)*/ ?>
$args = array('_name__like'=>'pira');
$qry = new wp_query($args);
if ($qry->have_posts()){
    while($qry->have_posts()){
        $qry->the_post();
        the_title();
    }
}