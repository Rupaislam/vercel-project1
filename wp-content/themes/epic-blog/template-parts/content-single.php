<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epic Blog
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <?php if (has_category()) : ?>
                    <span class="epic-blog-detail-cat"><?php the_category(' '); ?></span>
                <?php endif; ?>
                <h1 class="epic-blog-detail-title"><?php the_title(); ?></h1>
                <div class="epic-blog-detail-meta">
                    <div class="epic-blog-detail-author-date">
                        <?php esc_html_e('Published by', 'epic-blog'); ?>
                        <span><?php the_author_posts_link(); ?></span>
                        <?php esc_html_e('on', 'epic-blog'); ?>
                        <span><?php echo esc_html(get_the_date()); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="epic-blog-detail-img">
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail('epic-blog-image', array('class' => 'img-fluid'));
                    else :
                        $no_featured_img = get_template_directory_uri() . '/img/no-featured-image.png';
                        echo '<img src="' . esc_url($no_featured_img) . '" alt="No featured Image" width="546" height="364" class="img-fluid no-img-found" />';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </header>
    <div class="epic-blog-detail-contact">
        <?php
        wp_link_pages(
            array(
                'before'    => '<p class="inner-pagination">' . esc_html__('Pages', 'epic-blog'),
                'after'        => '</p>',
            )
        );
        ?>
        <?php the_content(); ?>
    </div>
</article>