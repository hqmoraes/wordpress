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
                        <div class="col-12 text-center my-4">
                            <div class="display-5">
                                <?php echo category_description($idCategoria); $contaDestaques++?>
                        </div>
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
                        ?> <div class="col-12 col-md-6 mb-4">
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