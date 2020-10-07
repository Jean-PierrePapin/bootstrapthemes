<?php 

/**
 * Function for images showcase
 */
function images_showcase_init() {
    $labels = array(
        'name'                  => _x( 'showcase', 'Post type general name', 'showcase' ),
        'singular_name'         => _x( 'showcase', 'Post type singular name', 'showcase' ),
        'menu_name'             => _x( 'showcase', 'Admin Menu text', 'showcase' ),
        'name_admin_bar'        => _x( 'showcase', 'Add New on Toolbar', 'showcase' ),
        'add_new'               => __( 'Add New', 'showcase' ),
        'add_new_item'          => __( 'Add New showcase', 'showcase' ),
        'new_item'              => __( 'New showcase', 'showcase' ),
        'edit_item'             => __( 'Edit showcase', 'showcase' ),
        'view_item'             => __( 'View showcase', 'showcase' ),
        'all_items'             => __( 'All showcase', 'showcase' ),
        'search_items'          => __( 'Search showcase', 'showcase' ),
        'parent_item_colon'     => __( 'Parent showcase:', 'showcase' ),
        'not_found'             => __( 'No showcase found.', 'showcase' ),
        'not_found_in_trash'    => __( 'No showcases found in Trash.', 'showcase' ),
        'featured_image'        => _x( 'showcase Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'showcase' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'showcase' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'showcase' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'showcase' ),
        'archives'              => _x( 'showcase archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'showcase' ),
        'insert_into_item'      => _x( 'Insert into showcase', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4',  'showcase' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this showcases', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'showcase' ),
        'filter_items_list'     => _x( 'Filter showcase list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'showcase' ),
        'items_list_navigation' => _x( 'showcase list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'showcase' ),
        'items_list'            => _x( 'showcase list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'showcase' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for showcase',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'showcase' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'showcase', $args );

    register_taxonomy( 'origin', 'showcase', [
        'label'                 =>  __( 'Origin', 'showcase' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);

}

/**
 * Function for testimonials
 */
function testimonials_init() {
    $labels = array(
        'name'                  => _x( 'testimonial', 'Post type general name', 'testimonial' ),
        'singular_name'         => _x( 'testimonial', 'Post type singular name', 'testimonial' ),
        'menu_name'             => _x( 'testimonial', 'Admin Menu text', 'testimonial' ),
        'name_admin_bar'        => _x( 'testimonial', 'Add New on Toolbar', 'testimonial' ),
        'add_new'               => __( 'Add New', 'testimonial' ),
        'add_new_item'          => __( 'Add New testimonial', 'testimonial' ),
        'new_item'              => __( 'New testimonial', 'testimonial' ),
        'edit_item'             => __( 'Edit testimonial', 'testimonial' ),
        'view_item'             => __( 'View testimonial', 'testimonial' ),
        'all_items'             => __( 'All testimonial', 'testimonial' ),
        'search_items'          => __( 'Search testimonial', 'testimonial' ),
        'parent_item_colon'     => __( 'Parent testimonial:', 'testimonial' ),
        'not_found'             => __( 'No testimonial found.', 'testimonial' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'testimonial' ),
        'featured_image'        => _x( 'testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'archives'              => _x( 'testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'testimonial' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'testimonial' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonials', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'testimonial' ),
        'filter_items_list'     => _x( 'Filter testimonial list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'testimonial' ),
        'items_list_navigation' => _x( 'testimonial list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'testimonial' ),
        'items_list'            => _x( 'testimonial list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'testimonial' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for testimonial',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'testimonial' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'testimonial', $args );

    register_taxonomy( 'origin', 'testimonial', [
        'label'                 =>  __( 'Origin', 'testimonial' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

