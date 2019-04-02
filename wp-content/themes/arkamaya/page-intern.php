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

 /* Template Name: Intern Template */

get_header();
?>

    <div id="primary" class="content-area bg-top">
        <main id="main" class="site-main">
            <div class="column-content">
                <?php
                while ( have_posts() ) :
                the_post();?>
                <div class="container">
                    <h1 class="title"><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
                <?php 
                endwhile; // End of the loop.
                ?>
                <div class="morebox"><a href="<?php echo get_page_permalink_from_name('Academy');?>">VIEW OUR PROGRAMS</a></div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_sidebar();
get_footer();
