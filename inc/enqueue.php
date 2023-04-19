<?php 
   function adv_a4arif_theme_file_enqueueing(){
    // font one
    wp_enqueue_style('adv_a4arif_font1','https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;500&family=Poppins:wght@300;500;600;700&display=swap');
    
     // font two
     wp_enqueue_style('adv_a4arif_font2','https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;500&family=Poppins:wght@300;500;600;700&display=swap');
        
    // fontawesome
     wp_enqueue_style('adv_a4arif_fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // bx-slider css
    wp_enqueue_style('adv_a4arif_bx_slider', get_template_directory_uri(). '/assets/css/jquery.bxslider.min.css', array(), '1.0.0', 'all');
    
    // main style
    wp_enqueue_style('adv_a4arif_main_style', get_stylesheet_uri());

    // default jquery
    wp_enqueue_script('jquery');
    
    // bx-slider js file
    wp_enqueue_script('adv_a4arif_bxslider_js', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), '1.0.0', true);
    
    // custom js file
    wp_enqueue_script('adv_a4arif_main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'adv_a4arif_theme_file_enqueueing');

?>