<?php get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>
		
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
