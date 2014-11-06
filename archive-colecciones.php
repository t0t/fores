<?php get_header(); ?>
		<div class="container">
			
			<div class="row">
			
				<main role="main">
					<!-- section -->
					<section>
					
							<div class="col-md-12"><h1><?php _e( 'Colecciones', 'html5blank' ); ?></h1></div>
				
							<?php get_template_part('loop-colecciones'); ?>
			
						<?php get_template_part('pagination'); ?>
			
					</section>
					<!-- /section -->
				</main>
				
			</div>
			
		</div>

<?php get_footer(); ?>
