<?php
/**
 * The template for displaying  post
 */

                    if (have_posts() ) {
                        while (have_posts() ) {
                            the_post();
                ?>
                    <div class="page_container">
                        <p><?php the_content(); ?></p>
                    </div>
                <?php }} ?>
