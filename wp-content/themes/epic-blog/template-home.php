<?php

/*
Template Name: Home Page
*/

get_header(); ?>

<div class="content-area">
    <section class="feature-blog">
        <div class="container">
            <?php

            $args = array(
                'post_type'             => 'post',
                'posts_per_page'        => 1,
                'ignore_sticky_posts'   => true,
            );

            $blog_posts = new WP_Query($args);

            // If there are any posts
            if ($blog_posts->have_posts()) :

                // Load posts loop
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                    <article class="row align-items-center">
                        <div class="col-lg-6 feature-blog-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('epic-blog-image', array('class' => 'img-fluid'));
                                else :
                                    $no_featured_img = get_template_directory_uri() . '/img/no-featured-image.png';
                                    echo '<img src="' . esc_url($no_featured_img) . '" alt="No featured Image" width="522" height="348" class="img-fluid no-img-found"/>';
                                endif;
                                ?>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-author-meta d-flex align-items-center">
                                <div class="feature-author-divider"></div>
                                <div class="feature-author-name">
                                    <span><?php the_author_posts_link(); ?></span>
                                </div>
                            </div>
                            <h1 class="feature-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>
                            <div class="feature-post-date">
                                <?php echo esc_html(get_the_date()); ?>
                            </div>
                            <div class="feature-excerpt"><?php the_excerpt(); ?></div>
                            <div class="feature-button">
                                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'epic-blog'); ?></a>
                            </div>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="text-center"><?php esc_html_e('No Post Found', 'epic-blog'); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <section class="epic-posts-wrapper">
        <div class="container">
            <div class="epic-container">
                <?php

                $args = array(
                    'post_type'       => 'post',
                    'posts_per_page'  => 9,
                    'offset'          => 1
                );

                $blog_posts = new WP_Query($args);

                // If there are any posts
                if ($blog_posts->have_posts()) :

                    // Load posts loop
                    while ($blog_posts->have_posts()) : $blog_posts->the_post();
                ?>
                        <article class="row align-items-center epic-single-article">
                            <div class="col-lg-6 feature-blog-img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) :
                                        the_post_thumbnail('epic-blog-image', array('class' => 'img-fluid'));
                                    else :
                                        $no_featured_img = get_template_directory_uri() . '/img/no-featured-image.png';
                                        echo '<img src="' . esc_url($no_featured_img) . '" alt="No featured Image" width="522" height="348" class="img-fluid no-img-found" />';
                                    endif;
                                    ?>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-author-meta d-flex align-items-center">
                                    <div class="feature-author-divider"></div>
                                    <div class="feature-author-name">
                                        <span><?php the_author_posts_link(); ?></span>
                                    </div>
                                </div>
                                <h2 class="feature-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="feature-post-date">
                                    <?php echo esc_html(get_the_date()); ?>
                                </div>
                                <div class="feature-excerpt"><?php the_excerpt(); ?></div>
                                <div class="feature-button">
                                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'epic-blog'); ?></a>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>