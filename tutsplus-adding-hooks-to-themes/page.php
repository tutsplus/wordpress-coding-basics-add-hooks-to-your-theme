<?php get_header(); ?>

		
	<?php if ( have_posts()) :?>
		<?php while (have_posts()) : the_post();?> 

			<?php get_template_part( 'loop', 'single' ); ?>	

		<?php endwhile; endif; ?>

	
<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>