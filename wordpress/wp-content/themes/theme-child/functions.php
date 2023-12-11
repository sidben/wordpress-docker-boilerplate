<?php 

// TODO: customizar de acordo com o tema pai. (ref: https://developer.wordpress.org/themes/advanced-topics/child-themes/)

/*
If the parent theme loads both stylesheets, the child theme does not need to do anything.
*/

/*
If the parent theme loads its style using a function starting with get_template, 
such as get_template_directory() and get_template_directory_uri(), the child theme 
needs to load just the child styles, using the parent’s handle in the dependency parameter.
*/
// add_action( 'wp_enqueue_scripts', 'theme_child_enqueue_styles' );
// function theme_child_enqueue_styles() {
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_uri(),
//         array( 'parenthandle' ),
//         wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
//     );	
// } 

/*
If the parent theme loads its style using a function starting with get_stylesheet, 
such as get_stylesheet_directory() and get_stylesheet_directory_uri(), the child theme 
needs to load both parent and child stylesheets. 
Be sure to use the same handle name as the parent does for the parent styles.
*/
// add_action( 'wp_enqueue_scripts', 'theme_child_enqueue_styles' );
// function theme_child_enqueue_styles() {
//     $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
//     $theme        = wp_get_theme();
//     wp_enqueue_style( $parenthandle,
//         get_template_directory_uri() . '/style.css',
//         array(),  // If the parent theme code has a dependency, copy it to here.
//         $theme->parent()->get( 'Version' )
//     );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_uri(),
//         array( $parenthandle ),
//         $theme->get( 'Version' ) // This only works if you have Version defined in the style header.
//     );
// }
