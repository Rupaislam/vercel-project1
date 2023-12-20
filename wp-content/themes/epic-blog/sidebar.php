<?php

/**
 * The template for the sidebar containing the main widget area
 *
 * @package Epic Blog
 */
?>

<?php if (is_active_sidebar('epic-blog-sidebar-1')) : ?>
    <aside class="col-lg-3 col-md-4 col-12 h-100 mt-5 mt-md-0">
        <?php dynamic_sidebar('epic-blog-sidebar-1'); ?>
    </aside>
<?php endif;
