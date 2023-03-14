<?php

	// get_header();

	$id_page = get_the_ID();
?>

	<section class="at-banner-main">
		<div class="container">
			<div class="at-banner-main__box">
				<div class="at-banner-main__info">
					<h2 class="at-banner-main__title">Book Your New Eco-Friendly Ride.</h2>

					<div class="at-banner-main__info__icons">
						<div class="at-banner-main__info__icons__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="icone do banner">
							</figure>
							<h5>80 km/h</h5>
							<h6>Top speed</h6>
						</div>

						<div class="at-banner-main__info__icons__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="icone do banner">
							</figure>

							<h6>0-40 km/hr in</h6>
							<h5>3.3 sec</h5>
						</div>

						<div class="at-banner-main__info__icons__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="icone do banner">
							</figure>

							<h6>Certified Range</h6>
							<h5>T116 km</h5>
						</div>

					</div>

					<div class="at-banner-main__info__btn">
						<a class="btn-main_page" href="#">Book now <i class="flaticon-seta-direita"></i></a>
					</div>
				</div>

				<div class="at-banner-main__img">
					<figure>
						<img src="<?php bloginfo('template_url'); ?>/img/slider-img-01.png" alt="">
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section class="at-advantages">
		<div class="container">
			<header class="at-header__section__global">
				<span class="at-sub-title-main">WHAT WE DO!</span>

				<h2 class="at-title-main">
					What advantages will you get using an escooter?
				</h2>
			</header>

			<div class="at-advantages__box">
				<div class="at-advantages__box__left">

					<div class="at-advantages__box__info">
						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>

						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>
					</div>

					<div class="at-advantages__box__info">
						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>

						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>
					</div>

					<div class="at-advantages__box__info">
						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>

						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>
					</div>

				</div>

				<div class="at-advantages__box__center">
					<figure>
						<img src="<?php bloginfo('template_url'); ?>/img/img-scooter.png" alt="">
					</figure>
				</div>

				<div class="at-advantages__box__rigth">
					<div class="at-advantages__box__info">

						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>

						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>

					</div>

					<div class="at-advantages__box__info">
						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>

						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>
					</div>

					<div class="at-advantages__box__info">
						<div class="at-advantages__box__infoIcon">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/svg/velocimetro.svg" alt="">
							</figure>
						</div>

						<div class="at-advantages__box__infoTxt">
							<h3>Recoverable energy</h3>
							<p>Charge your electric vehicle at home using one of our smart.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-tabs-product">
		<div class="container">
			<header class="at-header__section__global">
				<span class="at-sub-title-main">Look at available scooters & Bikes for you</span>
				<h2 class="at-title-main">
					Our Renting Fleet
				</h2>
			</header>

			<ul class="nav" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
						Moto
					</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
						Bicycles
					</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
						Electro
					</button>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

					<div class="swiper at-product-carousel">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>

										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>

										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>

										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

				<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
					<div class="swiper at-product-carousel">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>
											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>
											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

				<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

					<div class="swiper at-product-carousel">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>
											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="at-product-carousel__box">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/img-procut-home.png" alt="imagem produto">
									</figure>

									<div class="at-product-carousel__content">
										<header>
											<span>Model 2017</span>

											<h3><a href="#">Storm Scoter</a></h3>
										</header>
										<ul class="at-product-carousel__list">
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
											<li><i class="flaticon-diamante"></i> Maximum comfort for urban mobility</li>
										</ul>
										<div class="at-shop__product__card__price">
											<span>$89</span>
										</div>
										<div class="at-shop__product__card__btn">
											<a class="btn-main_page02" href="#">
												Add to cart 
												<i class="flaticon-seta-direita"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-info-date">
		<div class="container">

			<div class="at-info-date__numbers">
				<div class="row">

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="at-info-date__numbers__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/./svg/patinete.svg" alt="">
							</figure>

							<div class="at-info-date__numbers__content">
								<h4>3870</h4>
								<span>Scoter & Bikes</span>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="at-info-date__numbers__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/./svg/patinete.svg" alt="">
							</figure>

							<div class="at-info-date__numbers__content">
								<h4>3870</h4>
								<span>Scoter & Bikes</span>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="at-info-date__numbers__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/./svg/patinete.svg" alt="">
							</figure>

							<div class="at-info-date__numbers__content">
								<h4>3870</h4>
								<span>Scoter & Bikes</span>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="at-info-date__numbers__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/./svg/patinete.svg" alt="">
							</figure>

							<div class="at-info-date__numbers__content">
								<h4>3870</h4>
								<span>Scoter & Bikes</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-product-accessories">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="at-product-accessories__carousel">
						<header>
							<h2>Titulo aqui</h2>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</header>
						<div class="swiper at-accessories__carousel">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="at-accessories__carousel__box">
										<figure>
											<img src="<?php bloginfo('template_url'); ?>/img/product02-min.png" alt=" ">
										</figure>
										<h3>Storm Scoter</h3>
										<div class="at-product-accessories_price">
											<span class="at-price__old">$69</span>
											<span class="at-price__new">$69</span>
										</div>
										<div class="at-product-accessories__off">
											<span>40%</span>
											<span>Off</span>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="at-accessories__carousel__box">
										<figure>
											<img src="<?php bloginfo('template_url'); ?>/img/product02-min.png" alt=" ">
										</figure>
										<h3>Storm Scoter</h3>
										<div class="at-product-accessories_price">
											<span class="at-price__old">$169</span>
											<span class="at-price__new">$119</span>
										</div>
										<div class="at-product-accessories__off">
											<span>40%</span>
											<span>Off</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="at-product-accessories__box">
						<header>
							<h2>Titulo aqui</h2>
						</header>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
								<div class="at-product-accessories__box__inner">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/product01-min.png" alt="">
									</figure>
									<h3>Storm Scoter</h3>
									<div class="at-product-accessories_price">
										<span class="at-price__old">$169</span>
										<span class="at-price__new">$119</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="at-cta">
		<div class="at-cta__box">
			<div class="at-cta__box__info">
				<h6>Call us to reserve your RV with us</h6>
				<h5>7-234-567-8901</h5>
			</div>

			<div class="at-cta__box__separator">
				<span>OR</span>
			</div>

			<div class="at-cta__box__btn">
				<a href="#">Book Online Today <i class="flaticon-seta-direita"></i></a>
			</div>
		</div>
	</section>

	<section class="at-instagram">
		<header class="at-header__section__global">
			<span class="at-sub-title-main">Instagram</span>

			<h2 class="at-title-main">
				Share your experience
			</h2>
		</header>
	</section>

	<section class="at-testimony">
		<div class="container">
			<header class="at-header__section__global">
				<span class="at-sub-title-main">TESTIMONIALS</span>

				<h2 class="at-title-main">
					What Client's Say about
				</h2>
			</header>
			<div class="at-testimony__box">
				<div class="swiper at-testimony__carousel">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="at-testimony__carousel__box">
								<p>After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business</p>

								<ul class="at-avaliation_star">
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
								</ul>

								<div class="at-testimony__carousel__author">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/testimonial-02.jpg" alt="">
									</figure>

									<div class="at-testimony__carousel__author__content">
										<h5>Higor Paulo</h5>
										<span>Desenvolvedor</span>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="at-testimony__carousel__box">
								<p>After being forced to move twice within five years, our customers had a hard time finding us and our sales plummeted. The Trydus Co. not only revitalized our brand, but saved our nearly 100-year-old family business</p>

								<ul class="at-avaliation_star">
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
									<li><i class="flaticon-estrela"></i></li>
								</ul>

								<div class="at-testimony__carousel__author">
									<figure>
										<img src="<?php bloginfo('template_url'); ?>/img/testimonial-02.jpg" alt="">
									</figure>

									<div class="at-testimony__carousel__author__content">
										<h5>Higor Paulo</h5>
										<span>Desenvolvedor</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</section>

<?php //get_footer(); ?>