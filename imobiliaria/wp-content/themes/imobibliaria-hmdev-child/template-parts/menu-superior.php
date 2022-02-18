<div class="container-fluid" id="menu-superior">
    <div class="row align-items-center" style="height: 100%">
        <div class="col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2 col-lg-1">
                        <a href="<?php echo home_url(); ?>"><?php the_custom_logo();?></a>
                    </div>
                    <div class="col-10 col-lg-11 d-flex justify-content-end align-items-center" style="flex-wrap: wrap">
                        <div class="col-1 text-end">
                            <img src="http://imobiliaria.hospedar.net/wp-content/uploads/2022/02/phone.png" alt="Telefone">
                        </div>
                        <div id="img-whats"><img src="http://imobiliaria.hospedar.net/wp-content/uploads/2022/02/whatsapp.png"></div>
                            <?php
                            $argsTelefone = array(
                                            'post_type'=>'page',
                                            'page_id'=>'8'
                                        );
                            $telefone = new wp_query($argsTelefone);
                            if($telefone->have_posts(0)){
                                while($telefone->have_posts()){
                                    $telefone->the_post();
                                    $post = get_post(8);
                                    $telefones = get_post_meta($post->ID,'Telefone',false);
                                    foreach($telefones as $tel){?>
                                    <div class="me-4">
                                        <div>
                                            <?php echo $tel; ?></div>
                                        </div>
                                    <?php
                                    }
                                }
                            } ?>
                        <div id="contato">
                                <?php
                                    $argsContato = array(
                                        'post_type'=>'page',
                                        'page_id'=>'99'
                                    );
                                    $contato = new wp_query($argsContato);
                                    if($contato->have_posts()){
                                        while($contato->have_posts()){
                                            $contato->the_post();
                                            the_content();
                                        }
                                    }
                                ?>
                        </div>
                            <button class="mx-2 btn btn-sm btn-outline-light">Entrar</button>
                            <img src="http://imobiliaria.hospedar.net/wp-content/uploads/2022/02/translation-icon.png" alt="">
                            <img src="http://imobiliaria.hospedar.net/wp-content/uploads/2022/02/hamburger_button_menu_icon_155296.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12"></div>
                </div>
            </div>
        </div>
    </div>
</div>