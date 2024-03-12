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
	wp_enqueue_script( 'mota-js', get_template_directory_uri() . '/assets/js/script.js', array(), 
    '1.0', true );
    // Déclarer le css compilé sass
    wp_enqueue_style('theme_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' //filemtime(get_template_directory_uri() . '/assets/css/style.css')
);
    // Déclarer le css à la racine
    wp_enqueue_style('style', get_stylesheet_uri() , array(),'1.0.0');

}
// Les menus du theme
function mota_register_menu(){
    register_nav_menu( 'main-menu', 'Menu Principal');
    register_nav_menu( 'footer', 'Bas de page');
}

// affichage du lien 'Contact' dans le menu header
function contact_popup_add($items, $args){
    if(is_user_logged_in() && $args->theme_location == 'main-menu'){
        $contactItemMenu = '<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-20">
        <a href="'.get_site_url().'/templates-part/popup-contact.php/"  aria-current="page" itemprop="url">
        contact</a></li>';
        $items .= $contactItemMenu;
    }
    return $items;
};




add_action('after_setup_theme', 'mota_setup');
add_action('after_setup_theme', 'mota_register_scripts');
add_action( 'init', 'mota_register_menu' );
add_filter('wp_nav_menu_items', 'contact_popup_add', 10, 2);



