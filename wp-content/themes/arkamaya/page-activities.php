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

 /* Template Name: Activities Template */

get_header();
?>

    <div id="primary" class="content-area bg-top bg-top-big">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title">Activities</h1>
                </div>
            </div>
            <div id="list-activities">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="img"><img src="<?php bloginfo('template_url');?>/img/block-act-1.jpg" alt="" class="img-fluid"></div>
                            <div class="title-block">Culinary Team Building</div>
                            <div class="shortdesc">Coming together to prepare and share a meal is the most common thing in the world. When food is in the picture, it is only natural for people to not only dine and taste the delicious flavors, but also engage in interactions where they are able to share their stories or cultural history.</div>
                            <div class="detail"><a href="<?php echo get_permalink( get_page_by_path( 'Activities/Culinary Team Building' ) ); ?>">VIEW DETAILS</a></div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="img"><img src="<?php bloginfo('template_url');?>/img/block-act-2.jpg" alt="" class="img-fluid"></div>
                            <div class="title-block">Junior Program</div>
                            <div class="shortdesc">It is never too early to become a great chef. During this program, children will have freedom to express themselves through cooking and baking in a relaxed atmosphere. From birthday to graduation parties, kids will learn as they have fun!</div>
                            <div class="detail"><a href="<?php echo get_permalink( get_page_by_path( 'Activities/junior program' ) ); ?>">VIEW DETAILS</a></div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="img"><img src="<?php bloginfo('template_url');?>/img/block-act-3.jpg" alt="" class="img-fluid"></div>
                            <div class="title-block">taste of indonesia</div>
                            <div class="shortdesc">Indonesia is a home to some of the world’s best delicacies, and there is nothing better than learning the tricks of the trade during your travels.</div>
                            <div class="detail"><a href="<?php echo get_permalink( get_page_by_path( 'Activities/taste of indonesia' ) ); ?>">VIEW DETAILS</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="after-list-activities">
                <div class="img"><img src="<?php bloginfo('template_url');?>/img/custom-min.png" alt="" class="img-fluid"></div>
                    <div class="container">
                        <div class="column">
                            <div class="row">
                                <div class="col-md-5 offset-md-7 col-12">
                                    <h1 class="title"><strong>custom your</strong> event</h1>
                                    <div class="desc"><p>Sign up for our basic or intermediate program and get a very special internship program at a well renowned Ismaya restaurant. Hurry, limited spots available!</p></div>
                                    <div class="more">
                                        <a href="#get-connected" class="click"><img src="<?php bloginfo('template_url');?>/img/arrow-btm.png" alt="" class="img-fluid">Request More Information</a>
                                    </div>
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
