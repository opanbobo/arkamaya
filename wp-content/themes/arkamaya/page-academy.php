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

 /* Template Name: Academy Template */

get_header();
?>

    <div id="primary" class="content-area bg-top bg-top-big">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title">Our Programs
                    </h1>
                </div>
            </div> 
            <div id="list-program">
                <div class="container">
                    <div class="row">
                        <?php
                            $post_id = 320;
                            $queried_post = get_post($post_id);
                        ?>
                        <div class="col-md-6 col-12">
                            <div class="img"><?php echo get_the_post_thumbnail($post_id, '', array('class' => 'img-fluid'))?></div>
                            <div class="title-block">COOKING PROGRAM</div>
                            <div class="shortdesc"><?php echo $queried_post->post_content;?></div>
                            <div class="detail"><a href="<?php echo get_permalink( get_page_by_path( 'academy/cooking program' ) ); ?>">VIEW DETAILS</a></div>
                        </div>
                        <?php
                            $post_id = 323;
                            $queried_post = get_post($post_id);
                        ?>
                        <div class="col-md-6 col-12">
                            <div class="img"><?php echo get_the_post_thumbnail($post_id, '', array('class' => 'img-fluid'))?></div>
                            <div class="title-block">BAKING PROGRAM</div>
                            <div class="shortdesc"><?php echo $queried_post->post_content;?></div>
                            <div class="detail"><a href="<?php echo get_permalink( get_page_by_path( 'academy/pastry program' ) ); ?>">VIEW DETAILS</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="class-academy"> 
                <div class="img"><img src="<?php bloginfo('template_url');?>/img/bg-man-academy.png" alt="" class="img-fluid"></div>
                <div class="container-fluid">
                    <div class="bg">
                        <div class="row">
                            <div class="col-md-6 offset-md-6 col-12">
                                <div class="column-txt">    
                                    <div class="row">   
                                        <div class="col-md-6">
                                            <div class="title">Entrepreneur Class</div>
                                            <div class="shortdesc"> 
                                                <p> An integrated program for those who want to convert their culinary skills into a business</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">private Class</div>
                                            <div class="shortdesc"> 
                                                <p>Available upon request</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-12">    
                                            <div class="more"><a href="#get-connected" class="click"><img src="<?php bloginfo('template_url');?>/img/arrow-btm-white.png" alt="" class="img-fluid">Request More Information</a></div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chef-wrapper">
                <div class="container"> 
                    <div class="row">
                        <div class="column">    
                            <h1 class="title"><strong>Chefs</strong> Profile</h1>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-4 col-12">
                            <div class="block">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/chef-1.png" alt="" class="img-fluid"></div>
                                <div class="name">Chef Yosua Ekajaya</div>
                                <div class="job">Pastry Chef</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="block">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/chef-2.png" alt="" class="img-fluid"></div>
                                <div class="name">Chef Pasya Hardiman</div>
                                <div class="job">Cooking Chef</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="block">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/chef-3.png" alt="" class="img-fluid"></div>
                                <div class="name">Chef Gabriella Amanda</div>
                                <div class="job">Pastry Chef</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stories-slide-wrapper">
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
            <div id="taste-wrapper">
                <?php
                    $post_id = 316;
                    $queried_post = get_post($post_id);
                ?>
                <div class="img"><?php echo get_the_post_thumbnail($post_id, '', array('class' => 'img-fluid'))?></div>
                <div class="column">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="txt">INTERNSHIP PROGRAM</div>
                                <h1 class="title"><strong>A taste of the</strong> real world</h1>
                                <div class="desc">
                                    <?php echo $queried_post->post_content;?>
                                </div>
                                <div class="more"><a href="<?php echo get_permalink( get_page_by_path( 'academy/internship program' ) ); ?>">find out more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_sidebar();
get_footer();
