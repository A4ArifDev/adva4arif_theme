<?php
/**
 * The template for displaying posts.
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
                <h1>ARTICLE PAGE</h1>
            </div>
        </section>
        <!-- /* Archive section end here */ -->

         <!-- /* Single section start here */ -->
    <section id="single" class="sec-p-x sec-p-y">
            <div class="single_container">
                <div class="left_single">
                <?php get_template_part('template-parts/post/post-template'); ?>
                <?php echo paginate_links(); ?>
                </div>
                <div class="right_single">
                       <?php dynamic_sidebar('main-sidebar'); ?>
                </div>
            </div>
    </section>
    <!-- /* Single section start here */ -->

<?php get_footer(); ?>