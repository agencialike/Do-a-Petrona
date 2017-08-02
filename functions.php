<?php 
add_theme_support ("post-thumbnails");
add_theme_support( 'title-tag' );

function widget1(){
	register_sidebar(
		array ( 
			'name' => 'Widgetuno',
			'id' => 'Widgetuno',
			'description' => 'Widgetuno',

		)
	);
}
add_action('widgets_init','widget1' );




?>