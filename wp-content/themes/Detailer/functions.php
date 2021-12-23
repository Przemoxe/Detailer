<?php

class Theme {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'fotograf_files'));
    add_action('after_setup_theme', array($this, 'university_features'));

  }
  function fotograf_files() {
    wp_enqueue_style('botstrapCSS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/css/bootstrap.min.css'));
    wp_enqueue_style('style_main', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('magnificCSS', get_theme_file_uri('/css/magnific.css'));

    
    wp_enqueue_script('bootstrapJS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('magnificJS', get_theme_file_uri('/js/magnific.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('CustomJS', get_theme_file_uri('/js/custom.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('header_burger_hide', get_theme_file_uri('/js/header_burger_hide.js'),array('jquery'), 1.0, true);
  }

  function test() {

  }

  function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('headerMenuLocation_Mobile', 'Header Menu Location Mobile');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
  }

}


$template = new Theme();


function detailing_post_types(){
  register_post_type('cennik', array(
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Cennik',
      'add_new_item' => 'Dodaj nowy cennik',
      'edit_item' => 'Edytuj cennik',
      'all_items' => 'Wszystkie cenniki',
      'singular_name' => 'cennik'
    ),
    'menu_icon' => 'dashicons-cover-image',
    
  ));

    
}


add_action('init', 'detailing_post_types');

require_once get_template_directory() . '/inc/customizer.php';



