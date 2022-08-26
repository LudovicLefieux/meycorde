<?php 

// Déclarer les styles et scripts
function meycorde_register_assets() {
    
    // Déclarer le JS
	wp_enqueue_script( 
        'script', 
        get_template_directory_uri() . '/script/script.js', 
        array(),
        '1.0', 
        true
    );
    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'meycorde_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Déclarer les emplacements de menus
register_nav_menus( array(
	'main' => 'Menu principal',
    'account' => 'Menu utilisateur',
    'footer' => 'Liens obligatoires',
) );