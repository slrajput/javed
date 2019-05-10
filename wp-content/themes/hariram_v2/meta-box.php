<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'xapad_meta_';
	// 1st meta box
	$meta_boxes[] = array(
		'id'         => 'slider_check',
		'title'      => esc_html__( 'Slider Fields', 'xapad_meta_' ),
		'post_types' => array( 'post', 'page' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
		
			array(
				'name'    => esc_html__( 'Use as a slider image', 'xapad_meta_' ),
				'id'      => "{$prefix}slider_gal",
				'type'    => 'radio',
				
				'options' => array(
					'yes' => esc_html__( 'Yes', 'xapad_meta_' ),
					'no' => esc_html__( 'No', 'xapad_meta_' ),
				),
				'std'        => 'no',
			),
			
		),
		
	);
	
	return $meta_boxes;
}

?>