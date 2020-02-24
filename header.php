<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge" /><![endif]-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrapper clearfix">

	<!-- BEGIN header -->
	<header id="header" class="siteHeader">
		<div class="container container-header">
			<div class="header_inner">
				<div class="site_logo">
					<a href="<?php echo site_url();?>">
						<img src="<?php echo wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ) , 'full' )[0];?>" alt="logo"/>
					</a>
					<div class="menu_toggle" style="display: none;"><a href="#navMenu"><span></span><span></span><span></span></a></div>
				</div>
				<div class="site_navigation">
					<nav id="navMenu">
						<?php 
							wp_nav_menu( array(
								'theme_location' => 'top',
								'menu_id'        => 'navpages',
								'menu'        => 2,
								'container'      => false,
								'items_wrap'     => '<ul class="top-menu  clearfix">%3$s</ul>'
							) ); ?>
					</nav>
				</div>
				<div class="rightHeader">
					<div class="socialMenuBlock">
						<?php 
							wp_nav_menu( array(
								'theme_location' => 'top',
								'menu_id'        => 'navpages',
								'menu'        	 => 3,
								'container'      => false,
								'items_wrap'     => '<ul class="socialMenu  clearfix">%3$s</ul>'
							) ); ?>
					</div>	
				</div>
			</div>
		</div>
	</header>
	<!-- END header -->
	<div class="clearfix"></div>
	<div id="main" class="site-content">
		<!-- BEGIN content -->
	
