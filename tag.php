<?php get_header(); ?>

	<main role="main">
		<section class="homeBanner">

			<img src="/enlace/wp-content/uploads/2017/11/Captura-de-pantalla-2017-11-28-a-las-21.22.28.png" alt="">

		</section>
		<h1>Publicaciones etiquetadas como: <?php echo single_tag_title('', false); ?></h1>
		<!-- section -->
		<section class="categoryContainer">


			<div class="categoryMain">
				<!-- THE LOOP -->
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="categoryMain-image">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->
							</div>

							<div class="categoryMain-data">
								<!-- post title -->
								<h1>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h1>
								<!-- /post title -->


								<?php html5wp_excerpt('enlace_exerpt_60'); // Build your custom callback length in functions.php ?>

								<!-- post details -->
								<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<!-- /post details -->

								<?php edit_post_link(); ?>

							</div>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'No hay publicaciones para mostrar.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>

				<!-- THE LOOP -->

				<?php get_template_part('pagination'); ?>

			</div>
			<!-- Container -->

			<div class="categorySideBar">
				<?php get_sidebar(); ?>

			</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
