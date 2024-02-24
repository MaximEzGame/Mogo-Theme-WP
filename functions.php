<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main-global', get_template_directory_uri() . '/assets/styles/main_global.css' );
    wp_enqueue_script('font-loader', get_template_directory_uri() . '/assets/js/font-loader.js', array(), '1.0.0', false);

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('all', get_template_directory_uri() . '/assets/js/all.js', array('jquery'), '1.0.0', true);
    
});

add_action( 'init', 'team_register_post_types' );

function team_register_post_types(){

	register_post_type( 'team', [
		'labels' => [
			'name'               => 'Team_members', 
			'singular_name'      => 'Team_member', 
			'add_new'            => 'Add New Team Member', 
			'add_new_item'       => 'Adding new team member', 
			'edit_item'          => 'Edit', 
			'new_item'           => 'New', 
			'view_item'          => 'View', 
			'search_items'       => 'Search', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash can', 
			'menu_name'          => 'Team', 
		],
		'description'            => '',
		'public'                 => true,
		'menu_position'       => 5,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], 
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

add_action( 'init', 'testimonials_register_post_types' );

function testimonials_register_post_types(){

	register_post_type( 'testimonials', [
		'labels' => [
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonial', 
			'add_new'            => 'Add New Testimonial',
			'add_new_item'       => 'Adding new testimonial',
			'edit_item'          => 'Edit',
			'new_item'           => 'New',
			'view_item'          => 'View',
			'search_items'       => 'Search',
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash can', 
			'menu_name'          => 'Testimonials',
		],
		'description'            => '',
		'public'                 => true,
		'menu_position'       => 6,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], 
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}




add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

?>