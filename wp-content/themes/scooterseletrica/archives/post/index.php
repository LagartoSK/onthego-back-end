<?php

	// get_header();

	$id_page = get_page_by_path( 'blog', OBJECT, 'page' )->ID;

	$arrayGET = $_GET;
	$allArgs = array();
	$resultadoBusca = "";

	if ( isset($_GET['buscar']) ) {
		$resultadoBusca = $_GET['buscar'];
	}

	if(empty($allArgs)){
		$allArgs = '';
	}
?>

	<section class="at-breadcrumb">
		<div class="container">
			<div class="at-breadcrumb__box">
				<?php if ( is_home() || is_post_type_archive('post') ) { ?>
					<h1><?php echo get_page_by_path( 'blog', OBJECT, 'page' )->post_title; ?></h1>
				<?php } elseif ( is_category() ) { ?>
					<h1>Categoria: <?php echo $category->name; ?></h1>
				<?php } elseif ( is_search() ) { ?>
					<h1>Resultados de: <?php echo $_GET['s'];?></h1>
				<?php } elseif ( is_tag() ) { ?>
					<h1>Tag: <?php echo $tag->name; ?></h1>
				<?php } ?>

				<!-- <ul class="at-breadcrumb__box__list">
					<li><a href="#">Home</a></li>
					<i class="flaticon-jogar"></i>
					<li>Blog</li>
				</ul> -->
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p class="at-breadcrumb__box__list">','</p>');
					}
				?>
			</div>
		</div>
	</section>

	<?php
		$arrayQuery = array(
			'post_type'         => array( 'post' ),
			'posts_per_page'    => '6',
			's'                 => $resultadoBusca,
			'tax_query'         => array(
				'relation' => 'AND',
				array($allArgs)
			),
		);
		$query = new WP_Query($arrayQuery);
		if ( $query->have_posts() ) {
	?>
	<section class="at-blog-list">
		<div class="container">
			<div class="row">
				<?php
					while ( $query->have_posts() ) {
						$query->the_post();
				?>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<article class="at-blog-list__box">
							<figure>
								<?php
									if ( !empty(get_post_thumbnail_id(get_the_ID())) ) {
										getImageThumb(get_post_thumbnail_id(get_the_ID()), '590x350');
									} else{
								?>
									<img src="<?php bloginfo('template_url') ?>/img/img-blog.jpg" alt="imagem do blog">
								<?php
									}
								?>
							</figure>

							<div class="at-blog-list__box__info__date">
								<span><?php echo get_the_date('d', get_the_ID()); ?></span>
								<span><?php echo get_the_date('M', get_the_ID()); ?></span>
							</div>

							<div class="at-blog-list__box__info__post">
								<span><i class="flaticon-user"></i> Admin</span>
								<span><i class="flaticon-chat"></i> Comments</span>
							</div>

							<div class="at-blog-list__box__body">
								<h2><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h2>

								<a class="btn-main_page" href="#">Read more <i class="flaticon-seta-direita"></i></a>
							</div>
						</article>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<?php } ?>
