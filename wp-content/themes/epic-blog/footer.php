<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #page div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Epic Blog
 */

?>
</main><!-- #content -->
<footer>
    <section class="footer-widgets-area">
        <div class="container">
            <div class="row">
                <?php if (is_active_sidebar('epic-blog-sidebar-footer1')) : ?>
                    <div class="col-md-4 col-12">
                        <?php dynamic_sidebar('epic-blog-sidebar-footer1'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('epic-blog-sidebar-footer2')) : ?>
                    <div class="col-md-4 col-12">
                        <?php dynamic_sidebar('epic-blog-sidebar-footer2'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('epic-blog-sidebar-footer3')) : ?>
                    <div class="col-md-4 col-12">
                        <?php dynamic_sidebar('epic-blog-sidebar-footer3'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">
                    <p><?php echo esc_html(get_theme_mod('set_copyright', __('Copyright 2023 - All Rights Reserved', 'epic-blog'))); ?></p>
                </div>
                <nav class="footer-menu col-12 col-md-6 text-left text-md-end">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'     => 'epic_blog_footer_menu',
                            'depth'                => 1,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>