<?php
    get_template_part('template-parts/slide','unidade');
// Inicio - Função que retorna a descrição da categoria
    function imprimirConteudoPagina(){
        $argsConteudoUnidades = array ('post_type' => 'page', 'page_id' => '17');
        $conteudoUnidades = new wp_query($argsConteudoUnidades);        
        if ($conteudoUnidades->have_posts()){
            while($conteudoUnidades->have_posts()){
                $conteudoUnidades->the_post();
                $ConteudoUnidade = the_content();
            }
            wp_reset_postdata();
    }
        return $ConteudoUnidade;
    }
    function imprimirTituloPagina(){
        $argsConteudoUnidades = array ('post_type' => 'page', 'page_id' => '17');
        $conteudoUnidades = new wp_query($argsConteudoUnidades);        

        if ($conteudoUnidades->have_posts()){
            while($conteudoUnidades->have_posts()){
                $conteudoUnidades->the_post();
                $ConteudoUnidade = the_title();
            }
            wp_reset_postdata();
    }
        return $ConteudoUnidade;
    }

// Fim - Função que retorna a descrição da categoria    

    $catID = array();
    $argsUnidade = array(
        'category_name'=>'unidade',
        'nopaging'=>'true',
        'orderby' => 'id',
        'order'=>'asc'
    );

    $anterior = '';
    $unidade = new wp_query($argsUnidade);
    if($unidade->have_posts()){
        while($unidade->have_posts()){
            $unidade->the_post();
            $cat = get_the_category(get_the_ID())[0]->name;
            $Cat = get_the_category(get_the_ID())[0]->term_id;
                if ($cat != $anterior){?>             
                    <?php $arg = array ('cat' => $Cat); $query = new WP_Query( $arg );
                    $count = $query->found_posts; ?>                    
                    <div  data-qtd="<?php echo $count; ?>" class="container-fluid slds" id="<?php echo get_the_category(get_the_ID())[0]->category_nicename; ?>">
                        <div class="row slidesUnidades align-items-center">                    
                            <div class="col-12 col-md-8 col-lg-6">
                                <div class="container">
                                    <div class="row">
                                        <div  class="slidesUnidade">
                                            <?php
                                                $argsUn = array(
                                                    'cat'=> $Cat,
                                                    'nopaging'=>'true',
                                                    'orderby' => 'id',
                                                    'order'=>'asc'
                                                );
                                                $un = new wp_query($argsUn);
                                                if($un->have_posts()){
                                                    while($un->have_posts()){
                                                        $un->the_post();?>
                                                        <div class="slide-unidade sld" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                                            <div class="slideunidade text-center">
                                                                <div>
                                                                    <div class="h1">Unidade</div>
                                                                    <div class="display-3"><?php the_title(); ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                    wp_reset_postdata();
                                                }
                                            ?>
                                        </div>
                                        <div class="slide-nav">
                                            <?php
                                                $argsUn = array(
                                                    'cat'=> $Cat,
                                                    'nopaging'=>'true',
                                                    'orderby' => 'id',
                                                    'order'=>'asc'
                                                );
                                                $un = new wp_query($argsUn);
                                                if($un->have_posts()){
                                                    while($un->have_posts()){
                                                        $un->the_post();?>
                                                        <div class="slide-unidade-nav sld mx-2 mt-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                                                            <div class="slideunidade-nav text-center">
                                                                <div>
                                                                    <div class="h1 fs-6 mb-0">Unidade</div>
                                                                    <div class="display-3 fs-6 mt-0">
                                                                        <?php the_title(); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <?php   }
                                                    wp_reset_postdata();
                                                } ?>   
                                        </div>                         
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 col-md-4 col-lg-6 mt-md-0">
                                <div>
                                    <div class="display-6 fs-4"><?php imprimirConteudoPagina()?></div>
                                    <div class="display-5"><?php imprimirTituloPagina()?></div>
                                    <div class="h1"><?php echo $cat; ?> </div>
                                    <div class="h3 display-6 fs-5"><?php print_r(category_description(26)); ?></div>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $anterior = $cat; 
                }?>
<?php   }
        wp_reset_postdata();
    } 
?>

