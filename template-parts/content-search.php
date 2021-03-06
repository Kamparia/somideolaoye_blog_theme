<?php
/**
 * The template for displaying articles in the search loop
 *
 * @package zeePersonal
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
		<header class="entry-header">

			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
					
		</header><!-- .entry-header -->

		<div class="entry-content clearfix">
			<?php the_excerpt(); ?>
			<?php zeepersonal_more_link(); ?>
		</div><!-- .entry-content -->

	</article>