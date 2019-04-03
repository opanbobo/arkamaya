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

/* Template Name: Home Template */

get_header();
?>
    <div id="home-slider">
        <div class="bg">
            <div class="container">
                <div class="slider single-item">
                    <?php
                    $args = array( 'post_type' => 'home_banner');
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="block">
                        <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                    </div>
                    <?php endwhile;?>
                </div>
                <div class="arrow-bottom">
                    <div class="img"><img src="<?php bloginfo('template_url');?>/img/arrow-bottom.png" alt="" class="img-fluid"></div>
                </div>
            </div>            
        </div>
    </div>
    <div id="home-culinary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-6">
                    <?php
                        $post_id = 282;
                        $queried_post = get_post($post_id);
                    ?>
                    <div class="content-right">
                        <h1 class="title">creative culinary <strong>education</strong></h1>
                        <?php echo $queried_post->post_content; ?>
                        <div class="readmore"><a href="<?php echo get_page_permalink_from_name('about us');?>">Read More</a></div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div id="home-programs">
        <div class="container">
            <h1 class="title-section">our <strong>programs</strong></h1>
            <div class="row">
                <?php query_posts(array('cat' => 21, 'order' => 'ASC', 'posts_per_page' => 1));
                while(have_posts()) : the_post(); ?>
                <div class="col-md-6 col-12">
                    <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                    <h3 class="title"><?php the_title();?></h3>
                    <div class="desc">
                        <?php the_content(); ?>
                    </div>
                    <div class="readmore"><a href="<?php echo esc_url( get_page_link( 67 ) ); ?>">Read More</a></div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                <?php query_posts(array('cat' => 21, 'order' => 'DESC', 'posts_per_page' => 1));
                while(have_posts()) : the_post(); ?>
                <div class="col-md-6 col-12">
                    <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                    <h3 class="title"><?php the_title();?></h3>
                    <div class="desc">
                        <?php the_content(); ?>
                    </div>
                    <div class="readmore"><a href="<?php echo get_permalink( get_page_by_path( 'academy/pastry program' ) ); ?>">Read More</a></div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="more"><a href="<?php echo get_permalink( get_page_by_path( 'academy' ) ); ?>">view programs</a></div>
        </div>
    </div>
    <div id="home-short-courses">
        <?php
            $args = array( 
                'post_type' => 'shortcourse',
                 'posts_per_page' => 3  
            );

            $loop = new WP_Query( $args );

        ?>
        <div class="container">
            <h1 class="title-section">upcoming <strong>Short courses</strong></h1>
            <div class="date-wrapper">
                <div class="short-slider slider">
                    <?php  
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="column-slide">
                        <div class="date"><?php echo get_the_date('j'); ?></div>
                        <div class="month"><?php echo get_the_date('F'); ?></div>
                    </div>
                    <?php 
                        endwhile;
                    ?>
                </fiv>
            </div>
            <div class="block-content">
                <div class="slider-event slider">
                    <?php  
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="block-column">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="block">
                                    <h3 class="title"><?php the_title();?></h3>
                                    <div class="desc">
                                       <?php echo get_the_excerpt();?>
                                    </div>
                                    <div class="rowx">
                                        <?php the_content();?>
                                    </div>
                                    <div class="price"><span>Price :</span>  <?php $key_name = get_post_custom_values($key = 'price'); echo $key_name[0];?> </div>
                                    <div class="view-more"><a href="<?php echo get_permalink( get_page_by_path( 'short course' ) ); ?>">view other short courses</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="home-stories">
        <div class="container">
            <h1 class="title-section">Stories from <strong>our students</strong></h1>
            <div class="stories-slider slider">
                <?php
                    $args = array( 'post_type' => 'stories');
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="block">
                       <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="name"><?php the_title();?></div>
                                <div class="desc">
                                    <?php the_content();?>
                                </div>
                            </div>
                       </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php
get_footer();
