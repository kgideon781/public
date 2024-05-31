<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function create_post_type() {
    register_post_type('discussion',
        array(
            'labels' => array(
                'name' => __('Discussions'),
                'singular_name' => __('Discussion')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'discussions'),
            'supports' => array('title', 'editor', 'comments')
        )
    );
    register_post_type('resource',
        array(
            'labels' => array(
                'name' => __('Resources'),
                'singular_name' => __('Resource')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor')
        )
    );
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields')
        )
    );
}
add_action('init', 'create_post_type');

function create_taxonomies() {
    register_taxonomy('topic', 'discussion', array(
        'labels' => array(
            'name' => 'Topics',
            'singular_name' => 'Topic'
        ),
        'hierarchical' => true
    ));
    register_taxonomy('resource-type', 'resource', array(
        'labels' => array(
            'name' => 'Resource Types',
            'singular_name' => 'Resource Type'
        ),
        'hierarchical' => true
    ));
}
add_action('init', 'create_taxonomies');
function add_custom_roles() {
    add_role('community_member', __('Community Member'), array(
        'read' => true,
        'edit_posts' => true,
        'delete_posts' => false,
    ));
}
add_action('init', 'add_custom_roles');

function custom_widget() {
    register_sidebar(array(
        'name' => 'Custom Widget Area',
        'id' => 'custom-widget',
        'before_widget' => '<div class="widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'custom_widget');
