		<?php while (  $wp_query->have_posts() ) :  $wp_query->the_post(); ?>
		
    	<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		
		<?php
		endwhile;
		// Reset Post Data
		wp_reset_postdata();
		?>
	
	
		

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-md-6 alto3"><!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumbsproductos'); ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<p>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</p>
		<!-- /post title -->
		
	</article>
	<!-- /article -->
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>