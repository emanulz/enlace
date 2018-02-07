<?php get_header(); ?>

	<main role="main">

		<!-- TOP BANNER -->
		<?php get_template_part('topBanner'); ?>
		<!-- TOP BANNER -->

		<!-- section -->
		<section class="homeContainer">


			<!-- <div class='recentBar'></div> -->

			<div class="homeMain">
				<!-- START OF FIRST SECTION, HOME SLIDER FEATURED POST -->
				<div class="homeSlider">
        <?php
          $do_not_duplicate = array();
          $args = array(
              'posts_per_page' => 6,
              'offset' => 0,
              'category_name' => 'destacadaprincipal',
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post',
              'post_status' => 'publish',
              'suppress_filters' => true,
              'post__not_in' => $do_not_duplicate
            );

          $the_query = new WP_Query( $args );
          //$the_query->the_post();
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
						// array_push($do_not_duplicate, $post->ID);
            $do_not_duplicate[] = $post->ID;
          ?>

	            <div class="homeMain-featured">


	                  <div class="homeMain-featured-tittle">
	                    <!-- post title -->
	                    <h1>
	    									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	    								</h1>
	                    <!-- /post title -->
	                  </div>
	                  <div class="homeMain-featured-container">

	                    <div class="homeMain-featured-container-exerpt">
	                      <!-- post excerpt -->
	                      <?php html5wp_excerpt('enlace_exerpt_60'); // Build your custom callback length in functions.php ?>
	                      <!-- post excerpt -->
	                      <!-- post details -->
	                      <i class="fa fa-calendar-o"></i>
	                      <span class="date"><?php the_time('j F, Y'); ?> <?php the_time('g:i a'); ?></span>
	                      <!-- /post details -->
	                    </div>
	                    <div class="homeMain-featured-container-image">
	                      <!-- post thumbnail -->
	      								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
	      									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	      										<?php the_post_thumbnail('enlace-medium'); // Declare pixel size you need inside the array ?>
	      									</a>
	      								<?php endif; ?>
	      								<!-- /post thumbnail -->
	                    </div>
	                  </div>

	            </div>


          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
				</div>
				<!-- END OF FIRST SECTION HOME SLIDER, FEATURED POST -->
				<!-- START OF SECOND SECTION, THREE POSTS -->
				<div class="homeMain-featuredSecond">

				<?php

					$args = array(
							'posts_per_page' => 3,
							'offset' => 0,
							'category_name' => 'destacadasecundaria',
							'orderby' => 'date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'suppress_filters' => true,
							'post__not_in' => $do_not_duplicate
						);

					$the_query = new WP_Query( $args );
					//$the_query->the_post();
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
						// array_push($do_not_duplicate, $post->ID);
						$do_not_duplicate[] = $post->ID;
					?>

					<div class="homeMain-featuredSecond-item">

						<div class="homeMain-featuredSecond-item-image">
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('enlace-medium'); // Declare pixel size you need inside the array ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
						</div>

							<i class="fa fa-calendar-o"></i>
							<span class="date"><?php the_time('j F, Y'); ?> <?php the_time('g:i a'); ?></span>

							<!-- post title -->
							<div class="homeMain-featuredSecond-item-tittle">
								<h2>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
							</div>
							<!-- /post title -->
							<div class="homeMain-featuredSecond-item-exerpt">
								<?php html5wp_excerpt('enlace_exerpt_20'); // Build your custom callback length in functions.php ?>
							</div>



					</div>


				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
				</div>

				<!-- END OF SECOND SECTION, THREE POSTS -->

        <div class="homeMain-latestSix">

          <div class="homeMain-latestSix-posts">

          <?php

              $args = array(
              'posts_per_page' => '6',
              'offset' => 0,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post',
              'post__not_in' => $do_not_duplicate
              );

              $query = new WP_Query( $args );

              if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                $query->the_post();
								// array_push($do_not_duplicate, $post->ID);
                $do_not_duplicate[] = $post->ID;
            ?>
                <article>
                  <div class="homeMain-latestSix-posts-image">
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('enlace-small'); // Declare pixel size you need inside the array ?>
                      </a>
                    <?php endif; ?>
                    <!-- /post thumbnail -->
                  </div>

                  <div class="homeMain-latestSix-posts-data">
                    <h3>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <i class="fa fa-calendar-o"></i>
                    <span class="date"><?php the_time('j F, Y'); ?> <?php the_time('g:i a'); ?></span>
                  </div>
                </article>



            <?php
                } //while
              }//if
              wp_reset_postdata();
            ?>

          </div>


        </div>

        <div class="homeMain-brunca">

        <h1>En la región Brunca</h1>

        <div class="homeMain-brunca-posts">

        <?php
          $categories = array("buenosaires", "corredores", "cotobrus", "golfito",
                              "osa", "perezzeledon" );


          foreach ( $categories as $category ) {

            $args = array(
            'posts_per_page' => '1',
            'offset' => 0,
            'category_name' => $category,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post__not_in' => $do_not_duplicate
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {

              while ( $query->have_posts() ) {

              $query->the_post();
							//array_push($do_not_duplicate, $post->ID);
              $do_not_duplicate[] = $post->ID;
          ?>
              <article>
								<div class="homeMain-brunca-posts-title">
	                <h3>
	                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	                </h3>
								</div>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('enlace-small'); // Declare pixel size you need inside the array ?>
                  </a>
                <?php endif; ?>
                <!-- /post thumbnail -->

              </article>


          <?php
              } //while
            }//if
            wp_reset_postdata();
            }//for each
          ?>

        </div>

        </div>
			</div>
			<!-- Container -->

			<div class="homeSideBar">
        <?php get_sidebar(); ?>
			</div>

		</section>
		<!-- /section -->
	</main>




<?php get_footer(); ?>
