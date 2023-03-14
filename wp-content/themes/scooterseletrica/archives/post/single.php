
	<?php
		if (have_posts()) : while (have_posts()) : the_post();
			$attachID = get_post_thumbnail_id(get_the_ID());
			$categories = get_the_terms( get_the_ID(), 'category' );
			$htmlCategory = '';
			if ( $categories && ! is_wp_error( $categories ) ){
				$draught_links = array();
				foreach ($categories as $category) {
					$item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" > '.$category->name.'</a>';
					array_push($draught_links, $item);
				}
				$htmlCategory = implode(' | ', $draught_links);
			}
	?>

	<section class="at-blog-single">
		<div class="container">
			<div class="row">
				
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
					<article class="at-blog__article">
						<div class="at-blog__article__img">
							<figure class="at-blog__article__img__top">
								<?php
									if (!empty(get_post_thumbnail_id())) {
										getImageThumb(get_post_thumbnail_id(), '750x400');
									} else{
								?>
									<img src="<?php bloginfo('template_url'); ?>/img/img-blog.jpg" alt="Imagem do blog">
								<?php
									}
								?>
							</figure>

							<div class="at-blog__article__img__date">
								<?php echo get_the_date('d', get_the_ID()); ?> <?php echo get_the_date('M', get_the_ID()); ?>, <?php echo get_the_date('Y', get_the_ID()); ?>
							</div>
						</div>

						<?php echo wpautop(the_content()); ?>

						<!-- <div class="at-blog__articleTxt">
							<p>Nisi quis eleifend quam adipiscing at vitae proin sagittis. Vulputate eu scel erisque felis imper diet. Vitae justo eget magna fermentum iaculis non diam phasellus. Et leo duis diam quam nulla. Diam donec adipi scing tristique risus nec feugiat consequat fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Sit amet nulla facilisi morbi.</p>

							<p>Nisl vel pretium lectus quam. Sed risus pretium quam vulputate dignissim suspendisse. Ultricies tristique nulla aliquet enim tortor nunc. Nulla posuere sollicitudin aliquam ultrices sagittis scelerisque purus.</p>
						</div>

						<div class="at-blog__articleTxt__box">
							<p>“After being forced to move twice within five years, our customers had a hard time finding us and our sales plummete he Trydus”</p>

							<div class="at-blog__articleTxt__box__autor">
								<p><cite>Higor paulo</cite> MANAGER</p>
							</div>
						</div>

						<div class="at-blog__articleTxt">
							<h3>Saticfied people’s say about our services</h3>
							<p>Aliquam erat volutpat. Integer malesuada turpis id fringilla suscipit. Maecenas ultrices, orci vitae convallis mattis, quam nulla vehicula felis, eu cursus sem tellus eget elit. Proin lacinia gravida elitThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages.</p>
						</div>

						<div class="at-blog__articleImg">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/img/img-blog.jpg" alt="">
							</figure>

							<figure>
								<img src="<?php bloginfo('template_url'); ?>/img/img-blog.jpg" alt="">
							</figure>
						</div>

						<ul class="at-blog__article__list">
							<li><span></span>Detachable battery, take home and charge in 3 hours heir self-interest.</li>
							<li><span></span>Enjoy a hassle-free ride by charging just for 3 hours.</li>
							<li><span></span>Preparing for your success we provide truly Develop and Propose.</li>
						</ul>

						<div class="at-blog__articleTxt">
							<p>Aliquam erat volutpat. Integer malesuada turpis id fringilla suscipit. Maecenas ultrices, orci vitae convallis mattis, quam nulla vehicula felis, eu cursus sem tellus eget elit. Proin lacinia gravida elitThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover.</p>
						</div> -->
					</article>

					<div class="at-blog-comments">
						<h3 class="at-blog-comments__title">2 Replies to “Energy Star Certified Electric Vehicle Chargers”</h3>

						<div class="at-blog-comments__box">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/img/avata-blog.png" alt="">
							</figure>

							<div class="at-blog-comments__box__content">
								<div class="at-blog-comments__box__content__header">
									<span><a class="comments__author" href="#">Higor Paulo</a></span>
	
									<span><a class="comments__date" href="#">3 years ago</a></span>
								</div>

								<div class="at-blog-comments__box__content__body">
									<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

									<a class="btn-main_page" href="#"><i class="flaticon-voltar"></i> Replay</a>
								</div>
							</div>
						</div>

						<div class="at-blog-comments__box__form">
							<div class="at-blog-comments__box__form__header">
								<h2>Leave a Reply</h2>

								<span>Your email address will not be published. Required fields are marked *</span>
							</div>

							<form>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<textarea name="" id="" cols="30" rows="10" placeholder="Enter your comment here..."></textarea>
									</div>

									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
										<input type="text" placeholder="Name">
									</div>

									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
										<input type="email" placeholder="Email">
									</div>

									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
										<input type="url" placeholder="Website">
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 checkbox__form">
										<input type="checkbox">
										<label>Save my name, email, and website in this browser for the next time I comment.</label>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<button class="btn-main_page">Post comment</button>
									</div>

								</div>
							</form>
						</div>

					</div>
				</div>
				<?php
					get_sidebar();
				?>
			</div>
		</div>
	</section>

	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	