<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php get_bloginfo( 'name' ); ?> </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="opacidade-parte1"></div>
    <?php get_template_part('template-parts/menu','superior'); ?>

