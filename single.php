<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
		
			<main role="main">
			<!-- section -->
			
			<section>
		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				        
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		
					<!-- post title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->
		
					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<!-- /post details -->
		
					<?php the_content(); // Dynamic Content ?>
		
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
		
					<p><?php _e( '', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
		
					<?php edit_post_link('...'); ?>
		
				</article>
				<!-- /article -->
		
			<?php endwhile; ?>
		
			<?php else: ?>
		
				<!-- article -->
				<article>
		
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		
				</article>
				<!-- /article -->
		
			<?php endif; ?>
		
			</section>
			<!-- /section -->
			</main>
			
			</div>
	
		<div class="col-sm-4 col-sm-offset-1"><?php get_sidebar(); ?></div>
	
	</div>
</div>

<?php get_footer(); ?>
