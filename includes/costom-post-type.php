<?php

function theblog_custom_post(){

    $blogPost_label = array (
        'name'          => __('Blog Post', 'textdomain'),
        'singular_name' => __('Blog Post', 'textdomain'),
        'add_new'       => __('Add Blog Post', 'textdomain'),
        'add_new_item'  => __('Add New Blog Post', 'textdomain'),
        'edit_item'     => __('Edit Blog Post', 'textdomain'),
        'all_items'     => __('Blog Post', 'textdomain'),
    );
    
    $blogPost_args = array (
        'labels'            => $blogPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array ('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt'),
    );
    
        register_post_type('blogPost', $blogPost_args);
    }
    
    add_action('init', 'theblog_custom_post');




    