<?php
/**
 * The template for displaying custom archive posts.
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
                <h1>PORTFOLIO ARCHIVES</h1>
            </div>
        </section>
        <!-- /* Archive section end here */ -->


         <!-- /* Portoflio section start here */ -->
         <section id="portfolios" class="sec-p-x sec-p-y">
            <h4 class="sec_title"><span class="diff_c diff_f">II.</span> Some Things I've Build</h4>
            <div class="port_container">
                <?php 
                    $args = array(
                        'post_type' => 'portfolios',
                        'posts_per_page' => 6,
                     );
                    $home_page_portfolios = new WP_Query($args); 
                    if ( $home_page_portfolios->have_posts() ) {
                        while ( $home_page_portfolios->have_posts() ) {
                            $home_page_portfolios->the_post();
                ?>
                    <div class="port_item">
                        <div class="port_img_box">
                            <?php the_post_thumbnail('single-page-thumbnail'); ?>
                            <div class="port_detail_box">
                                <div class="port_top_box">
                                <a href="<?php the_field('github_link'); ?>" target="_blank"> <i class="fa-brands fa-github"></i></a>
                                <a href="<?php the_field('project_link'); ?>" target="_blank"> <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                </div>
                                <a href="<?php the_field('project_link'); ?>"  target="_blank"><h4><?php the_title(); ?></h4></a>
                                <p><?php the_content(); ?></p>
                                <ul>
                                    <li><?php the_field('tech_used'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
            </div>
            <div class="btn_box">
            <?php echo paginate_links(); ?>
            </div>
        </section>
        <!-- /* Portfolio section end here */ -->
<?php get_footer(); ?>