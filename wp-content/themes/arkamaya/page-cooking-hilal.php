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

/* Template Name: Cooking Template */

get_header();

if( have_posts() ) :
	while( have_posts() ) : the_post();
?>
	<div class="banner-top-bg">
		<div class="img"><img src="<?php bloginfo('template_url');?>/img/bg-cooking.png" alt="" class="img-fluid"></div>
		<h1 class="title"><?php the_title();?></h1>
	</div>
	<div class="basic-wrapper">
		<div class="column">
			<div class="container">
				<div class="row">
					<h3 class="subtitle col-12"><strong>BASIC</strong> CLASSES</h3>
				</div>
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
						<div class="table-wrapper">
							<div class="row">
								<div class="col-md-5">
									<div class="clearfix blok">
										<div class="float-left">
											<div class="ico"><img src="<?php bloginfo('template_url');?>/img/cooking-ico-1.png" alt="" class="img-fluid"></div>
										</div>
										<div class="float-left">
											<div class="small">Class Capacity</div>
											<div class="middle"><?php $key_1_values = get_post_meta( get_the_ID(), 'capacity' ); ?></div>
										</div>
									</div>
									<div class="clearfix blok">
										<div class="float-left">
											<div class="ico"><img src="<?php bloginfo('template_url');?>/img/cooking-ico-2.png" alt="" class="img-fluid"></div>
										</div>
										<div class="float-left">
											<div class="small">Meetings</div>
											<div class="middle"><?php $key_1_values = get_post_meta( get_the_ID(), 'meetings' ); ?></div>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									table
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="desc">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile;
endif;
?>
	<div class="intermediate-wrapper">
		<div class="container">
			<div class="row">
				<h3 class="subtitle col-12"><strong>intermediate</strong> CLASSES</h3>
			</div>
			<div class="row">
				<div class="col-md-6 col-12">
						<div class="img"><img src="<?php bloginfo('template_url');?>/img/cooking-2.jpg" alt="" class="img-fluid"></div>
						<div class="table-wrapper">
							<div class="row">
								<div class="col-md-5">
									<div class="clearfix blok">
										<div class="float-left">
											<div class="ico"><img src="<?php bloginfo('template_url');?>/img/cooking-ico-1.png" alt="" class="img-fluid"></div>
										</div>
										<div class="float-left">
											<div class="small">Class Capacity</div>
											<div class="middle">18 students max</div>
										</div>
									</div>
									<div class="clearfix blok">
										<div class="float-left">
											<div class="ico"><img src="<?php bloginfo('template_url');?>/img/cooking-ico-2.png" alt="" class="img-fluid"></div>
										</div>
										<div class="float-left">
											<div class="small">Meetings</div>
											<div class="middle">8 times</div>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									table
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="desc">
							<p>An introduction to Indonesian cooking. You will be able to learn the incredible Indonesian key ingredients & spices, and create a variety of dishes from scratch.</p>

							<span>Unit Outlines :</span>
							<ol>
								<li>Learn how to cut a perfect size of vegetables, fish, beef, and chicken</li>
								<li>Learn how to make Indonesian basic sauce to make a dish</li>
								<li>Learn techniques how to use oven</li>
								<li>Learn how to make fried rice using Chinese wok</li>
								<li>Learn marinate process and how to steam a different protein</li>
								<li>Learn stew techniques and how to make a traditional Indonesian soup</li>
							</ol>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="inclusive-wrapper">
		<div class="container">
			<h1 class="title">inclusive</h1>
			<div class="column-wrap row">
				<?php	 
				$query = new WP_Query( array('post_type' => 'inclusive','order' => 'ASC','posts_per_page' => 5 ) );
					 while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="column col">
					<div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
					<div class="name"><?php $key_name = get_post_custom_values($key = 'box_name'); echo $key_name[0];?></div>
				</div>
				<?php endwhile;wp_reset_query();?>
			</div>
			<div class="row">
				<div class="more"><a href="#">VIEW OUR ACADEMIC PROGRAMS</a></div>
			</div>
		</div>
	</div>
	<div class="gallery-wrapper">
		<div class="gallery-slider">
			<h1 class="title withmargin">COOKING SHOWCASE</h1>
			<div class="slider gallery-sliders">
				<div class="block"><img src="<?php bloginfo('template_url');?>/img/slide-cooking-1.jpg" alt="" class="img-fluid"></div>
				<div class="block"><img src="<?php bloginfo('template_url');?>/img/slide-cooking-2.jpg" alt="" class="img-fluid"></div>
				<div class="block"><img src="<?php bloginfo('template_url');?>/img/slide-cooking-3.jpg" alt="" class="img-fluid"></div>
				<div class="block"><img src="<?php bloginfo('template_url');?>/img/slide-cooking-4.jpg" alt="" class="img-fluid"></div>
				<div class="block"><img src="<?php bloginfo('template_url');?>/img/slide-cooking-2.jpg" alt="" class="img-fluid"></div>
			</div>
		</div>
	</div>
	<div class="expert-wrapper">
		<div class="container">
			<h1 class="title">Meet The <strong>Expert</strong></h1>
			<div class="column">
				<div class="row">
					<div class="col-md-7 col-12">
						<h3 class="subtitle">Chef Pasya Hardiman</h3>
						<div class="desc">
							<p>Chef Pasya Hardiman or more familiarly called Chef Pasya is an alumni from NHI school in food production section. Because of his proficiency in western and fusion food, then he spread his wings to foreign country. Chef Pasya also have a working experience at Holland American Line Cruise for more than 6 years in fine dining section. Before he joined Arkamaya he once wa a resident chef in one of the cooking school pioneer for more than 4 years.</p>
						</div>
					</div>
					<div class="col-md-5 col-12">
						<div class="img"><img src="<?php bloginfo('template_url');?>/img/chef-2.png" alt="" class="img-fluid"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();