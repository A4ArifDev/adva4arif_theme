<?php
/**
 * The template for displaying header of website.
 *
 * @package adv_a4arif
 *
 * @since 1.0.0
 *
 **/

?>
<!DOCTYPE html>
<html lang="<?php language_attributes('en-us'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body onload="load()">
    <div class="wrapper">
        <!-- /* heaer div start here */ -->
        <header id="header">
                <nav class="nav">
                    <div class="mob_nav">
                        <div class="logo">
                        <?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <img src="<?php echo esc_url( get_theme_mod( 'custom_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                </a>
                        <?php elseif ( get_theme_mod( 'logo_text' ) ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <h2><?php echo esc_html( get_theme_mod( 'logo_text' ) ); ?><span class="diff_c">.</span></h2>
                                </a>
                        <?php endif; ?>
                        </div>
                       <div class="toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                       </div>
                    </div>
                    <ul class="links">
                        <li><a href="<?php echo site_url('/#about-me'); ?>" class=""><span class="diff_c">I.</span>About</a></li>
                        <li><a href="<?php echo site_url('/#portfolios'); ?>" class="<?php if(get_post_type() == 'portfolios') echo 'link-active' ?>"><span class="diff_c">II.</span>Portfolio</a></li>
                        <li><a href="<?php echo site_url('/#plan'); ?>" class="<?php if(get_post_type() == 'gigs') echo 'link-active' ?>"><span class="diff_c">III.</span>Plan</a></li>
                        <li><a href="<?php echo site_url('/#article'); ?>" class="<?php if(get_post_type() == 'post') echo 'link-active' ?>"><span class="diff_c">IV.</span>Article</a></li>
                        <li><a href="<?php echo site_url('/#contact'); ?>"><span class="diff_c">V.</span>Contact</a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/resume.pdf" target="_blank" class="btn-primary">Resume</a></li>
                    </ul>
                </nav>
        </header>
        <!-- /* heaer div end here */ -->

        <!-- /* Left_bar div start here */ -->
        <div class="left_bar">
                <li><a href="https://twitter.com/a4arifdev/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/a4arifdev/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://github.com/a4arifdev/" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="https://insagrap.com/a4arifdev/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        </div>
        <!-- /* Left_bar div end here */ -->

         <!-- /* Right_bar div start here */ -->
         <div class="right_bar">
            <a href="mailto:a4arifdev@gmail.com?subject=Hi Buddy! I need a Help. When You will be available let me know." target="_blank">a4arifdev@gmail.com</a>
        </div>
        <!-- /* Right_bar div end here */ -->
