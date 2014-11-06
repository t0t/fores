<?php get_header(); ?>

		<main role="main">
		
		<!-- section -->
		<section>
				

			<?php //layerslider(1, 'my-custom-post-title'); ?>
			<?php //echo do_shortcode('[layerslider id="12"]'); 
			get_template_part('slider-ambientes'); ?>
			

		<!-- JUVENILES -->
		<?php if ( is_category('cat-juveniles') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'cat-juveniles', 'posts_per_page' => 100 )); ?>
			
		<?php }?>
		
		<?php if ( is_category('estanterias-juveniles') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'estanterias-juveniles','posts_per_page' => 100 )); ?>
		<?php }?>
		
		 <?php if ( is_category('camas-juveniles') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'camas-juveniles','posts_per_page' => 100 )); ?>
		<?php }?>
		
		 <?php if ( is_category('armarios-juveniles') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'armarios-juveniles','posts_per_page' => 100 )); ?>
		<?php }?>



       <!-- ORDENACION -->
	   	<?php if ( is_category('cat-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'cat-ordenacion', 'posts_per_page' => 100 )); ?>
			<div class="alto0">
				<?php layerslider(2); ?>
				<?php //putRevSlider("test") ?>
			</div>
		<?php }?>
		
		<?php if ( is_category('comodas-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'comodas-ordenacion', 'posts_per_page' => 100 )); ?>
		<?php }?>
		
		
		<?php if ( is_category('mesitas-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'mesitas-ordenacion','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('multiusos-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'multiusos-ordenacion','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('armarios-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'armarios-ordenacion','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('zapateros-ordenacion') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'zapateros-ordenacion','posts_per_page' => 5 )); ?>
		<?php }?>
		
		
		
		<!-- HOME OFFICE -->
		<?php if ( is_category('cat-homeoffice') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'cat-homeoffice','posts_per_page' => 100 )); ?>
		<?php }?>
		
       <?php if ( is_category('estanterias-homeoffice') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'estanterias-homeoffice','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('mesasestudio-homeoffice') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'mesasestudio-homeoffice','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('despachos-homeoffice') ) {?>
		despachitos
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'despachos-homeoffice','posts_per_page' => 100 )); ?>
		<?php }?>		
		
		
	
		<!-- DORMITORIOS -->
		<?php if ( is_category('dormitorios') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'dormitorios','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('camas-dormitorios') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'camas-dormitorios','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('comodas-dormitorios') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'comodas-dormitorios','posts_per_page' => 100 )); ?>
		<?php }?>

		<?php if ( is_category('armarios-dormitorios') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'armarios-dormitorios','posts_per_page' => 100 )); ?>
		<?php }?>



       <!-- SALONES -->
		<?php if ( is_category('salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'salones','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('buffets-salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'buffets-salones','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('estanterias-salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'estanterias-salones','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('mueble-salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'mueble-salones','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('modulotv-salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'modulotv-salones','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('mesas-salones') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'mesas-salones','posts_per_page' => 100 )); ?>
		<?php }?>




		<!-- MUEBLE AUXILIAR -->
       <?php if ( is_category('cat-muebleauxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'cat-muebleauxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('canapes-auxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'canapes-auxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('mesascentro-auxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'mesascentro-auxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('modulostv-auxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'modulostv-auxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('recibidores-auxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'recibidores-auxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
		
		<?php if ( is_category('estanterias-auxiliar') ) {?>
		<?php $wp_query = new WP_Query( array( 'post_type' => 'mueble', 'category_name' => 'estanterias-auxiliar','posts_per_page' => 100 )); ?>
		<?php }?>
			
			
		<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<h3><?php _e( '', 'html5blank' ); single_cat_title(); ?></h3>
			</div>
		</div>
			
		<div class="row">
			
			<?php get_template_part( 'loop', 'category' ); ?>

			<?php get_template_part('pagination'); ?>
			
	    </div>
	       
		</div><!-- /container -->
	       
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
