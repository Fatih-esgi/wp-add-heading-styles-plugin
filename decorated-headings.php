 <?php
/**
 * Plugin Name:       headings décoration
 * Description:       decorer les titres du site
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Fatih Esgi
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       headings-decorations
**/
function rich_register_block_styles() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
		'core/heading',
			array(
			'name' => 'decorated',
			'label' => __( 'Décoré', 'rich' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'rich_register_block_styles' );


//add style to admin
function enqueue_headings_decoration_style() {
	$plugin_url = plugin_dir_url( __FILE__ );	
	wp_enqueue_style( 'style',  $plugin_url . "./styles.css");
}
add_action( 'admin_print_styles', 'enqueue_headings_decoration_style' );


//add style to front
function enqueue_headings_decoration_style_front() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'style',  $plugin_url . "./styles.css");
}
add_action( 'wp_enqueue_scripts', 'enqueue_headings_decoration_style_front' );