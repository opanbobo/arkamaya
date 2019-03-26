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

 /* Template Name: Short Courses Template */

get_header();
?>

<?php
    $args = array( 'post_type' => 'shortcourse');
    $loop = new WP_Query( $args );?>

    

    <div id="primary" class="content-area bg-top bg-shortcourse">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title"><?php the_title();?></h1>
                </div>
            </div>
            <div class="filter-category-wrapper">
                <div class="container">
                    <div class="filter">
                        <ul>
                            <li class="selected"><a href="#">All</a></li>
                            <li><a href="#">Baking</a></li>
                            <li><a href="#">Cooking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-post-wrapper">
                <div class="container">
                    <div class="row">
                       <?php  while ( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="col-md-4 col-12">
                            <div class="block" data-fancybox data-src="#myModal-1">
                                <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                                <div class="name"><?php the_title();?></div>
                                <div class="desc"><?php echo get_the_excerpt();?></div>
                                <div class="readmore">Read More <img src="<?php bloginfo('template_url');?>/img/arrow-more.png" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <div class="row">
                        <div class="more"><a href="#">show more</a></div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php  while ( $loop->have_posts() ) : $loop->the_post();?>
<!-- The Modal -->
<div id="myModal-1" style="display: none;">
  <div class="column-popup">
    <div class="btn-close"><img src="<?php bloginfo('template_url');?>/img/btn-close.png" alt="" class="img-fluid"></div>
    <div class="navigation">
        <div class="clearfix">
            <div class="prev arrow float-left">Previous</div>
            <div class="next arrow float-right">Next</div>
        </div>
    </div>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-12">
                <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
              </div>
              <div class="col-md-9 col-12">
                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                <div class="name"><?php the_title();?></div>
                <div class="content"><?php the_content();?></div>
                <div class="price"><span>Price :</span> <?php $key_name = get_post_custom_values($key = 'price'); echo $key_name[0];?></div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php endwhile;?>

<?php
get_sidebar();
get_footer();
