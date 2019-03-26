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

/* Template Name: About Template */

get_header();
?>

	<div id="about-banner">
		<div class="full-width-image"><img src="<?php bloginfo('template_url');?>/img/landing-about.png" alt="" class="img-fluid"></div>
	</div>
	<div id="about-we-do">
		<div class="container">
			<div class="column">
				<div class="row">
					<div class="col-md-4 col-12">
						<h1 class="title">what <strong>we do</strong></h1>
					</div>
					<div class="col-md-8 col-12">
						<div class="desc">
							<p>Inspired by the food industry that keeps developing as fast as poaching an egg, Arkamaya offers a first-class culinary education of Indonesian cuisine in the heart of Jakarta.</p>
							<p>It is our belief that everyone has that creative soul and hunger for greatness. Accordingly, we have built a diverse range of programs (academy and short courses) for every person fond of Indonesian food, either a professional or an everyday learner. Each lesson will simmer your creativity to take that familiar taste from your mother’s kitchen, mix it well, and turn it into something new.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about-vimo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-12">
					<div class="block">
						<div class="img"><img src="<?php bloginfo('template_url');?>/img/vision.png" alt="" class="img-fluid"></div>
						<h3 class="subtitle">VISION</h3>
						<div class="desc">
							<p>To be a leading culinary platform that offers creative education and innovative training for Indonesian food and pastry enthusiasts.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="block">
						<div class="img"><img src="<?php bloginfo('template_url');?>/img/mission.png" alt="" class="img-fluid"></div>
						<h3 class="subtitle">mssion</h3>
						<div class="desc">
							<p>To open new doors to attractive opportunities in the culinary arts, by providing distinguished facilities, start-from-scratch techniques, and exemplary quality. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="block">
						<div class="img"><img src="<?php bloginfo('template_url');?>/img/obj.png" alt="" class="img-fluid"></div>
						<h3 class="subtitle">objective</h3>
						<div class="desc">
							<p>Arkamaya is determined to produce graduates who are not just talented, but also full of creativity and having the drive to bring Indonesian culinary forward – to be not just a cook, but also a creative entrepreneur in the industry.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="after-vimo">
	<div class="img"><img src="<?php bloginfo('template_url');?>/img/facilities.png" alt="" class="img-fluid"></div>
		<div class="container">
			<div class="column">
				<div class="row">
					<div class="col-md-5 offset-md-7 col-12">
						<h1 class="title">Inside our <strong>Kitchen</strong></h1>
						<div class="desc"><p>Our training rooms, also available for rent, are well equipped with sophisticated kitchen tools and also multimedia resources to set up an effective learning environment</p></div>
						<div class="more"><a href="#">VIEW FACILITIES</a></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

<?php
get_sidebar();
get_footer();
