<main>
<div class="container-fluid">
        <div class="row">
            <?php
                $args = array(
                    'page_id' => '13',
                    'post_type' => 'page'

                );
                $tipos = new wp_query($args);
                if($tipos->have_posts()):
                    while ($tipos->have_posts()): $tipos->the_post();
                        get_template_part('template-parts/parte','slider');
                    endwhile;
                    wp_reset_postdata();
                endif
            ?>
        </div>
</div>
<div class="container-fluid bg-info h1 p-3 pb-4 m-0 text-center text-light fw-normal" id="chamada1-home">
        Seja quem você foi criada(o) para <span class="display-2 fw-bold">ser!</span>
</div>
<?php get_template_part('template-parts/parte','slider2'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row justify-content-between bg-video align-items-center">
                <div class="col-11 col-md-10 col-lg-5 col-xxl-5 d-flex position-relative mx-auto">
                    <?php
                        $argsVideo = array('category_name' => 'videos');
                        $videos = new wp_query($argsVideo);
                        if($videos->have_posts()){
                            while($videos->have_posts()){
                                $videos->the_post(); ?>
                                <iframe class="video-home position-absolute"
                                src="<?php the_field('video');?>" 
                                title="Esmalteria padrão" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                            <?php
                                    }
                                }
                    ?>

                </div>
                <div class="col-11 mt-4 mx-auto col-lg-5 col-xxl-5 pe-xxl-4 me-xxl-4 texto-video">
                    <h1 class="text-uppercase px-xl-4 mx-xl-4"><?php the_title(); ?></h1>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row py-4 pt-sm-0 cartoes justify-content-between bg-light align-items-center">
        <?php
            $argsInfos = array('category_name' => 'infos');
            $infos = new wp_query($argsInfos);
            if($infos->have_posts()){
                while($infos->have_posts()){
                    $infos->the_post(); ?>

                    <div class="col-12 col-sm-4 text-center">
                    <?php the_excerpt(); ?>
                    <h3 class="text-info"><?php echo the_title() ?></h3>
                    <?php the_content() ?>
                    <button class="btn btn-info text-light">Saiba mais</button>
                    </div>



            <?php }
            }
        ?>

    </div>
</div>
<div class="container-fluid">
    <div class="row vh-100 bg-info align-items-center text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="display-3 text-uppercase">
                        <?php 
                            $argsBar = array('category_name' => 'bar');
                            $bar = new wp_query($argsBar);
                            if($bar->have_posts()){
                                while($bar->have_posts()){
                                    $bar->the_post(); ?>
                                    <p class="pb-4"><?php echo the_title() ?></p>                                    
                                    </div>
                    <div class="col-12 col-sm-8 col-md-6 imagem-bar mt-4" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
                    <div class="pt-4 fs-3">
                    <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="text-center fs-4 mt-4">

            </div>                                    
                        <?php   }
                                wp_reset_postdata();
                            }
                        ?>
                        

            <div class="text-center mt-4">
                <button class="btn btn-light">Agenda o seu horário</button>
            </div>
        </div>
    </div>
</div>
<?php 
    $argParallax = array('category_name' => 'parallax');
    $parallax = new wp_query($argParallax);
    if($parallax->have_posts()){
        while($parallax->have_posts()){
            $parallax->the_post(); ?>
            <div class="container-fluid parallax" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
    <?php    }
        wp_reset_postdata();
    }
?>

<div class="container-fluid parallax-frente"></div>
<div class="container-fluid">
    <div class="row text-center justify-content-center bg-info p-4 text-light">
        <div class="col-lg-6">
            <h2 class="display-1"><?php echo category_description(6); ?></h2>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row py-3 align-items-center" id="foto-texto">
        <?php
            $argMomentos = array(
                'category_name' => 'momento',
                'orderby' => 'ID',
                'order' => 'ASC'
            );
            $momentos = new wp_query($argMomentos);
            if($momentos->have_posts()){
                while($momentos->have_posts()){
                    $momentos->the_post();
                    $id = get_the_ID();
                    if ($id == 98){ ?>
                        <div class="col-12 col-sm-12 col-lg-6" id="foto-texto1" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
                        <div class="col-12 col-lg-6" id="texto-foto1">
                            <h2 class="display-4 text-uppercase fw-bold text-info"><?php echo the_title(); ?></h2>
                            <?php the_content(); ?>
                            <button class=" btn btn-info text-light">Agendar horário</button>
                        </div>
              <?php }
                    elseif($id == 100){ ?>
                        <div class="col-12 col-lg-6" id="texto-foto2">
                            <h2 class="display-4 text-uppercase fw-bold text-info"><?php echo the_title(); ?></h2>
                            <?php the_content(); ?>
                            <button class="btn btn-info text-light"> Agenda horário</button>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-6" id="foto-texto2" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
            <?php   }

                }
                wp_reset_postdata();
            }
        ?>



    </div>
</div>
<div class="container-fluid">
    <div class="row align-items-center" id="franquias">
            <?php 
                $args1 = array('category_name' => 'franquia');
                $franquia = new wp_query($args1);
                if ($franquia->have_posts()){
                    while($franquia->have_posts()){
                        $franquia->the_post();?>
                        <div class="col-12 col-lg-6 col-xl-4 mx-auto text-center mt-4">
                            <p class="text-uppercase text-light mx-auto"><?php echo the_title() ?></p>
                            <h2 class="display-2 text-uppercase text-light mx-auto mb-3"><?php echo category_description(5);?></h2>                                                    
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7 pt-xl-4 mx-auto">

                            <div id="foto-franquia" style="background-image: url('<?php the_post_thumbnail_url()?>');"></div>
                    <?php }
                    wp_reset_postdata(); 
                }
                ?>

        </div>
        <button class="col-6 col-sm-8 col-md-4 col-lg-3 col-xl-2 btn btn-info text-light my-4 mx-auto">Franquias Esmalteria Padrão</button>
    </div>
</div>


</main>