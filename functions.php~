<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action('init', 'create_post_type');
add_action('wp_enqueue_scripts', add_theme_scripts());

function create_post_type() {

/*
	$args = array(
		'label'               => __( 'movies', 'twentythirteen' ),
		'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'category' ),
	);
*/
    register_post_type('loantype', array(
        'labels' => array(
            'name' => __('Loans'),
            'singular_name' => __('Loan'),
        ),
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	'show_ui'=>TRUE,
	'show_in_admin_bar'=>TRUE,
	'show_in_nav_menus'=>TRUE,
	'show_in_menu'=>TRUE,
        'public' => TRUE,
        'has_archive' => TRUE,
        'rewrite' => array('slug' => 'loans'),
	'taxonomies'          => array( 'category' ),
    ));
}

function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri(), false, '1.0', all);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", false, '1.0', all);
    wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri()."/js/bootstrap.min.js",'jquery',1.0,TRUE);
}

/*
 * Widgest in the themes
 * 
 */

function loan_widget() {

    register_sidebar(array(
        'name' => 'copyright',
        'id' => 'copyright',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'footerstrip-2',
        'id' => 'footerstrip-2',
        'before_widget' => '<div class="col-md-6">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'disclaimer',
        'id' => 'disclaimer',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'footerstrip-referece',
        'id' => 'footerstrip-referece',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'footer-content',
        'id' => 'footer-content',
        'before_widget' => '<div class="col-sm-3">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'footer-content-subscribe',
        'id' => 'footer-content-subscribe',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));


    register_sidebar(array(
        'name' => 'home-content-panel-2',
        'id' => 'home-content-panel-2',
        'before_widget' => '<div class="col-md-6">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'sidebar-menu-1',
        'id' => 'sidebar-menu-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
//sidebar for loan pages
    register_sidebar(array(
        'name' => 'sidebar-menu-2',
        'id' => 'sidebar-menu-2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
}

function register_loanmenu(){
    register_nav_menu('header-menu',__('Header Menu'));
}
add_theme_support( 'custom-logo' );
/*
function loan_logos() {
    add_theme_support('loan_logo', array(
        'height' => 200,
        'width' => 400,
        'flex-width' => TRUE,
    ));
}*/
/*
function loan_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'loan_logo' ); // Add setting for logo uploader
   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'loan_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => '	loan_logo',
    ) ) );
}
add_action( 'customize_register', 'loan_customize_register' );
*/
/*
 * is_localhost
 * set bolean for website status
 * if website is live value set false 
 * on local environment value is set to true so that default temaplte is viewable with dummy text
 */

function is_localhost() {
    return true;
    #return false; # for live server
}
add_action('init','register_loanmenu');
add_action('widgets_init', 'loan_widget');
#add_action('init', 'loan_logos');


/*customizing navbar css*/
class Radiate_Walker extends Walker_Nav_Menu {
/*
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $id_field = $this->db_fields['id'];

        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = !empty( $children_elements[$element->$id_field] );
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }*/

    function start_el( &$output, $item, $depth, $args,$id=0 ) {

        $output .= sprintf("\n<li><a href='%s'%s>%s</a>\n",$item->url,($item->object_id === get_the_ID() ) ? ' class="current"' : '',$item->title);	

	
        /*if ( $args->has_children ) {
            $item->classes[] = 'dropdown';
        }*/

      #  parent::start_el(&$output, $item, $depth, $args);
    }
}

