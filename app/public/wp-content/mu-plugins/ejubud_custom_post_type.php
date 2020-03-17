<?php
add_action('init', 'ejubud_galerry_post_type');
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function ejubud_galerry_post_type()
{
    $labels = array(
        'name'               => _x('Galeria', 'post type general name', 'your-plugin-textdomain'),
        'singular_name'      => _x('Galeria', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name'          => _x('Galeria', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar'     => _x('Galeria', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new'            => _x('Dodaj galerie', 'book', 'your-plugin-textdomain'),
        'add_new_item'       => __('Dodaj galerie', 'your-plugin-textdomain'),
        'new_item'           => __('Nowa galeria', 'your-plugin-textdomain'),
        'edit_item'          => __('Edytuj galerie', 'your-plugin-textdomain'),
        'view_item'          => __('Zobacz galerie', 'your-plugin-textdomain'),
        'all_items'          => __('Wszystkie galerie', 'your-plugin-textdomain'),
        'search_items'       => __('Szukaj galerii', 'your-plugin-textdomain'),
        'parent_item_colon'  => __('Galeria rodzic:', 'your-plugin-textdomain'),
        'not_found'          => __('Nie znaleziono galerii.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('Nie znaleziono galerii w koszu.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'your-plugin-textdomain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galeria' ),
        'capability_type'    => 'gallery',
        "map_meta_cap"		 => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        "menu_icon"          => "dashicons-images-alt2",
        'supports'           => array( 'title', 'thumbnail' )
    );

    register_post_type('gallery', $args);
}

// Galeria górna

add_action('init', 'ejubud_galerry_upper_post_type');
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function ejubud_galerry_upper_post_type()
{
    $labels = array(
        'name'               => _x('Galeria górna', 'post type general name', 'your-plugin-textdomain'),
        'singular_name'      => _x('Galeria górna', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name'          => _x('Galeria górna', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar'     => _x('Galeria górna', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new'            => _x('Dodaj galerie', 'book', 'your-plugin-textdomain'),
        'add_new_item'       => __('Dodaj galerie', 'your-plugin-textdomain'),
        'new_item'           => __('Nowa galeria', 'your-plugin-textdomain'),
        'edit_item'          => __('Edytuj galerie', 'your-plugin-textdomain'),
        'view_item'          => __('Zobacz galerie', 'your-plugin-textdomain'),
        'all_items'          => __('Wszystkie galerie', 'your-plugin-textdomain'),
        'search_items'       => __('Szukaj galerii', 'your-plugin-textdomain'),
        'parent_item_colon'  => __('Galeria górna rodzic:', 'your-plugin-textdomain'),
        'not_found'          => __('Nie znaleziono galerii.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('Nie znaleziono galerii w koszu.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'your-plugin-textdomain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galeria_gorna' ),
        'capability_type'    => 'gallery',
        "map_meta_cap"		 => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        "menu_icon"          => "dashicons-images-alt2",
        'supports'           => array( 'title', 'thumbnail' )
    );

    register_post_type('gallery-upper', $args);
}


// Parralax

add_action('init', 'parallax');
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function parallax()
{
    $labels = array(
        'name'               => _x('Parallax', 'post type general name', 'your-plugin-textdomain'),
        'singular_name'      => _x('Parallax', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name'          => _x('Parallax', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar'     => _x('Parallax', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new'            => _x('Dodaj parallax', 'book', 'your-plugin-textdomain'),
        'add_new_item'       => __('Dodaj parallax', 'your-plugin-textdomain'),
        'new_item'           => __('Nowy parallax', 'your-plugin-textdomain'),
        'edit_item'          => __('Edytuj parallax', 'your-plugin-textdomain'),
        'view_item'          => __('Zobacz parallax', 'your-plugin-textdomain'),
        'all_items'          => __('Wszystkie parallax', 'your-plugin-textdomain'),
        'search_items'       => __('Szukaj parallax', 'your-plugin-textdomain'),
        'parent_item_colon'  => __('Parallax rodzic:', 'your-plugin-textdomain'),
        'not_found'          => __('Nie znaleziono parallax.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('Nie znaleziono parallax w koszu.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'your-plugin-textdomain'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galeria_gorna' ),
        'capability_type'    => 'gallery',
        "map_meta_cap"		 => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        "menu_icon"          => "dashicons-images-alt2",
        'supports'           => array( 'title', 'thumbnail' )
    );

    register_post_type('parallax', $args);
}