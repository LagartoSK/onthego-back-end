<?php

	// Está função registra o posttype unidades192
	function registrar_cpt_unidades(){

		// Unidades
		register_post_type('unidades192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Unidades'),
					'singular_name'	=> _x('Unidade', 'post type singular name'),
					'add_new'		=> _x('Nova Unidade', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar nova Unidade', 'portfolio item'),
					'edit_item'		=> _x('Editar Unidade', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'unidades'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-location',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);
	}

	add_action('init', 'registrar_cpt_unidades');


	$role = get_role( 'administrator' );


?>