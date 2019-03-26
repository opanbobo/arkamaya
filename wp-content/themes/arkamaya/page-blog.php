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

 /* Template Name: Our Story Template */

get_header();
?>


    

    <div id="primary" class="content-area bg-top bg-shortcourse">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title">Our Stories</h1>
                </div>
            </div>
            <div class="blog-post-wrapper">
                <div class="container">
                    <div class="masonry">
                        <?php  
                        $query = new WP_Query( array('cat' => 17 ) );
                             while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="custom-width">
                            <div class="block">
                                <div class="img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></a></div>
                                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                                <div class="title-post"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                                <div class="desc"><?php echo get_the_excerpt();?></div>
                                <div class="more"><a href="<?php the_permalink();?>">Read More <img src="<?php bloginfo('template_url');?>/img/arrow-more.png" alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <?php $i++;endwhile;wp_reset_query();?>
                    </div>
                    <div class="loadmore"><a href="#">SHOW MORE</a></div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_sidebar();
get_footer();
