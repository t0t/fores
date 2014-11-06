<?php /* Template Name: Las Novedades */ get_header(); ?>
<div class="container">
<div class="row">
	<div class="col-md-12">
	
		<main role="main">
		<!-- section -->
		<section>
		<h1><?php the_title(); ?></h1>
		<?php get_template_part('loop-lasnovedades'); ?>
		</section>
		</main>
	</div>
</div>
</div>


	
<?php get_footer(); ?>
