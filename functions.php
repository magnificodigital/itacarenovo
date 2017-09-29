<?php 
add_theme_support('post-thumbnails');

function blog_widgets_init() {
register_sidebar( array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'description' => 'Sidebar',
	'before_widget' => '<div id="%1$s" class="box-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3> ',
) );
} //finaliza widget "Sidebar 1"
add_action( 'widgets_init', 'blog_widgets_init' );
/* finaliza sidebar */

//Search form
function my_search_form($form) {
	$form = '<form method="get" id="searchform" class="searchform" action="' . get_option('home') . '/" >
	<div>
	<input type="text" value="' . esc_attr(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" placeholder="Faça sua busca" />
	<button type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	</form>';
	return $form;
}

add_filter('get_search_form', 'my_search_form');

register_post_type('galeriacasas',
	array(
		'labels' => array(
			'name' => __('Galeria Casas'),
			'singular_name' => __('Galeria Casas'),
			'menu_name' => 'Galeria Casas',
			'all_items' => 'Todos as galerias'
		),
	'public' => true,
	'rewrite' => array('slug' => 'galeriacasas', 'with_front' => false),
	'has_archive' => false,		 
	'supports' => array('title'),
	'menu_icon' => 'dashicons-format-image',
	)
);

register_post_type('qa_faqs',
	array(
		'labels' => array(
			'name' => __('FAQs'),
			'singular_name' => __('FAQs'),
			'menu_name' => 'FAQs',
			'all_items' => 'Todos as FAQs'
		),
	'public' => true,
	'rewrite' => array('slug' => 'faqs', 'with_front' => false),
	'has_archive' => false,		 
	'supports' => array('title','editor'),
	'menu_icon' => 'dashicons-format-image',
	)
);

flush_rewrite_rules();

// Mover os scripts para o footer
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

add_action('admin_init', 'my_general_section'); 

function my_general_section() {  
    
    add_settings_section(  
        'enderecos', 
        'Endereços', 
        '', 
        'general' 
    );

    add_settings_field( 
        'token_rd', 
        'Token RD',
        'my_textbox_callback', 
        'general', 
        'enderecos',
        array( 
            'token_rd' // Should match Option ID
        )  
    );
   
    register_setting('general','token_rd', 'esc_attr');
    
}

function my_textbox_callback($args) {
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" class="regular-text" />';
}

?>