<?php get_header(); ?>

	<main role="main">
	<!-- section -->
		<section>

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

								<?php the_post_thumbnail(); // Fullsize image for the single post ?>

							<?php endif; ?>
							<!-- /post thumbnail -->
						</div>

						<div class="singleMain-content">
							<?php the_content(); // Dynamic Content ?>
						</div>

						<div class="singleMain-info">
							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

							<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

							<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

						</div>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						<div class="singleMain-comments">
							<?php comments_template(); ?>
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
			</div>
			<!-- /Single Side Bar -->
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
