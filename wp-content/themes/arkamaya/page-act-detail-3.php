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

/* Template Name: taste of indonesia Template */

get_header();
?>
	<div class="banner-top-bg">
		<div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
		<h1 class="title"><?php the_title();?></h1>
	</div>
	<div class="basic-wrapper">
		<div class="column">
			<div class="container">
				<?php
					global $post;
    				$post_slug=$post->post_name;
    				// echo $post_slug;
					$args = array(
					  'category_name' => $post_slug,
					  'post_type'   => 'post',
					  'post_status' => 'publish',
					  'numberposts' => 1
					);
					$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
					      $the_query->the_post();?>
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
						<div class="table-wrapper">
							<div class="blok">
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="clearfix block-column">
											<div class="float-left ico">
												<img src="<?php bloginfo('template_url');?>/img/cooking-ico-1.png" alt="" class="img-fluid">
											</div>
											<div class="float-left col-txt">
												<div class="small">Number of Participants</div>
												<div class="middle"><?php $key_name = get_post_custom_values($key = 'participant'); echo $key_name[0];?></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="clearfix block-column">
											<div class="float-left ico">
												<img src="<?php bloginfo('template_url');?>/img/ico-hat.png" alt="" class="img-fluid">
											</div>
											<div class="float-left col-txt">
												<div class="small">Class/Events Duration</div>
												<div class="middle"><?php $key_name = get_post_custom_values($key = 'duration'); echo $key_name[0];?></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="clearfix block-column">
											<div class="float-left ico">
												<img src="<?php bloginfo('template_url');?>/img/price-tag.png" alt="" class="img-fluid">
											</div>
											<div class="float-left col-txt">
												<div class="small">Rates/pax starts from</div>
												<div class="middle"><?php $key_name = get_post_custom_values($key = 'Rates'); echo $key_name[0];?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 offset-md-1 col-12">
						<div class="desc">
							<?php the_content();?>
						</div>
					</div>
				</div>
				<?php 
					} // end while
				} // endif
				// Reset Post Data
				wp_reset_postdata();?>
			</div>
		</div>
	</div>
	<div class="class-format-wrapper">
		<div class="container">
			<div class="column-wrapper">
			<h1 class="title">Available Class Format</h1>
				<div class="row">
				<?php
                  $args = array (
                      'cat'    => 14,
                      'order'  => 'ASC'
                  );

                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ): ?>

                  <?php while($query -> have_posts()) : $query -> the_post();?>  
					<div class="col">
						<div class="block">
							<div class="row">
								<div class="col-12 imgs"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
								<div class="col-12 center">
									<div class="name"><?php the_title();?></div>
									<div class="desc"><?php the_content();?></div>
								</div>
							</div>
						</div>
					</div>
					<?php
                    endwhile;
                    endif; 
                      // Added this now 
                      wp_reset_query() ; 
                  ?>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="inclusive-wrapper">
		<div class="container">
			<h1 class="title">Cuisine options</h1>
			<div class="column-wrapper">
				<div class="row">
					<div class="column col-md-6 offset-md-3">
						<div class="block">
							<div class="row">
								<div class="col-3">
									<div class="img"><img src="<?php bloginfo('template_url');?>/img/ico-coffee.png" alt="" class="img-fluid"></div>
								</div>
								<div class="col-9"><div class="txt">Kalimantan, Lombok, Aceh, Sunda, Betawi, Makassar, Bali Cuisines and Various Satay</div></div>
							</div>
						</div>
						<div class="block">
							<div class="row">
								<div class="col-3">
									<div class="img"><img src="<?php bloginfo('template_url');?>/img/ico-mixer.png" alt="" class="img-fluid"></div>
								</div>
								<div class="col-9"><div class="txt">Indonesia Entremet, Fusion Entremet, Aneka Kue Kering, Aneka Kue Jadoel</div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery-wrapper">
		<div class="gallery-slider">
			<h1 class="title withmargin">PREVIOUS ACTIVITIES</h1>
			<div class="slider gallery-sliders">
				<?php
                    $args = array( 'post_type' => 'gallery_sliders', 'cat' => 15);
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="block">
                        <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                    </div>
                    <?php endwhile;?>
			</div>
			<div class="more"><a href="<?php echo get_page_permalink_from_name('Activities'); ?>">VIEW OTHER ACTIVITIES</a></div>
		</div>
	</div>
<?php
get_footer();