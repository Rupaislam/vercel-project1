<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epic  Blog
 */

?>
<article class="col-lg-6">
    <div class="epic-single-items">
        <div class="epic-single-img">
            <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('epic-blog-image', array('class' => 'img-fluid'));
                else :
                    $no_featured_img = get_template_directory_uri() . '/img/no-featured-image.png';
                    echo '<img src="' . esc_url($no_featured_img) . '" alt="No featured Image" width="372" height="248" class="img-fluid no-img-found" />';
                endif;
                ?>
            </a>
        </div>
        <div class="epic-single-details">
            <h2 class="epic-single-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="epic-single-post-date">
                <?php echo esc_html(get_the_date()); ?>
            </div>
            <div class="epic-single-excerpt"><?php the_excerpt(); ?></div>
            <div class="feature-button">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'epic-blog'); ?></a>
            </div>
        </div>
    </div>
</article>