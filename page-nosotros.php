<?php get_header(); ?>

	<main role="main">

		<!-- TOP BANNER -->
    <?php get_template_part('topBanner'); ?>
		<!-- TOP BANNER -->

		<!-- section -->
		<section class="homeContainer">

			<div class="homeMain">
        <div class="us-nav">
          <ul>
            <li><a href="<?php echo get_bloginfo('template_url') ?>/quienes-somos/">Quiénes Somos</a></li>
            <li><a href="<?php echo get_bloginfo('template_url') ?>/lugares-de-distribucion/">Lugares de distribución</a></li>
            <li><a href="<?php echo get_bloginfo('template_url') ?>/contacto/">Contacto</a></li>
          </ul>

        </div>

        <div class="us">

            <div class="us-whoAreWe">
              <a href="<?php echo get_bloginfo('template_url') ?>/quienes-somos/">
                <div style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo get_bloginfo('template_url') ?>/img/static/quienes-somos.jpg)" class="us-container">
                  <h2>¿Quiénes Somos?</h2>
                </div>
              </a>
            </div>

						<div class="us-contact">
							<a href="<?php echo get_bloginfo('template_url') ?>/contacto/">
								<div style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo get_bloginfo('template_url') ?>/img/static/contacto.jpg)" class="us-container">
									<h2>Contacto</h2>
								</div>
							</a>
						</div>

						<div class="us-adverts">
							<a href="<?php echo get_bloginfo('template_url') ?>/paquetes-publicitarios/">
								<div style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo get_bloginfo('template_url') ?>/img/static/paquetes.jpg)" class="us-container">
									<h2>Paquetes Publicitarios</h2>
								</div>
							</a>
						</div>

            <div class="us-distribution">
              <a href="<?php echo get_bloginfo('template_url') ?>/lugares-de-distribucion/">
                <div style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo get_bloginfo('template_url') ?>/img/static/distribucion.jpg)" class="us-container">
                  <h2>Lugares de distribución</h2>
                </div>
              </a>
            </div>


        </div>

      </div>


      <div class="homeSideBar">
        <?php get_sidebar(); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
