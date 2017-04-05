<?php global $current_content_data; ?>

<aside class="header-content__aside">
	<div class="card card--transparent card--blue header-content__card">
		<div class="card-block">
			<h2><?php echo $current_content_data['title']; ?></h2>
			<div>
				<?php echo do_shortcode( $current_content_data['text'] ); ?>
			</div>
			<?php foreach ( $current_content_data['button'] as $button ) : ?>
				<?php echo get_format_link( $button, 'btn btn-primary' ); ?>
			<?php endforeach; ?>
		</div>
		<!-- /.card-block -->
	</div>
	<!-- /.card -->
</aside>
<!-- /.header-content__aside -->


