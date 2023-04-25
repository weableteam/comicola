<?php
/**
 * The template for displaying content in the index.php template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-4' ); ?>>
	<div class="card mb-3">
		<div class="blog-img">
			<a href="<?php the_permalink(); ?>">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;
				?>
			</a>
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
