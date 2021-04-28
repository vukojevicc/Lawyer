<?php

// INCLUS FILES

function lawyer_style() {

    wp_enqueue_style('Owl Carousel', get_template_directory_uri() . '/frontend/css/owl.carousel.css', array(), 'v2.3.4');
    wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri() . '/frontend/css/owl.theme.default.css', array('Owl Carousel'), 'v2.3.4');
    wp_enqueue_style('Theme', get_template_directory_uri() . '/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'lawyer_style');

function lawyer_scripts() {

    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jQuery'), '4.3.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '5', true);
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri() . '/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true);
    wp_enqueue_script('main js', get_template_directory_uri() . '/frontend/js/main.js', array('jQuery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lawyer_scripts');

function lawyer_support() {
    // Title tag support
    add_theme_support('title-tag');

    // Custom Logo support
    add_theme_support('custom-logo', array(
        'height' => 28,
        'width' => 88,
        'flex-width' => false,
        'flex-height' => false
    ));

    //Feature Image support
    add_theme_support('post-thumbnails');


    // AD image size

    add_image_size('news-list', 463, 307, true);
    add_image_size('team-list', 273, 355, true);
    add_image_size('single_team', 558, 725, true);
}

add_action('after_setup_theme', 'lawyer_support');

function lawyer_menus() {

    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'social' => 'Social Menu'
    ));
}

add_action('init', 'lawyer_menus');

function lawyer_create_post_type() {

    register_post_type('our_services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'plural_name' => 'Services',
            'all_items' => 'All Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service Item',
            'new_item' => 'New Service',
            'edit' => 'Edit',
            'edit_item' => 'Edit Service Item',
            'view' => 'View Service',
            'view_item' => 'View Service Item',
            'featured_image' => 'Featured image for this Service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,      
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'lawyer_create_post_type');

function lawyer_init_sidebar() {
    register_sidebar(array(
        'id' => 'sidebar_1',
        'name' => __('Primary Sidebar'),
        'description' => __('Page Sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title mb-5">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer_1',
        'name' => __('Footer Sidebar 1'),
        'description' => __('Footer Sidebar 1.'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title mb-5">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'id' => 'footer_2',
        'name' => __('Footer Sidebar 2'),
        'description' => __('Footer Sidebar 2.'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title mb-5">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'id' => 'footer_3',
        'name' => __('Footer Sidebar 3'),
        'description' => __('Footer Sidebar 3.'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title mb-5">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'lawyer_init_sidebar');


require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/widgets.php';
