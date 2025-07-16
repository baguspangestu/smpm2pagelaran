<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<div <?php post_class('single tops clear'); ?> id="post_<?php the_ID(); ?>">

							<!-- left side -->
							<div class="podate">
								<?php printf(__('<div class="ddays">%s<div class="dtimes">%s</div></div>', 'mading'), get_the_time('j'), get_the_time('M Y')); ?>
							</div>
							<div class="rside">
								<div class="post-meta">
									<h1 class="alwnor"><?php the_title(); ?></h1>
									<?php printf(
										__('Diterbitkan : <span class="post-date">%s</span>', 'mading'),
										get_the_time('l, j M Y')
									); ?>
								</div>
							</div>
						</div>

						<div class="single sing clear">
							<div class="podate">
								<div class="coms">
									<?php if (comments_open()): ?>
										<div>
											<i class="fa fa-comment"></i>
											<div class="countcoms">
												<?php comments_number(__('0', 'mading'), __('1', 'mading'), __('%', 'mading'), '', __('x', 'mading')); ?>
											</div>
										</div>
									<?php endif; ?>
								</div>

								<div class="share">
									<span>BAGIKAN</span><br />
									<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>"
										target="_blank" title="<?php _e('Share ke Facebook', 'mading'); ?>"><i
											class="fa fa-brands fa-facebook-f"></i></a>
									<a href="http://x.com/home?status=<?php the_permalink() ?> , <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>"
										target="_blank" title="<?php _e('Share ke X', 'mading'); ?>"><i
											class="fa fa-brands fa-x-twitter"></i></a>
									<a href="whatsapp://send?text=<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?> cek lengkap di <?php the_permalink() ?>"
										title="<?php _e('Share ke Whatsapp', 'mading'); ?>"><i class="fa fa-brands fa-whatsapp"></i></a>
									<a href="https://t.me/share/url?url=<?php the_permalink() ?>" target="_blank"
										title="<?php _e('Share ke Telegram', 'mading'); ?>"><i class="fa fa-brands fa-telegram"></i></a>
								</div>

							</div>
							<!-- left side -->

							<!-- right side -->
							<div class="rside">
								<div class="post-content">
									<iframe class="akframe"
										src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>"
										frameborder="0" allowfullscreen></iframe>

									<?php the_content(); ?>
								</div>

								<div class="post-navigation clear">
									<?php
									$prev_post = get_adjacent_post(false, '', true);
									$next_post = get_adjacent_post(false, '', false); ?>
									<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID);
										$prev_post_title = $prev_post->post_title; ?>
										<a class="post-prev"
											href="<?php echo $prev_post_url; ?>"><em><?php _e('Sebelumnya', 'akademi'); ?></em><span><?php echo $prev_post_title; ?></span></a>
									<?php endif; ?>
									<?php if ($next_post): $next_post_url = get_permalink($next_post->ID);
										$next_post_title = $next_post->post_title; ?>
										<a class="post-next"
											href="<?php echo $next_post_url; ?>"><em><?php _e('Setelahnya', 'akademi'); ?></em><span><?php echo $next_post_title; ?></span></a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>