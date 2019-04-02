<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arkamaya
 */

 /* Template Name: Contact Template */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>
		<div class="container">	
			<div class="title"><?php the_title();?></div>
		</div>
			

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<footer id="colophonx" class="site-footer contact-page">
	<div class="container">
		<h1 class="title-section">Lets get in touch</strong></h1>
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
							<li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
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
