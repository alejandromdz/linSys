<?php
/* Template Name: Projects */

/* Header */
get_header();

/* Query */
$query = new WP_Query( 'category_name=proyectos' );

?>
	<div id="contents">
            <div class="container wrapper">
                <div class="project-wrappers row"><?php
            if ( $query->have_posts() ) : $count = 0;
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-md-6 project-internal-wrappers<?php echo fmod($count, 2) ? ' no-border' : ' border' ?>">
                        <h4 class="<?php echo fmod($count, 2) ? 'green' : 'red' ?>"><?php the_title(); ?></h4>
                        <div class="images">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="actions"><a href="<?php the_permalink(); ?>">Ver ficha t&eacute;cnica del proyecto</a></div>
                    </div><?php
                    $count++;
                    endwhile;
            else:
            endif; ?>
                </div>
            </div>
	</div>
<?php

/* Restore post data */
wp_reset_postdata();

/* Footer */
get_footer(); ?>