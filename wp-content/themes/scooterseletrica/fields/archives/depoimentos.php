<?php

	add_action( 'cmb2_admin_init', 'metaboxes_depoimentos' );

	function metaboxes_depoimentos() {

		// Detalhes do depoimento
		$servico_item = new_cmb2_box( array(
			'id'            => 'servico_item',
			'title'         => __( 'Detalhes do depoimento' ),
			'object_types'  => array( 'depoimentos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$servico_item->add_field( array(
			'name'       => __( 'Imagem do depoimento' ),
			'desc'       => __( 'Tamanho recomendado <strong>100x100</strong>' ),
			'id'         => 'wsg_servico_item_img',
			'type' => 'file',
			'preview_size' => array( 100/1, 100/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$servico_item->add_field( array(
			'name'       => __( 'Texto do depoimento' ),
			'id'         => 'wsg_servico_item_texto',
			'type'       => 'wysiwyg',
		) );
		$servico_item->add_field( array(
			'name'       => __( 'legenda do depoimento' ),
			'id'         => 'wsg_servico_item_legenda',
			'type'       => 'text',
		) );



	}

?>