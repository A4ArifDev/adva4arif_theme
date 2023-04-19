<?php
/**
 * The template for displaying page template.
 *
 * @package adv_a4arif
 *
 * @since 1.0.0
 *
 **/
get_header();

?>
       <!-- /* Archive section start here */ -->
        <section id="archive" class="sec-p-xx">  
            <div class="archive_container">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <!-- /* Archive section end here */ -->

        <!-- /* page section */ -->
        <section id="page" class="sec-p-xx sec-p-y">
        <?php get_template_part('template-parts/page/page-template'); ?>
        </section>
        <!-- /* page section */ -->

<?php get_footer(); ?>