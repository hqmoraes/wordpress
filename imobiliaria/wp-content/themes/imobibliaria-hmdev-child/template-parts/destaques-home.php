<div class="container-fluid" id="destaques">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row" id="intro">
                    <div class="col-12">
                        <h1 class="display-1">As melhores ofertas estão no nosso diretório de imóveis</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>                
    <div class="row justify-content-center align-content-center" id="lista">
        <div class="col-10">
            <div class="col-12 text-center text-light"><h2>Destaques</h2></div>
            <div class="sliderDestaques">
                <?php
                    $argsDestaques = array(
                        'category_name' => 'destaques',
                        'post_type' =>'any'
                    );
                    $destaques = new wp_query($argsDestaques);
                    if ($destaques->have_posts()){
                        while($destaques->have_posts()){
                            $destaques->the_post();
                            ?>
                            <a href="<?php echo get_permalink(); ?>">
                            <div class="container">
                                <div class="cardDestaque">
                                    <?php the_content();?>
                                    <div class="corpoDestaque">
                                        <?php
                                            foreach((get_the_category()) as $category){?>
                                            <div class="col-6"><?php
                                                echo $category->name;?>
                                            </div><?php
                                                }?>
                                            <div class="col-6"><?php
                                                echo get_post_type(get_the_ID());?>
                                            </div><?php
                                        $valor = get_post(get_the_ID());?>
                                        <div class="col-6"><?php
                                            echo 'R$'.$valor->valor + rand(100,1000);?>
                                        </div>
                                    </div>
                                </div>
                                </div> <?php
                        }
                    }
                    ?>
                            </a>
            </div>
        </div>
    </div>
</div>