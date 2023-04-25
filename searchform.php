<?php
/**
 * The template for displaying search forms
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row">
		<div class="col-12">
			<div class="input-group">
				<div class="input-group-append">
					<button type="submit" class="btn btn-secondary" name="submit"><i class="bi bi-search"></i></button>
				</div><!-- /.input-group-append -->
				<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Tìm kiếm dự án...', 'weable' ); ?>" />
			</div><!-- /.input-group -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</form>
