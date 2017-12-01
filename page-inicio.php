<?php get_header(); ?>

	<main role="main">
    <section class="homeBanner">

      <img src="<?php echo get_bloginfo('template_url') ?>/img/adds/1.png" alt="">

    </section>
		<!-- section -->
		<section class="homeContainer">

			<div class="homeMain">
        <?php
          $do_not_duplicate = array();
          $args = array(
              'posts_per_page' => 1,
              'offset' => 0,
              'category_name' => 'destacada',
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
                      <?php html5wp_excerpt('enlace_exerpt_40'); // Build your custom callback length in functions.php ?>
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
      										<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
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

        <div class="homeMain-featuredSecond">

        </div>

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
                $do_not_duplicate[] = $post->ID;
            ?>
                <article>
                  <div class="homeMain-latestSix-posts-image">
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
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
          $categories = array("bruncabuenosaires", "bruncacorredores", "bruncacotobrus", "bruncagolfito",
                              "bruncaosa", "bruncaperezzeledon" );


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
              $do_not_duplicate[] = $post->ID;
          ?>
              <article>
                <h3>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
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
