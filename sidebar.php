<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<!-- SIDE BANNER BIG -->
	<?php get_template_part('sideBannerBig'); ?>
	<!-- SIDE BANNER BIG-->

	<hr>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<hr>

	<!-- SIDE BANNER SMALL 1 -->
	<?php get_template_part('sideBannerSmall1'); ?>
	<!-- SIDE BANNER SMALL 1-->

	<hr>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

	<hr>

	<!-- SIDE BANNER SMALL 2 -->
	<?php get_template_part('sideBannerSmall2'); ?>
	<!-- SIDE BANNER SMALL 2-->

	<hr>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
	</div>



</aside>
<!-- /sidebar -->
