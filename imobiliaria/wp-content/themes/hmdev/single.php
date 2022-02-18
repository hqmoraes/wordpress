<?php 
    get_header();?>
<div class="container" id="single">
    <div class="row">
        <div class="col-12 d-flex">
            <?php 
            while(have_posts()){
                the_post();
                the_content();
            }
            get_footer();?>
        </div>
    </div>
</div>
