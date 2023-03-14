<?php
	/**
	 * The Template for displaying product archives, including the main shop page which is a post type archive
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce/Templates
	 * @version 3.4.0
	 */

	// defined( 'ABSPATH' ) || exit;

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	get_header();

	$id_page = get_page_by_path( 'produtos', OBJECT, 'page' )->ID;

?>

	<section class="at-breadcrumb">
        <div class="container">
            <div class="at-breadcrumb__box">
                <h1><?php echo get_page_by_path( 'produtos', OBJECT, 'page' )->post_title; ?></h1>

                <ul class="at-breadcrumb__box__list">
                    <li><a href="<?php bloginfo( 'url' ) ?>">Home</a></li>
                    <i class="flaticon-jogar"></i>
                    <li><?php echo get_page_by_path( 'produtos', OBJECT, 'page' )->post_title; ?></li>
                </ul>
            </div>
        </div>
    </section>

	<section class="wq-listagem-produtos">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					<aside class="at-aside__product">
						<?php dynamic_sidebar( 'shop' );?>

						<!-- <div class="at-shop__category">
							<h2 class="at-title__shop__aside">Categorias</h2>

							<ul>
								<li>Scooter Elétricas</li>
								<li>Baterias</li>
								<li>Assesórios</li>
							</ul>
						</div>

						<div class="at-shop__recomend">
							<h2 class="at-title__shop__aside">Nós recomendamos</h2>
							
							<div class="at-shop__recomend__box">
								<figure>
									<img src="img/product01-mini.png" alt="">
								</figure>

								<div class="at-shop__recomend__box__content">
									<h3>Нomnium sarchum</h3>

									<ul class="at-avaliation_star">
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
									</ul>

									<div class="at-shop__recomend__box__price">
										<span>$69</span>
										<span>$69</span>
									</div>
								</div>

							</div>
							
							<div class="at-shop__recomend__box">
								<figure>
									<img src="img/product01-mini.png" alt="">
								</figure>

								<div class="at-shop__recomend__box__content">
									<h3>Нomnium sarchum</h3>

									<ul class="at-avaliation_star">
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
										<li><i class="flaticon-estrela"></i></li>
									</ul>

									<div class="at-shop__recomend__box__price">
										<span>$69</span>
										<span>$69</span>
									</div>
								</div>

							</div>
						</div> -->
					</aside>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="at-shop__product">
						<?php
							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked woocommerce_output_all_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						?>
						<?php

							if ( woocommerce_product_loop() ) {

								woocommerce_product_loop_start();

								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 *
										 * @hooked WC_Structured_Data::generate_product_data() - 10
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}

							/**
							 * Hook: woocommerce_after_main_content.
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );

							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							do_action( 'woocommerce_sidebar' );
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="wq-listagem-produtos-01">
		<div class="container">
			<div class="wq-titulo-content">
				<div class="wq-titulo-01">
					<h2><?php echo get_post_meta( $id_page, 'wsg_produtos_destacados_titulo', true ); ?></h2>
				</div>
				<div class="wq-dir">
					<div>

					</div>
					<a href="<?php bloginfo('url'); ?>/produtos" class="link-dir-all">ver todos <span class="flaticon-arrow-right"></span></a>
				</div>
			</div>

			<div class="wq-carrousel-content">
				<div class="wq-produtos-carrousel">
					<?php
						$wsg_produtos_destacados_listagem = get_post_meta( $id_page, 'wsg_produtos_destacados_listagem', true );
						foreach ($wsg_produtos_destacados_listagem as $key => $item) {
					?>
						<div>
							<a href="<?php echo get_the_permalink($item); ?>" class="wq-produtos-box">
								<?php calcDesc( $item ); ?>
								<figure>
									<?php echo getImageThumb(get_post_thumbnail_id($item), '262x262'); ?>
								</figure>
								<div class="wq-produto-conteudo">
									<h2><?php echo get_the_title( $item ); ?></h2>

									<?php mostrarPreco($item); ?>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section> -->


<?php get_footer( 'shop' );?>