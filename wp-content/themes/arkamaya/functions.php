<?php

// get permalink by title
function get_page_permalink_from_name($page_name) {
    global $post;
    global $wpdb;
    $pageid_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $page_name . "' LIMIT 0, 1");
 return get_permalink($pageid_name);
}

// Creates inclusive Custom Post Type
function inclusive_init() {
    $args = array(
      'label' => 'Inclusive',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array('slug' => 'inclusive'),
        'query_var' => true,
        'taxonomies' => array( 'category' ),
        // 'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            // 'editor',
            // 'excerpt',
            // 'trackbacks',
            'custom-fields',
            // 'comments',
            // 'revisions',
            'thumbnail',
            // 'author',
            'page-attributes',)
        );
    register_post_type( 'inclusive', $args );
}
add_action( 'init', 'inclusive_init' );

// Creates Home Banner Custom Post Type
add_theme_support('post-thumbnails');
add_post_type_support( 'home_banner', 'thumbnail' );    
function create_post_type() {
        register_post_type( 'home_banner',
            array(
                'labels' => array(
                    'name' => __( 'Home Banner' ),
                    'singular_name' => __( 'Banner' )
                ),
                'public' => true,
                'has_archive' => true,
                'taxonomies'          => array( 'category' ),
                'supports' => array(
                	'title',
                	'thumbnail',
                )
            )
        );
    }
add_action( 'init', 'create_post_type' );

// Creates gallery Sliders Custom Post Type
add_post_type_support( 'gallery_sliders', 'thumbnail' );    
function gallery_sliders() {
        register_post_type( 'gallery_sliders',
            array(
                'labels' => array(
                    'name' => __( 'Gallery Sliders' ),
                    'singular_name' => __( 'gallery' )
                ),
                'public' => true,
                'has_archive' => true,
                'taxonomies'          => array( 'category' ),
                'supports' => array(
                	'title',
                	'thumbnail',
                )
            )
        );
    }
add_action( 'init', 'gallery_sliders' );

// Short COurses
function shortcourse() {
    $args = array(
      'label' => 'Short Courses',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array('slug' => 'shortcourse'),
        'query_var' => true,
        'taxonomies' => array( 'category' ),
        // 'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'shortcourse', $args );
}
add_action( 'init', 'shortcourse' );










/**
 * arkamaya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package arkamaya
 */

if ( ! function_exists( 'arkamaya_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arkamaya_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on arkamaya, use a find and replace
		 * to change 'arkamaya' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arkamaya', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'arkamaya' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'arkamaya_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'arkamaya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arkamaya_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'arkamaya_content_width', 640 );
}
add_action( 'after_setup_theme', 'arkamaya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arkamaya_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'arkamaya' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'arkamaya' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arkamaya_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arkamaya_scripts() {
	wp_enqueue_style( 'arkamaya-style', get_stylesheet_uri() );

	wp_enqueue_script( 'arkamaya-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'arkamaya-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arkamaya_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'wp_ajax_blog_load_more', 'blog_load_more' );
add_action( 'wp_ajax_nopriv_blog_load_more', 'blog_load_more' );
function blog_load_more(){
	$pages = absint( sanitize_text_field( $_POST['pages'] ) );
	$page = absint( sanitize_text_field( $_POST['page'] ) );
	$posts = absint( sanitize_text_field( $_POST['posts'] ) );

	$page += 1;

	$query = new WP_Query( array(
		'category_name' => 'blog',
		'paged' => $page,
		'posts_per_page' => 6
	) );

	$html = '';

	if( $query->have_posts() ) :
		while( $query->have_posts() ) : $query->the_post();
			$html .= '<div class="custom-width">
                            <div class="block">
                                <div class="img"><a href="' . get_the_permalink() . '">' . get_the_post_thumbnail('', array( 'class' => 'img-fluid' ) ) . '</a></div>
                                <div class="date">' . get_the_date( 'j F Y' ) . '</div>
                                <div class="title-post"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></div>
                                <div class="desc">' . get_the_excerpt() . '</div>
                                <div class="more"><a href="' . get_the_permalink() . '">Read More <img src="' . get_bloginfo( 'template_url' ) . '/img/arrow-more.png" alt="" class="img-fluid"></a></div>
                            </div>
                        </div>';
		endwhile;
	endif;

	$return = array(
		'status' => 'success',
		'page' => $page,
		'pages' => $query->max_num_pages,
		'posts' => $query->post_count,
		'html' => $html
	);

	echo json_encode( $return );
	die();
}

add_action( 'wp_ajax_shortcourse_load_more', 'shortcourse_load_more' );
add_action( 'wp_ajax_nopriv_shortcourse_load_more', 'shortcourse_load_more' );
function shortcourse_load_more(){
	$pages = absint( sanitize_text_field( $_POST['pages'] ) );
	$page = absint( sanitize_text_field( $_POST['page'] ) );
	$posts = absint( sanitize_text_field( $_POST['posts'] ) );
	$cat_name = sanitize_text_field( $_POST['cat_name'] );

	$page += 1;

	$args = array(
		'post_type' => 'shortcourse', 
		'paged' => $page,
		'posts_per_page' => 6
	);

	if( $cat_name ){
        $args['category_name'] = $cat_name;
    }

	$query = new WP_Query( $args );

	$html = ''; $modal = '';

	if( $query->have_posts() ) :
		while( $query->have_posts() ) : $query->the_post();
			$html .= '<div class="col-md-4 col-12" id="short-course-' . get_the_ID() . '">
                            <div class="block" data-fancybox="gallery" data-src="#myModal-' . get_the_ID() . '">
                                <div class="img">' . get_the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ) . '</div>
                                <div class="date">' . get_the_date( 'j F Y' ) . '</div>
                                <div class="name">' . get_the_title() . '</div>
                                <div class="desc">' . get_the_excerpt() . '</div>
                                <div class="readmore">Read More <img src="' . get_bloginfo( 'template_url' ) . '/img/arrow-more.png" alt="" class="img-fluid"></div>
                            </div>
                        </div>';

            $key_name = get_post_custom_values( 'price' );

            $modal .= '<div id="myModal-' . get_the_ID() . '" style="display: none;">
						  <div class="column-popup">
						    <div class="btn-close"><img src="' . get_bloginfo('template_url') . '/img/btn-close.png" alt="" class="img-fluid" onclick="$.fancybox.close();" /></div>
						    <div class="navigation">
        <div class="clearfix">
            <div class="prev arrow float-left" data-fancybox-prev>Previous</div>
            <div class="next arrow float-right" data-fancybox-next>Next</div>
        </div>
    </div>
						      <div class="container">
						          <div class="row">
						              <div class="col-md-3 col-12">
						                <div class="img">' . get_the_post_thumbnail('', array('class' => 'img-fluid')) . '</div>
						              </div>
						              <div class="col-md-9 col-12">
						                <div class="date">' . get_the_date('j F Y') . '</div>
						                <div class="name">' . get_the_title() . '</div>
						                <div class="content">' . do_shortcode( get_the_content() ) . '</div>
						                <div class="price"><span>Price :</span>' . $key_name[0] . '</div>
						              </div>
						          </div>
						      </div>
						  </div>
						</div>';
		endwhile;
	endif;

	$return = array(
		'status' => 'success',
		'page' => $page,
		'pages' => $query->max_num_pages,
		'posts' => $query->post_count,
		'cat_name' => $cat_name,
		'html' => $html,
		'modal' => $modal
	);

	echo json_encode( $return );
	die();
}

add_action( 'wp_ajax_shortcourse_filter_category', 'shortcourse_filter_category' );
add_action( 'wp_ajax_nopriv_shortcourse_filter_category', 'shortcourse_filter_category' );
function shortcourse_filter_category(){
	$cat_name = sanitize_text_field( $_POST['cat_name'] );

	$args = array(
		'post_type' => 'shortcourse', 
		'posts_per_page' => 6
	);

	if( $cat_name != 'all' ){
        $args['category_name'] = $cat_name;
    }else{
    	$cat_name = '';
    }

	$query = new WP_Query( $args );

	$html = '';

	if( $query->have_posts() ) :
		while( $query->have_posts() ) : $query->the_post();
			$html .= '<div class="col-md-4 col-12">
                            <div class="block" data-fancybox="gallery" data-src="#myModal-' . get_the_ID() . '">
                                <div class="img">' . get_the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ) . '</div>
                                <div class="date">' . get_the_date( 'j F Y' ) . '</div>
                                <div class="name">' . get_the_title() . '</div>
                                <div class="desc">' . get_the_excerpt() . '</div>
                                <div class="readmore">Read More <img src="' . get_bloginfo( 'template_url' ) . '/img/arrow-more.png" alt="" class="img-fluid"></div>
                            </div>
                        </div>';

            $key_name = get_post_custom_values( 'price' );

            $modal .= '<div id="myModal-' . get_the_ID() . '" style="display: none;">
						  <div class="column-popup">
						    <div class="btn-close"><img src="' . get_bloginfo('template_url') . '/img/btn-close.png" alt="" class="img-fluid" onclick="$.fancybox.close();" /></div>
						    	<div class="navigation">
        <div class="clearfix">
            <div class="prev arrow float-left" data-fancybox-prev>Previous</div>
            <div class="next arrow float-right" data-fancybox-next>Next</div>
        </div>
    </div>
						      <div class="container">
						          <div class="row">
						              <div class="col-md-3 col-12">
						                <div class="img">' . get_the_post_thumbnail('', array('class' => 'img-fluid')) . '</div>
						              </div>
						              <div class="col-md-9 col-12">
						                <div class="date">' . get_the_date('j F Y') . '</div>
						                <div class="name">' . get_the_title() . '</div>
						                <div class="content">' . get_the_content() . '</div>
						                <div class="price"><span>Price :</span>' . $key_name[0] . '</div>
						              </div>
						          </div>
						      </div>
						  </div>
						</div>';
		endwhile;
	endif;

	$return = array(
		'status' => 'success',
		'page' => 1,
		'pages' => $query->max_num_pages,
		'posts' => $query->post_count,
		'cat_name' => $cat_name,
		'html' => $html,
		'modal' => $modal
	);

	echo json_encode( $return );
	die();
}

add_action( 'init', 'audisiku_insert_rewrite_rules', 0 );
function audisiku_insert_rewrite_rules(){
	$page_short_course = get_page_by_path( 'short-course' );

	add_rewrite_rule( 'short-course/category/([^/]+)/?$', 'index.php?page_id=' . $page_short_course->ID . '&category_name=$matches[1]', 'top' );
	add_rewrite_rule( 'short-course/category/([^/]+)/page/([^/]+)/?$', 'index.php?page_id=' . $page_short_course->ID . '&category_name=$matches[1]&is_paged=true&paged=$matches[2]', 'top' );
}