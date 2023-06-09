<?php
	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta http-equiv="Content-Language" content="pt-br">

	<?php
		$wsg_favicon_img_id = get_post_meta( $id_logo, 'wsg_favicon_img_id', true );
		if ($wsg_favicon_img_id !== NULL && strlen($wsg_favicon_img_id) > 0) {
			$wsg_favicon = wp_get_attachment_image_src($wsg_favicon_img_id);
			if ($wsg_favicon !== NULL && count($wsg_favicon) > 0) {
				?>
					<link rel="icon" href="<?php echo $wsg_favicon[0]; ?>" type="image/x-icon"/>
				<?php
			}
		}
	?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

	<?php if (is_front_page()){ ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/pages/home.css">

	<?php } elseif ( is_post_type_archive( 'product' ) || is_search() || is_tax( 'product_cat' ) || is_singular( 'product' ) ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/pages/shop.css">

	<?php } elseif ( is_home() || is_post_type_archive( 'post' ) || is_singular( 'post' ) || is_category() || is_tag() ) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/pages/blog.css">

	<?php } ?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/icon/flaticon_iconsfa.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/icons/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

	<!-- Fonts Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

	<!-- SwiperJS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<?php wp_head(); ?>

	<?php
		$id_google = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' )->ID;

		echo get_post_meta( $id_google, 'wsg_codes_header', true );
	?>
</head>
<body>
	<?php echo get_post_meta( $id_google, 'wsg_codes_body', true ); ?>

	<header class="at-header-main at-header-main__home">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<figure>
							<?php
								$wsg_logo_header_img_id = get_post_meta( $id_logo, 'wsg_logo_header_img_id', true );
								getImageThumb($wsg_logo_header_img_id, 'full');
							?>
						</figure>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
							wp_nav_menu( array(
								'theme_location'    => 'header-menu',
								'depth'             => 2,
								// 'container'         => 'div',
								// 'container_class'   => 'collapse navbar-collapse',
								// 'container_id'      => 'navbarSupportedContent',
								'menu_class'        => 'navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>

						<div class="header__icons__box">
							<div class="header__icons__search">
								<a href="#">
									<i class="flaticon-lupa"></i>
								</a>
							</div>

							<div class="header__icons__cart">
								<a href="#">
									<i class="flaticon-carrinho"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="header__btn">
						<a class="btn-main_page" href="#">FAÇA UMA COTAÇÃO <i class="flaticon-seta-direita"></i></a>
					</div>
				</div>
			</nav>
		</div>
	</header>