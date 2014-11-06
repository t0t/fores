<?php /* Template Name: Contacto */ get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
		
				<main role="main">
					<!-- section -->
					<section>
					
					<div class="jumbotron text-center">
						<h3><?php _e("<!--:es-->Atencion al cliente<!--:--><!--:en-->Customer Care<!--:--><!--:pt-->M&oacute;veis e decora&ccedil;&atilde;o<!--:--><!--:fr-->Mobilier et d&eacute;coration<!--:-->"); ?></h3>
						<h1>T. <span>+34</span> 964 49 25 65</h1>
						<a class="btn btn-default" title="Formulario de contacto Mueble y decoraci&oacute;n" href="<?php echo site_url(); ?>/form-atencion-al-cliente/">
						<span class="el-icon-envelope"></span>
		<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?>
						</a>
					</div>
					<div class="clearfix"></div>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
						<!-- article -->
						<article class="row">
			
						<address class="col-xs-6 col-sm-3 col-md-3 acontacto">
							<h5><?php _e("<!--:es-->Mueble y decoraci&oacute;n<!--:--><!--:en-->Furniture and decor <!--:--><!--:pt-->M&oacute;veis e decora&ccedil;&atilde;o<!--:--><!--:fr-->Mobilier et d&eacute;coration<!--:-->"); ?></h5>
							<p>T. <span>+34</span> 964 468 200</p>
							<a class="btn btn-default" title="Formulario de Contacto de Grandes Superf&iacute;cies" href="<?php echo site_url(); ?>/form-mueble-y-decoracion/">
							<span class="el-icon-envelope"></span>
							<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
						</address>
						
						<address class="col-xs-6 col-sm-3 col-md-3 acontacto">
							<h5><?php _e("<!--:es-->Grandes superf&iacute;cies<!--:--><!--:en-->Great Surfaces<!--:--><!--:pt-->Grandes superficies<!--:--><!--:fr-->Les Grandes Surfaces<!--:-->"); ?></h5>
							<p>T. <span>+34</span> 964 468 328</p>
							<a class="btn btn-default" title="Formulario de Contacto de Grandes Superf&iacute;cies" href="<?php echo site_url(); ?>/form-grandes-superficies/">
							<span class="el-icon-envelope"></span>
							<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
						</address>
					
						<address class="col-xs-6 col-sm-3 col-md-3 acontacto">
							<h5><?php _e("<!--:es-->Bricolage y ferreter&iacute;a<!--:--><!--:en-->DIY and hardware<!--:--><!--:pt-->Bricolage e hardware<!--:--><!--:fr-->Bricolage et du mat&eacute;riel <!--:-->"); ?></h5>
							
							<p>T. <span>+34</span> 964 468 315</p>
								<a class="btn btn-default" title="Formulario de contacto Bricolage y ferretería" href="<?php echo site_url(); ?>/form-bricolage-y-ferreteria/">
								<span class="el-icon-envelope"></span>
								<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
						</address>
					
						<address class="col-xs-6 col-sm-3 col-md-3 acontacto">
								<h5><?php _e("<!--:es-->Exportaci&oacute;n<!--:--><!--:en-->Export<!--:--><!--:pt-->Exportar<!--:--><!--:fr-->Exporter<!--:-->"); ?></h5>
								<p>T. <span>+34</span> 964 468 327</p>
									<a class="btn btn-default" title="Formulario de Contacto de Exportación" href="<?php echo site_url(); ?>/form-exportacion/">
										<span class="el-icon-envelope"></span>
									<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
						</address>
					
					
							<?php //_e("<!--:es-->Departamento de Compras<!--:--><!--:en-->Purchasing Department<!--:--><!--:pt-->Departamento de Compras<!--:--><!--:fr-->Service des Achats<!--:-->"); ?>
							
						<address class="col-sm-3 col-md-3 acontacto">
								<h5><?php _e("<!--:es-->Proveedores<!--:--><!--:en-->Suppliers<!--:--><!--:pt-->Fornecedores<!--:--><!--:fr-->Fournisseurs <!--:-->"); ?></h5>
								<p>T. <span>+34</span> 964 468 318</p>
									<a class="btn btn-default" title="Proveedores" href="<?php echo site_url(); ?>/proveedores/">
									<span class="el-icon-envelope"></span>
									<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
						</address><!-- .grid-50 -->
			
						</article>
						<!-- /article -->
						<?php edit_post_link('...'); ?>
					<?php endwhile; ?>
			
					<?php else: ?>
			
						<!-- article -->
						<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
						<!-- /article -->
			
					<?php endif; ?>
			
					</section>
					<!-- /section -->
				</main>
		
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<figure>
			<img title="localizacion" src="<?php echo site_url(); ?>/wp-content/uploads/localizacion.jpg" alt="" width="470" height="266">
			</figure>
		</div>
		<div class="col-sm-3">
			<div class="well">
				<h5><?php _e("<!--:es-->Mapa de accesos<!--:--><!--:en-->Access map<!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></h5>
				<p><a href="<?php bloginfo('template_directory'); ?>/descargas/accesos_fores.pdf.zip">
				<span class="el-icon-download"></span>
					<?php _e("<!--:es-->Descargar en formato PDF<!--:--><!--:en-->Access map to download? Format: PDF<!--:--><!--:pt-->Acesse o mapa para download? Formato: PDF<!--:--><!--:fr-->Plan dacc&egrave;s pour t&eacute;l&eacute;charger? Format: PDF<!--:-->"); ?></a>
				</p>
			</div>
		</div>
		
		<div class="col-sm-3">
		
			<div class="well">
			<h5><?php _e("<!--:es-->Descargas<!--:--><!--:en-->Downloads<!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></h5>
				<p>
				<a href="<?php bloginfo('template_directory'); ?>/descargas/Dossier_Prensa.pdf.zip">
				<span class="el-icon-download"></span>
				<?php _e("<!--:es-->Dossier de prensa<!--:--><!--:en-->Access map to download? Format: PDF<!--:--><!--:pt-->Acesse o mapa para download? Formato: PDF<!--:--><!--:fr-->Plan dacc&egrave;s pour t&eacute;l&eacute;charger? Format: PDF<!--:-->"); ?>
				</a></p>
				
				<p>
				<a href="<?php bloginfo('template_directory'); ?>/descargas/logo_fores.zip">
				<span class="el-icon-download"></span>
				<?php _e("<!--:es-->Logotipo For&eacute;s. Zip<!--:--><!--:en--><!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></a></p>
	
				<p>
				<a href="<?php bloginfo('template_directory'); ?>/descargas/logofores_eps.eps.zip">
				<span class="el-icon-download"></span>
				<?php _e("<!--:es-->Logotipo For&eacute;s. Eps.<!--:--><!--:en--><!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
