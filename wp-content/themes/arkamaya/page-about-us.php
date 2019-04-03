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
		<div class="full-width-image"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
	</div>
	<div id="about-we-do">
		<div class="container">
			<div class="column">
				<div class="row">
					<div class="col-md-4 col-12">
						<h1 class="title">what <strong>we do</strong></h1>
					</div>
					<div class="col-md-8 col-12">
						<?php
					        $post_id = 314;
					        $queried_post = get_post($post_id);
					    ?>
						<div class="desc">
							<?php echo $queried_post->post_content;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about-vimo">
		<div class="container">
			<div class="row">
				<?php query_posts(array('cat' => 22, 'order' => 'ASC', 'posts_per_page' => 3));
                		while(have_posts()) : the_post(); ?>
				<div class="col-md-4 col-12">
					<div class="block">
						<div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
						<h3 class="subtitle"><?php the_title();?></h3>
						<div class="desc">
							<?php the_content();?>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div id="after-vimo">
	<?php
        $post_id = 302;
        $queried_post = get_post($post_id);
    ?>
	<div class="img"><?php echo get_the_post_thumbnail($post_id, '', array('class' => 'img-fluid'))?></div>
		<div class="container">
			<div class="column">
				<div class="row">
					<div class="col-md-5 offset-md-7 col-12">
						<h1 class="title">Inside our <strong>Kitchen</strong></h1>
						<div class="desc"><?php echo $queried_post->post_content;?></div>
						<div class="more"><a href="<?php echo get_permalink( get_page_by_path( 'facilities' ) ); ?>">VIEW FACILITIES</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
