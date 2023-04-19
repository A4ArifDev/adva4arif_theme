<?php
    function adv_a4arif_theme_footer_customizer($wp_customize) {

        $wp_customize->add_section( 'adv_a4arif_theme_footer_section', array(
         'title'      => 'Footer Copywrite Text',
         'priority'   => 30,
     ) );
 
     $wp_customize->add_setting( 'adv_a4arif_theme_footer_setting', array(
         'default'           => 'All Rights Reserved By Sohel',
     ) );
 
     $wp_customize->add_control( 'adv_a4arif_theme_footer_control', array(
         'label'    => __( 'New Control', 'adv_a4arif_theme' ),
         'section'  => 'adv_a4arif_theme_footer_section',
         'settings' => 'adv_a4arif_theme_footer_setting',
         'type'     => 'text',
     ) );
 
 }

 add_action('customize_register','adv_a4arif_theme_footer_customizer');

?>