
<?php
function price() {
$cp_name_gender = "un";
$cp_name_new = "nouveau";
$cp_name_all = "Tous";
$cp_name = "tarif";
$cp_names = $cp_name ."s";

$labels_price = array(
	'name'					=>	ucfirst($cp_name),
	'singular_name'			=>	ucfirst($cp_name),
	'menu_name'				=>	ucfirst($cp_names),
	'add_new_item'			=>	'Ajouter '.$cp_name_gender.' '.$cp_name_new .' '.$cp_name,
	'add_new' 				=>	'Ajouter '.$cp_name_gender.' '.$cp_name,
	'new_item'				=>	ucfirst($cp_name_new).' '.$cp_name,
	'edit_item'				=>	'Editer '.$cp_name_gender.' '.$cp_name,
	'view_item'				=>	'Voir '.$cp_name_gender.' '.$cp_name,
	'all_items'				=>	$cp_name_all.' les '.$cp_names,
	'search_items'			=>	'Rechercher un '.$cp_name,
	'not_found'				=>	ucfirst($cp_name).' introuvable',
	'not_found_in_trash'	=>	'Introuvable dans la corbeille'
);

$parametres_prices = array(
'labels'             	=> $labels_price,
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
'menu_icon' 			=> 'dashicons-money',
'supports'           	=> array('title', 'editor', 'excerpt', 'page-attributes', 'revisions')
);
register_post_type('price', $parametres_prices);
}
add_action('init','price');


function shortcode_price( $atts ) {
    $params = array('post_type' => 'price', 'orderby' => 'menu_order', 'order' => 'asc');
    $prices = get_posts($params);
    $html = "";
    if ( $prices ) {
        foreach ( $prices as $price ) :
			$html .= get_template_part('template-parts/sections/content','pricing');
        endforeach;
    }
	else {
        $html = 'Aucun post trouvé.';
    }

    wp_reset_postdata();
    return $html;
}
add_shortcode( 'price', 'shortcode_price' );