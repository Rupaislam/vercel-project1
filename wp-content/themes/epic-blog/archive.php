<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epic Blog
 */

get_header();
?>
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="blog-area col-lg-9 col-md-8 col-12">
                <div class="row epic-blog-list">
                    <?php

                    the_archive_title('<h1 class="archive-title">', '</h1>');

                    // If there are any posts
                    if (have_posts()) :

                        // Load posts loop
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content', 'archive');
                        endwhile;

                        // We're using numeric page navigation here.
                        the_posts_pagination(array(
                            'prev_text'        => esc_html__('<<', 'epic-blog'),
                            'next_text'        => esc_html__('>>', 'epic-blog'),
                        ));

                    else :
                    ?>
                        <p class="text-center"><?php esc_html_e('Nothing to display.', 'epic-blog'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>