<?php if (have_posts()): ?>

<div id="loop" class="list clear">

	<?php while (have_posts()): the_post(); ?>
		<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
		    
			<!-- left side -->
		    <div class="podate">
			    <?php printf(__('<div class="ddays">%s<div class="dtimes">%s</div></div>', 'mading'), get_the_time('j'), get_the_time('M Y')); ?>
				<div class="coms">
					<?php if (comments_open()): ?>
						<i class="fa fa-comment"></i>
				    	<div class="countcoms">
					    	<?php comments_number(__('0', 'mading'), __('1', 'mading'), __('%', 'mading'), '', __('x', 'mading') ); ?>
						</div>
				    <?php endif; ?>
				</div>
			</div>
			<!-- left side -->
		    
			<!-- right side -->
			<div class="rside">
		    	<h2>
			    	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h2>

		    	<div class="post-content">
			    	<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>
				</div>
			</div>
			<!-- right side -->
			
		</div>
	<?php endwhile; ?>

</div>

<?php endif; ?>