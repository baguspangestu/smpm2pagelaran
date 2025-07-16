<?php if (have_posts()): ?>

<div id="loop" class="list clear">

	<?php while (have_posts()): the_post(); ?>

		<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
		
		    <div class="podate">
			    <?php printf(__('<div class="ddays">%s<div class="dtimes">%s</div></div>', 'mading'), get_the_time('j'), get_the_time('M Y')); ?>
			</div>
		 
			<div class="rside">
		    	<h2>
			    	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h2>

		    	<div class="post-content">
			    	<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>
				</div>
			</div>
			
		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>

