		<div id="footer" class="footer">
			<div class="container">
				<div class="row text-center">
				
					<!-- marcas -->
					<div class="col-md-12">
						<div class="alto1">
							<h3><?php _e("<!--:es-->Marcas del Grupo<!--:--><!--:en-->Group brands<!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></h3>
							<div class=""><ul class="list-inline">
								<li class="arkitmobel"><a href="http://www.arkitmobel.com"></a></li>
								<li class="habitdesign"><a href="#"></a></li>
								<li class="bricohabitat"><a href="#"></a></li>
							</ul></div>
						</div>
					</div>
					<!-- /marcas -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-3">
										<p><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_bn.svg" alt="Logo" class=""></a></p>
									</div>
									<div class="col-sm-9">
										<p><small><?php _e("<!--:es-->Ctra. Nacional 232, Km 11.1 12320 km 1,11 Sant Jordi (Castellón) Espa&ntilde;a<!--:--><!--:en-->National Road 232, Km 1.11 12320 Sant Jordi (Castellón) SPAIN<!--:--><!--:pt-->Estrada Nacional 232, Km 1,11 12320 Sant Jordi (Castellón) ESPANHA<!--:--><!--:fr-->Route Nationale 232, 12320 km 1,11 Sant Jordi (Castellón) ESPAGNE<!--:-->"); ?></small></p>
									</div>
								</div>						
							</div>
							<div class="col-sm-4">
								<!-- copyright -->
						<p class="copyright">
							<small>
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php wp_loginout(); ?> 
							<a href="#"><span class="el-icon-vimeo"></span></a>
							<a href="#"><span class="el-icon-facebook"></span></a>
							</small>
						</p>
						<!-- /copyright -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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