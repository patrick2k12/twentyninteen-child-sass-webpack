<?php get_header(); ?>
	<main id="content" class="content home_page">
			<?php while ( have_posts() ) : the_post(); 
				the_content();
			endwhile; ?>

		<section class="homeBannerBlock">
			<div class="container">
				<div class="row">
					<!-- Banner Image Slider -->
				</div>
			</div>
		</section>
	</main> <!-- #content -->
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>