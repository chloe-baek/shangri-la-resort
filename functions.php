<?php

add_theme_support('html5', array('comment-list','comment-form','search-form','gallery','caption','style','script'));
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function linked_assets(){
    wp_enqueue_style('main', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'linked_assets');

function my_menus(){
    register_nav_menu('header_menu', 'Main Menu (Header)' );
}
add_action('after_setup_theme','my_menus');

function widgets(){
    register_sidebar(
        array(
            'name' => 'Home Sidebar',
            'id' => 'home-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Month Sidebar',
            'id' => 'month-sidebar',
            'before_widget' => '<div class="month-list">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
        register_sidebar(
            array(
                'name' => 'Category Sidebar',
                'id' => 'category-sidebar',
                'before_widget' => '<div class="category-list">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            )
    );
        register_sidebar(
            array(
                'name' => 'Footer Sidebar',
                'id' => 'footer-sidebar',
                'before_widget' => '<div class="socialIcons-list">',
                'after_widget' => '</div>',
                // 'before_title' => '<h3>',
                // 'after_title' => '</h3>'
            )
    );
}
add_action('widgets_init','widgets');

// function wpb_autolink_featured_images($html, $post_id, $post_image_id){
//     $html = '<a href="'.get_permalink($post_id).'" title ="'.esc_attr(get_the_title($post_id)).'">'.$html.'</a>';
//     return $html;
// }

// add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
?>