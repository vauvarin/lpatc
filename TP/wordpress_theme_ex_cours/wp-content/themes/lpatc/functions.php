<?php
/**
 * functions.php
 *
 *
 * @package WordPress
 * @subpackage lpatc
 * @since lpatc 1.0
 */



	/* Modification de la requête principale sur la page blog ------------------------------------------------------------ */

	function lpatc_alter_query( $query ) {

	      if ( $query->is_main_query() && ! is_admin() && is_home() ) {       
	        	$query->set( 'posts_per_page' , 2 );
	      } 

	   }

	add_action( 'pre_get_posts' , 'lpatc_alter_query' );







	/* Register et Enqueue styles ---------------------------------------------------------------------------------------- */

	// Styles css : register
	function lpatc_register_style() {
		wp_register_style( 
							'lpatc_style_css', 
							get_template_directory_uri() . '/style.css', 
							'1.0', 
							'',
							'all' );
		wp_register_style( 
							'lpatc_css', 
							get_template_directory_uri() . '/css/lpatc-style.css', 
							'1.0', 
							'',
							'all' );
	}

	// Styles css : enqueue
	function lpatc_enqueue_style() {
		wp_enqueue_style( 'lpatc_style_css' );
		if ( is_page_template( 'template-lpatc.php' ) ) {
			wp_enqueue_style( 'lpatc_css' );
		}
	}

	// FRONT
	add_action( 'wp_enqueue_scripts' , 'lpatc_register_style' );
	add_action( 'wp_enqueue_scripts' , 'lpatc_enqueue_style' );

	// BACK
	/*
	add_action( 'admin_enqueue_scripts' , 'lpatc_register_style' );
	add_action( 'admin_enqueue_scripts' , 'lpatc_enqueue_style' );
	*/




	/* Register et Enqueue scripts */

	// Script js : register
	function lpatc_register_script() {
		wp_register_script( 
							'lpatc_js', 
							get_template_directory_uri() . '/js/lpatc-script.js', 
							'1.0', 
							'jquery',
							false );
	}

	// Script js : enqueue
	function lpatc_enqueue_script() {
		if ( is_page_template( 'template-lpatc.php' ) ) {
			wp_enqueue_script( 'lpatc_js' );
		}
	}

	// FRONT
	add_action( 'wp_enqueue_scripts' , 'lpatc_register_script' );
	add_action( 'wp_enqueue_scripts' , 'lpatc_enqueue_script' );

	// BACK
	/*
	add_action( 'admin_enqueue_scripts' , 'lpatc_register_script' );
	add_action( 'admin_enqueue_scripts' , 'lpatc_enqueue_script' );
	*/




	/* Hook ----------------------------------------------------------------------------------------------------------------------- */

	// Action
	function lpatc_display_hello() {
		echo 'Hello dude!';
	}

	add_action( 'wp_head' , 'lpatc_display_hello' , 10 );


	// Filtre
	function lpatc_title_uppercase( $title ) {
		$title =  strtoupper( $title ); // Converti le titre en majuscules
		return $title;
	}

	add_filter( 'the_title' , 'lpatc_title_uppercase' , 10 , 1 );



	function lpatc_toto_uppercase( $toto ) {
		$toto =  strtoupper( $toto ); // Converti en majuscules
		return $toto;
	}

	add_filter( 'lpatc_toto' , 'lpatc_toto_uppercase' , 10 , 1 );




	/* Menus ------------------------------------------------------------------------------------------------------------------------ */

	function lpatc_register_menu() {
		$args_register_menu = array(
								'menu_principal' 	=> 'Menu principal', // clé (= location) => valeur (= description)
								'menu_footer'		=> 'Menu footer'
								); 

		register_nav_menus( $args_register_menu );
		// Si un seul menu à enregistrer
		// register_nav_menu(  'menu_principal' , 'Menu principal' ); 
	}

	add_action( 'init', 'lpatc_register_menu' );





	/* Custom Post Type -------------------------------------------------------------------------------------------------------------- */

	function lpatc_register_cpt_book() {

		$labels = array(
						'name'               		=>  'Books',
						'singular_name'      		=>  'Book',
						'add_new'            		=>  'Add New', 'book' ,
						'add_new_item'      		=>  'Add New Book' ,
						'edit_item'         		=>  'Edit Book' ,
						'new_item'           		=>  'New Book' ,
						'all_items'          		=>  'All Books' ,
						'view_item'          		=>  'View Book' ,
						'search_items'       		=>  'Search Books' ,
						'not_found'          		=>  'No books found' ,
						'not_found_in_trash'		=>  'No movies found in the Trash' , 
						'parent_item_colon'  		=> 	'',
						'menu_name'          		=> 	'Books'
		);

		$cpt = 'book'; // Nom du CPT : minuscule, pas d'espace
		$args = array(
						'labels' 				=> $labels,
						'description'   		=> 'Japan movies',
						'public'        		=> true,
						'menu_position' 		=> 5,
						'supports'      		=> array( 
															'title', 
															'editor',  
															'excerpt', 
															'comments' 
												),
						'has_archive'   		=> true,
		);

		
		register_post_type(  $cpt ,  $args );	
		
	}

	add_action( 'init' , 'lpatc_register_cpt_book' );





?>