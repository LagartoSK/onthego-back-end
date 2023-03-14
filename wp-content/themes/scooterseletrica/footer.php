<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;

	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
?>

	<footer>
		<section class="at-footer-main">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="at-footer-main_box at-footer__logo__box">
							<figure class="at-footer__logo">
								<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logomarca">
							</figure>

							<p>Ceipisicing elit sed do eiusmod tempor laboe dolore magna aliqa Ut enim ad minim veniam quis nostrud exercitation ullam co laboris nis aliquip comsecd sed ipsum.</p>

							<ul class="footer__social__midia">
								<?php
									$arrayQuery = array(
										'post_type'         => array( 'redes_sociais' ),
										'orderby'           => 'menu_order',
										'order'             => 'ASC',
										'posts_per_page'    => '-1',
									);
									$query = new WP_Query($arrayQuery);
									while ( $query->have_posts() ) {
										$query->the_post();
								?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_link', true ); ?>">
											<i class="flaticon-<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_titulo', true ); ?>"></i>
										</a>
									</li>
								<?php } wp_reset_query(); ?>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="at-footer-main_box">
							<h4>Nossas unidades</h4>
							<div class="at-footer-main_box__location__box">
								<?php
									$arrayQuery = array(
										'post_type'         => array( 'unidades192' ),
										'orderby'           => 'menu_order',
										'order'             => 'ASC',
										'posts_per_page'    => '-1',
									);
									$query = new WP_Query($arrayQuery);
									while ( $query->have_posts() ) {
										$query->the_post();
								?>
									<div class="at-footer-main_box__location">
										<h5><?php echo get_the_title(get_the_ID()) ?></h5>
										<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_unidade_endereco', true )); ?>
									</div>
								<?php } wp_reset_query(); ?>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
						<div class="at-footer-main_box">
							<h4>
								<?php
									$menu_location = 'footer-menu';
									$menu_locations = get_nav_menu_locations();
									$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
									$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
									echo esc_html($menu_name);
								?>
							</h4>

							<ul class="at-footer__links">
								<?php
									$menu_name = 'footer-menu';
									$locations = get_nav_menu_locations();
									$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
									$primaryNav = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
									wp_nav_menu( array(
										'menu'            => 'footer-menu',
										'theme_location'  => 'footer-menu',
										'container'       => '',
										'menu_class'      => 'menu',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'items_wrap'      => '%3$s',
										'depth'           => 3,
									) );
								?>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="at-footer-main_box">
						   <h4>Contatos</h4>
							<ul class="at-footer__address">
								<li>
									<a href="<?php echo get_post_meta( $id_endereco, 'wsg_endereco_link', true ); ?>">
										<i class="flaticon-pin-de-localizacao"></i>
										<?php echo get_post_meta( $id_endereco, 'wsg_endereco', true ); ?>
									</a>
								</li>

								<?php
									$wsg_emails = get_post_meta( $id_email, 'wsg_emails', true );
									foreach ( (array) $wsg_emails as $key => $email ) {
								?>
									<li>
										<a href="mailto:<?php echo $email; ?>">
											<i class="flaticon-o-email"></i><?php echo $email; ?>
										</a>
									</li>
								<?php } ?>

								<?php
									$entries = get_post_meta( $id_telefones, 'wsg_telefone_items', true );

									foreach ( (array) $entries as $key => $entry ) {

										if ( isset( $entry['wsg_telefone_nmr'] ) ) {
											$wsg_telefone_nmr = $entry['wsg_telefone_nmr'];
										}
										if ( isset( $entry['wsg_telefone_titulo'] ) ) {
											$wsg_telefone_titulo = $entry['wsg_telefone_titulo'];
										}
										if ( isset( $entry['wsg_telefone_link'] ) ) {
											$wsg_telefone_link = $entry['wsg_telefone_link'];
										}
										if ( isset( $entry['wsg_telefone_icone'] ) ) {
											$wsg_telefone_icone = $entry['wsg_telefone_icone'];
										}
								?>
									<li>
										<a href="<?php echo $wsg_telefone_link; ?>">
											<i class="flaticon-whatsapp"></i><?php echo $wsg_telefone_titulo; ?>
											<span class="at-footer__number__phone"><?php echo $wsg_telefone_nmr; ?></span>
										</a>
									</li>
								<?php } ?>
							</ul>

							<div class="at-footer__newsletter">
								<h4>Subscribe Newsletter</h4>

								<div class="footer__newsletter__input">
									<form>
										<input type="text" placeholder="Your email address">
										<button><i class="flaticon-marketing-de-email"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="at-footer__copy">
					<p>© 2023 - On the Go - Scooters Elétricas. Todos os direitos reservados</p>
				</div>
			</div>
		</section>
	</footer>

	<script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/efeitos.js"></script>

	<?php wp_footer(); ?>

</body>
</html>