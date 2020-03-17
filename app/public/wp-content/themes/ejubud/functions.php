<?php

function scriptsLoader()
{
    wp_enqueue_script('App', get_template_directory_uri(). "/scripts-bundled/App-bundle.js", array( 'Vendor'), microtime(), true);
    wp_enqueue_script('Vendor', get_template_directory_uri(). "/scripts-bundled/Vendor-bundle.js", null, microtime(), true);
    wp_enqueue_style('googleFonts', "//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500 | Cinzel:700");
    wp_enqueue_style('mainStylesheet', get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "scriptsLoader");

function ejubudFeatures()
{
    //tytuł przeglądarki
    add_theme_support("title-tag");
    //thumbnail
    add_theme_support('post-thumbnails');
    //custom_logo
    add_theme_support('custom-logo', array(
        'height' => 98,
        'width'  => 150,
    ));
    //dodanie menu's
    register_nav_menu("footer", "Footer");
    register_nav_menu("header", "Header");
    //customowe rozmiary zdjęć, wordpress automatycznie przytnie każdy upload
    add_image_size("galeria-wieksze", 198, 302, true);
    add_image_size("galeria-mniejsze", 98, 150, true);
    add_image_size("galeria_gorna-duze", 743, 422, true);
    add_image_size("galeria_gorna-male", 179, 197, true);
    add_image_size("galeria_gorna-srednie", 364, 213, true);
    add_image_size("parallax-Small", 640, 654, true);
    add_image_size("parallax-Medium", 990, 464, true);
    add_image_size("parallax-Large", 1380, 647, true);
    add_image_size("parallax-XLarge", 1920, 900, true);
    add_image_size("parallax-Small-hdpi", 1280, 1308, true);
    add_image_size("parallax-Medium-hdpi", 1980, 928, true);
    add_image_size("parallax-Large-hdpi", 2760, 1294, true);
    add_image_size("parallax-XLarge-hdpi", 3840, 1800, true);
    add_image_size('admin-list-thumb-custom', 100, 100, true);
}

add_action("after_setup_theme", "ejubudFeatures");


// custom logo

function wpdev_filter_login_head()
{
    if (has_custom_logo()) :
 
        $image = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
<style type="text/css">
    .login h1 a {
        background-image: url(<?php echo esc_url($image[0]); ?>);
        -webkit-background-size:
            <?php echo absint($image[1])?>
            px;
        background-size:
            <?php echo absint($image[1]) ?>
            px;
        height:
            <?php echo absint($image[2]) ?>
            px;
        width:
            <?php echo absint($image[1]) ?>
            px;
    }
</style>
<?php  else: ?>
<style type="text/css">
    .login h1 a {
        background-image: url(<?php echo esc_url(get_theme_file_uri('/images/icons/logo_black.png')); ?>);
        -webkit-background-size: 150px 100px;
        background-size: 150px 100px;
        height: 100px;
        width: 150px;
    }
</style>
<?php
        endif;
}
 
add_action('login_head', 'wpdev_filter_login_head', 100);

// usuwa link do wordpressa z ekranu logowania

function new_wp_login_url()
{
    return esc_url(home_url());
}
add_filter('login_headerurl', 'new_wp_login_url');







// add featured thumbnail to admin post columns
function wpcs_add_thumbnail_columns($columns)
{
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Thumbnail',
        'title' => 'Title',
        'author' => 'Author',
        'categories' => 'Categories',
        'tags' => 'Tags',
        'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
        'date' => 'Date'
    );
    return $columns;
}

function wpcs_add_thumbnail_columns_data($column, $post_id)
{
    switch ($column) {
    case 'featured_thumb':
        echo '<a href="' . get_edit_post_link() . '">';
        echo the_post_thumbnail('admin-list-thumb-custom');
        echo '</a>';
        break;
    }
}

if (function_exists('add_theme_support')) {
    add_filter('manage_posts_columns', 'wpcs_add_thumbnail_columns');
    add_action('manage_posts_custom_column', 'wpcs_add_thumbnail_columns_data', 10, 2);
    add_filter('manage_pages_columns', 'wpcs_add_thumbnail_columns');
    add_action('manage_pages_custom_column', 'wpcs_add_thumbnail_columns_data', 10, 2);
}



/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<!-- ',
        'after_title'   => ' -->',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


