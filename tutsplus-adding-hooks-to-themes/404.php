<?php get_header(); ?>

		
			<h1><?php _e( 'Something Went Wrong!', 'wpmu' ); ?></h1>
		
			<p><?php _e( 'We couldn&#39;t find your page. Why not try a search?', 'wpmu' ); ?></p>
		
			<?php apply_filters( 'tutsplus_after_404' , get_search_form() ); ?>
			
	
<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>