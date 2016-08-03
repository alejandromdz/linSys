<?php get_header();
	if ( is_single() ) : ?>
	<div id="contents">
		<div class="container wrapper"><?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
			<div class="content-wrappers">
				<h3><?php the_title(); ?></h3><?php
				if ( !in_category( 'proyectos' ) ) : ?>
				<div class="featured"><?php the_post_thumbnail( '', array( 'class' => 'img-responsive' ) ); ?></div><?php
				endif; ?>
				<?php the_content(); ?>
			</div><?php
			endwhile;
		else:
		endif; ?>
		</div>
	</div><?php
	else : ?>
	<div id="contents">
		<div class="container wrapper"><?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div><?php
			endwhile;
		else :
		endif ; ?>
		</div>
	</div><?php
	endif; ?>
<?php get_footer(); ?>