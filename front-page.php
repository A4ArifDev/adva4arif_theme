<?php
/**
 * The template for displaying Home page.
 *
 * @package adv_a4arif
 *
 * @since 1.0.0
 *
 **/
get_header();

?>
        <!-- /* Hero section start here */ -->
        <section id="hero" class="sec-p-x">
            <div class="hero_container">
                <div class="left_content">
                    <span class="diff_c diff_f">Hi, my name is</span>
                    <h1 class="">Muhammad Arif<br>
                        I build things for the web.</h1>
                        <p class="">Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maiores impedit dignissimos nostrum amet quae aspernatur nulla soluta corporis autem! ipsum dolor lorem dollar sub sit amet consectetur adipisicing elit.ucimus quia maiores eius non!</p>
                    <a href="#about-me" class="btn-primary">Read More</a>
                </div>
                <div class="right_content">
                    <div class="img_box">
                        <img src="<?php echo get_template_directory_uri(). '/assets/images/hero.png' ?>" alt="">
                        <div class="shape_box"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /* Hero section end here */ -->

        <!-- /* About-me section start here */ -->
        <section id="about-me" class="sec-p-xx sec-p-y">
           <div class="about_container">
                <div class="left_about">
                    <h4 class="sec_title"><span class="diff_c diff_f">I.</span> About Me</h4>
                     <p>I am Frontend Developer and wordpress. I have developed Many Categories websites and i am ready to create Professional and Responsive Wordpress Website Design for you Business and grow up your business for get more clients. My Expertise on various Kind of Technologies like Full Expert in Wordpress HTML5 CSS Javascript Wix website design Shopify Website design or store</p>
                     <p>Here are a few technologies I’ve been working with recently:</p>
                     <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JAVASCRIPT</li>
                        <li>REACT JS</li>
                        <li>TAILWIND CSS</li>
                        <li>BOOTSTRAP</li>
                        <li>LARAVEL</li>
                        <li>WORDPERSS</li>
                     </ul>
                </div>
                <div class="right_about reveal">
                    <div class="about-item">
                        <div class="about-txt">
                            <p class="large-txt"><span id="0101">1000</span>+</p>
                            <p class="small-txt">Videos <br>Watched</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-txt">
                            <p class="large-txt"><span id="0102">1000</span>+</p>
                            <p class="small-txt">Following <br>Expert</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-txt">
                            <p class="large-txt"> <span id="0103">1000</span>+</p>
                            <p class="small-txt">Course<br>Complete</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-txt">
                            <p class="large-txt"><span id="0104">1000</span>+</p>
                            <p class="small-txt"> Years<br>Learning</p>
                        </div>
                    </div>
                </div>
           </div>
        </section>
        <!-- /* About-me section end here */ -->

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
                <a href="<?php echo get_post_type_archive_link('portfolios'); ?>" class="btn-primary">Show More</a>
            </div>
        </section>
        <!-- /* Portfolio section end here */ -->

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
                <a href="<?php echo get_post_type_archive_link('gigs'); ?>" class="btn-primary">Show More</a>
            </div>
        </section>
        <!-- /* Plan section end here */ -->

         <!-- /* Blog section start here */ -->
        <section id="article" class="sec-p-x sec-p-y">
            <h4 class="sec_title"><span class="diff_c diff_f">IV.</span> Check Our Latest News</h4>
            <div class="blog_container reveal">
            <?php 
                    $args3 = array(
                        'posts_per_page' => 3,
                     );
                    $home_page_blogs = new WP_Query($args3); 
                    if ( $home_page_blogs->have_posts() ) {
                        while ( $home_page_blogs->have_posts() ) {
                            $home_page_blogs->the_post();
                ?>
                    <div class="blog_item">
                        <div class="thumb_box">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-page-thumbnail'); ?></a>
                            <div class="date_box">
                                <p><?php echo get_the_date('j'); ?></p><span class="month"><?php echo get_the_date('M'); ?></span><p><?php echo get_the_date('Y'); ?></p>
                            </div>
                        </div>
                        <div class="blog_body">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &#8594;</a>
                        </div>
                    </div>
                <?php }} ?>

            </div>
            <div class="btn_box">
                <a href="<?php echo site_url('/blog'); ?>" class="btn-primary">Show More</a>
            </div>
        </section>
         <!-- /* Blog section end here */ -->

         <!-- /* Contact section start here */ -->
        <section id="contact" class="sec-p-xx sec-p-y">
            <div class="contact_container reveal">
               <div class="contact_content">
                <h4 class="diff_sec_title"><span class="diff_c diff_f">V.</span> What Next</h4>
                <h1>Get In Touced</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus nobis, illum recusandae ea perferendis consequatur tenetur alias non minima voluptatum adipisci odio accusamus ab assumenda nihil eos pariatur, deleniti temporibus!</p>
                <a href="" class="btn-primary">Say Hello</a>
               </div>
            </div>
        </section>
        <!-- /* Contact section end here */ -->

<?php get_footer() ?>