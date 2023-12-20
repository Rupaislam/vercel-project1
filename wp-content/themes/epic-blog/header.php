<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Epic Blog
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'epic-blog'); ?></a>
        <header id="masthead" class="site-header">
            <div class="container">
                <div class="row justify-content-between align-items-center" id="menu-toggle-area">
                    <div class="col-lg-3 col-md-6 col-8">
                        <div class="site-branding">
                            <?php if (has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-link">
                                    <p class="site-title mb-0"><?php bloginfo('title'); ?></p>
                                </a>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-4 menu-toggle-area">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="bbm-open fas fa-bars"></i><i class="bbm-close fas fa-times"></i></button>
                    </div>
                    <div class="col-lg-9 col-md-12 col-12 text-left">
                        <div id="site-header-menu" class="site-header-menu">
                            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'epic-blog'); ?>">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'epic_blog_main_menu',
                                        'menu_class' => 'primary-menu',
                                    )
                                );
                                ?>
                            </nav><!-- .main-navigation -->
                        </div><!-- .site-header-menu -->
                    </div>

        </header><!-- #masthead -->

        <main id="content" class="site-main site-content" role="main">