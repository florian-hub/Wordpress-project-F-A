<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
						<?php do_action( 'avada_after_main_content' ); ?>

					</div>  <!-- fusion-row -->
				</main>  <!-- #main -->
				<?php do_action( 'avada_after_main_container' ); ?>

				<?php
				/**
				 * Get the correct page ID.
				 */
				$c_page_id = Avada()->fusion_library->get_page_id();
				?>

				<?php
				/**
				 * Only include the footer.
				 */	
				?>
				
				
				<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
					
					<div><!-- #content -->
						<!-- Footer -->
						<footer class="footer"> <!--  style="position:absolute; bottom: 0; width: 100%"-->
						<div class="container">
							<div class="row">

								<div class="col-sm-4 col-xs-12 center-block">
									<h5>Contact</h5>
									<p><a  class="wow fadeIn" data-wow-delay=".08s">Tecslide</a><br>
									+33 6 99 87 63 48<br>
									<a  class="wow fadeIn" data-wow-delay=".08s" href="">Mentions légales</a></p>
								</div>

								<div class="col-sm-4 col-xs-12 center-block">
									<h5>Surfaces - ingenieering</h5>
									<a  class="wow fadeIn" data-wow-delay=".08s" href="">12, rue des Haiches<br> 35510 Cesson Sévigné</a>
								</div>

								<div class="col-sm-4 col-xs-12 center-block">
									<h5>Un site réalisé par </h5>
										<a class="wow fadeIn" data-wow-delay=".04s" href="https://www.linkedin.com/in/florian-even/">Florian Even</a>et <a class="wow fadeIn" data-wow-delay=".04s" href=""> Arnaud Lamezec</a>
								</div>

								
							</div>
						</div>

						<!-- EXTERN LINKS -->
						<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
						</footer>
					</div><!-- #page -->
					

					<div class="fusion-sliding-bar-wrapper">
						<?php
						/**
						 * Add sliding bar.
						 */
						if ( Avada()->settings->get( 'slidingbar_widgets' ) ) {
							get_template_part( 'sliding_bar' );
						}
						?>
					
					</div>
					

					<?php do_action( 'avada_before_wrapper_container_close' ); ?>
					
				<?php endif; // End is not blank page check. ?>
			</div> <!-- wrapper -->
		</div> <!-- #boxed-wrapper -->
		<div class="fusion-top-frame"></div>
		

		<div class="fusion-bottom-frame"></div>
		
		<div class="fusion-boxed-shadow"></div>
		
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>
		

		<div class="avada-footer-scripts">
			<?php wp_footer(); ?>
		</div>
	</body>
</html>
