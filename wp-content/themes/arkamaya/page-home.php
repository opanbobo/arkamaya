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
                    <div class="img"><?php the_post_thumbnail(); ?></div>
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
                    <div class="img"><?php the_post_thumbnail(); ?></div>
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
        <div class="container">
            <h1 class="title-section">upcoming <strong>Short courses</strong></h1>
            <div class="date-wrapper">
                <div class="short-slider slider">
                    <div class="column-slide">
                        <div class="date">09</div>
                        <div class="month">february</div>
                    </div>
                    <div class="column-slide">
                        <div class="date">16</div>
                        <div class="month">february</div>
                    </div>
                    <div class="column-slide">
                        <div class="date">23</div>
                        <div class="month">february</div>
                    </div>
                </fiv>
            </div>
            <div class="block-content">
                <div class="slider-event slider">
                    <div class="block-column">
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
                                    <div class="view-more"><a href="<?php echo get_permalink( get_page_by_path( 'short course' ) ); ?>">view other short courses</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-column">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><img src="<?php bloginfo('template_url')?>/img/home-course.png" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="block">
                                    <div class="cat">BAKING Short Course</div>
                                    <h3 class="title">VALENTINE CAKE BOUQUET 2</h3>
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
                                    <div class="view-more"><a href="<?php echo get_permalink( get_page_by_path( 'short course' ) ); ?>">view other short courses</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-column">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="img"><img src="<?php bloginfo('template_url')?>/img/home-course.png" alt="" class="img-fluid"></div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="block">
                                    <div class="cat">BAKING Short Course</div>
                                    <h3 class="title">VALENTINE CAKE BOUQUET 3</h3>
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
                                    <div class="view-more"><a href="<?php echo get_permalink( get_page_by_path( 'short course' ) ); ?>">view other short courses</a></div>
                                </div>
                            </div>
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
