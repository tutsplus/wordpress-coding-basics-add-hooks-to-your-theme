<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
	<?php if ( ! is_front_page() ) { ?>
		<h1 class="post-title"><?php the_title();?></h1>
	<?php } ?>
	
	<?php if( is_singular( 'post' ) ) { ?>
		<div class="entry-meta-before">
			<?php // define variables for author and date
			$authorname = get_the_author_meta( 'display_name' );
			$authorlink = get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );
			$date = get_the_date(); 
			
			//output author and date
			printf( __( '<p>Written by <a href="%1$s">%2$s</a> on %3$s</p>', 'tutsplus'), $authorlink, $authorname, $date );
			
			// check if there are categories and ouptut if so
			$cats = get_the_terms( $post->ID, 'category' );
			if ( $cats ) {
				_e( '<p>Posted in', 'tutsplus' );
				the_terms( $post->ID, 'category', ': ', ', ', '</p>' );
			}
			
			// check if there are tags and ouptut if so
			$tags = get_the_terms( $post->ID, 'post_tag' );
			if ( $tags ) {
				_e( '<p>Tags', 'tutsplus' );
				the_terms( $post->ID, 'post_tag', ': ', ', ', '</p>' );
			} ?>
		</div>
			
	<?php } ?>
	
	<div class="entry-content">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
		<?php the_content('<p class="left"></p>');?>
	</div><!--.entry-content-->		


</article>