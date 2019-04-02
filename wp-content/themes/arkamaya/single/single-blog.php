<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package arkamaya
 *
 * Template Name: Single Blog
 Template Post Type: post
 */
 

get_header();
?>

	<div id="primary" class="content-area  bg-shortcourse">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

			<div class="container">
				<div class="single-wrapper">
					<div class="row bg">
						<div class="col-md-8 offset-md-2">
							<div class="title"><?php the_title();?></div>
							<div class="date"><?php echo get_the_date('j F Y'); ?></div>
							<div class="content"><?php the_content();?></div>
							<div class="author">Written by <?php echo get_the_author();?></div>
						</div>
					</div>
		<?php  

		endwhile; // End of the loop.
		?>			
					<div class="row">
						<div class="col-12">
							<div class="related-post-wrapper">
								<div class="title-bottom">Related <strong>Articles</strong></div>
								<div class="blog-post-wrapper">
					                <div class="container">
					                    <?php  
					                    $query = new WP_Query( array(
					                        'category_name' => 'blog',
					                        'order' => 'DESC', 
					                        'orderby' => 'rand',
					                        'posts_per_page' => 3 
					                    ) );

					                    if( $query->have_posts() ) :
					                    ?>
					                    <div class="grid" id="blog-wrapper">  
					                        <div class="grid-sizer"></div>
					                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
					                        <div class="grid-item">
					                            <div class="img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></a></div>
					                            <div class="date"><?php echo get_the_date('j F Y'); ?></div>
					                            <div class="title-post"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
					                            <div class="desc"><?php echo get_the_excerpt();?></div>
					                            <div class="more"><a href="<?php the_permalink();?>">Read More <img src="<?php bloginfo('template_url');?>/img/arrow-more.png" alt="" class="img-fluid"></a></div>
					                        </div>

					                        <?php 
					                            $i++;
					                        endwhile;
					                        ?>
					                    </div>
					                    <div class="loadmore"><a href="#" id="load-more">SHOW MORE</a></div>
					                    <input type="hidden" name="posts" id="posts" value="<?php echo $query->post_count; ?>" />
					                    <input type="hidden" name="pages" id="pages" value="<?php echo $query->max_num_pages; ?>" />
					                    <input type="hidden" name="page" id="pagenow" value="<?php echo $pagenow; ?>" />
					                    <?php
					                    else:
					                        echo '<div class="alert alert-danger">No blog posts found.</div>';
					                    endif; 

					                    wp_reset_query();
					                    wp_reset_postdata();
					                    ?>
					                </div>
					            </div>
							</div>	
						</div>
					</div>
					
				</div>
			</div>	

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();