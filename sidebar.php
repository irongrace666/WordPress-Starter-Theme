<aside>

	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>

		<section id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</section>

		<section id="archives" class="widget">
			<h1 class="widget-title"><?php _e( 'Archives', 'mattbanks' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</section>

		<section id="meta" class="widget">
			<h1 class="widget-title"><?php _e( 'Meta', 'mattbanks' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</section>

	<?php endif; // end sidebar widget area ?>

</aside> <!-- /#sidebar -->