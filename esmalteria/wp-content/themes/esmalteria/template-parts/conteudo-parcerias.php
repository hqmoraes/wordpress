<div class="container-fluid" id="bannerParceria">
    <div class="row">
        <div class="col-12 p-0  position-relative">
            <div id="slides-parceria">
                <?php
                $Cat = '';
                    $argsParceria = array ('category_name' => 'parceria');
                    $parceria = new wp_query($argsParceria);
                    if($parceria->have_posts()){
                        while($parceria->have_posts()){
                            $parceria->the_post();
                            $Cat = get_the_category(get_the_ID())[0]->term_id;?>
                            <div class="slide-parceria">
                                <div style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
            <div class="col-12 col-md-3 p-4 position-absolute top-50 h2 text-light" style="background: rgba(0,254,254,0.7); text-shadow: 1px 1px 5px black;">
            <?php echo category_description($Cat); ?>
            </div>                                        
        </div>
    </div>
</div>
<div class="container-fluid" id="o-que-e">
    <div class="row">
        <?php 
            $argsOq = array('category_name'=>'o-que-e');
            $oq = new wp_query($argsOq);
            if($oq->have_posts()){
                while($oq->have_posts()){
                    $oq->the_post();?>
                    <div class="col-12 bg-info display-6 text-center text-light" style="letter-spacing: 0.5rem"><?php the_title(); ?></div>
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 oq text-center">
                                    <div><?php the_content(); ?></div>
                                    <div><button class="btn btn-info btn-lg pt-3 text-light"><?php the_excerpt(); ?></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                wp_reset_postdata();
            }
        ?>
    </div>
</div>
<div class="container-fluid" id="diferenciais">
    <div class="row">
        <?php 
            $argsDif = array('category_name'=>'diferenciais');
            $diferenciais = new wp_query($argsDif);
            if($diferenciais->have_posts()){
                while($diferenciais->have_posts()){
                    $diferenciais->the_post();?>
                    <div class="m-0 p-0 col-12" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div style="height: 100% ;background: linear-gradient(135deg, rgba(255,0,236,0.8),rgba(0,0,236,0.52))">
                            <div class="container">
                                <div class="row align-items-center">
                                    <?php
                                    $argsDifc = array('category_name'=>'cards-diferenciais', 'orderby'=>'id', 'order'=>'asc');
                                    $diferenciaisc = new wp_query($argsDifc);
                                    if($diferenciaisc->have_posts()){
                                        while($diferenciaisc->have_posts()){
                                            $diferenciaisc->the_post();?>
                                            <div class="col-12 col-md-4 my-3">
                                                <div class="card">
                                                    <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php the_title() ?></h5>
                                                        <p class="card-text"><?php the_content() ?></p>
                                                        <a href="#" class="btn btn-outline-dark pt-3"><?php the_excerpt() ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php }
                                wp_reset_postdata();
                                }
                                ?>
                                </div>
                            </div>
                        <div class="text-center mb-4">
                            <button class="btn btn-outline-light pt-3 text-light">
                            <?php 
                                $argsbtnfranquia = array('page_id'=>'21');
                                $btnfranquia = new wp_query($argsbtnfranquia);
                                if ($btnfranquia->have_posts()){
                                    while($btnfranquia->have_posts()){
                                        $btnfranquia->the_post();
                                        the_content();
                                    }
                                }
                            ?>
                            </button>
                        </div>                        
                    </div>
                    </div>                        
                     <?php
                }
                wp_reset_postdata();
            }
        ?>

    </div>
</div>
<?php get_template_part('template-parts/parte','caixas'); ?>
<div class="container-fluid" id="nailBar">
    <div class="row">
            <?php
                $argsNailBar = array('category_name'=>'bar');
                $nailBar = new wp_query($argsNailBar);
                if($nailBar->have_posts()){
                    while($nailBar->have_posts()){
                        $nailBar->the_post();?>
                        <div class="col-12" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                            <div class="p-4 row justify-content-center" style=" height: 100%; background: rgba(0,0,0,0.4)">
                                <div class="col-12 col-md-8 text-light">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class=" col-12 col-md-8">
                                    <button class="btn btn-info text-light">Quero ser um(a) franqueado(a)</button>
                                </div>
                            </div>
                        </div>                        
                    <?php }
                }
            ?>
    </div>
</div>
<div class="container-fluid" id="banner2">
    <div class="row">
        <?php 
            $argsDif = array('p'=>'326');
            $diferenciaisp = new wp_query($argsDif);
            if($diferenciaisp->have_posts()){
                while($diferenciaisp->have_posts()){
                    $diferenciaisp->the_post();?>
                    <div class="p-0 col-12" style=" background-size: cover; background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="d-flex align-items-center" style="min-height: 100vh;background: linear-gradient(135deg, rgba(255,0,236,0.8),rgba(0,0,236,0.52))">
                            <div class="container">
                                <div class="row align-items-center">
                                    <?php
                                    $argsDifcp = array('category_name'=>'porque', 'orderby'=>'id', 'order'=>'asc');
                                    $diferenciaiscp = new wp_query($argsDifcp);
                                    if($diferenciaiscp->have_posts()){
                                        while($diferenciaiscp->have_posts()){
                                            $diferenciaiscp->the_post();?>
                                            <div class="col-12 col-md-4 my-3">
                                                <div class="card">
                                                    <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php the_title() ?></h5>
                                                        <p class="card-text"><?php the_content() ?></p>
                                                        <a href="#" class="btn btn-outline-dark pt-3"><?php the_excerpt() ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php }
                                wp_reset_postdata();
                                }
                                ?>
                                </div>
                            </div>
                    </div>
                    </div>                        
                     <?php
                }
                wp_reset_postdata();
            }
        ?>
    </div>
</div>
<div class="container my-4">
    <div class="row align-items-center">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-12 col-md-10" id="modelosNegocios">
                <?php 
                    $contaModelos = 0;
                    $argsModelosNegocios = array('category_name'=>'modelos-de-negocio');
                    $modelosNegocios = new wp_query($argsModelosNegocios);
                    if($modelosNegocios->have_posts()){
                        while($modelosNegocios->have_posts()){
                            $modelosNegocios->the_post();
                            if($contaModelos == 0 ) { ?>
                                <div class="row">
                                    <div class="col-12 col-md-10 text-center my-4">
                                        <div class="display-5"><?php print_r(get_the_category()[0]->name) ?></div>
                                        <div><h4><?php print_r(get_the_category()[0]->description) ?></h4></div>
                                    </div>
                                </div>
                            <?php 
                            }
                            if($contaModelos % 2 == 0){
                            ?>
                                <div class="row modelosNegocios">
                                    <div class="col-12 col-md-6 pe-md-0">
                                        <div class="imgModelosNegocios" style="min-height: 100vh; background-image: url(<?php the_post_thumbnail_url() ?>)" alt=""></div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center">
                                        <div class="p-3">
                                            <div class="h2 fs-4"><?php the_title() ?></div>
                                            <div class="fs-6"><?php the_content(); ?></div>
                                            <div><button class="btn btn-info text-light">Quero ser um(a) franqueado(a)</button></div>
                                        </div>
                                    </div>                            
                                </div>
<?php                           }else{ ?>
                                <div class="row modelosNegocios">
                                    <div class="col-12 col-md-6 order-md-2 ps-md-0">
                                        <div class="imgModelosNegocios" style="min-height: 100vh; background-image: url(<?php the_post_thumbnail_url() ?>)" alt=""></div>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-1 d-flex align-items-center">
                                        <div class="p-3">
                                            <div class="h2 fs-4"><?php the_title() ?></div>
                                            <div class="fs-6"><?php the_content(); ?></div>
                                            <div><button class="btn btn-info text-light">Quero ser um(a) franqueado(a)</button></div>                                            
                                        </div>
                                    </div>                            
                                </div>
<?php                           }
                            $contaModelos++;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container" style="background: linear-gradient(135deg, rgba(255,0,236,0.8),rgba(0,0,236,0.52))">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center text-light"  style="height: 30vh">
            <div class="text-center">
                <div>
                    <h2 class="display-6">Seja um(a) Franqueado(a) da <strong>Esmalteria Nacional!</strong></h2>
                </div>
                <div class="my-4"><button class="btn btn-outline-light">Quero ser um(a) franqueado(a)</button></div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12  border border-light p-md-0">
            <div class="row mb-3 ">
                <div><h4 class="text-center">FAQ</h4></div>
                <div class="display-5 text-center">Ficou alguma <strong>dúvida?</strong></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="faq">
                    <?php 
                        $argsFaq = array('category_name'=>'faq', 'orderby'=>'id', 'order'=>'asc');
                        $faq = new wp_query($argsFaq);
                        if($faq->have_posts()){
                            while($faq->have_posts()){
                                $faq->the_post(); ?>
                                <div class="accordion-item shadow my-4 border border-info">
                                    <h2 class="accordion-header" id="<?php echo 'haccordion' . get_the_ID() ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#caccordion' . get_the_ID() ?>" aria-expanded="false" aria-controls="collapseOne">
                                        <?php the_title();?>
                                    </button>
                                    </h2>
                                    <div id="<?php echo 'caccordion' . get_the_ID() ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo 'caccordion' . get_the_ID() ?>" data-bs-parent="#faq">
                                        <div class="accordion-body text-left">
                                            <?php the_content() ?>
                                        </div>
                                    </div>
                                </div>
<?php                       }
                        }
                    ?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                <button class="text-light btn btn-info my-4">Quer Saber mais</button>
                </div>
            </div>
        </div>
    </div>
</div>