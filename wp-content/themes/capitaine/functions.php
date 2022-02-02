<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// function load_assets() {
    
//     // Déclarer jQuery
//     wp_enqueue_script('jquery' );
    
//     // Déclarer le JS
// 	wp_enqueue_script( 
//         'guillaume', 
//         get_template_directory_uri() . '/assets/js/jquery.min.js', 
//         array( 'jquery' ), 
//         '1.0', 
//         true
//     );
    
//     // Déclarer un autre fichier CSS
//     wp_enqueue_style( 
//         'guillaume', 
//         get_template_directory_uri() . '/assets/css/main.css',
//         array(), 
//         '1.0'
//     );
// }
// add_action( 'wp_enqueue_scripts', 'load_assets' );