	<section class="at-breadcrumb">
        <div class="container">
            <div class="at-breadcrumb__box">
                <?php if ( is_single() ) { ?>
					<h1><?php the_title(); ?></h1>
				<?php } ?>

                <?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p class="at-breadcrumb__box__list">','</p>');
					}
				?>
            </div>
        </div>
    </section>