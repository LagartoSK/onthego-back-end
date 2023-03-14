<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {

		// Método de especificação de página
		$homePage = get_page_by_path( 'home', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($homePage && $homePage->ID != $post_id){
			return;
		}

		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banners',
			'title'         => __( 'Banner' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_banner_titulo',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_banner_titulo',
			'type'       => 'text',
		) );


		$equipe_redes_sociais = $equipe_item->add_field( array(
			'name'			=> __( 'Redes sociais do integrante' ),
			'id'            => 'equipe_redes_sociais',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$equipe_item->add_group_field( $equipe_redes_sociais, array(
			'name'       => __( 'Link do item' ),
			'id'         => 'wsg_equipe_redes_sociais_link',
			'type' => 'text',
		) );
		$equipe_item->add_group_field( $equipe_redes_sociais, array(
			'name'       => __( 'Icone do item' ),
			'id'         => 'wsg_equipe_redes_sociais_icone',
			'type' => 'text_small',
		) );

		$banner->add_field( array(
			'name'       => __( 'Vídeo do banner' ),
			// 'desc'       => __( 'Tamanho recomendado <strong>1920x650</strong>' ),
			'id'         => 'wsg_banner_items_video',
			'type' => 'file',
			// 'preview_size' => array( 1920/5, 650/5 ),
			'query_args' => array( 'type' => 'video' ),
		) );



		// Metabox Trabalhos
		$cases = new_cmb2_box( array(
			'id'            => 'cases',
			'title'         => __( 'Trabalhos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$cases->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_cases_titulo',
			'type'       => 'text',
		) );
		$cases->add_field( array(
			'name'    => __( 'Listagem de trabalhos' ),
			'desc'    => __( 'Arraste os trabalhos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos trabalhos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_cases_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'cases192',
				),
			),
		) );


		// Metabox Sobre
		$sobre = new_cmb2_box( array(
			'id'            => 'sobre',
			'title'         => __( 'Sobre nós' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$sobre->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_titulo',
			'type'       => 'text',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_sobre_texto',
			'type'       => 'wysiwyg',
		) );
		$sobre->add_field( array(
			'name'    => __( 'Nossa equipe' ),
			'desc'    => __( 'Arraste os membros da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos membros na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_equipe_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'equipe192',
				),
			),
		) );


		// Metabox Contato
		$contato = new_cmb2_box( array(
			'id'            => 'contato',
			'title'         => __( 'Contato' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );
		$contato->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_contato_titulo',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Iframe do mapa da seção' ),
			'id'         => 'wsg_contato_iframe',
			'type'       => 'textarea_code',
		) );

		// Metabox contato_recaptcha
		$contato_recaptcha = new_cmb2_box( array(
			'id'            => 'contato_recaptcha',
			'title'         => __( 'Recaptcha' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );

		$contato_recaptcha->add_field( array(
			'name'			=> __( 'Configurações do ReCaptcha' ),
			'desc'			=> __( 'Essas configurações não são obrigatórias, porém recomendadas para evitar ataques.' ),
			'id'			=> 'wsg_contato_recaptcha_titulo',
			'type'			=> 'title',
		) );

		$contato_recaptcha->add_field( array(
			'name'			=> __( 'Secret Key' ),
			'id'			=> 'wsg_contato_secret_key',
			'type'			=> 'textarea',
		) );
		$contato_recaptcha->add_field( array(
			'name'			=> __( 'Código WidGet - (Site Key)' ),
			'id'			=> 'wsg_contato_widget',
			'type'			=> 'textarea',
		) );


		// Metabox Rodapé
		$footer_site = new_cmb2_box( array(
			'id'            => 'footer_site',
			'title'         => __( 'Rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );
		$footer_site->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_footer_site_titulo',
			'type'       => 'text',
		) );
		$footer_site->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_footer_site_texto',
			'type'       => 'text',
		) );

	}

?>