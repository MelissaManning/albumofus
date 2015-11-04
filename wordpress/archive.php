<?php get_header(); ?>

<div class="archive">

	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h1 id="archive-title">Archive for <?php single_cat_title(); ?></h1>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1 id="archive-title">Posts Tagged <?php single_tag_title(); ?></h1>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1 id="archive-title">Archive for <?php the_time('F jS, Y'); ?></h1>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1 id="archive-title">Archive for <?php the_time('F, Y'); ?></h1>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1 id="archive-title">Archive for <?php the_time('Y'); ?></h1>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1 id="archive-title">Author Archive</h1>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1 id="archive-title">Blog Archives</h1>
		<?php } ?>	

	<?php endif; ?>

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
				<h1 class="title">
					<?php the_title(); ?>
				</h1>

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

		<?php } ?>

	<?php endwhile; else: ?>

		<h2>Whoops...</h2>
		<p>Sorry, no posts we're found.</p>

	<?php endif; ?>
	<h3>Archives by Month</h3>
	<ul>
			<?php wp_get_archives('type=monthly&show_post_count=1') ?>
	</ul>
	
	<div id="nav-links"><?php posts_nav_link(); ?></div>
	
</div>

<?php get_footer(); ?>