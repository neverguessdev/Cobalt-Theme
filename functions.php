<?php
// Theme setup
function cobalt_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cobalt-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'cobalt_theme_setup' );

// Register widget area
function cobalt_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'cobalt-theme' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cobalt_widgets_init' );

// Enqueue scripts and styles
function cobalt_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );

    // Theme stylesheet (load after Bootstrap)
    wp_enqueue_style( 'cobalt-style', get_stylesheet_uri(), array('bootstrap-css') );

    // Bootstrap JavaScript Bundle (includes Popper)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true );

    // Custom JavaScript files
    wp_enqueue_script( 'cobalt-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cobalt_enqueue_scripts' );
