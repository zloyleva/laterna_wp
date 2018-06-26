<?php get_header(); ?>

	<!-- Blog container start -->
	<div class="container-fluid contact-section brown">
		<div class="row">
			<div class="container my-5">
				<div class="row my-2">
					<div class="col div-img text-center">
						<img src="<?= get_template_directory_uri()?>/images/divi.png" alt="">
					</div>
				</div>
				<div class="row mb-2">
					<h2 class="text-center w-100"><?php _e('Blog Posts', 'laterna')?></h2>
				</div>


				<div class="row articles">

					<?php
					$paged = get_query_var( 'page' ) ? absint( get_query_var( 'page' ) ) : 1;

					$query = new WP_Query( [
						'posts_per_page' => 6,
						'post_status' => 'publish',
						'orderby'     => 'date',
						'order'       => 'DESC',
						'post_type'   => 'post',
						'suppress_filters' => true,
						'paged' => $paged,
					] );

					while ( $query->have_posts() ) {
						$query->the_post();
						?>

						<div class="col-md-4 article">
							<div class="thumbnail row my-2">
								<a class="col" href="<?= get_permalink()?>"><img class="w-100" src="<?= the_post_thumbnail_url('full')?>" alt=""></a>
							</div>
							<div class="row">
								<div class="col-12 w-100">
									<h5 class="title display-6"><a href="<?= get_permalink()?>"><?php the_title(); ?></a></h5>
									<p class="excerpt"><?php the_excerpt()?></p>
								</div>
								<div class="col-12 w-100 footer">
									<div class="row">
										<div class="col-auto">
											<i class="fa fa-clock-o" aria-hidden="true"></i> <?= get_the_date(__('F d, Y', 'laterna')) ?>
										</div>
										<div class="col-auto">
											<i class="fa fa-user" aria-hidden="true"></i> <?php the_author()?>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php
					}
					wp_reset_postdata()
					?>
				</div>

				<div class="row pagination justify-content-center">

					<!--	Pagination start		-->
					<?php

					$big = "999999999";
					$link_template = get_pagenum_link( $big );

					$getLink = substr($link_template, 0, strpos($link_template, $big) + strlen($big));

					$pagination = [
						'base'         => str_replace( "/page/{$big}", '?page=%#%', $getLink ),
						'format'  => '%#%',
						'current' => max( 1, get_query_var('page') ),
						'total'   => $query->max_num_pages,
						'prev_next' => false,
						'mid_size' => 1,
						'type' => 'array'
					];

					$paginationCollection = paginate_links( $pagination );

					if(is_array($paginationCollection)){
						$paginationCollection = array_map( function ( $item ) {
							$item = str_replace( "page-numbers", "page-link", $item );

							return "<li class='page-item'>{$item}</li>";
						}, $paginationCollection );


						?>
						<ul class="pagination my-5">
							<?php echo implode("\n", $paginationCollection);?>
						</ul>
					<?php }?>
					<!--	Pagination end		-->

				</div>


			</div>
		</div>
	</div>
	<!-- Blog container end -->

<?php get_footer(); ?>