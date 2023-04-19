<?php
/**
 * The template for displaying single page.
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
            <?php while ( have_posts() ) { the_post(); ?>
                <div class="left_single">
                    <div class="meta_data">
                        <p><?php echo get_the_category_list(','); ?></p>
                        <h1><?php the_title(); ?></h1>
                        <p><span class="author"><?php the_author_posts_link(); ?></span> <span><?php the_time('j-M-Y'); ?></span></p>
                    </div>
                    <?php the_post_thumbnail('single-page-thumbnail'); ?>
                    <p><?php the_content(); ?></p>
                    
                    <div class="share_bar">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php the_title(); ?>" target="_blank"><i class="fa-brands fa-pinterest"></i></a></li>
                    </div>
                </div>
                <?php } ?>
                <div class="right_single">
                       <?php dynamic_sidebar('main-sidebar'); ?>
                </div>
            </div>
    </section>
    <!-- /* Single section start here */ -->

    <!-- /* Related Blog section start here */ -->
    <section id="blog" class="sec-p-x sec-p-y">
            <h4 class="sec_title"><span class="diff_c diff_f">IV.</span> Related Articles</h4>
            <div class="blog_container reveal">
            <?php 
                    $categories = get_the_category();
                    $rp_query = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post__not_in' => array($post->ID),
                    'cat' => !empty($categories) ? $categories[0]->term_id : null,
                    )); 
                    if($rp_query->have_posts()){
                        while($rp_query->have_posts()){
                            $rp_query->the_post();
                ?>
                <div class="blog_item">
                        <div class="thumb_box">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('single-page-thumbnail'); ?></a>
                            <div class="date_box">
                                <p><?php echo get_the_date('j'); ?><span class="month"><?php echo get_the_date('M'); ?></span><?php echo get_the_date('Y'); ?></p>
                            </div>
                        </div>
                        <div class="blog_body">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &#8594;</a>
                        </div>
                    </div>
                <?php }}?>
                <div class="btn_box">
                <?php echo paginate_links(); ?>
                </div>
            </div>
    </section>
    <!-- /* Related Blog section start here */ -->
<?php get_footer(); ?>