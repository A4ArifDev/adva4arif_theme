<?php 
     //register sidebar
    function adv_a4arif_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'a4arif' ),
            'id'            => 'main-sidebar',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'a4arif' ),
            'before_widget' => '<div id="%1$s" class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'adv_a4arif_widgets_init' );
?>