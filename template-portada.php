<?php 
/* Template Name: Portada */ 
get_header(); ?>

	


		<div class="alto0">
		<?php layerslider(1); ?>
		<?php //putRevSlider("test") ?>
		</div>
				
		
<section>



		<div class="row menugrafico">
		
			<div class="col-xs-6 col-md-2 col-md-offset-1 col-sm-4 text-center">
					<?php if(qtrans_getLanguage() == "es") : ?>
						<a class="btn btn-link" href="<?php bloginfo('url'); ?>/category/cat-actualidad/">
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "en") : ?>
						<a class="btn btn-link" href="http://fores.es/category/cat-actualidad/?lang=en">
					<?php endif ?>
						<span class="el-icon-cogs"></span>
						<p><?php _e("<!--:es-->Actualidad<!--:--><!--:en-->Present<!--:-->"); ?></p></a>
			</div>
			
			<div class="col-xs-6 col-md-2 col-sm-4 text-center">
					<?php if(qtrans_getLanguage() == "es") : ?>
						<a class="btn btn-link" href="<?php bloginfo('url'); ?>/novedades/">
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "en") : ?>
						<a class="btn btn-link" href="http://fores.es/novedades/?lang=en">
					<?php endif ?>
						<span class="el-icon-bullhorn"></span>
						<p><?php _e("<!--:es-->Novedades<!--:--><!--:en-->News<!--:-->"); ?></p></a>
			</div>
			
			<div class="col-xs-6 col-md-2 col-sm-4 text-center">
					<?php if(qtrans_getLanguage() == "es") : ?>
						<a class="btn btn-link" href="<?php bloginfo('url'); ?>/el-grupo/">
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "en") : ?>
						<a class="btn btn-link" href="http://fores.es/el-grupo/?lang=en">
					<?php endif ?>
						<span class="el-icon-group"></span>
						<p><?php _e("<!--:es-->El Grupo<!--:--><!--:en-->The Group<!--:-->"); ?></p></a>
			</div>
			
			<div class="col-xs-6 col-md-2 col-sm-4 text-center">
				<?php if(qtrans_getLanguage() == "es") : ?>
						<a class="btn btn-link" href="<?php bloginfo('url'); ?>/servicios/">
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "en") : ?>
						<a class="btn btn-link" href="http://fores.es/servicios/?lang=en">
					<?php endif ?>
						<span class="el-icon-ok"></span>
						<p><?php _e("<!--:es-->Servicios<!--:--><!--:en-->Services<!--:-->"); ?></p></a>
			</div>
			
			<div class="col-xs-6 col-md-2 col-sm-4 text-center">
				<?php if(qtrans_getLanguage() == "es") : ?>
						<a class="btn btn-link" href="<?php bloginfo('url'); ?>/contacto/">
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "en") : ?>
						<a class="btn btn-link" href="http://fores.es/contacto/?lang=en">
					<?php endif ?>
						<span class="el-icon-headphones"></span>
						<p><?php _e("<!--:es-->Contacto<!--:--><!--:en-->Contact<!--:-->"); ?></p></a>
			</div>
			
			
		</div>
		
		

</section>


<?php get_footer(); ?>
