<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
		<h2 class="mb-5">What people are saying...</h2>

		<div class="row">

			<?php

			/**
			 * WP_Query class use to display the last 3 testimonies
			 */
			$args2 = [
				'post_type'			=>	'testimonial',
				'nopaging'			=>	false,
				'posts_per_page'	=>	'3',
				'order'				=>	'ASC',
				'orderby'			=>	'ID'
			];

			$secondary_query = new WP_Query( $args2 );

			if( $secondary_query->have_posts() ) {
				while( $secondary_query->have_posts() ) {
					$secondary_query->the_post();
					?>

					<div class="col-lg-4">
						<div class="testimonial-item mx-auto mb-5 mb-lg-0">
							<?php echo get_the_post_thumbnail(
								$secondary_query->post_id,
								[],
								['class' => 'img-fluid rounded-circle mb-3']
							); ?>
							<h5><?php echo get_the_title(); ?></h5>
							<p class="font-weight-light mb-0"><?php echo get_the_content(); ?></p>
						</div>
					</div>

					<?php
				}
			} else {

				echo '<div class="container"><div class="row"><div class="justify-content-center">No posts found which match your query!</div><div><div>';

			}

			?>

      	</div>
    </div>
</section>