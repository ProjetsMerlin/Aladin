<?php
/* Version */
define('ALADIN_VERSION', '1.0');

/* Css & Javascript */
function virgin_scripts() {
  wp_enqueue_style('css_main', get_stylesheet_directory_uri() . '/style/css/style.css', array(), ALADIN_VERSION, 'all');
  wp_enqueue_script('js_main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), ALADIN_VERSION);
}
add_action('wp_enqueue_scripts', 'virgin_scripts');

/* BASE */
require_once(get_template_directory() . '/include/config_theme.php');

/* ALADIN */
require_once(get_template_directory() . '/include/register_section.php');
require_once(get_template_directory() . '/include/register_team.php');
require_once(get_template_directory() . '/include/register_prices.php');
require_once(get_template_directory() . '/include/register_faq.php');

/*
2.0 :
Rendre les formulaires dynamiques
  Contact
  Newsletter

Ajouter la possibilité de télécharger des plugins conseillés
s*/