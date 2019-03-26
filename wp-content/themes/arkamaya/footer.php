<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arkamaya
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<h1 class="title-section">get <strong>connected</strong></h1>
			<div class="column-footer">
				<div class="row">
					<div class="col-md-3 col-12">
						<div class="block">
							<h4>DIPO BUSINESS CENTER</h4>
							<p>Jl. Jend Gatot Subroto Kav. 51-52, Ruko A9 <br>
							Petamburan, Slipi <br>
							Jakarta Pusat – 10260</p>
							<a href="mailto:info@arkamayaculinary.com" class="email">info@arkamayaculinary.com</a>
							<p>+6221-2253-9980 <br>+62811-9233-777</p>
						</div>
						<div class="sosmed">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9 col-12">
						<?php echo do_shortcode( '[contact-form-7 id="36" title="Contact form 1"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
