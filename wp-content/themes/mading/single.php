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
									<span class="swmob"><?php printf(
																				__('Diterbitkan : <span class="post-date">%s</span>', 'mading'),
																				get_the_time('l, j M Y')
																			); ?> - </span>Kategori : <?php the_category(' / '); ?>
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
									<?php if (has_post_thumbnail()) echo '<div class="post-img">' . get_the_post_thumbnail(
										$post->ID,
										'full',
										array(
											'alt' => trim(strip_tags($post->post_title)),
											'title' => trim(strip_tags($post->post_title)),
										)
									) . '</div>';
									?>

									<?php the_content(); ?>

								</div>

								<div class="post-footer">
									<?php the_tags('' . __('', 'mading') . '', ' '); ?>
								</div>
							</div>
							<!-- right side -->

						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>


			<?php $related = get_posts(array(
				'category__in' => wp_get_post_categories($post->ID),
				'numberposts' => 4,
				'post__not_in' => array($post->ID)
			));

			setup_postdata($post);

			if ($related > 0) { ?>

				<div class="madings">
					<div class="single sing clear">
						<div class="rside">
							<div class="post-meta">
								<h1 class="alwnor">pos terkait...</h1>
							</div>

						<?php }

					if ($related) foreach ($related as $post) { ?>

							<div class="rltd">
								<div class="rely">
									<?php if (has_post_thumbnail()) {
										echo '' . get_the_post_thumbnail(
											$post->ID,
											'news',
											array(
												'alt' => trim(strip_tags($post->post_title)),
												'title' => trim(strip_tags($post->post_title)),
											)
										);
									} else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
									<?php } ?>

									<div class="rel-meta">
										<span><i class="fa-solid fa-calendar"></i> <?php echo get_the_time('j M Y'); ?></span>
										<h3><a href="<?php the_permalink() ?>" rel="bookmark"
												title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
									</div>

									<div class="ccovlay">
									</div>
								</div>
							</div>

						<?php }

					if ($related > 0) { ?>

						</div>
					</div>
				</div>

			<?php }

					wp_reset_postdata();
			?>

			<div class="madings">
				<div class="single sing clear">
					<div class="rside">
						<?php comments_template(); ?>
					</div>
				</div>
			</div>

		</div>

		<?php get_sidebar(); ?>
	</div>

</section>

<?php get_footer(); ?>