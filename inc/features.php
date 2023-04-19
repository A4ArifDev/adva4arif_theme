<?php 
         function adv_a4arif_featues(){
            add_theme_support('title-tag');
            add_theme_support('custom-logo');
            add_theme_support('post-thumbnails');
            add_image_size('single-page-thumbnail', 600, 400, true);
            add_image_size('home-page-gig', 300, 200, true);
        }
        add_action('after_setup_theme','adv_a4arif_featues');

?>