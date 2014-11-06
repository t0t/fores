	
		<div class="container">
			<div class="row">
				<!-- footer logo -->
				<div class="col-sm-5 col-md-7 col-lg-6">
					<footer class="alto1">
					<p><a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.svg" alt="Logo" class=""></a></p>
								
					<p><small>Ctra. Nacional 232, Km 11.1
						<?php //_e("<!--:es-->Ctra. Nacional 232, Km 11.1<!--:--><!--:en-->National Road 232, Km 1.11 12320 Sant Jordi (Valencia) SPAIN<!--:--><!--:pt-->Estrada Nacional 232, Km 1,11 12320 Sant Jordi (Valencia) ESPANHA<!--:--><!--:fr-->Route Nationale 232, 12320 km 1,11 Sant Jordi (Valencia) ESPAGNE<!--:-->"); ?>
						<br>
						12320 Sant Jordi (Comunitat Valenciana) ESPA&Ntilde;A
						<?php //_e("<!--:es-->12320 Sant Jordi (Comunitat Valenciana) ESPA&Ntilde;A<!--:--><!--:en-->National Road 232, Km 1.11 12320 Sant Jordi (Valencia) SPAIN<!--:--><!--:pt-->Estrada Nacional 232, Km 1,11 12320 Sant Jordi (Valencia) ESPANHA<!--:--><!--:fr-->Route Nationale 232, 12320 km 1,11 Sant Jordi (Valencia) ESPAGNE<!--:-->"); ?></small></p>
						</footer>
				</div>
				<!-- /footer logo -->
				<!-- marcas -->
				<div class="col-sm-7 col-md-5 col-lg-6">
					<div class="alto1">
						<h6>Marcas del Grupo</h6>
						<ul class="list-inline">
							<li class="arkitmobel"><a href="http://www.arkitmobel.com"></a></li>
							<li class="habitdesign"><a href="#"></a></li>
							<li class="bricohabitat"><a href="#"></a></li>
						</ul>
					</div>
				</div>
				<!-- /marcas -->
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- copyright -->
					<p class="copyright">
						<small>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php wp_loginout(); ?> <a href="#"><span class="el-icon-vimeo"></span></a>
						<a href="#"><span class="el-icon-facebook"></span></a>
					</p>
					<!-- /copyright --></div>
			</div>
		</div>	
	</footer>
	<!-- /footer -->


		<?php wp_footer(); ?>
		
		<script>
		
			$(function () {

		      // TinyNav 1
		      $('.menu1').tinyNav({
		        active: 'selected',
		        label: '',
		        header: 'MENU'
		      });
		      
		      // TinyNav 2
		      $('.menu2').tinyNav({
		        label: '',
		        header: 'PRODUCTOS', 
		        active: 'selected'
		      });
		
			});
			  
		</script>
		
				
        
		<!-- analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3517384-3']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		
		

	</body>
</html>