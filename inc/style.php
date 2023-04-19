<?php
 function freelancer_banner(){
    ?>
    <style>
        :root {
        --sfc: <?php echo get_theme_mod( 'primary_color', 'hsl(166, 100%, 70%)' ); ?>;
        --fc: <?php echo get_theme_mod( 'secondary_color', '#ccd6f6' ); ?>;
        --dfc: <?php echo get_theme_mod( 'tertiary_color', '#8892b0' ); ?>;
        --bg: <?php echo get_theme_mod( 'dark_bg_color', '#0A192F' ); ?>;
        --lbg: <?php echo get_theme_mod( 'light_bg_color', '#112240' ); ?>;
}
    </style>
<?php }
add_action( 'wp_head', 'freelancer_banner');
?>