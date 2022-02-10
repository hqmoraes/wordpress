<?php
    /*
    Template Name: Search Page
    */
    get_header();
    global $query_string;
    wp_parse_str( $query_string, $search_query );
    $search = new WP_Query( $search_query );
    get_template_part('template-parts/search','bar'); ?>
<?php get_footer(); ?>