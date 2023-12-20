<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                    <h1 class="search-result-text"><?php esc_html_e('Search results for', 'epic-blog'); ?>: <?php echo get_search_query(); ?></h1>
                    <div class="search-page-box mb-4">
                        <?php get_search_form(); ?>
                    </div>
                    <?php

                    // If there are any posts
                    if (have_posts()) :

                        // Load posts loop
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content', 'search');
                        endwhile;

                        // We're using numeric page navigation here.
                        the_posts_pagination(array(
                            'prev_text'        => esc_html__('<<', 'epic-blog'),
                            'next_text'        => esc_html__('>>', 'epic-blog'),
                        ));

                    else :
                    ?>
                        <p class="text-center"><?php esc_html_e('There are no results for your query.', 'epic-blog'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>