<?php
function faq() {
$cp_name_gender = "une";
$cp_name_new = "nouvelle";
$cp_name_all = "Toutes";
$cp_name = "faq";
$cp_names = $cp_name ."s";

$labels_faq = array(
	'name'					=>	ucfirst($cp_name),
	'singular_name'			=>	ucfirst($cp_name),
	'menu_name'				=>	ucfirst($cp_names),
	'add_new_item'			=>	'Ajouter '.$cp_name_gender.' '.$cp_name_new .' '.$cp_name,
	'add_new' 				=>	'Ajouter '.$cp_name_gender.' '.$cp_name,
	'new_item'				=>	ucfirst($cp_name_new).' '.$cp_name,
	'edit_item'				=>	'Editer '.$cp_name_gender.' '.$cp_name,
	'view_item'				=>	'Voir '.$cp_name_gender.' '.$cp_name,
	'all_items'				=>	$cp_name_all.' les '.$cp_names,
	'search_items'			=>	'Rechercher '.$cp_name_gender.' '.$cp_name,
	'not_found'				=>	ucfirst($cp_name).' introuvable',
	'not_found_in_trash'	=>	'Introuvable dans la corbeille'
);

$parametres_faqs = array(
	'labels'             	=> $labels_faq,
	'public'             	=> true,
	'publicly_queryable' 	=> true,
	'show_ui'            	=> true,
	'show_in_menu'       	=> true,
	'query_var'          	=> true,
	'rewrite'            	=> array('slug' => $cp_name),
	'capability_type'    	=> 'post',
	'has_archive'        	=> true,
	'hierarchical'       	=> true,
	'show_in_rest'			=> true,
	'menu_position'      	=> 21,
	'menu_icon' 			=> 'dashicons-list-view',
	'supports'           	=> array('title', 'editor', 'page-attributes', 'revisions')
);

register_post_type('faq',$parametres_faqs);
}

add_action('init','faq');