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

$page = get_query_var( 'paged' ); 
$pagenow = $page ? $page : 1;

$cat_name = get_query_var( 'category_name' );
?>

<?php
    $args = array( 
        'post_type' => 'shortcourse', 
        'paged' => $pagenow,
        'posts_per_page' => 6, 
    );

    if( $cat_name ){
        $args['category_name'] = $cat_name;
    }


    $loop = new WP_Query( $args );

    ?>

    <div id="primary" class="content-area bg-top bg-shortcourse">
        <main id="main" class="site-main">
            <div class="column-content">
                <div class="container">
                    <h1 class="title"><?php the_title();?></h1>
                </div>
            </div>
            <div class="filter-category-wrapper">
                <div class="container">
                    <div class="filter" id="category-filter">
                        <ul>
                            <li<?php echo ( empty( $cat_name ) ? ' class="selected"' : '' ); ?>><a href="<?php echo get_permalink(); ?>" data-cat="all">All</a></li>
                            <?php
                            $parent_cat = get_category_by_slug( 'shortcourse' );

                            $terms = get_terms( 'category', array(
                                'hide_empty' => false,
                                'child_of' => $parent_cat->term_id
                            ) );

                            if( $terms ){
                                foreach( $terms as $term ){
                                    if( $term->slug == $cat_name ){
                                        echo '<li class="selected"><a href="' . get_permalink() . 'category/' . $term->slug . '" data-cat="' . $term->slug . '">' . $term->name . '</a></li>';
                                    }else{
                                        echo '<li><a href="' . get_permalink() . 'category/' . $term->slug . '" data-cat="' . $term->slug . '">' . $term->name . '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-post-wrapper">
                <div class="container">
                    <div class="row" id="shortcourse-wrapper">
                        <?php  
                            while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="col-md-4 col-12" id="short-course-<?php echo get_the_ID(); ?>">
                            <div class="block" data-fancybox="gallery" data-src="#myModal-<?php echo get_the_ID(); ?>">
                                <div class="img"><?php the_post_thumbnail('', array('class' => 'img-fluid'))?></div>
                                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                                <div class="name"><?php the_title();?></div>
                                <div class="desc"><?php echo get_the_excerpt();?></div>
                                <div class="readmore">Read More <img src="<?php bloginfo('template_url');?>/img/arrow-more.png" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <?php 
                            endwhile;
                        ?>
                    </div>
                    <div class="row">
                        <div class="more"><a href="#" id="load-more">show more</a></div>
                        <input type="hidden" name="posts" id="posts" value="<?php echo $loop->post_count; ?>" />
                        <input type="hidden" name="pages" id="pages" value="<?php echo $loop->max_num_pages; ?>" />
                        <input type="hidden" name="page" id="pagenow" value="<?php echo $pagenow; ?>" />
                        <input type="hidden" name="page" id="cat_name" value="<?php echo $cat_name; ?>" />
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

    
<div id="modal-wrapper">
<?php  
    while ( $loop->have_posts() ) : $loop->the_post();
        $in_same_cat = false;
        if( !empty( $cat_name ) ) $in_same_cat = true;

        $next_post = get_next_post( $in_same_cat );
        $prev_post = get_previous_post( $in_same_cat );
?>
<!-- The Modal -->
<div id="myModal-<?php echo get_the_ID(); ?>" style="display: none;">
  <div class="column-popup">
    <div class="btn-close"><img src="<?php bloginfo('template_url');?>/img/btn-close.png" alt="" class="img-fluid"></div>
    <div class="navigation">
        <div class="clearfix">
            <div class="prev arrow float-left" data-fancybox-prev>Previous</div>
            <div class="next arrow float-right" data-fancybox-next>Next</div>
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
                <div class="content"><?php the_content(); ?></div>
                <div class="price"><span>Price :</span> <?php $key_name = get_post_custom_values($key = 'price'); echo $key_name[0];?></div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php 
    endwhile;
?>
</div>

<?php wp_reset_query(); wp_reset_postdata(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#load-more').click(function(){
            $posts = $('#posts').val();
            $pages = $('#pages').val();
            $page = $('#pagenow').val();
            $cat_name = $('#cat_name').val();

            if($page >= $pages){
                $('#load-more').hide();
                
                return false;  
            } 

            $.ajax({
                url: ajaxurl,
                data: {
                    'action' : 'shortcourse_load_more',
                    'page' : $page,
                    'pages' : $pages,
                    'posts' : $posts,
                    'cat_name' : $cat_name
                },
                type: 'POST',
                dataType : 'json',
                beforeSend : function(request, settings){
                    
                },
                success : function( response ) {
                    $('#posts').val(response.posts);
                    $('#pages').val(response.pages);
                    $('#pagenow').val(response.page);
                    $('#cat_name').val(response.cat_name);

                    $('#shortcourse-wrapper').append(response.html); 
                    $('#modal-wrapper').append(response.modal); 

                    if(response.page >= response.pages){
                        $('#load-more').hide();
                    }

                    // if(history.pushState) {
                    //     if($cat_name == ''){
                    //         window.history.pushState("object or string", "Title", "<?php echo get_permalink(); ?>page/" + response.page);
                    //     }else{
                    //         window.history.pushState("object or string", "Title", "<?php echo get_permalink(); ?>category/" + response.cat_name + "/page/" + response.page);
                    //     }
                        
                    // }
                }
            });

            return false;
        });

        $('#category-filter a').click(function(){
            $cat = $(this).data('cat');
            $this = $(this);
            $parent = $this.parents('li');

            $.ajax({
                url: ajaxurl,
                data: {
                    'action' : 'shortcourse_filter_category',
                    'cat_name' : $cat
                },
                type: 'POST',
                dataType : 'json',
                beforeSend : function(request, settings){
                    
                },
                success : function( response ) {
                    $('#posts').val(response.posts);
                    $('#pages').val(response.pages);
                    $('#pagenow').val(response.page);
                    $('#cat_name').val(response.cat_name);

                    $('#shortcourse-wrapper').html(response.html); 
                    $('#modal-wrapper').html(response.modal); 

                    $('#load-more').show();
                    
                    $('#category-filter li').removeClass('selected');
                    $parent.addClass('selected');

                    // if(history.pushState) {
                    //     if(response.cat_name == ''){
                    //         window.history.pushState("object or string", "Title", "<?php echo get_permalink(); ?>");
                    //     }else{
                    //         window.history.pushState("object or string", "Title", "<?php echo get_permalink(); ?>category/" + response.cat_name);
                    //     }
                        
                    // }
                }
            });

            return false;
        });
    });
    </script>

<?php
get_sidebar();
get_footer();
