<!-- sidebar -->
<aside class="sidebar" role="complementary">

		
	
		<?php if ( in_category('cat-actualidad') ) {?>
		<?php //$wp_query = new WP_Query( array( 'post_type' => '', 'category_name' => 'cat-actualidad','posts_per_page' => 100 )); ?>
		
		<?php //get_template_part( 'loop', 'sidebar-category' ); ?>
		
		<div class="sidebar-widget">
		<h4>Actualidad</h4>
		<!-- menu extra -->
			<?php html5blank_nav3(); ?>
		<!-- /menu extra -->
		
		
			<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
		
		<?php }?>

		
		<?php if ( !in_category('cat-actualidad') ) {?>
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	
		<?php }?>

</aside>
<!-- /sidebar -->
