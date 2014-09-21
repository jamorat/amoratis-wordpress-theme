<?php

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
 

$theme = wp_get_theme();
	if(is_child_theme()) {
		$parent = $theme->parent();
		$version = $parent['Version'];
		} else {
		$version = $theme['Version'];
	}

function amo_styles() 
{	wp_enqueue_style( 'amo_style_bootstrap', get_template_directory_uri(). '/bootstrap/dist/css/bootstrap.css');
 	wp_enqueue_style( 'amo_style_bootflat', get_template_directory_uri(). '/bootflat.github.io/bootflat/css/bootflat.css');
 	wp_enqueue_style( 'amo_style_jack', get_template_directory_uri(). '/jack.css', false, '1.0', 'all');
 
}
add_action( 'wp_enqueue_styles', 'amo_styles' );


function amo_scripts()
{
	wp_enqueue_script( 'amo_script_bootstrap', get_template_directory_uri(). '/bootstrap/dist/js/bootstrap.js',array('jquery'));
	wp_enqueue_script( 'amo_script_icheck', get_template_directory_uri(). '/bootflat.github.io/bootflat/js/icheck.min.js',array('amo_script_bootstrap'));
	wp_enqueue_script( 'amo_script_fs_selector', get_template_directory_uri(). '/bootflat.github.io/bootflat/js/jquery.fs.selecter.min.js');
	wp_enqueue_script( 'amo_script_fs_stepper', get_template_directory_uri(). '/bootflat.github.io/bootflat/js/jquery.fs.stepper.min.js');
	wp_enqueue_script( 'amo_script_jack', get_template_directory_uri(). '/js/jack.js');
} 

add_action( 'wp_enqueue_scripts', 'amo_scripts' );
?>