<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_row_mn">

		 <div class="blog_con_mn">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'appointment' ) ); ?>
		</div>
  <footer class="entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'appointment' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
			<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'appointment' ) . '</span>', __( '1 Reply', 'appointment' ), __( '% Replies', 'appointment' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'appointment' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->

</div>
	</article><!-- #post -->