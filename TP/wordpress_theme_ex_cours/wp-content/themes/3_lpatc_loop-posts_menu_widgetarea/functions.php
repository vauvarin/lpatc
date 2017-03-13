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
