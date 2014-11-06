<!-- sidebar -->
<aside class="sidebar" role="complementary">

		
								
	<section>
						
			
			<h5><?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' ); ?></h5>		
		
			<!-- begin custom related loop, isa -->
	  
	        <?php
	          
	        // get the custom post type's taxonomy terms
	          
	        $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
	        // arguments
	        $args = array(
	        'post_type' => 'mueble',
	        'post_status' => 'publish',
	        'posts_per_page' => 20, // you may edit this number
	        'orderby' => 'rand',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'category',
	                'field' => 'id',
	                'terms' => $custom_taxterms
	            )
	        ),
	        'post__not_in' => array ($post->ID),
	        );
	        $related_items = new WP_Query( $args );
	        
	        // loop over query
	        if ($related_items->have_posts()) :
	        
	        echo '<div class="jcarousel">
	        <ul>';
	        while ( $related_items->have_posts() ) : $related_items->the_post();
	        ?>
	            <li><a class="btn btn-default" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			            <?php if ( has_post_thumbnail()) : ?>
			    		<?php the_post_thumbnail( 'galeria' ); ?>
						<?php endif; ?><br>
						<small><?php the_title(); ?></small>
				</a></li>
	        <?php
	        endwhile;
	        echo '</ul>';
	        endif;
	        // Reset Post Data
	        wp_reset_postdata();
	        ?>
			<!-- Prev/next controls -->
			<a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true"><span class="el-icon-chevron-left"></span></a>
			<a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><span class="el-icon-chevron-right"></span></a>
  
			<!-- end custom related loop, isa -->
										
			</section><!-- .grid-container -->
			
			
			
			
			<section>
			
			<?php if(in_array('blancobrillo', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'blanco-brillo', 'posts_per_page' => 50 )); ?>
			
			<h5>Blanco Brillo</h5>
			<?php endif; ?>			

			<?php if(in_array('wengue', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'wengue-2', 'posts_per_page' => 50 )); ?>
			
			<h5>Wengu&eacute;</h5>
			<?php endif; ?>	
			
			<?php if(in_array('grisceniza', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'gris-ceniza', 'posts_per_page' => 50 )); ?>
			<h5>Gris Ceniza</h5>
			<?php endif; ?>	
			
			<?php if(in_array('castano', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'castano2', 'posts_per_page' => 50 )); ?>
			<h5>Casta&ntilde;o</h5>
			<?php endif; ?>	
			
			<?php if(in_array('negrobrillo', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'negro-brillo', 'posts_per_page' => 50 )); ?>
			
			<h5>Negro Brillo</h5>
			<?php endif; ?>	
			
			<?php if(in_array('nuez', get_field('muestra') )): ?>
			<?php query_posts( array( 'post_type' => 'mueble', 'category_name' => '', 'filtros' => 'nuez', 'posts_per_page' => 50 )); ?>
			
			<h5>Nuez</h5>
			<?php endif; ?>	
	
            
            
			<div class="jcarousel">

			<ul>
        	<?php while (have_posts()) : the_post(); ?>
		
	            <li><a class="btn btn-default" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail()) : ?>
    		<?php the_post_thumbnail( 'galeria' ); ?>
			<?php endif; ?>
			<small><?php the_title(); ?></small>
	            </a>
			</li>
			
			<?php endwhile; ?>
			</ul><!-- #mycarousel2 -->
			<?php wp_reset_query(); ?>
			<!-- Prev/next controls -->
            <a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true"><span class="el-icon-chevron-left"></span></a>
            <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><span class="el-icon-chevron-right"></span></a>
			</div><!-- .carruselpeque -->
			</section><!-- .grid-container -->
			

			
			
			
			<section>
			
			<h5>Colecciones</h5>
			
			<div class="coleccions">

			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=alida">Alida</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=apilable">Apilable</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=kristal">Kristal</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=touch">Touch</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=dahlia">Dahlia</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=basic">Basic</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=cyka">Cyka</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=nexus">Nexus</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=otto">Otto</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=theo">Theo</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=multimedia">Multimedia</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=kolor">Kolor</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=extrema">Extrema</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=athena">Athena</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=syrah">Syrah</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=aikos">Aikos</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=estil">Estil</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=iplash">iPlash</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=iplay">iPlay</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=ijoy">iJoy</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=kendra">Kendra</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=aura">Aura</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=warda">Ward.a</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=warde">Ward.e</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=tempus">Tempus</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=stand">Stand</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=stylus">Stylus</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=adhara">Adhara</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=kikua">Kikua</a></button>
			<button class="btn btn-default btn-xs"><a href="http://fores.es/?s=kube">Kube</a></button>

			</div>
			
			<!-- begin custom related loop, isa -->
 
		<?php
 
		// get the custom post type's taxonomy terms
		$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
		
		// arguments
		$args = array(
		'post_type' => 'mueble',
		'post_status' => 'publish',
		'posts_per_page' => 10, // you may edit this number
		'orderby' => 'ASC',
		'tax_query' => array(
    	array(
        'taxonomy' => 'coleccion',
        'field' => 'id',
        'terms' => $custom_taxterms
    	)
		),
		'post__not_in' => array ($post->ID),
		);
		$related_items = new WP_Query( $args );
		
		// loop over query
		if ($related_items->have_posts()) :
		echo '<ul>';
		while ( $related_items->have_posts() ) : $related_items->the_post();
		?>
		
    	<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		
		<?php
		endwhile;
		echo '</ul>';
		endif;
		// Reset Post Data
		wp_reset_postdata();
		?>
 
 
		<!-- end custom related loop, isa -->
		
		
		
		</section>
		
		
		
    <?php //wp_list_categories('taxonomy=filtros'); ?>

		
		
		
	
	
	
	
	
		

		
		
		
		
		
		
		
		
			<?php if ( is_singular( array( 'colecciones', '' ) ) ) {?>
		
		
		
			<div class="grid-90 push-10">
			
				<h6><?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' ); ?></h6>
				
				
				
						
				<!-- begin custom related loop, isa -->
		  
		        <?php
		          
		        // get the custom post type's taxonomy terms
		          
		        $custom_taxterms = wp_get_object_terms( $post->ID,
		                    'category', array('fields' => 'ids') );
		        // arguments
		        $args = array(
		        'post_type' => 'colecciones',
		        'post_status' => 'publish',
		        'posts_per_page' => 3, // you may edit this number
		        'orderby' => 'rand',
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'category',
		                'field' => 'id',
		                'terms' => $custom_taxterms
		            )
		        ),
		        'post__not_in' => array ($post->ID),
		        );
		        $related_items = new WP_Query( $args );
		        
		        // loop over query
		        if ($related_items->have_posts()) :
		        echo '<div class="carruselpeque">
		        <ul id="mycarousel2" class="jcarousel-skin-tango">';
		        while ( $related_items->have_posts() ) : $related_items->the_post();
		        ?>
		            <li><a href="<?php the_permalink(); ?>"
		                       title="<?php the_title_attribute(); ?>">
		                <?php if ( has_post_thumbnail()) : ?>
		    		<?php the_post_thumbnail( 'galeria' ); ?>
					<?php endif; ?>
					<?php the_title(); ?></a></li>
		        <?php
		        endwhile;
		        echo '</ul>';
		        endif;
		        // Reset Post Data
		        wp_reset_postdata();
		        ?>
          
  
<!-- end custom related loop, isa -->
		
		
		
		
		
		<ul>
 	   <?php wp_list_pages('include=520,523,606,534,526,1002&title_li=' ); ?>
		</ul>
		
		
		
				
		</div><!-- grid-90 push-10 -->
		
		
		
		
	<?php }?>
		
		
	

</aside>
<!-- /sidebar -->
