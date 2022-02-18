<?php get_header(); 

$opera = $_GET['opera'];
$tipo = $_GET['tipo'];
$cidade = $_GET['cidade'];
$menorValor = $_GET['menorValor'];
$maiorValor = $_GET['maiorValor'];

if($opera == 'Operação'){
    $opera = 1;
}
if($tipo == 'Tipo de imóvel'){
    $tipo = 'post';
}
if($cidade == 'Cidade'){
    $cidade = 1;
}

$argsAfter = array(
    'cat'=>$opera, $cidade, 
    'post_type'=>$tipo,
    'meta_key'=>'valor',
    'meta_value'=>array($menorValor,$maiorValor),
    'meta_compare'=>'between'

);
/** --------------------------------------------------------------------------------------------------------------------------- */
?>
<div class="container" id="resultadoBusca">
<?php get_template_part('template-parts/search','bar');?>    
    <div class="row">
        <?php
        $buscar = new wp_query($argsAfter);
        if($buscar->have_posts()){
            while($buscar->have_posts()){
                $buscar->the_post();
                $id_imovel = get_post_type() . get_the_ID();
                ?>
                <div class="col-3">
                    <div class="card" style="width: 100%; min-height: 350px; max-height: 400px;">
                        <div class="card-imagens" id="<?php echo $id_imovel ;?>">
                        <div class="cont"><?php the_content();?></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink();?>" class="btn btn-primary">Conhecer esse Imóvel</a>
                        </div>
                        </div>   
                    </div>
        <?php
            }
            wp_reset_postdata();
        }
        else{?>
        <div class="bg-light mt-4 text-center"><h1 class="display-1 p-4">Não houve resultados para a sua pesquisa!</h1></div><?php
            
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>
