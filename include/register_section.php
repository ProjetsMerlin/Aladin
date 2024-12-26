<?php
/* REGISTER POST TYPE : SECTION */
function section() {
$cp_name_gender = "une";
$cp_name_new = "nouvelle";
$cp_name_all = "Toutes";
$cp_name = "section";
$cp_names = $cp_name ."s";

$labels_section = array(
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

$parametres_sections = array(
'labels'             	=> $labels_section,
'public'             	=> true,
'publicly_queryable' 	=> true,
'show_ui'            	=> true,
'show_in_menu'       	=> true,
'query_var'          	=> true,
'rewrite'            	=> array('slug' => $cp_name),
'capability_type'    	=> 'post',
'has_archive'        	=> true,
'hierarchical'       	=> true,
'show_in_rest'			=> false,
'taxonomies'  			=> array('type', 'template'),
'menu_position'      	=> 21,
'menu_icon' 			=> 'dashicons-welcome-widgets-menus',
'supports'           	=> array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'revisions')
);
register_post_type('section',$parametres_sections);
}
add_action('init','section');

/* ADD CATEGORIES FOR SECTIONS */
function aladin_addTaxonomy() {
    $labels = array(
        'name' => 'Groupes',
        'new_item_name' => 'Nom du nouveau Groupe',
    	'parent_item' => 'Groupe parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'type', 'section', $args );
}
add_action( 'init', 'aladin_addTaxonomy' );

/* ADD TAGS FOR SECTIONS */
function aladin_template() {
    $labels = array(
        'name' => 'Templates',
        'singular_name' => 'templates',
        'search_items' => 'Rechercher templates',
        'all_items' => 'Tous les templates',
        'parent_item' => 'templates Parent',
        'parent_item_colon' => 'templates Parent :',
        'edit_item' => 'Modifier templates',
        'update_item' => 'Mettre à jour templates',
        'add_new_item' => 'Ajouter Nouveau templates',
        'new_item_name' => 'Nouveau Nom de templates',
        'menu_name' => 'Templates',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'template'),
    );

    register_taxonomy('template', array('section'), $args);
}
add_action('init', 'aladin_template');

/* ADD TAILWIND 3.4 */
function aladin_script() {
	wp_enqueue_script('tailwind', get_stylesheet_directory_uri() . '/js/tailwind-3.4.min.js', array(), "3.4");
}
add_action('wp_enqueue_scripts', 'aladin_script');

/* SHOW CATEGORIES DASHBOARD COLUMN */
function aladin_addColumnType( $columns ) {
    $columns['cat_name'] = 'Groupe';
    return $columns;
}
add_filter( 'manage_section_posts_columns', 'aladin_addColumnType' );

/* SHOW CATEGORIES VALUES DASHBOARD COLUMN */
add_filter('manage_section_posts_custom_column', function ($column, $postId) {
    if ($column === 'cat_name') {
        if ( get_the_terms(intval($postId),'type')[0] ) {
            echo get_the_terms(intval($postId),'type')[0]->name;
        }
    }
}, 10, 2);

/* Ajouter une colonne pour l'ID du post */
function aladin_addPostIdDashboard( $columns ) {
    $columns['post_id'] = 'SHORTCODE';
    return $columns;
}
add_filter( 'manage_section_posts_columns', 'aladin_addPostIdDashboard' );

/* Remplir la colonne avec l'ID du post */
function show_id_section( $column, $post_id ) {
    if ( $column === 'post_id' ) {
        echo '[section id="'.$post_id.'"]';
    }
}
add_action( 'manage_section_posts_custom_column', 'show_id_section', 10, 2 );

/* SHORTCODE SECTION */
function aladin_shortcodeSection( $atts ) {
    $atts = shortcode_atts( array('id' => null, 'categories' => null), $atts );

    $args = array('post_type' => 'section', 'orderby' => 'date menu_order', 'order' => 'desc');
    
    if ( $atts['id'] ) {
        $args['p'] = $atts['id'];
    }
	else {
        $args['posts_per_page'] = -1; 
    }

    if ( $atts['categories'] ) {

        $args = array(
            'tax_query' => array(
array(
'taxonomy' => 'type',
'field' => 'id',
'terms' => explode(',', $atts['categories']),
)));
}
    
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        $output = '<section class="section">';
        while ( $query->have_posts() ) {
            $query->the_post();
			$categorie = get_the_terms(get_the_ID(),'template')[0]->slug;
			get_template_part('template-parts/sections/section',$categorie);
        }
        $output .= '</section>';
    }
	else {
        $output = 'Aucun post trouvé.';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode( 'section', 'aladin_shortcodeSection' );