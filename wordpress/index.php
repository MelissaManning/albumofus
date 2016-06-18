<?php get_header(); ?>

<?php if (!is_single() && !is_page()) { /*need for blog page*/ ?>
	<div class="blog">
		<h1 class="header">Here are some recent posts:</h1>
<?php } ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if (is_single() && !is_page()) { ?>
		<article>
	<div class="photos">
		<div class="centerphoto">
          		<img class="main" src="<?php echo esc_url(get_post_meta( get_the_ID(), 'mainimage', true) ); ?>">
          		<div class="metadata">
				<span class="mileage"><?php echo get_post_meta( get_the_ID(), 'mileage', true ); ?></span>
          			<span class="location"><?php echo get_post_meta( get_the_ID(), 'citystate', true ); ?></span>
			</div>
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
		<div class="clear"></div>
	</div>  

		</article>

		
	<?php } else if (is_page()) { ?>
		<div class="page">
			<?php the_content(); ?>
		</div>
	<?php } else { ?>
		<div class="post">
			<h3 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h3>
			
			<span class="date">
				<?php the_time('F j, Y'); ?>
			</span>
					
			<?php get_the_excerpt(); ?>
		</div>
		
		</div><?php /*closes special case above*/ ?>

	<?php } ?>

<?php endwhile; else: ?>

	<h2>Whoops...</h2>
	<p>Sorry, no posts we're found.</p>
	
<?php endif; ?>

<div class="nav-links"><?php posts_nav_link(); ?></div>

<?php get_footer(); ?>