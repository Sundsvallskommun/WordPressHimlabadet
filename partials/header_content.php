<?php
global $current_content_data;


$header_contents = (array) get_field( 'header_content' );

?>
<?php if ( $header_contents ): ?>

	<div class="header-content container-fluid">


		<!-- If paw animation is shown -->
		<?php if ( get_field( 'has_paw_animation' ) ): ?>


			<!-- Which color should be shown?  -->
			<?php if ( get_field( 'paw_animation_color' ) == 'white' ):
				$animation_url = get_stylesheet_directory_uri() . '/assets/images/footer_white/';
			else:
				$animation_url = get_stylesheet_directory_uri() . '/assets/images/footer_black/';
			endif; ?>


			<!-- Adds the paws -->
			<div class="animation__overlay">
				<?php for ( $n = 1; $n < 28; $n ++ ) : ?>
					<img src="<?php echo $animation_url . $n . '.png'; ?>" data-sequence="1" data-id="<?php echo $n ?>"
					     class="animation__single  animation__single--1"></img>
				<?php endfor; ?>
			</div>

		<?php endif; ?>


		<!-- Wrapper for the content if the animation is activated -->
		<?php if ( get_field( 'has_paw_animation' ) ): ?>
		<div class="animation__content-wrapper">
			<?php endif; ?>


			<?php while ( the_flexible_field( 'header_content' ) ): ?>

				<?php

				/**
				 * The layout name
				 */
				$layout = get_row_layout();

				/**
				 * Used globaly in the partial
				 */
				$current_content_data = get_row( true );

				switch ( $layout ) {
					case 'large_title_with_caption':
					case 'title_with_text':
					case 'shortcode':
					case 'card':
					case 'news':
					case 'the_title_and_content':

						do_action( 'hb_before_header_content_item', $layout );

						get_template_part( 'partials/header_content/' . $layout ); // load only the specified layouts defined in acf

						do_action( 'hb_after_header_content_item', $layout );
						break;
					default:
						return; // die, i don't deserve this
						break; // you can break me
				}

				?>

			<?php endwhile; ?>

			<!-- Wrapper for the content if the animation is activated -->
			<?php if ( get_field( 'has_paw_animation' ) ): ?>
		</div>
	<?php endif; ?>


	</div>

<?php endif; ?>
