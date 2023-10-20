<?php

function createPostType() {
  
    register_post_type( 'faqs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'FAQs', 'amakwa' ),
                'singular_name' => __( 'FAQ', 'amakwa' )
            ),
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'faqs'),
            'show_in_rest'        => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           => 'dashicons-book',
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'createPostType' );
