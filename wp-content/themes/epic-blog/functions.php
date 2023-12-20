<?php

/**
 * Epic Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Epic Blog
 */

/**
 * Enqueue files for the TGM PLugin Activation library.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugin.php';
/**
 * Theme Demo Importer
 */
require_once get_template_directory() . '/demo-data/ocdi.php';
/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 */
function epic_blog_scripts()
{

    // Webfonts Loader
    require_once get_theme_file_path('inc/wptt-webfont-loader.php');

    //Bootstrap CSS file
    wp_enqueue_style('epic-blog-bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.2.3', 'all');

    // Fontawesome V5 stylesheet.
    wp_enqueue_style('fontawesome-5', get_template_directory_uri() . '/inc/all.min.css', [],  'all');

    // Theme's main stylesheet
    wp_enqueue_style('epic-blog-style', get_stylesheet_uri(), array(), '2.1', 'all');

    // Theme's Font style
    wp_enqueue_style('epic-blog-poppins-font', wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap'), array(), '2.1');

    // Theme's main javascript
    wp_enqueue_script('epic-blog-navigation', get_template_directory_uri() . '/inc/navigation.js', array('jquery'), '2.1', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'epic_blog_scripts');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function epic_blog_config()
{

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'epic_blog_main_menu'     => esc_html__('Epic Blog Main Menu', 'epic-blog'),
            'epic_blog_footer_menu' => esc_html__('Epic Blog Footer Menu', 'epic-blog'),
        )
    );

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Epic Blog, use a find and replace
     * to change 'epic-blog' to the name of your theme in all the template files.
     */
    $textdomain = 'epic-blog';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', array(
        'height'         => 85,
        'width'            => 200,
        'flex_height'    => true,
        'flex_width'    => true,
    ));

    add_theme_support('post-thumbnails');
    add_image_size('epic-blog-image', 960, 640, array('center', 'center'));

    if (!isset($content_width)) {
        $content_width = 600;
    }

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'epic_blog_config', 0);


/**
 * Adds custom Excerpt Length
 */
function epic_blog_excerpt_length($length)
{
    if (!is_admin()) {
        return 12;
    }
    return $length;
}

add_filter('excerpt_length', 'epic_blog_excerpt_length');


/**
 * Adds custom dots in excerpt
 */
function epic_blog_excerpt_more($more)
{
    if (!is_admin()) {
        return '...';
    }
    return $more;
}

add_filter('excerpt_more', 'epic_blog_excerpt_more');


/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action('widgets_init', 'epic_blog_sidebars');
function epic_blog_sidebars()
{
    register_sidebar(array(
        'name'            => esc_html__('Epic Blog Main Sidebar', 'epic-blog'),
        'id'            => 'epic-blog-sidebar-1',
        'description'    => esc_html__('Drag and drop your widgets here', 'epic-blog'),
        'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ));
    register_sidebar(array(
        'name'            => esc_html__('Footer Widget 1', 'epic-blog'),
        'id'            => 'epic-blog-sidebar-footer1',
        'description'    => esc_html__('Drag and drop your widgets here', 'epic-blog'),
        'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ));
    register_sidebar(array(
        'name'            => esc_html__('Footer Widget 2', 'epic-blog'),
        'id'            => 'epic-blog-sidebar-footer2',
        'description'    => esc_html__('Drag and drop your widgets here', 'epic-blog'),
        'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ));
    register_sidebar(array(
        'name'            => esc_html__('Footer Widget 3', 'epic-blog'),
        'id'            => 'epic-blog-sidebar-footer3',
        'description'    => esc_html__('Drag and drop your widgets here', 'epic-blog'),
        'before_widget'    => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'    => '</div>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
    ));
}


/**
 * Adds custom classes to the array of body classes.
 */
function epic_blog_body_classes($classes)
{

    // Adds a class of no-sidebar to sites without active sidebar.
    if (!is_active_sidebar('epic-blog-sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    if (!is_active_sidebar('epic-blog-sidebar-footer1') && !is_active_sidebar('epic-blog-sidebar-footer2') && !is_active_sidebar('epic-blog-sidebar-footer3')) {
        $classes[] = 'no-sidebar-footer';
    }

    return $classes;
}
add_filter('body_class', 'epic_blog_body_classes');
