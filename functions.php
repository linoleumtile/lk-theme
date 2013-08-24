<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>
<?php 
function bootstrap_hover_dropdown()
{
	// Register the script like this for a theme:
	wp_register_script( 'hover-dropdown', get_template_directory_uri() . '/js/twitter-bootstrap-hover-dropdown.min.js', array( 'bootstrap' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'hover-dropdown' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_hover_dropdown' );
?>
<?php 
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
?>
<?php
if ( function_exists('register_sidebar') )
{ register_sidebar();
register_sidebars(2, array('name'=>'Footer %d')); }
?>