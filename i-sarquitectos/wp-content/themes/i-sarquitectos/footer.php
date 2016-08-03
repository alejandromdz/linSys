	<div id="footer">
		<div class="container wrapper">
			<div class="row">
				<div class="col-md-6 left-col">
					<h6>Visitanos en:</h6>
					<p>Av. del Palmar #106 A, 2do. Piso, Despacho E.<br />Colonia Rojo Gómez, Pachuca de Soto, Hidalgo, México.</p>
				</div>
				<div class="col-md-6 right-col">
					<h6>Siguenos en:</h6>
					<p class="social-fb">
						<a href="//facebook.com/IslasSerranoArquitectos">facebook.com/IslasSerranoArquitectos</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container wrapper">
			<div class=row>
				<div class="col-md-12">
					<p>© 2014 Islas & Serrano Arquitectos.</p>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	<!-- jQuery: Library -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Unslider -->
	<script src="//unslider.com/unslider.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	<!-- jQuery: Functions -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			/* Unslider */
			jQuery( '#showcase-home' ).unslider({
				speed: 500,
				delay: 3000,
				keys: true,
				dots: true,  
			});
		});
	</script>
</body>
</html>