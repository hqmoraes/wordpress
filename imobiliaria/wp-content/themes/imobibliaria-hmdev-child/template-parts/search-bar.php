<?php /*Filtrar por: Cidade, Quartos, Banheiros, Preço (maior e menor)*/ 

/** Inicio - Filtro por operação */
$opera_id = 10;
$opera_tax = 'category';
$opera = get_term_children($opera_id, $opera_tax );
/** Fim - Filtro por operação */

/** inicio - Filtro por tipo de imóvel */
    $argsTipos = array
    (   
        'public'   => true,
        '_builtin' => false
    );
    $output = 'objects';
    $operator = 'and';
    $tipos = get_post_types($argsTipos, $output, $operator);
/** Fim - Filtro por tipo de imóvel */
/** inicio - Filtro por cidade */
    $cidade_id = 7;
    $cidade_tax = 'category';
    $cidades = get_term_children($cidade_id, $cidade_tax );
/** inicio - Filtro por cidade */
?>
<div class="container" id="busca">
    <div class="row">
        <div class="col-12">
            <form action="/" method="get">
            <input type="hidden" name="s" id="search" value="<?php the_search_query(); ?>" />
                <div class="container p-2" id="ctn-busca">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <div class="row">
                                <div class="col-12">
                                    <select id="operacao" class="form-select" aria-label="Selecionar operação" name="opera" onchange="enablePesquisa()">
                                        <Option>Operação</Option>
                                        <?php
                                        foreach($opera as $op){?>
                                        <option value="<?php echo get_cat_name($op) ?>"><?php echo get_cat_name($op); ?></option> <?php }?></option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select id="tipo" class="form-select" aria-label="Selecionar Tipo de Imóvel" name="tipo" onchange="enablePesquisa()">
                                        <Option>Tipo de imóvel</Option>
                                        <?php 
                                            foreach($tipos as $tipo){ ?>
                                                <option value="<?php echo $tipo->labels->singular_name; ?>"><?php echo $tipo->labels->singular_name; ?></option> 
                                            <?php }?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select id="cidade" class="form-select" aria-label="Selecionar cidade" name="cidade" onchange="enablePesquisa()">
                                        <Option>Cidade</Option>
                                            <?php
                                            foreach($cidades as $cidade){?>
                                                <option value="<?php echo $cidade ?>"><?php echo get_cat_name($cidade); ?></option> <?php }?></option>
                                    </select>
                                </div>
                                <?php
                                $argsBefore = array(
                                    'category_name'=>'',
                                    'meta_key'=>'valor',
                                    'meta_value'=>array(),
                                    'meta_compare'=>'between'
                                );
                                $qry = new wp_query($argsBefore);
                                $valores = array();
                                if ($qry->have_posts()){
                                    while($qry->have_posts()){
                                        $qry->the_post();
                                        $post = get_post(get_the_ID());
                                        $valores[] = $post->valor;
                                    }
                                    wp_reset_postdata();
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-9" id="faixa">
                            <div class="row align-items-center">
                                <div class="col-12 text-center mt-4 mt-md-0">
                                    <h5>Faixa de Preço: </h5>
                                </div>
                                    <div class="row justify-content-between">
                                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-between">
                                                <label for="menorValor">Menor valor R$: </label>
                                                <input name="menorValor" type="range" id="valorMin" min="<?php echo min($valores);?>" max="<?php echo max($valores)-1;?>" onchange="atualizaValorMinMax()">
                                                <span id="resultadoMin"><?php echo min($valores);?></span>
                                        </div>
                                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-between">
                                            <label for="maiorValor">Maior valor R$: </label>
                                            <input name="maiorValor" class="me-1" type="range" id="valorMax" min="<?php echo min($valores);?>" max="<?php echo max($valores)+1;?>" onchange="atualizaValorMaxMin()">
                                            <span id="resultadoMax"><?php echo max($valores);?></span>
                                        </div>
                                        <div class="col-12 col-md-2 text-center mt-4 mt-md-0">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
