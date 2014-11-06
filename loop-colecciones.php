			<?php if ( is_category('productos') ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_productos', 'posts_per_page' => 30 ) ); ?>
			<?php }?>

			<?php if ( is_category(array('dormitorios','armarios-dormitorios','camas-dormitorios','comodas-dormitorios')) ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_dormitorios', 'posts_per_page' => 30 ) ); ?>
			<?php }?>

			<?php if ( is_category(array('salones', 'mesas-salones','modulotv-salones','mueble-salones','estanterias-salones','buffets-salones')) ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_salones', 'posts_per_page' => 30 ) ); ?>
			<?php }?>
			
			<?php if ( is_category(array('cat-juveniles', 'estanterias-juveniles','camas-juveniles','armarios-juveniles')) ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_juveniles', 'posts_per_page' => 30 ) ); ?>
			<?php }?>
			
			<?php if ( is_category(array('cat-ordenacion', 'comodas-ordenacion','mesitas-ordenacion','multiusos-ordenacion','zapateros-ordenacion','armarios-ordenacion')) ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_ordenacion', 'posts_per_page' => 30 ) ); ?>
			<?php }?>
			
			<?php if ( is_category(array('cat-homeoffice','estanterias-homeoffice','mesasestudio-homeoffice','despachos-homeoffice')) ) {?>
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_homeoffice', 'posts_per_page' => 30 ) ); ?>
			<?php }?>																	 

			<?php if ( is_category(array('cat-muebleauxiliar','mesascentro-auxiliar','modulostv-auxiliar','recibidores-auxiliar','estanterias-auxiliar','canapes-auxiliar')) ) {?>			
			<?php query_posts( array ( 'post_type' => 'colecciones', 'category_name' => 'amb_auxiliar', 'posts_per_page' => 30 ) ); ?>
			<?php }?>
			
			
<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<div class="col-sm-6 col-md-4">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('ambientes'); ?>
		<?php endif; ?>
		<!-- /post thumbnail -->
				
		<?php edit_post_link('.'); ?>
		</div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>