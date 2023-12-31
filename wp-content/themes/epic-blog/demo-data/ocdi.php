<?php

function epic_blog_import_files()
{
    return array(
        array(
            'import_file_name'             => 'Epic Blog',
            'import_file_url'               => 'https://www.wpalphabets.com/demo-data-files/demo-content.xml',
            'import_widget_file_url'        => 'https://www.wpalphabets.com/demo-data-files/widgets.wie',
            'import_customizer_file_url'    => 'https://www.wpalphabets.com/demo-data-files/customizer.dat',
        ),
    );
}
add_filter('pt-ocdi/import_files', 'epic_blog_import_files');

function epic_blog_after_import_setup()
{
    // Assign menus to their locations.
    $main_menu = get_term_by('name', 'Main menu', 'nav_menu');
    $footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');

    set_theme_mod(
        'nav_menu_locations',
        array(
            'epic_blog_main_menu' => $main_menu->term_id,
            'epic_blog_footer_menu' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title('Home');
    $blog_page_id  = get_page_by_title('Blog');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);
}
add_action('pt-ocdi/after_import', 'epic_blog_after_import_setup');
