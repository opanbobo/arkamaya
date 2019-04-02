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

 /* Template Name: Catering Template */

get_header();
?>

    <div id="primary" class="content-area bg-top">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title">catering service</h1>
                    <div class="desc">
                        <p>With years of experience in the culinary education, creating talented cooks in the country, Arkamaya Catering provides versatility of delicious courses and packages to suit any of your unforgettable events.</p>
                    </div>
                    <div class="list-menus">
                        <div class="row">
                            <div class="col col1 column">
                                <div class="img">
                                    <img src="<?php bloginfo('template_url');?>/img/catering-1.png" alt="" class="img-fluid">
                                    <div class="bock"><p>buffet</p></div>
                                </div>
                            </div>
                            <div class="col col2 column">
                                <div class="img">
                                    <img src="<?php bloginfo('template_url');?>/img/catering-2.png" alt="" class="img-fluid">
                                    <div class="bock"><p>stalls</p></div>
                                </div>
                            </div>
                            <div class="col col3 column">
                                <div class="img">
                                    <img src="<?php bloginfo('template_url');?>/img/catering-3.png" alt="" class="img-fluid">
                                    <div class="bock"><p>dessert</p></div>
                                </div>
                            </div>
                            <div class="col col4 column">
                                <div class="img">
                                    <img src="<?php bloginfo('template_url');?>/img/catering-4.png" alt="" class="img-fluid">
                                    <div class="bock"><p>corporate</p></div>
                                </div>
                            </div>
                            <div class="col col5 column">
                                <div class="img">
                                    <img src="<?php bloginfo('template_url');?>/img/catering-5.png" alt="" class="img-fluid">
                                    <div class="bock"><p>coffee break</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore"><a href="#">view all menu</a></div>
                    </div>
                    <div class="info">
                        <h1 class="subtitle">MORE <strong>iNFORMATION</strong></h1>
                        <div class="shortdesc">
                            <p>Contact us for more information regarding the menu, terms and conditions, locations, and more. </p>
                        </div>
                    </div>
                    <div class="request">
                        <a href="#get-connected" class="click"><img src="<?php bloginfo('template_url');?>/img/arrow-btm.png" alt="" class="img-fluid"><p>Request More Information</a></p>
                    </div>
                </div>
            </div>
            <div class="gallery-wrapper">
                <h1 class="title">gallery</h1>
                <div class="slider multiple-items">
                    <div class="block"><img src="<?php bloginfo('template_url');?>/img/gallery-1.jpg" alt="" class="img-fluid"></div>
                    <div class="block"><img src="<?php bloginfo('template_url');?>/img/gallery-2.jpg" alt="" class="img-fluid"></div>
                    <div class="block"><img src="<?php bloginfo('template_url');?>/img/gallery-3.jpg" alt="" class="img-fluid"></div>
                    <div class="block"><img src="<?php bloginfo('template_url');?>/img/gallery-4.jpg" alt="" class="img-fluid"></div>
                    <div class="block"><img src="<?php bloginfo('template_url');?>/img/gallery-2.jpg" alt="" class="img-fluid"></div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_sidebar();
get_footer();
