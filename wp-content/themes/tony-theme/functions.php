<?php

function tony_supports () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function tony_register_assets(){
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function tony_theme_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}
function tony_theme_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

 add_action('after_setup_theme', 'tony_supports');
 add_action('wp_enqueue_scripts', 'tony_register_assets');
 add_filter('nav_menu_css_class', 'tony_theme_class');
 add_filter('nav_menu_link_attributes', 'tony_theme_link_class');