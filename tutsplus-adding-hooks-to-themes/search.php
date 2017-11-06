<?php get_header(); ?>

		<?php if ( have_posts()) { ?>
		
			<h1><?php _e( 'Search Results', 'tutsplus' ); ?></h1>
			
			<?php while ( have_posts()) : the_post();?> 
	
				<?php get_template_part( 'loop' ); ?>	
	
			<?php endwhile; ?>
		<?php } else { ?>
					
			<h1><?php _e( 'Nothing Found, Sorry!', 'tutsplus' ); ?></h1>
		
			<p><?php _e( 'There are no results for your search term. Why not try another search?', 'tutsplus' ); ?></p>
		
			<?php get_search_form (); ?>
			
		<?php } ?>

	
<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>