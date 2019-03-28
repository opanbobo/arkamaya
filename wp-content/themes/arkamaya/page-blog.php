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

$page = get_query_var( 'paged' ); 
$pagenow = $page ? $page : 1;
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
                    <?php  
                    $query = new WP_Query( array(
                        'category_name' => 'blog',
                        'paged' => $pagenow,
                        'posts_per_page' => 6 
                    ) );

                    if( $query->have_posts() ) :
                    ?>
                    <div class="masonry" id="blog-wrapper">  
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="custom-width">
                            <div class="block">
                                <div class="img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></a></div>
                                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                                <div class="title-post"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                                <div class="desc"><?php echo get_the_excerpt();?></div>
                                <div class="more"><a href="<?php the_permalink();?>">Read More <img src="<?php bloginfo('template_url');?>/img/arrow-more.png" alt="" class="img-fluid"></a></div>
                            </div>
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
        </main><!-- #main -->
    </div><!-- #primary -->
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('#load-more').click(function(){
            $posts = $('#posts').val();
            $pages = $('#pages').val();
            $page = $('#pagenow').val();

            if($page >= $pages){
                $('#load-more').hide();
                
                return false;  
            } 

            $.ajax({
                url: ajaxurl,
                data: {
                    'action' : 'blog_load_more',
                    'page' : $page,
                    'pages' : $pages,
                    'posts' : $posts
                },
                type: 'POST',
                dataType : 'json',
                beforeSend : function(request, settings){
                    
                },
                success : function( response ) {
                    $('#posts').val(response.posts);
                    $('#pages').val(response.pages);
                    $('#pagenow').val(response.page);

                    $('#blog-wrapper').append(response.html); 

                    if(response.page >= response.pages){
                        $('#load-more').hide();
                    }

                    if(history.pushState) {
                        window.history.pushState("object or string", "Title", "<?php echo get_permalink() . 'page/'; ?>" + response.page);
                    }
                }
            });

            return false;
        });
    });
    </script>

<?php
get_sidebar();
get_footer();
