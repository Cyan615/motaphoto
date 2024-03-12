<?php
// Déclaration des fonctions
function mota_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
    add_theme_support( 'post-thumbnails' );

};
function mota_register_scripts(){

    // Déclarer le JS
	wp_enqueue_script( 'mota-js', get_template_directory_uri() . 'assets/js/script.js', array(), 
    '1.0', true );
    // Déclarer le css compilé sass
    wp_enqueue_style('theme_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' //filemtime(get_template_directory_uri() . '/assets/css/style.css')
);
    // Déclarer le css à la racine
    wp_enqueue_style('style', get_stylesheet_uri() , array(),'1.0.0');

}



add_action('after_setup_theme', 'mota_setup');

add_action('after_setup_theme', 'mota_register_scripts');

