<footer>
	
	<?php do_action ( 'tutsplus_before_footer' ); ?>

		
	<div class="container">
		
		<?php if ( is_active_sidebar( 'footer-first-widget-area' ) ) : ?>
			<aside class="footer first">
				<?php dynamic_sidebar( 'footer-first-widget-area' ); ?>
			</aside>
		<?php endif; ?>
	
		<?php if ( is_active_sidebar( 'footer-second-widget-area' ) ) : ?>
			<aside class="footer second">
				<?php dynamic_sidebar( 'footer-second-widget-area' ); ?>
			</aside>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'footer-third-widget-area' ) ) : ?>
			<aside class="footer third">
				<?php dynamic_sidebar( 'footer-third-widget-area' ); ?>
			</aside>
		<?php endif; ?>	
			
		<?php if ( is_active_sidebar( 'footer-fourth-widget-area' ) ) : ?>
			<aside class="footer fourth">
				<?php dynamic_sidebar( 'footer-fourth-widget-area' ); ?>
			</aside>
		<?php endif; ?>	

		
	</div>	
	
	<?php do_action ( 'tutsplus_after_footer' ); ?>

</footer>
<?php wp_footer(); ?>
</body>
</html>