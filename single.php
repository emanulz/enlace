<?php get_header(); ?>

	<main role="main">
		<section class="homeBanner">

			<img src="<?php echo get_bloginfo('template_url') ?>/img/adds/1.png" alt="">

		</section>
	<!-- section -->
		<section class="singleContainer">

			<div class="singleMain">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="singleMain-header">
							<!-- post title -->
							<h1>
								<?php the_title(); ?>
							</h1>
							<!-- /post title -->
							<div class="singleMain-header-bottom">
								<div class="singleMain-header-bottom-time">
									<!-- post details -->
									<i class="fa fa-calendar-o"></i>
									<span class="date"><?php the_time('j F, Y'); ?> <?php the_time('g:i a'); ?></span>
									<!-- /post details -->
								</div>
								<div class="singleMain-header-bottom-social">
									<?php echo do_shortcode('[ssba-buttons]'); ?>
								</div>
							</div>
						</div>

						<div class="singleMain-image">
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

								<?php the_post_thumbnail('enlace-medium'); // Fullsize image for the single post ?>

							<?php endif; ?>
							<!-- /post thumbnail -->
						</div>

						<div class="singleMain-content">
							<?php the_content(); // Dynamic Content ?>
						</div>

						<div class="singleMain-info">

							<div class="singleMain-info-share">
								<span>Comparte en tus redes sociales: </span>
								<?php echo do_shortcode('[ssba-buttons]'); ?>
							</div>

							<!--
							<div class="singleMain-info-author">
								<p><?php //_e( 'Publicado por ', 'html5blank' ); the_author(); ?></p>
							</div> -->

							<div class="singleMain-info-tags">
								<span>Etiquetas:</span>
								<?php the_tags( __( '', 'html5blank' ), ' ',''); // Separated by commas with a line break at the end ?>
							</div>

							<div class="singleMain-info-category">
								<span>Categorías Relacionadas:</span>
								<p><?php _e( '', 'html5blank' ); the_category(''); // Separated by commas ?></p>
							</div>

							<div class="singleMain-info-related">
								<?php get_template_part('relatedNoImage'); ?>
							</div>


						</div>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

			</div>
			<!-- /Single Main -->
			<div class="singleSideBar">
				<?php get_sidebar(); ?>
			</div>
			<!-- /Single Side Bar -->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
