<?php
/*
*Plugin Name: My Gutenerg Blocks
*Description: Mi plugin con bloques
*Version: 1.0
*Author: Angel Melendez
*/

if (!defined('ABSPATH')) {
    exit;
}

function my_gutenberg_blocks_register_blocks(){
    $asset_file = include(plugin_dir_path( __FILE__)."/build/index.asset.php");

    //Registrar scripts el editor del bloque
    wp_register_script(
        "my-blocks-editor",
        plugin_dir_url(__FILE__) .'build/index.js',
        $asset_file['dependencies'],
        $asset_file['version']
    );

    //Registrar los estilos el editor del bloque
    wp_enqueue_style(
        "my-blocks-editor-style",
        plugins_url("build/editor.css", __FILE__),
        array(),
        $asset_file['version']
    );

    //Registrar los estilos del frontend
    wp_register_style(
        "my-blocks-style",
        plugins_url("build/editor.css", __FILE__),
        array(),
        $asset_file['version']
    );

    require_once plugin_dir_path(__FILE__) . 'includes/blocks/sketchfab-block.php';
    // require_once plugin_dir_path(__FILE__) . 'blocks/poke-blok.php';

}
add_action('init','my_gutenberg_blocks_register_blocks');