<?php

/**
 * @wordpress-plugin
 * Plugin Name: Gutenberg Blocks
 * Author: Future Northants
 * Author URI: https://github.com/FutureNorthants
 * Description: A collection of Gutenberg Blocks for the Future Northants WordPress starter theme
 * Version: 0.1.0
 * License: GPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: future-northants-blocks
 */

function create_block_gutenberg_blocks_block_init() {
	register_block_type( plugin_dir_path( __FILE__ ) . 'blocks/section-link/' );

	register_block_type( plugin_dir_path( __FILE__ ) . 'blocks/section-links/' );
}

add_action( 'init', 'create_block_gutenberg_blocks_block_init' );



