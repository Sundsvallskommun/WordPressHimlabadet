<?php


global $current_content_data;
$header_contents = (array) get_field( 'header_content' );


?>
<div class="header-content container">
	<?php if ( $header_contents ): ?>
		<?php while ( the_flexible_field( 'header_content' ) ): ?>

			<?php

			$layout               = get_row_layout();
			$current_content_data = get_row( true );

			switch ( $layout ) {
				case 'large_title_with_caption':
				case 'title_with_text':
				case 'shortcode':
				case 'card':
				case 'news':
				case 'the_title_and_content':
					get_template_part( 'partials/header_content/' . $layout );
					break;
				default:
					return; // die
					break;
			}

			?>
		<?php endwhile; ?>
	<?php endif; ?>

</div>

<?php if ( false ): ?>
	<div class="header-content container">
		<aside class="header-content__aside">
			<h6 class="header-content__pre-title">Norrlands bästa badhus</h6>
			<h1 class="header-content__large-title">Där trä, eld och vatten möts</h1>
			<div class="header-content__content">
				<p>Himlabadets relax ligger på översta våningen med två terrasser mot Selångersån, en inglasad och en solterrass med bubbelpool.</p>
				<p>Här kan du bada bastu av olika slag (aufguss, het-, vedeldad och ångbastu) Dessutom finns varmpool, kallpool, upplevelsedusch och ytor för avslappning.</p>
			</div>
		</aside>
		<aside class="header-content__aside">
			<div class="card card--transparent card--blue header-content__card">
				<div class="card-block card-block--small-y-padding">
					<h5 class="card-title">
						<?php _e( 'Nyheter' ); ?>
					</h5>
					<!-- /.card-title -->
					<?php get_template_part( 'partials/news-list', 'three' ) ?>
				</div>
				<!-- /.card-block -->
			</div>
			<!-- /.card -->
		</aside>
	</div>
	<div class="header-content container">
		<aside class="header-content__aside">
			<h6 class="header-content__pre-title">Norrlands bästa badhus</h6>
			<h1 class="header-content__large-title">Där trä, eld och vatten möts</h1>
			<p></p>
		</aside>
		<aside class="header-content__aside col-sm-6">
			<div class="card card--transparent card--blue header-content__card">
				<div class="card-block card-block--extra-padding">
					<h3>Äventyrsbadet, en rolig och spännande badupplevelse</h3>
					<p>
						I vårt äventyrsbad finns allt för en rolig och spännande badupplevelse tillsammans med familjen och vänner. Här finns attraktioner för både stora och små.
					</p>
					<a href="#" class="btn btn-primary">I am a button</a>
				</div>
				<!-- /.card-block -->
			</div>
			<!-- /.card -->
		</aside>
	</div>
	<!-- /.header-content -->
<?php endif; ?>

































