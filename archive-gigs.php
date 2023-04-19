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
                <h1>PLANS ARCHIVES</h1>
            </div>
        </section>
        <!-- /* Archive section end here */ -->

        <!-- /* Plan section start here */ -->
        <section id="plan" class="sec-p-x sec-p-y">
            <h4 class="sec_title"><span class="diff_c diff_f">III.</span> Check Our Plans</h4>
            <div class="price_container reveal">
            <?php 
                    $args2 = array(
                        'post_type' => 'gigs',
                        'posts_per_page' => 3,
                     );
                    $home_page_gigs = new WP_Query($args2); 
                    if ( $home_page_gigs->have_posts() ) {
                        while ( $home_page_gigs->have_posts() ) {
                            $home_page_gigs->the_post();
                            $image1 = get_field('gig_image_one');
                            $image2 = get_field('gig_image_two');
                            $image3 = get_field('gig_image_three');
                ?>
                    <div class="price_item">
                        <div class="ex-head">
                            <a href="<?php the_field('fiverr_link'); ?>">
                            <div class="bxslider">
                                    <img src="<?php echo esc_url($image1['sizes']['home-page-gig']); ?>" alt="">
                                    <img src="<?php echo esc_url($image2['sizes']['home-page-gig']); ?>" alt="">
                                    <img src="<?php echo esc_url($image3['sizes']['home-page-gig']); ?>" alt="">
                            </div>
                        </a>
                        </div>
                        <div class="ex-body">
                        <a href="<?php the_field('fiverr_link'); ?>"> <p><?php the_title(); ?></p></a>
                            <div class="ib">
                                <p><i class="fas fa-star"></i><?php the_field('star'); ?>.00 (<?php the_field('rating'); ?>)</p>
                                <p><strong><?php the_field('delivery_time'); ?> Days</strong> Delivery</p>
                            </div>
                        </div>
                        <div class="ex-footer">
                            <span>Starting At <strong>$<?php the_field('price'); ?></strong></span>
                            <a href=""><i class="fa-regular fa-heart heart"></i></a>
                        </div>
                    </div>
            <?php } } ?>
            </div>
            <div class="btn_box">
            <?php echo paginate_links(); ?>
            </div>
        </section>
        <!-- /* Plan section end here */ -->
<?php get_footer(); ?>