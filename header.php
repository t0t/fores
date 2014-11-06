<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries http://getbootstrap.com/getting-started/ -->
	    <!--[if lt IE 9]>
	      <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
				
	<!-- header -->
	<header role="banner">
	
		<!--[if lt IE 9]>
            <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p class="text-center"><small>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</small></p></div>
        <![endif]-->
			
		<div class="row">
			<div class="col-xs-5 col-xs-offset-1 col-sm-3 col-md-2">
				<!-- brand -->
				<p class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"></a>
				</p>
			</div>
			
			<div class="col-xs-5 col-sm-8 col-md-9">
				<div class="row hidden-xs">
					<!-- idiomas -->
					<div class="col-sm-4 pull-right">
						<?php echo qtrans_generateLanguageSelectCode('text'); ?>
						<script>jQuery(document).ready(function(){ 
						jQuery('.lang-en a span').html('EN'); 
						jQuery('.lang-es a span').html('ES'); 
						})</script>
					</div>
					<!-- buscador -->
					<div class="col-sm-3 pull-right">
						<div class="row">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<nav role="navigation">
					<!-- menu principal -->
					<?php html5blank_nav(); ?>
					<!-- /menu principal -->
					<!-- menu extra -->
					<?php html5blank_nav2(); ?>
					<!-- /menu extra -->
				</nav>
			</div>
		</div>

	</header>
	<!-- /header -->
			