<?php 
    function adv_a4arif_theme_customizer( $wp_customize ) {

      // Adding color section:

      $wp_customize->add_section( 'custom_colors_section', array(
          'title'          => __( 'Color Palette', 'custom_theme' ),
          'priority'       => 30,
      ) );

      // Primary color setting

      $wp_customize->add_setting( 'primary_color', array(
          'default'        => 'hsl(166, 100%, 70%)',
          'sanitize_callback' => 'sanitize_hex_color',
      ) );

      // Primary color control

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
          'label'   => __( 'Primary Color', 'custom_theme' ),
          'section' => 'custom_colors_section',
          'settings'   => 'primary_color',
      ) ) );

      // Socondery color setting

      $wp_customize->add_setting( 'secondary_color', array(
          'default'        => '#ccd6f6',
          'sanitize_callback' => 'sanitize_hex_color',
      ) );

      // Socondery color controll

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
          'label'   => __( 'Secondary Color', 'custom_theme' ),
          'section' => 'custom_colors_section',
          'settings'   => 'secondary_color',
      ) ) );

      // Tertairy color setting

      $wp_customize->add_setting( 'tertiary_color', array(
          'default'        => '#8892b0',
          'sanitize_callback' => 'sanitize_hex_color',
      ) );

       // Tertairy color controll

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
          'label'   => __( 'Tertiary Color', 'custom_theme' ),
          'section' => 'custom_colors_section',
          'settings'   => 'tertiary_color',
      ) ) );

      //Dark Background One setting:

      $wp_customize->add_setting( 'dark_bg_color', array(
         'default'        => '#0A192F',
         'sanitize_callback' => 'sanitize_hex_color',
     ) );

     //Dark Background One Controll:

     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_bg_color', array(
         'label'   => __( 'Dark Background', 'custom_theme' ),
         'section' => 'custom_colors_section',
         'settings'   => 'dark_bg_color',
     ) ) );

      //Light Background Two setting:

     $wp_customize->add_setting( 'light_bg_color', array(
      'default'        => '#112240',
      'sanitize_callback' => 'sanitize_hex_color',
  ) );

   //Light Background Two Controll:

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'light_bg_color', array(
      'label'   => __( 'Light Color', 'custom_theme' ),
      'section' => 'custom_colors_section',
      'settings'   => 'light_bg_color',
  ) ) );

  }
  add_action( 'customize_register', 'adv_a4arif_theme_customizer' );
  
?>