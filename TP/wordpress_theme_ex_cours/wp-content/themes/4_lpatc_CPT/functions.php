<?php





// Register Navigation Menus
function lpatc_navigation_menu() {

    $locations = array(
        'menu_principal' => __( 'Menu principal', 'text_domain' ),
    );

    register_nav_menus( $locations );

}
add_action( 'init', 'lpatc_navigation_menu' );







// Register Sidebars
function lpatc_right_sidebar() {

	$args = array(
		'id'            => 'right-sidebar',
		'name'          => __( 'Right Sidebar', 'text_domain' ),
		'description'   => __( 'Appears in the right sidebar of the site.', 'text_domain' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);

	register_sidebar( $args );

}
add_action( 'widgets_init', 'lpatc_right_sidebar' );








// Register CPT "Book"// Register Custom Post Type
function lpatc_register_cpt_movie() {

	$labels = array(
		'name'                  => _x( 'Movies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Movies', 'text_domain' ),
		'name_admin_bar'        => __( 'Movie', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Movie', 'text_domain' ),
		'description'           => __( 'Movie', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Movie', $args );

}
add_action( 'init', 'lpatc_register_cpt_movie', 0 );