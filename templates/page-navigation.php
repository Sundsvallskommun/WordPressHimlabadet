<?php
/*
 * Template name: Navigation
 * */
sk_header();
?>

<?php while ( have_posts() ) : the_post(); ?>


	<div class="container card">
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<header class="card-block navigation-page__header">
						<div class="page-icon" <?php section_style( 'background' ); ?>><?php echo get_section_icon(); ?></div>
						<div class="navigation-page__inner-container">
							<div class="navigation-page__header-title clearfix">
								<?php do_action( 'hb_before_page_title' ); ?>
								<h1 class="page-title"><?php the_title(); ?></h1>
								<?php do_action( 'hb_after_page_title' ); ?>
							</div>
							<div class="navigation-page__header-content col-xs-12 col-lg-8">
								<?php

								if ( get_the_content() ) {
									the_content();
								} else {
									echo wpautop( get_field( 'navigation_desctiption' ) );
								}

								?>
							</div>
							<!-- /.navigation-page__header-content -->
						</div>
						<!-- /.navigation-page__inner-container -->
					</header>
				</div>
				<!-- /.card -->

			</div>
			<!-- /.col-xs-12 -->


			<div class="col-xs-12">
				<div class="card">
					<div class="card-block">
						<?php get_template_part( 'partials/navigation-cards' ); ?>
					</div>
					<!-- /.card-block -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col-sm-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->


<?php endwhile; ?>

<?php get_footer(); ?>
