<?php
/**
 * The template for displaying  post
 */

                    if (have_posts() ) {
                        while (have_posts() ) {
                            the_post();
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
                <?php }} ?>
