<?php get_header(); ?>

	<?php if ( have_posts()) :?>
	
		<?php $title = $wp_query->get_queried_object(); ?>
		<h1>
			<?php 
			_e( 'Archive for ', 'tutsplus' );
			// echo out correct title depending on archive type
			if ( is_day() ) {
				echo the_time('F jS, Y');
			}
			elseif ( is_month() ) {
				echo the_time('F Y');
			}
			elseif ( is_year() ) {
				echo the_time('Y');
			}
			else {
				echo $title->name;
			}
			?>
		</h1>
		
		<?php while ( have_posts()) : the_post();?> 

			<?php get_template_part( 'loop' ); ?>	

		<?php endwhile; endif; ?>

	
<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>