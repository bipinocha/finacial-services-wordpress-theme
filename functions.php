<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action('init', 'create_post_type');
add_action('wp_enqueue_scripts', add_theme_scripts());

function create_post_type() {
    register_post_type('loantype', array(
        'labels' => array(
            'name' => __('Loans'),
            'singular_name' => __('Loan'),
        ),
        'public' => TRUE,
        'has_archive' => TRUE,
        'rewrite' => array('slug' => 'loans'),
    ));
}

function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri(), false, '1.0', all);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", false, '1.0', all);
    #  wp_enqueue_script('script', get_stylesheet_directory_uri()."js/default.js",'jquery',1.0,TRUE);
}

/*
 * Widgest in the themes
 * 
 */

function footer_copyright() {

    register_sidebar(array(
        'name' => 'copyright',
        'id' => 'copyright', 
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name'=>'footerstrip-2',
        'id'=>'footerstrip-2',
        'before_widget'=>'<div class="col-md-6">',
        'after_widget'=>'</div>',
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
    
    
    
}

/*
 * is_localhost
 * set bolean for website status
 * if website is live value set false 
 * on local environment value is set to true so that default temaplte is viewable with dummy text
 */
function is_localhost(){   
    return true;
    #return false; # for live server
}

add_action('widgets_init', 'footer_copyright');
