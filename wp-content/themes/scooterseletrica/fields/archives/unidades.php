<?php

	add_action( 'cmb2_admin_init', 'metaboxes_unidades' );

	function metaboxes_unidades() {

		// Detalhes da Unidade
		$unidade_item = new_cmb2_box( array(
			'id'            => 'unidade_item',
			'title'         => __( 'Detalhes da Unidade' ),
			'object_types'  => array( 'unidades192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$unidade_item->add_field( array(
			'name'       => __( 'Endereço' ),
			'id'         => 'wsg_unidade_endereco',
			'type' => 'textarea',
		) );


	}

?>