<?php
/**
 * WP Default Custom Post Types Sample
 *
 * @package WP_Default
 */

/**
 * Create testimonial post type
 */
function scwd_create_product_post_type() {

	$labels = array(
		'name'					=> __( 'Products', 'scwd' ),
		'singular_name'			=> __( 'Product', 'scwd' ),
		'add_new'				=> __( 'New Product', 'scwd' ),
		'add_new_item'			=> __( 'Add New Product', 'scwd' ),
		'edit_item'				=> __( 'Edit Product', 'scwd' ),
		'new_item'				=> __( 'New Product', 'scwd' ),
		'view_item'				=> __( 'View Product', 'scwd' ),
		'search_items'			=> __( 'Search Products', 'scwd' ),
		'not_found'				=>  __( 'No Products Found', 'scwd' ),
		'not_found_in_trash'	=> __( 'No Products found in Trash', 'scwd' ),
	);
	$args = array(
		'labels'		=> $labels,
		'has_archive'	=> true,
		'public'		=> true,
		'hierarchical'	=> false,
		'rewrite'		=> array( 'slug' => 'product' ),
		'supports'		=> array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'taxonomies'	=> array( 'post_tag' ),
	);
	register_post_type( 'scwd_product', $args );

}
add_action( 'init', 'scwd_create_product_post_type' );

/**
 * Create product post type taxonomy
 */
function scwd_register_product_taxonomy() {

	$labels = array(
		'name'				=> __( 'Categories', 'scwd' ),
		'singular_name'		=> __( 'Category', 'scwd' ),
		'search_items'		=> __( 'Search Categories', 'scwd' ),
		'all_items'			=> __( 'All Categories', 'scwd' ),
		'edit_item'			=> __( 'Edit Category', 'scwd' ),
		'update_item'		=> __( 'Update Category', 'scwd' ),
		'add_new_item'		=> __( 'Add New Category', 'scwd' ),
		'new_item_name'		=> __( 'New Category Name', 'scwd' ),
		'menu_name'			=> __( 'Categories', 'scwd' ),
	);

	$args = array(
		'labels'			=> $labels,
		'hierarchical'		=> true,
		'sort'				=> true,
		'args'				=> array( 'orderby' => 'term_order' ),
		'rewrite'			=> array( 'slug'    => 'product-category' ),
		'show_admin_column'	=> true
	);

	register_taxonomy( 'scwd_product_cat', array( 'scwd_product' ), $args);

}
add_action( 'init', 'scwd_register_product_taxonomy' );



