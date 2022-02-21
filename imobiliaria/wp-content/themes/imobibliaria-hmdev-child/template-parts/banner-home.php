<div class="container-fluid">
    <div class="row">
        <div class="col-12" id="cntBanner">
            <div class="container">
                <div class="row">
                    <div class="bannerImagens p-4">
                    <?php
                        $argsBanner = array('category_name'=>'banner');
                        $banner = new wp_query($argsBanner);
                        if($banner->have_posts()){
                            while($banner->have_posts()){
                                $banner->the_post();
                                the_content();
                            }
                        }
                    ?>
                    </div>
                    <div class="col-sm-12">
                        <div class="banner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>