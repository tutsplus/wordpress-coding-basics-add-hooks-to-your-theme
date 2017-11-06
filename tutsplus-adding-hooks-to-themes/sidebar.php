<!-- #right sidebar -->

	<?php do_action ( 'tutsplus_after_content' ); ?>

	
</div><!--.content-->

<?php do_action( 'tutsplus_sidebar' ) ;?>

<?php if( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
	<aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
	</aside>
<?php endif; ?>