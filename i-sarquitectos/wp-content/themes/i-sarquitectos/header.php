<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
	if ( is_home() || is_front_page() ) {
		bloginfo( 'name' );
		echo ' | '.get_bloginfo( 'description' );
	}
	else {
		wp_title( '' );
		echo ' | '; bloginfo( 'name' );
	} ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bootstrap-3.2.0-dist/css/bootstrap.min.css" />
	<?php wp_head(); ?>
	<!-- Universal Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-52757093-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div id="header">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="col-md-3 navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation-menu" type="button">
					<span class="sr-only">Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"></a>
					</div>
				</div>
				<div class="col-md-9 collapse navbar-collapse" id="navigation-menu">
					<?php wp_nav_menu( array( 'menu' => 'Menu Principal', 'menu_class' => 'nav navbar-nav' ) ); ?>
				</div>
			</div>
		</nav>
	</div><?php
	if ( is_front_page() ) : ?>
	<div id="showcase-home">
		<ul>
			<li class="showcase-home-01">
				<h1>Construcción y diseño de<br />espacios arquitectónicos</h1>
			</li>
			<li class="showcase-home-02">
				<h1>Nos especializamos en<br />diseño y remodelación<br />de interiores</h1>
			</li>
			<li class="showcase-home-03">
				<h1>Creamos espacios únicos y<br />funcionales de acuerdo<br />al gusto de nuestros<br />clientes</h1>
			</li>
			<li class="showcase-home-04">
				<h1>Innovación y diseño de<br />interiores en la ciudad<br />de Pachuca de Soto</h1>
			</li>
			<li class="showcase-home-05">
				<h1>Construcción y diseño de<br />espacios arquitectónicos</h1>
			</li>
			<li class="showcase-home-06">
				<h1>Nos especializamos en<br />diseño y remodelación<br />de interiores</h1>
			</li>
		</ul>
	</div><?php
	else : ?>
	<div id="showcase"><?php
		if ( is_page( 'Quienes Somos' ) ) {
			$showcase = 'quienes-somos';
			$slogan = 'Construcción y diseño de<br />espacios arquitectónicos';
		}
		elseif ( is_page( 'Nuestros Servicios' ) ) {
			$showcase = 'servicios';
			$slogan = 'Nos especializamos en<br />diseño y remodelación<br />de interiores';
		}
		elseif ( is_page( 'Proyectos' ) || ( is_single() && in_category( 'proyectos' ) ) ) {
			$showcase = 'proyectos';
			$slogan = 'Creamos espacios únicos y<br />funcionales de acuerdo<br />al gusto de nuestros<br />clientes';
		}
		elseif ( is_page( 'Contacto' ) ) {
			$showcase = 'contacto';
			$slogan = 'Innovación y diseño de<br />interiores en la ciudad<br />de Pachuca de Soto';
		}
		elseif ( is_home() || ( is_single() && !in_category( 'proyectos' ) ) ) {
			$showcase = 'blog';
			$slogan = 'Información y noticias<br />sobre Arquitectura';
		} ?>
		<div class="container wrapper">
			<div class="row">
				<div class="col-md-12">
					<div class="<?php echo $showcase; ?>"><?php echo $slogan; ?></div>
				</div>
			</div>
		</div>
	</div><?php
	endif; ?>