<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<!-- SIDE BANNER BIG -->
	<?php get_template_part('sideBannerBig'); ?>
	<!-- SIDE BANNER BIG-->

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<!-- SIDE BANNER SMALL 1 -->
	<?php get_template_part('sideBannerSmall1'); ?>
	<!-- SIDE BANNER SMALL 1-->

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

	<!-- SIDE BANNER SMALL 2 -->
	<?php get_template_part('sideBannerSmall2'); ?>
	<!-- SIDE BANNER SMALL 2-->

</aside>
<!-- /sidebar -->
