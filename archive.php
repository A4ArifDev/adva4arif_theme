<?php
/**
 * The template for displaying archive posts.
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
                <h1>ARTICLE ARCHIVES</h1>
            </div>
        </section>
        <!-- /* Archive section end here */ -->

        <!-- /* Blog section start here */ -->
        <section id="blog" class="sec-p-x sec-p-y">
            <h4 class="sec_title"><span class="diff_c diff_f">IV.</span> Check Our Latest News</h4>
            <div class="blog_container reveal">
            <?php get_template_part('template-parts/post/post-template'); ?>
            </div>
            <div class="btn_box">
            <?php echo paginate_links(); ?>
            </div>
        </section>
         <!-- /* Blog section end here */ -->

<?php get_footer(); ?>