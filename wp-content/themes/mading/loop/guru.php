<?php if (have_posts()): ?>

<div id="loop" class="list archives clear">

	<?php while (have_posts()): the_post(); ?>
		
		<!-- guru loop -->
		<div class="galoop">
		    <div class="gtk">
			<?php if (has_post_thumbnail()) { ?>
		    	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news', array(
					'alt' => trim(strip_tags($post->post_title)),
					'title' => trim(strip_tags($post->post_title)),
				)); ?></a>
			<?php } ?>
			<div class="govlay">
			    <h2>
			    	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</h2>
			    <span><?php echo 'Status GTK : '.get_post_meta($post->ID, '_jen', true); ?></span>
			</div>
			<div class="ccovlay"></div>
			</div>
		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>
