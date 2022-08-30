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

//Déclarer Woocommerce
function meycorde_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
	) );
}
add_action( 'after_setup_theme', 'meycorde_add_woocommerce_support' );

// Affiche les étiquettes produits
function displayTags() {
 
    // This will hold all of our product tags
    $tags = array();
 
    // get an array of the WP_Term objects for a defined product ID (get_the_id() will return the product id of the current object)
    $terms = wp_get_post_terms( get_the_id(), 'product_tag' );
 
    // Loop through each product tag for the current product
    if ( count( $terms ) > 0 ) {
 
        foreach( $terms as $term ) {
 
            $term_name = $term->name;
 
            // Set the product tag names in an array
            $tags[] = '<span>' . $term_name . '</span>';
 
        }
 
        // Combine all of the product tags into one string for output
        $tags = implode( '', $tags );
 
        // Output
        echo $tags;
    }
 
}