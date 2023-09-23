<?php

/* Chargement du css parent*/

add_action('wp_enqueue_scripts' , 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style' , get_template_directory_uri() . '/style.css');
    /*Chargement du css enfant */ 
    wp_enqueue_style('theme-style' , get_stylesheet_directory_uri() . '/css/theme.css' , array());

filemtime(get_stylesheet_directory() . '/css/theme.css');
}
/*Chargement du js */
function ajouter_script_personnalise() {
    
    wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.js' , array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ajouter_script_personnalise');

?>
