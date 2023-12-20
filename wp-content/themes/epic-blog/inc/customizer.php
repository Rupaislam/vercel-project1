<?php

/**
 * Epic Blog Theme Customizer
 *
 * @package Epic Blog
 */

function epic_blog_customizer($wp_customize)
{

    // Copyright Section

    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'            => __('Copyright Settings', 'epic-blog'),
            'description'    => __('Copyright Section', 'epic-blog')
        )
    );

    // Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'                    => 'theme_mod',
            'default'                => '',
            'sanitize_callback'        => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label'            => __('Copyright', 'epic-blog'),
            'description'    => __('Please, add your copyright information here', 'epic-blog'),
            'section'        => 'sec_copyright',
            'type'            => 'text'
        )
    );
}
add_action('customize_register', 'epic_blog_customizer');
