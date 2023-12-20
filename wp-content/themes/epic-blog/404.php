<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Epic Blog
 */

get_header();
?>
<div class="content-area text-center">
    <div class="container">
        <div class="page-not-found">
            <header>
                <h1><?php esc_html_e('Page not found', 'epic-blog'); ?></h1>
                <p><?php esc_html_e('Unfortunately, the page you tried to reach does not exist on this site', 'epic-blog'); ?></p>
            </header>
            <?php
            the_widget(
                'WP_Widget_Recent_Posts',
                array(
                    'title'        => esc_html__('Take a Look at Our Latest Blogs', 'epic-blog'),
                    'number'    => 5,
                )
            );
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>