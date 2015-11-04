<?php get_header(); ?>

<?php if (!is_single() && !is_page()) { /*need for blog page*/ ?>
	<div class="blog">
		<h1 class="header">Here are some recent posts:</h1>
<?php } ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if (is_single() && !is_page()) { ?>
		<article>
			<h1 class="title">
				<?php the_title(); ?>
			</h1>
		
			<span class="date">
				<?php the_time('F j, Y'); ?>
			</span>
			
			<?php the_content(); ?>
			
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