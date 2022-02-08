<?php /* Template Name: Página principal*/
$args = array('_name__like'=>'Pira*');
$qry = new wp_query($args);
if ($qry->have_posts()){
    while($qry->have_posts()){
        $qry->the_post();
        echo the_title();
 
    }
}