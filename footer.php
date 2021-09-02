	</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 footer-left d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay=".3s">
						<?php 
						if ( is_active_sidebar( 'third_widget_area' ) ) :
							dynamic_sidebar( 'third_widget_area' );
						endif;
						?>
					</div>
					<div class="col-lg-4 col-md-12 footer-center text-center d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay=".5s">
						<?php 
						if ( is_active_sidebar( 'fourth_widget_area' ) ) :
							dynamic_sidebar( 'fourth_widget_area' );
						endif;
						?>
						
					</div>
					<div class="col-lg-4 col-md-12 footer-right d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay=".7s">
						<?php 
						if ( is_active_sidebar( 'fifth_widget_area' ) ) :
							dynamic_sidebar( 'fifth_widget_area' );
						endif;
						?>
					</div>

					<?php
						
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
