<?php
/*
Plugin Name: Post Authors
Description: WordPress assumes only 1 author per post, and that all authors are also users with logins. Neither of these assumptions is helpful when trying to edit a blog that presents works by other authors, who may sometimes be multiple. A solution is to create a custom taxonomy as we do below. This also makes the custom taxonomy visible in the REST API, 
*/
/* Start Adding Functions Below this Line */

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Post Authors', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Post Author', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Post Authors', 'text_domain' ),
		'all_items'                  => __( 'All Post Authors', 'text_domain' ),
		'parent_item'                => __( 'Parent Post Author', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Post Author:', 'text_domain' ),
		'new_item_name'              => __( 'New Post Author Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Post Author', 'text_domain' ),
		'edit_item'                  => __( 'Edit Post Author', 'text_domain' ),
		'update_item'                => __( 'Update Post Author', 'text_domain' ),
		'view_item'                  => __( 'View Post Author', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate post authors with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove post authors', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Post Authors', 'text_domain' ),
		'search_items'               => __( 'Search Post Authors', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No post authors', 'text_domain' ),
		'items_list'                 => __( 'Post Authors list', 'text_domain' ),
		'items_list_navigation'      => __( 'Post Authors list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => true
	);
	register_taxonomy( 'post_authors', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
  
/* Stop Adding Functions Below this Line */
?>
