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
                    <div class="content-right">
                        <h1 class="title">creative culinary <strong>education</strong></h1>
                        <p class="desc">Inspired by Indonesia’s rich culinary experience and its extensive potential, Arkamaya offers a first-class Indonesian cuisine education in the heart of Jakarta.</p>
                        <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div id="home-programs">
        <div class="container">
            <h1 class="title-section">our <strong>programs</strong></h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="img"><img src="<?php bloginfo('template_url');?>/img/home-our-program-1.png" alt="" class="img-fluid"></div>
                    <h3 class="title">COOKING PROGRAM</h3>
                    <div class="desc">
                        <p>Arkamaya Cooking Program is where you can learn all about the comprehensive Indonesian cuisine and cooking techniques.</p>
                    </div>
                    <div class="readmore"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6 col-12">
                <div class="img"><img src="<?php bloginfo('template_url');?>/img/home-our-program-2.png" alt="" class="img-fluid"></div>
                    <h3 class="title">BAKING PROGRAM</h3>
                    <div class="desc">
                        <p>Arkamaya Cooking Program is where you can learn all about the comprehensive Indonesian cuisine and cooking techniques.</p>
                    </div>
                    <div class="readmore"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="more"><a href="#">view programs</a></div>
        </div>
    </div>
    <div id="home-short-courses">
        <div class="container">
            <h1 class="title-section">upcoming <strong>Short courses</strong></h1>
            <div class="date-wrapper">
                <ul>
                    <li class="active">
                        <div class="date">09</div>
                        <div class="month">february</div>
                    </li>
                    <li>
                        <div class="date">16</div>
                        <div class="month">february</div>
                    </li>
                    <li>
                        <div class="date">23</div>
                        <div class="month">february</div>
                    </li>
                </ul>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="img"><img src="<?php bloginfo('template_url')?>/img/home-course.png" alt="" class="img-fluid"></div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="block">
                            <div class="cat">BAKING Short Course</div>
                            <h3 class="title">VALENTINE CAKE BOUQUET</h3>
                            <div class="short-desc">Class Duration : Approx. 3-4 hours</div>
                            <div class="desc">
                                <p>A hands-on class, where you can create your own cake bouquet with a loved one! Each group consist of 2 participants.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="subtitle">Class Objectives :</div>
                                    <ul>
                                        <li>Learn how to make Cake pops</li>
                                        <li>Learn how to make Macarons</li>
                                        <li>Learn how to arrange flowers</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="subtitle">Inclusive :</div>
                                    <ul>
                                        <li>Ingredients and baking supplies</li>
                                        <li>Take-home Cake Bouquet</li>
                                        <li>Lunch</li>
                                        <li>Certificate of Completion</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price"><span>Price :</span> IDR 1.200.000 </div>
                            <div class="view-more"><a href="#">view other short courses</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home-stories">
        <div class="container">
            <h1 class="title-section">Stories from <strong>our students</strong></h1>
            <div class="stories-slider slider">
                    <div class="block">
                       <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/home-student.png" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="name">Sadira, pastry Class</div>
                                <div class="desc">
                                    <p>“Pengalaman saya setelah belajar di Arkamaya, saya seneng jd tau banyak berbagai macam pastry, teknik pembuatannya, dan juga saya mendapatkan informasi informasi yg saya belum tau sebelumnya dari chef nya langsung dan itu sangat membantu”</p>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="block">
                       <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/home-student.png" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="name">Sadira, pastry Class</div>
                                <div class="desc">
                                    <p>“Pengalaman saya setelah belajar di Arkamaya, saya seneng jd tau banyak berbagai macam pastry, teknik pembuatannya, dan juga saya mendapatkan informasi informasi yg saya belum tau sebelumnya dari chef nya langsung dan itu sangat membantu”</p>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="block">
                       <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><img src="<?php bloginfo('template_url');?>/img/home-student.png" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="name">Sadira, pastry Class</div>
                                <div class="desc">
                                    <p>“Pengalaman saya setelah belajar di Arkamaya, saya seneng jd tau banyak berbagai macam pastry, teknik pembuatannya, dan juga saya mendapatkan informasi informasi yg saya belum tau sebelumnya dari chef nya langsung dan itu sangat membantu”</p>
                                </div>
                            </div>
                       </div>
                    </div>
            </div>
        </div>
    </div>
<?php
get_footer();
