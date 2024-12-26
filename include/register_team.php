
<?php
function team() {
$cp_name_gender = "une";
$cp_name_new = "nouvelle";
$cp_name_all = "Toutes";
$cp_name = "membre";
$cp_names = $cp_name ."s";

$labels_team = array(
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

$parametres_teams = array(
'labels'             	=> $labels_team,
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
'menu_icon' 			=> 'dashicons-admin-users',
'supports'           	=> array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions' )
);
register_post_type('team',$parametres_teams);
}
add_action('init','team');