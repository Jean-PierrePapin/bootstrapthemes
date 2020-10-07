<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">

		<?php 
		
		/**
		 * WP_Query class use to display the last 3 image showcases
		 */
		$args = [
			'post_type'			=>	'showcase',
			'nopaging'			=>	false,
			'posts_per_page'	=>	'3',
			'order'				=>	'ASC',
			'orderby'			=>	'ID'
		];

		$query = new WP_Query( $args );
		

		if( $query->have_posts() ) {
			$i = 0;

			while( $query->have_posts() ) {
				$query->the_post();
				

				if( ( $i % 2 ) == 0 ) { 
					?>

					<div class="row no-gutters">
						<div class="col-lg-6 order-lg-2 text-white showcase-img">
							<img src="<?php echo get_the_post_thumbnail(); ?>" alt="">
						</div>
						<div class="col-lg-6 order-lg-1 my-auto showcase-text">
							<h2><?php echo get_the_title(); ?></h2>
							<p class="lead mb-0">
								<?php echo get_the_content(); ?>
							</p>
						</div>
					</div>

					<?php
					$i += 1;
				} elseif ( ! ( $i % 2 ) == 0 ) {
					?>

					<div class="row no-gutters">
						<div class="col-lg-6 text-white showcase-img" >
							<img src="<?php echo get_the_post_thumbnail(); ?>" alt="">
						</div>
						<div class="col-lg-6 my-auto showcase-text">
							<h2><?php echo get_the_title(); ?></h2>
							<p class="lead mb-0">
								<?php echo get_the_content(); ?>
							</p>
						</div>
					</div>

					<?php
					$i += 1;
				}
			}

		} else {

			echo '<div class="container"><div class="row"><div class="justify-content-center">No posts found which match your query!</div><div><div>';

		}

		?>
	
		</div>
  </section>