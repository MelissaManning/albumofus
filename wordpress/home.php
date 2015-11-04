<?php get_header(); ?>

<?php $homepage_query = new WP_Query('posts_per_page=1'); ?>
	
	<?php while ($homepage_query->have_posts()) : $homepage_query->the_post(); ?>
		<article>
			<h1 class="title">
				<?php the_title(); ?>
			</h1>
		
			<span class="date">
				<?php the_time('F j, Y'); ?>
			</span>
			
			<?php the_content(); ?>
			
		</article>

	<?php endwhile; ?>

<?php get_footer(); ?>