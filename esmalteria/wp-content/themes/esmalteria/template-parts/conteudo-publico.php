<?php 
    $argsPublico = array('category_name' => 'sliderhomens');
    $publico = new wp_query($argsPublico);
    if($publico->have_posts()){
        while($publico->have_posts()){
            $publico->the_post();?>
            <article id="imprimirConteudo" class="p-0" <?php post_class(array ('class' =>'sliderHome')); ?>>
                <?php $cont_slides = 0; ?>
                <div id="repetidorACF" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-inner" id="imagens">
                        <?php $count2 = 0; if( have_rows('imagens_do_slider_na_home') ): ?>
                            <?php while( have_rows('imagens_do_slider_na_home') ): the_row();
                            if($count2 == 0){ ?>
                                <div class="carousel-item active">
                            <?php } else { ?>
                                <div class="carousel-item">
                            <?php }?>
                            <div class="slideImagens" style="background-image: url(<?php the_sub_field('imagens'); ?>)"></div>

                                </div>
                            <?php $count2++; endwhile; ?>
                            <?php endif; ?>
                    </div>
                </div>
                <div id="texto-slide-home" class="texto-publico">
                    <p><?php echo the_title(); ?></p>
                    <button class="btn btn-info text-light">Saiba mais</button>
                </div>
            </article>
<?php   }
    }
?>
<div class="container">
    <div class="row align-items-center p-4" style="height: 75vh">
        <?php
            $argsHomens = array('category_name' => 'para-homens');
            $paraHomens = new wp_query($argsHomens);
            if($paraHomens->have_posts()){
                while($paraHomens->have_posts()){
                    $paraHomens->the_post();?>
                    <div class="col-12 col-md-6 fs-4 pe-4 text-info">
                        <div class="row">
                            <h1 class="text-info col-11"><?php echo the_title();?></h1>
                        </div>
                        <div class="row">
                            <div class="col-8"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 height" style="background-size: cover; background-repeat: no-repeat; background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                    
                <?php 
                }
            }
        ?>
    </div>
</div>
<div class="container-fluid" id="cuidados">
        <?php 
            $argsCuidadoHomens = array('category_name' => 'cuidado-homens');
            $cuidadoHomens = new wp_query($argsCuidadoHomens);
            if($cuidadoHomens->have_posts()){
                while($cuidadoHomens->have_posts()){
                    $cuidadoHomens->the_post(); ?>
                    <div class="row vh-100 align-items-center justify-content-between">
                        <div id="fotoCuidado" class="col-6 col-sm-12 col-md-5" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                        <div class="col-12 col-sm-12 col-md-7">
                            <h1 class="text-light mx-4"><?php the_title(); ?></h1>
                            <h3 class="text-light mx-4"><?php the_content(); ?></h3>
                        </div>
                    </div>
        <?php   }
            }
        ?>
</div>
<?php get_template_part('template-parts/parte','slider2'); ?>
<div class="container">
    <div class="row justify-content-between gy-6">
        <?php
            $argsDestaques = array ('category_name' => 'destaques', 'orderby' => 'id', 'order' => 'asc');
            $destaques = new wp_query($argsDestaques);
            $contaDestaques = 0;
            if ($destaques->have_posts()){
                while($destaques->have_posts()){
                    $destaques->the_post();
                    if ($contaDestaques == 0){
                        ?> <div style="display: none"><?php $idCategoria = the_category_ID(); ?></div>
                        <div class="col-12">
                        <?php echo category_description($idCategoria); $contaDestaques++?>
                        </div><?php
                    }
                    if (($destaques->current_post + 1) == ($destaques->post_count)){
                        ?> <div class="col-12 mb-4 ">
                                <div class="caixasDestaque p-4 hoverDestaques">
                                <div><i aria-hidden="true" class="fas fa-star"></i></div>
                                <div><h1><?php the_title(); ?></h1></div>
                                <div><?php the_content(); ?></div>
                            </div>
                        </div> <?php
                    }
                    else{
                        ?> <div class="col-6 mb-4">
                            <div class="caixasDestaque p-4 hoverDestaques">
                            <div><i aria-hidden="true" class="fas fa-star"></i></div>
                            <div><h1><?php the_title(); ?></h1></div>
                            <div><?php the_content(); ?></div>
                        </div>
                    </div> <?php
                    }
                }
            }
        ?>
    </div>
</div>
<div class="m-4 text-center bg-info container mx-auto">
    <button class="btn btn-info text-light fs-3">Quero ser um(a) franqueado(a)</button>
</div>