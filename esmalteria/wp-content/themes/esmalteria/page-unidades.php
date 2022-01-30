<?php
    $argsUnidade = array(
        'category_name'=>'unidade',
        'nopaging'=>'true',
        'orderby'=>'id',
        'order'=>'asc'
    );
    $unidade = new wp_query($argsUnidade);
    if($unidade->have_posts()){
        $catName = array();
        $conta = 0;        
        while($unidade->have_posts()){
            $unidade->the_post();
            $sub = (get_the_category());
            array_push($catName, $sub[0]->name);
        }
        wp_reset_postdata();
        $anterior = '';
        foreach($catName as $cat){
            $argsUnidades = array('category_name' => $cat);
            $Unidades = new wp_query($argsUnidades);
            echo $cat;
            if($Unidades->have_Posts()){
                while($Unidades->have_posts()){
                    $Unidades->the_post();
                    if ($cat != $anterior){
                        echo $cat . "<br>";                         
                        the_title(); echo '<br>';
                        the_post_thumbnail_url(); echo '<br>';
                        $anterior = $cat;
                    }
                    else{
                        the_title(); echo '<br>';
                        the_post_thumbnail_url(); echo '<br>';
                        $anterior = $cat;
                    }
                }
                wp_reset_postdata();
            }
        }   
    }
?>