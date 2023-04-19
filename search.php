<?php
/**
 * The template for displaying search result pages.
 *
 * @package adv_a4arif
 *
 * @since 1.0.0
 *
 **/
get_header();

?>
     <!-- /* Single section start here */ -->
     <section id="single" class="sec-p-x sec-p-y">
            <div class="single_container">
                <div class="left_single">
                <h2 class="search-title"><?php printf(__('Search Result For: %s', 'a4arif'), get_search_query()); ?></h2>
                <?php get_template_part('template-parts/post/post-template'); ?>
                </div>
                <div class="right_single">
                       <?php dynamic_sidebar('main-sidebar'); ?>
                </div>
            </div>
    </section>
    <!-- /* Single section start here */ -->
<?php get_footer(); ?>