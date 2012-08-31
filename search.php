<?php get_header(); ?>

	<section id="main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'mattbanks' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div><!-- .page-header -->

			<?php mattbanks_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php mattbanks_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>
	
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
