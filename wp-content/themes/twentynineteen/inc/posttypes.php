<?php








add_action('init', 'ps_register_posttypes');
function ps_register_posttypes()
{
	/**
	 * mag_media
	 *
	 *
	 * Register post type
	 * Add custom taxonomy
	 */
	$args = array(
		'label' => 'Video',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('with_front' => false, 'slug' => 'video'),
		'capability_type' => 'page',
		//'taxonomies' => array('category'),
		'has_archive' => 'video',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments', 'page-attributes')
	);
	register_post_type('video',$args);

	// Add new taxonomy, make it hierarchical (like categories)
	register_taxonomy('video_cat',array('video'), array(
		'hierarchical' => true,
		'label' => 'Media category',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'playlist' ),
	));


}