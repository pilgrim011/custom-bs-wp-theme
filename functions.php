<?php
function my_script_enqueue() {
    
    wp_enqueue_script( "jquery_js", get_stylesheet_directory_uri() . "/dist/jquery/jquery-3.4.1.min.js" );
    wp_enqueue_script( "popper_js", get_stylesheet_directory_uri() . "/dist/umd/popper.min.js" );
    wp_enqueue_script( "bootstrap_js", get_stylesheet_directory_uri() . "/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_style( "bootstrap_css", get_stylesheet_directory_uri() . "/dist/css/bootstrap.min.css" );

    wp_enqueue_style( "custom_style", get_stylesheet_directory_uri() . "/style.css", array(), "1.0.0", "all");
    
}

add_action( "wp_enqueue_scripts", "my_script_enqueue" );

require_once("bs4navwalker.php");

register_nav_menu("top", "Top menu");
// News custom post type function
function custom_post_type() {

    register_post_type( "news",
    // Options
        array(
            "labels" => array(
                "name" => __( "News" ),
                "singular_name" => __( "News" )
            ),
        "hierarchical"        => false,
        "public"              => true,
        "show_ui"             => true,
        "show_in_menu"        => true,
        "show_in_nav_menus"   => true,
        "show_in_admin_bar"   => true,
        "menu_position"       => 5,
        "can_export"          => true,
        "has_archive"         => false,
        "exclude_from_search" => false,
        "publicly_queryable"  => true,
        "capability_type"     => "post",
        "show_in_rest" => true,
        "taxonomies" => array( "post_tag" ),
		"supports"      => array( "title", "editor", "thumbnail", "excerpt", "comments", "author", "thumbnails" ),

        )
    );
}

 // Registering Custom Post Type
    register_post_type( "news", $args );

	// Hook into the "init" action
add_action( "init", "custom_post_type", 0 );
add_theme_support( "post-thumbnails" );

    //Add sidebar
    add_action( "widgets_init", "my_register_sidebar" );
    function my_register_sidebar() {
    register_sidebar( array(
        "name" => "sidebar",
        "id" => "sidebar",
        "before_widget" => "<div>",
        "after_widget" => "</div>",
        "before_title" => '<h3 class="widget-title">',
        "after_title" => "</h3>"
        
      ) );
    }
    add_filter( "widget_posts_args", "widget_recent_post_cpt" );
    function widget_recent_post_cpt( $params )
    {
        $params["post_type"] = array( "post", "news");
        return $params;
    }
    function new_excerpt_more($more) {
        global $post;
        return "";
    }
    add_filter("excerpt_more", "new_excerpt_more");
   
    add_filter( "excerpt_length", function($length) {
        return 69;
    } );

    add_filter( "wp_generate_tag_cloud_data", function( $tag_data )
    {
        return array_map ( 
            function ( $item )
            {
                $item["class"] .= " btn btn-xs newline";
                return $item;
            }, 
            (array) $tag_data 
        );
    
    } );