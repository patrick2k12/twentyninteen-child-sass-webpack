<?php get_header(); ?>
	<main id="content" class="content">
			<?php while ( have_posts() ) : the_post(); 
				the_content();
			endwhile; ?>
	</main> <!-- #content -->
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>