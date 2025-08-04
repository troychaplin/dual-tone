<?php
add_action( 'init', 'themeslug_enqueue_block_styles' );

function themeslug_enqueue_block_styles() {
	wp_enqueue_block_style( 'core/media-text', array(
		'handle' => 'themeslug-block-core-media-text',
		'src'    => get_theme_file_uri( 'assets/styles/core-media-text.css' ),
		'path'   => get_theme_file_path( 'assets/styles/core-media-text.css' )
	) );
}