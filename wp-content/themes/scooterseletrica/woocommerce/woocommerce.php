<?php

	//adicionando WooCommerce
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce');
	}
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	function disable_woo_commerce_sidebar() {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
	}
	add_action('init', 'disable_woo_commerce_sidebar');

	function shop() {

		register_sidebar( array(
			'name'          => 'Shop',
			'id'            => 'shop',
			'before_widget' => '<div class="at-product-widget_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="at-title__shop__aside">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'shop' );

	function disable_ordering_woo() {
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
	}
	add_action('init', 'disable_ordering_woo');



	// Função calcular porcentagem de desconto
	function calcDesc( $idProd ){
		$_sale_price = get_post_meta( $idProd, '_sale_price', true );
		$_regular_price = get_post_meta( $idProd, '_regular_price', true );

		$valorPro = strip_tags(str_replace(array('.'), array(','), $_sale_price));
		$valorInt = strip_tags(str_replace(array('.'), array(','), $_regular_price));

		$l1 = $valorPro * 100;
		$l2 = ceil($l1 / $valorInt);
		$res = 100 - $l2;

		$calcDesc = "";

		if (!empty($_sale_price)) {
			$calcDesc = "<span class=\"wq-desconto\">".$res."% off</span>";
		}
		echo $calcDesc;
	}


	function mostrarPreco( $idProd ){
		$preco = "";

		$_sale_price = get_post_meta( $idProd, '_sale_price', true );
		$_regular_price = get_post_meta( $idProd, '_regular_price', true );

		$_sale_price_fmt = strip_tags(str_replace(array('.'), array(','), $_sale_price));
		$_regular_price_fmt = strip_tags(str_replace(array('.'), array(','), $_regular_price));

		$_sale_price_fmt_array = explode(",", $_sale_price_fmt);
		$_regular_price_fmt_array = explode(",", $_regular_price_fmt);

		if (!empty($_sale_price)) {
			$preco = $_sale_price_fmt;
		} else{
			$preco = $_regular_price_fmt;
		}

		$mostrarPreco = "<div class=\"at-produto_preco\">";

		if (!empty($_sale_price)) {
			$mostrarPreco .= "<small>€ ".$_regular_price_fmt."</small>";
		}
		$mostrarPreco .= "<span>€ ".$preco."</span>";

		$mostrarPreco .= "</div>";

		echo $mostrarPreco;
	}


	function mostrarPrecoSingle( $idProd ){
		$preco = "";

		$_sale_price = get_post_meta( $idProd, '_sale_price', true );
		$_regular_price = get_post_meta( $idProd, '_regular_price', true );

		$_sale_price_fmt = strip_tags(str_replace(array('.'), array(','), $_sale_price));
		$_regular_price_fmt = strip_tags(str_replace(array('.'), array(','), $_regular_price));

		$_sale_price_fmt_array = explode(",", $_sale_price_fmt);
		$_regular_price_fmt_array = explode(",", $_regular_price_fmt);

		if (!empty($_sale_price)) {
			$preco = $_sale_price_fmt;
		} else{
			$preco = $_regular_price_fmt;
		}

		$mostrarPreco = "<div class=\"at-produto_preco\">";

		if (!empty($_sale_price)) {
			$mostrarPreco .= "<small>€ ".$_regular_price_fmt."</small>";
		}
		$mostrarPreco .= "<span class=\"at-product-single__box__price\">€ ".$preco."</span>";

		$mostrarPreco .= "</div>";

		echo $mostrarPreco;
	}
