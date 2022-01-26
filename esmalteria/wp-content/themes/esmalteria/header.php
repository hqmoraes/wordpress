<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="corpo">
<header class="bg-light">
    <section class="container-fluid" id="logoPrincipal">
        <div class="row justify-content-center bg-info" >
            <div class="col-2 col-lg-2 p-2 p-lg-4">
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="img-fluid" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }    
                ?>
            </div>
        </div>
    </section>
</header>
<div class="sticky-top bg-light">
    <section class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-8 col-lg-10 col-xl-9 col-xxl-8">
                <nav class="barraMenu navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-3 col-lg-2 navbar-brand px-0 mx-0">
                                <?php 
                                    if ( has_custom_logo() ) {
                                        echo '<img class="img-fluid" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    } ?>
                            </div>
                            <div class="d-lg-none col-2 me-4 col-lg-1 d-xl-none navbar justify-content-end">
                                <button onclick="alinhaMenuMobile()" id="tgMenu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuSuperior" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="col-1 col-lg-9 px-lg-0 collapse navbar-collapse justify-content-end" id="menuSuperior">
                                <?php wp_nav_menu('my_main_menu') ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="iconesSociais" class="col-4 col-lg-2 pe-3">
                <div class="row justify-content-end">
                    <div class="col-4 col-sm-4 text-end"><i class="fa fa-brands fa-facebook fs-2"></i></div>
                    <div class="col-4 col-sm-4 text-end"><i class="fa fa-brands fa-instagram fs-2"></i></div>
                </div>
            </div>            
        </div>        
    </section>        
</div>