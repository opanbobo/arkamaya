<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arkamaya
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/slick.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/main.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/custom.css" rel="stylesheet">

	<script src="<?php bloginfo('template_url');?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.fancybox.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/masonry.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/main.js"></script>
	<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'arkamaya' ); ?></a>

	<header id="" class="">
		<div class="fix-top">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="show-onmobile">
							<div class="row">
								<div class="col-2">
									<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
								</div>
								<div class="col-10">
									<a class="logo" href="#"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" class="img-fluid"></a>
								</div>
							</div>
						</div>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	 =>	'navbar-nav'
								) );
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
