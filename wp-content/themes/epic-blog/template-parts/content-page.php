<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epic Blog
 */

?>
<article class="col">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="page-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages(
            array(
                'before'    => '<p class="inner-pagination">' . esc_html__('Pages', 'epic-blog'),
                'after'        => '</p>',
            )
        );
        ?>
    </div>
    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
</article>