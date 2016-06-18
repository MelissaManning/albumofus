<?php get_header(); ?>

<?php $homepage_query = new WP_Query('posts_per_page=1'); ?>
	
	<?php while ($homepage_query->have_posts()) : $homepage_query->the_post(); ?>
		<article>
	<div class="photos">
		<div class="centerphoto">
          		<img class="main" src="<?php echo esc_url(get_post_meta( get_the_ID(), 'mainimage', true) ); ?>">
          		<div class="daycount"><?php echo get_post_meta( get_the_ID(), 'mileage', true ); ?></div>
          		<div class="location"><?php echo get_post_meta( get_the_ID(), 'citystate', true ); ?></div>
          		<a class="previous" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"></a>
          		<a class="next" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"></a>
      		</div>

		<div class="bottomphotos">
			<div class="bottomleftphoto">
   				<iframe  class="bottomleft" frameborder="0" scrolling="no" src="https://maps.google.com/maps?hl=en&q=<?php echo get_post_meta( get_the_ID(), 'citystate', true ); ?>&ie=UTF8&t=hybrid&z=11&iwloc=B&output=embed">
   				</iframe>
			</div>
      			<div class="bottomrightphoto">
				<img class="bottomright" src="<?php echo get_post_meta( get_the_ID(), 'bottomright', true ); ?>">
			<div class="bottomrightdescription"><?php echo get_post_meta( get_the_ID(), 'bottomrightdescription', true ); ?></div>
			</div>
			</div>
		</div>
	</div>  

		</article>

	<?php endwhile; ?>

<?php get_footer(); ?>