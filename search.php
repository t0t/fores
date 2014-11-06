<?php get_header(); ?>
	<main role="main">
	<section>


	<div class="container">
	
	<div class="row"><h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1></div>
<div class="row">
		
			
			<?php get_template_part('loop-search'); ?>

</div>
	</div>
			<?php get_template_part('pagination'); ?>
					</section>

		</main>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
