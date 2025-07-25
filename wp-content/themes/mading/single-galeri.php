<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
							<div class="post-meta">
								<h1 class="alwnor"><?php the_title(); ?></h1>
								<?php printf(
									__('Dibuat : <span class="post-date">%s</span>', 'mading'),
									get_the_time('l, j M Y')
								); ?>
							</div>
							<div class="post-content">
								<?php if (has_post_thumbnail()) echo '<div class="post-img">' . get_the_post_thumbnail(
									$post->ID,
									'full',
									array(
										'alt' => trim(strip_tags($post->post_title)),
										'title' => trim(strip_tags($post->post_title)),
									)
								) . '</div>';
								?>
								<?php the_content(); ?></div>
						</div>
						<div class="post-navigation clear">
							<?php
							$prev_post = get_adjacent_post(false, '', true);
							$next_post = get_adjacent_post(false, '', false); ?>
							<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID);
								$prev_post_title = $prev_post->post_title; ?>
								<a class="post-prev"
									href="<?php echo $prev_post_url; ?>"><em><?php _e('Galeri Sebelumnya', 'mading'); ?></em><span><?php echo $prev_post_title; ?></span></a>
							<?php endif; ?>
							<?php if ($next_post): $next_post_url = get_permalink($next_post->ID);
								$next_post_title = $next_post->post_title; ?>
								<a class="post-next"
									href="<?php echo $next_post_url; ?>"><em><?php _e('Galeri Lebih Baru', 'mading'); ?></em><span><?php echo $next_post_title; ?></span></a>
							<?php endif; ?>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>


		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>