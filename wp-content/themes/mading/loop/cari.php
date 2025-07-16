<?php if (have_posts()): ?>

<div id="loop" class="list archives clear">

	<?php while (have_posts()): the_post(); ?>

		<div class="post clear" id="post_<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-content"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?></div>
		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>
