<?php
/**
 * The template for displaying content in the single.php template
 */
?>

<div class="blog-wrapper">
	<?php
		$category = get_the_category();
		$link = get_category_link( $category[0]->term_id );
	?>
	<div class="top d-flex align-items-center justify-content-start">
		<a href="<?= $link ?>" class="d-flex align-items-center">
			<i class="bi bi-arrow-left mr-2"></i>
			Quay lại
		</a>
		<span class="mx-3"> | </span>
		<span class="page-name">Trang chi tiết ưu đãi</span>
	</div>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php
				the_content();
				wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'weable' ) . '</span>', 'after' => '</div>' ) );
			?>
		</div><!-- /.entry-content -->
		<?php
			edit_post_link( __( 'Edit', 'weable' ), '<span class="edit-link">', '</span>' );
		?>
	</article><!-- /#post-<?php the_ID(); ?> -->
</div>
